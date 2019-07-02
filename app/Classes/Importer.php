<?php

namespace App\Classes;

use App\Category;
use App\Product;
use App\ProductsProperties;
use App\ProductsPropertiesPropertiesValues;
use App\ProductsPropertiesValues;

/**
 * Контроллер для работы с структурой файла импорта и добавления товаров
 *
 * @package App\Http\Controllers
 */
class Importer
{
    /**
     * @var ImportParser - Экземпляр парсера
     */
    private $importParser;

    /**
     * @var ImportLogger - Экземпляр логгера
     */
    private $importLogger;

    /**
     * @var ImportValidator - Экземпляр валидатора
     */
    private $importValidator;

    /**
     * @var array - Обязательные поля в структуре товара
     */
    private $requiredFields = [];

    /**
     * @var array - Множественные поля в структуре товара
     */
    private $multiFields = [];

    /**
     * @var array - Массив товаров из файла
     */
    private $fileProducts = [];

    /**
     * @var array - Массив категорий из файла
     */
    private $fileCategories = [];

    /**
     * @var array - Массив категорий из БД
     */
    private $DBCategories = [];

    /**
     * @var array - Свйоства товаров из БД
     */
    private $DBProperties = [];

    /**
     * @var array - Свойства товаров из файла
     */
    private $fileProperties = [];

    /**
     * @var array - Массив свойств и их всех возможных значений из файла
     */
    private $filePropertiesValues = [];

    /**
     * @var array - Поля товара, которые не являются свойствами
     */
    private $notFindProperties = [
        'xml_id', 'name', 'category',
        'price_Ussuriysk', 'price_Vladivostok',
        'price_Nakhodka', 'price_Blagoveshchensk'
    ];

    /**
     * @var array - Товары, из файла, которые уже есть в БД
     */
    private $existProducts = [];

    public function __construct(ImportParser $importParser, ImportLogger $importLogger, ImportValidator $importValidator)
    {
        $this->importParser    = $importParser;
        $this->importLogger    = $importLogger;
        $this->importValidator = $importValidator;
        $this->requiredFields  = $this->importValidator->getReqFields();
        $this->multiFields     = $this->importValidator->getMultiFields();
    }


    public function import($add = true)
    {
        if (!$content = $this->importParser->getFile()) {
            $this->importLogger->add([
                'type' => 'structure',
                'name' => '',
                'time' => date('d.m.Y H:i:s'),
                'message' => "Ошибка импорта товаров: не найдено содержание файла."
            ]);
            return false;
        }

        $ProductsArray = [];
        try {
            $content = $this->importParser->getFile();
            $this->fileProducts = $content['Kondicioner'];
            $this->getCategories();
            $this->getProperties();
            $this->findExistingProducts();
            $ProductsArray = $this->getProductsArray();
        } catch (\Exception $e) {
            $this->importLogger->add([
                'type' => 'file',
                'name' => '',
                'time' => date('d.m.Y H:i:s'),
                'message' => "Ошибка импорта: " . $e->getMessage() . ', файл: ' . $e->getFile() . ', строка: ' . $e->getLine()
            ]);
            return [];
        }

        return (count($ProductsArray)) ? (($add) ? $this->addProducts($ProductsArray) : $ProductsArray) : [];
    }

    /**
     * Добавляет/обновляет все товары из файлв в БД
     * @param $products
     *
     * @return array
     */
    public function addProducts($products)
    {
        $result = [];
        foreach ($products as $product) {
            $item = $this->addProduct($product);
            $result[] = $item;
        }

        return $result;
    }

    /**
     * Добавляет/обновляет товай из файла в БД
     * @param $product
     *
     * @return array
     */
    public function addProduct($product)
    {
        $data = $product;
        $item = [];
        unset($data['properties']);
        unset($data['action']);
        unset($data['db_product']);

        try {
            if ($product['action'] === 'CREATE') {
                $item = Product::create($data);
            } elseif ($product['action'] === 'UPDATE') {
                $product['db_product']->update($data);
                $item = $product['db_product'];
            }
            $item->action = $product['action'];
           $item->properties = $this->addPropertiesToProduct($item, $product['properties']);
        } catch (\Exception $e) {
            $this->importLogger->add([
                'type' => 'file',
                'name' => $product['name'],
                'time' => date('d.m.Y H:i:s'),
                'message' => "Ошибка добавления файла: " . $e->getMessage() . ', файл: ' . $e->getFile() . ', строка: ' . $e->getLine()
            ]);
            return [];
        }

        return $item;
    }

    /**
     * Добавляет свойства товара из файла к товару,
     * если их у него нет в БД
     *
     * @param Product $Product
     * @param         $properties
     *
     * @return array
     */
    public function addPropertiesToProduct(Product $Product, $properties)
    {
        $ExistValues = $Product->propertyValues()->get()->pluck('id')->toArray();
        $result = [];
        foreach ($properties as $property) {
            if (!in_array($property['id'], $ExistValues)) {
                $result[] = ProductsPropertiesPropertiesValues::create([
                    'property_id' => $property['property_id'],
                    'product_id'  => $Product->id,
                    'products_properties_values_id' => $property['id']
                ]);
            }
        }
        return $result;
    }

    /**
     * Подготавливает массив всех товаров из файла для добавления в БД
     * @return array
     */
    public function getProductsArray()
    {
        $products = [];
        foreach ($this->fileProducts as $product) $products[] = $this->getProductArray($product);
        return $products;
    }

    /**
     * Подготавливает массив товара для добавления в БД
     * @param $product
     *
     * @return array
     */
    public function getProductArray($product)
    {
        $existProducts = $this->existProducts;
        $properties = $this->getPropertyValuesToProduct($product);
        $slug = str_replace([' ',',','/','\\','(',')'], '', $this->transliterate($product['name']));

        if ((isset($product['xml_id']) && !is_array($product['xml_id']))) $slug .= ('-' . $product['xml_id']);

        $result = [
            'category_id'           => (isset($product['category']) && !is_array($product['category'])) ? $this->getCategoryIdByName($product['category']) : null,
            'name'                  => $product['name'],
            'model'                 => (isset($product['model']) && !is_array($product['model'])) ? $product['model'] : '',
            'slug'                  => $slug,
            'xml_id'                => (isset($product['xml_id']) && !is_array($product['xml_id'])) ? $product['xml_id'] : '',
            'price_ussuriysk'       => (isset($product['price_Ussuriysk'])       && !is_array($product['price_Ussuriysk']))       ? $product['price_Ussuriysk']       : 0,
            'price_vladivostok'     => (isset($product['price_Vladivostok'])     && !is_array($product['price_Vladivostok']))     ? $product['price_Vladivostok']     : 0,
            'price_nakhodka'        => (isset($product['price_Nakhodka'])        && !is_array($product['price_Nakhodka']))        ? $product['price_Nakhodka']        : 0,
            'price_blagoveshchensk' => (isset($product['price_Blagoveshchensk']) && !is_array($product['price_Blagoveshchensk'])) ? $product['price_Blagoveshchensk'] : 0,

            'properties'        => $properties,
            'action'            => (isset($existProducts[$product['name']])) ? 'UPDATE' : 'CREATE',
            'db_product'        => (isset($existProducts[$product['name']])) ? $existProducts[$product['name']] : null
        ];

        return $result;
    }

    /**
     * Находит товары, которые переданны файле и уже есть в БД
     */
    public function findExistingProducts()
    {
        $productsNames = [];
        foreach ($this->fileProducts as $product) $productsNames[] = $product['name'];

        $this->existProducts = Product::whereIn('name', $productsNames)->get()->keyBy('name');
        return $this->existProducts;
    }

    /**
     * Находит значения свойств в БД и возвращает набор значений,
     * которые требуется добавить к товару
     *
     * @param $product
     *
     * @return array
     */
    public function getPropertyValuesToProduct($product)
    {
        $result = [];
        //поля товара, которые не являются свойствами
        $notFindProperties = $this->notFindProperties;

        $propertiesValues = [];
        foreach ($product as $field => $value) {
            //если значение массив, значит это поле пустое в импорте
            if (!is_array($value) && !in_array($field, $notFindProperties)) {
                if (!array_key_exists($field, $propertiesValues)) $propertiesValues[$field] = [];
                if (in_array($field, $this->multiFields)) {
                    $values = explode('; ', $value);
                    foreach ($values as $itemValue) $propertiesValues[$field][] = str_replace(';...', '', $itemValue);
                } else $propertiesValues[$field][] = $value;
            }
        }

        $DBProperties = $this->DBProperties;
        foreach ($propertiesValues as $field => $values) {
            $values = array_unique($values);
            if (isset($DBProperties[$field])) { //если такое свойство есть в БД
                foreach ($values as &$value) { //перебираем значения свойства из файла
                    if (!is_array($values) || is_array($values) && count($values)) {
                        $DBProperty = $DBProperties[$field]; //свойство из БД
                        //если значение есть в БД у текущего свойства, и оно не пустое, то добавляем его
                        if (isset($DBProperty['values_by_value'][$value]) && $value && strlen($value)) {
                            $result[] = $DBProperty['values_by_value'][$value];
                        }
                    }
                }
            }
        }

        return $result;
    }

    /**
     * Выполняет все требуемые операции над свойствами товара
     * Находит свойства и их значения в файле,
     * добавляет их в БД, если их там нет
     */
    public function getProperties()
    {
        $this->getFileProperties();
        $this->getDBProperties();
        $this->getFilePropertiesValues();

        $this->addPropertiesValuesFileToDB();
        $this->getDBProperties();
    }

    /**
     * Находит значения свойств в файле, которых нет в БД,
     * у соответствующих свойтсв и добавляет их в БД
     * @return array
     */
    public function addPropertiesValuesFileToDB()
    {
        if (!$this->filePropertiesValues || !count($this->filePropertiesValues)) return [];

        $newValues = [];
        $DBProperties = $this->DBProperties;

        //перебираем массив [свойство => [значение1, значение2]]
        foreach ($this->filePropertiesValues as $field => $values) {
            if (isset($DBProperties[$field])) { //если такое свойство есть в БД
                foreach ($values as $value) { //перебираем значения свойства из файла
                    $DBProperty = $DBProperties[$field]; //свойство из БД
                    //если этого значения нет у текущего свойства, и оно не пустое, то добавляем его
                    if (!isset($DBProperty['values_by_value'][$value]) && $value && strlen($value)) {
                        $newValues[] = [
                            'property_id' => $DBProperty['id'],
                            'name'        => $DBProperty['name'] . ': ' . $value,
                            'code'        => str_replace([' ', ',', '/', '\\', '(', ')'], '', $this->transliterate($value)),
                            'value'       => $value
                        ];
                    }
                }
            }
        }

        //добавляем новые значения в БД
        if (count($newValues)) {
            foreach ($newValues as &$value) {
                $value = ProductsPropertiesValues::create($value);
            } unset($value);
        }

        return $newValues;
    }

    /**
     * Возвращает массив значений свойств из файла
     * @return array
     */
    public function getFilePropertiesValues()
    {
        //поля товара, которые не являются свойствами
        $notFindProperties = $this->notFindProperties;

        $propertiesValues = [];
        foreach ($this->fileProducts as $product) {
            foreach ($product as $field => $value)
                //если значени - массив, значит это пустое поле в импорте
                if (!is_array($value) && !in_array($field, $notFindProperties)) {
                    if (!array_key_exists($field, $propertiesValues)) $propertiesValues[$field] = [];

                    if (in_array($field, $this->multiFields)) {
                        $values = explode('; ', $value);
                        foreach ($values as $itemValue)
                            $propertiesValues[$field][] = str_replace(';...', '', $itemValue);
                    } elseif($value && strlen($value)) $propertiesValues[$field][] = $value;
                }
        }

        foreach ($propertiesValues as &$value) {
            $value = array_unique($value);
        } unset($value);

        $this->filePropertiesValues = $propertiesValues;
        return $this->filePropertiesValues;
    }

    /**
     * Возвращает свойства товаров из файла
     * @return array
     */
    public function getFileProperties()
    {
        //поля товара, которые не являются свойствами
        $notFindProperties = $this->notFindProperties;

        $properties = [];
        foreach ($this->fileProducts as $product) {
            foreach ($product as $field => $value)
                if (!in_array($field, $notFindProperties)) $properties[] = $field;
        }
        $this->fileProperties = array_unique($properties);
        return $this->fileProperties;
    }

    /**
     * Возвращает свойства и их значения из БД
     * @return array
     */
    public function getDBProperties()
    {
        $this->DBProperties = ProductsProperties::whereIn('code', $this->fileProperties)
            ->with('values')->get()->map(function ($prop) {
                $prop->values_by_value = $prop->values->keyBy('value');
                return $prop;
            })->keyBy('code');
        return $this->DBProperties;
    }

    /**
     * Возвращает id категоии из БД по названию категории
     * @param $name
     *
     * @return mixed
     */
    public function getCategoryIdByName($name) {
        $category = $this->DBCategories[$name];
        return $category['id'];
    }

    /**
     * Находит категории из файла, ищет их в БД,
     * если их нет, то добавляет
     */
    public function getCategories() {
        $this->getFileCategories();
        $this->getDBCategories();

        $categories = [];
        //если категорий не одинаковое количество, значит в файле есть новые категории
        //и их надо добавить в БД
        if (count($this->fileCategories) != count($this->DBCategories)) {
            foreach ($this->fileCategories as $category) {
                $categories[] = Category::create([
                    'parent_id' => null,
                    'name'      => $category,
                    'slug'      => str_replace([' ', ',', '/', '\\', '(', ')'], '', $this->transliterate($category)),
                    'sort'      => 100,
                ]);
            }
            //после добавления получаем категории ещё раз, чтобы иметь новые категории в этом массиве
            $this->getDBCategories();
        }
    }

    /**
     * Возвращает категории из файла импорта
     * @return array
     */
    public function getFileCategories()
    {
        $categories = [];
        foreach ($this->fileProducts as $product) {
            if (!is_array($product['category'])) $categories[] = $product['category'];
        };
        $this->fileCategories = array_unique($categories);
        return $this->fileCategories;
    }

    /**
     * Возвращает категории из БД, которые указанны в файле импорта
     * @return array
     */
    public function getDBCategories() {
        $this->DBCategories = Category::whereIn('name', $this->fileCategories)->get()->keyBy('name');
        return $this->DBCategories;
    }

    /**
     * Транслитерация русских символов
     * @param $str
     *
     * @return mixed
     */
    function transliterate($str) {
        $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
        $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
        return strtolower(str_replace($rus, $lat, $str));
    }
}