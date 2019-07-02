<?php
namespace App\Classes;

class ImportValidator {
    /**
     * @var ImportParser - Экземпляр парсера
     */
    private $importParser;

    /**
     * @var ImportLogger - Экземпляр логгера
     */
    private $importLogger;

    /**
     * @var null - Флаг валидности
     */
    private $valid = null;

    /**
     * @var array - Обязательные поля в структуре товара
     */
    private $requiredFields = [
        'xml_id'   => 'numeric',
        'name'     => 'string',

        /* //эти поля пока не обязательны,
           //но в дальнейшем их надо будет сделать обязательными
        'category' => 'string',
        'proizvoditel'          => 'string',
        'strana_proizvoditel'   => 'string',
        'price_Blagoveshchensk' => 'numeric',
        'price_Ussuriysk'   => 'numeric',
        'price_Vladivostok' => 'numeric',
        'price_Nakhodka'    => 'numeric',
        'model'             => 'string'
        */
    ];

    /**
     * @var array - Множественные поля в структуре товара
     */
    private $multiFields = [
        'rezim_raboti',
        'osobennosti',
        'skidki_akcii'
    ];

    public function __construct(ImportParser $importParser, ImportLogger $importLogger)
    {
        $this->importParser = $importParser;
        $this->importLogger = $importLogger;
    }

    /**
     * Возвращает список обязательных полей товара
     * @return array
     */
    public function getReqFields() {
        return $this->requiredFields;
    }

    /**
     * Возвращает список множественных полей товара
     * @return array
     */
    public function getMultiFields() {
        return $this->multiFields;
    }

    /**
     * Валидация всех товаров в файле
     * @return bool
     */
    public function validate() {
        if ($this->valid !== null) return $this->valid;
        if (!$content = $this->importParser->getFile()) return false;

        if (!array_key_exists('Kondicioner', $content) || !is_array($content['Kondicioner'])) {
            $this->importLogger->add([
                'type' => 'structure',
                'name' => 'Kondicioner',
                'time' => date('d.m.Y H:i:s'),
                'message' => "Ошибка чтения файла: в файле отсутствует или некорректна струтура 'Kondicioner'."
            ]);
            return false;
        }

        $valid = true;
        foreach ($content['Kondicioner'] as $product) {
            //если ранее все товары были валидны, значит проверяем текущий
            if ($valid) $valid = $this->validateProduct($product);
        }

        $this->valid = $valid;
        return $valid;
    }

    /**
     * Валидация структуры одного товара
     * @param $product
     *
     * @return bool
     */
    public function validateProduct($product) {
        return ($this->validateRequiredFields($product) &&
                $this->validateFields($product) &&
                $this->validateFields($product));
    }

    /**
     * Валидация обязательных полей товара
     * @param $product
     *
     * @return bool
     */
    public function validateRequiredFields($product) {
        $valid = true;
        $requiredFields = $this->requiredFields;
        $multiFields    = $this->multiFields;

        foreach ($requiredFields as $field => $type) {
            if (!array_key_exists($field, $product)) {
                $this->importLogger->add([
                    'type' => 'product',
                    'name' => 'Товар, на этом этапе название ещё не известно',
                    'time' => date('d.m.Y H:i:s'),
                    'message' => "Ошибка чтения товара: у товара отсутствует обязательное поле '" . $field . "'."
                ]);
                $valid = false;
                continue;
            }

            $value = $product[$field];
            if (is_array($value) && !count($value)) $value = '';

            if (!$value || !strlen($value)) {
                $this->importLogger->add([
                    'type' => 'product',
                    'name' => 'Товар, на этом этапе название ещё не известно',
                    'time' => date('d.m.Y H:i:s'),
                    'message' => "Ошибка чтения товара: у товара отсутствует обязательное поле '" . $field . "'."
                ]);
                $valid = false;
                continue;
            }

            if ($type == 'numeric' && !is_numeric($value)) {
                $this->importLogger->add([
                    'type' => 'product',
                    'name' => 'Товар, на этом этапе название ещё не известно',
                    'time' => date('d.m.Y H:i:s'),
                    'message' => "Ошибка чтения товара: у товара некорректно поле '" . $field . "'. Поле должно быть числом. Текущее значение: '" . $value . "'"
                ]);
                $valid = false;
                continue;
            }

            if (!in_array($field, $multiFields) && strlen($value) > 250) {
                $this->importLogger->add([
                    'type' => 'product',
                    'name' => 'Товар, на этом этапе название ещё не известно',
                    'time' => date('d.m.Y H:i:s'),
                    'message' => "Ошибка чтения товара: у товара некорректно поле '" . $field . "'. Длина поля не должна превышать 250 символов. Текущее значение: '" . $value . "'"
                ]);
                $valid = false;
                continue;
            }
        }

        return $valid;
    }

    /**
     * Валидация всех полей товара
     * @param $product
     *
     * @return bool
     */
    public function validateFields($product) {
        $valid = true;
        $multiFields = $this->multiFields;

        foreach ($product as $field => $value) {
            if (is_array($value) && !count($value)) $value = '';

            if (!in_array($field, $multiFields) && strlen($value) > 250) {
                $this->importLogger->add([
                    'type' => 'product',
                    'name' => 'Товар, на этом этапе название ещё не известно',
                    'time' => date('d.m.Y H:i:s'),
                    'message' => "Ошибка чтения товара: у товара некорректно поле '" . $field . "'. Длина поля не должна превышать 250 символов. Текущее значение: '" . $value . "'"
                ]);
                $valid = false;
                continue;
            }

            /* //проверка на пустое поле, пока отключена, так как этот функционал ещё не реализован в 1С
            if (!$value || !strlen($value)) {
                $this->importLogger->add([
                    'type' => 'product',
                    'name' => 'Товар, на этом этапе название ещё не известно',
                    'time' => date('d.m.Y H:i:s'),
                    'message' => "Ошибка чтения товара: у товара отсутствует значение поля '" . $field . "'."
                ]);
                $valid = false;
                continue;
            }
            */
        }

        return $valid;
    }

    /**
     * Валидация множественных полей
     * @param $product
     *
     * @return bool
     */
    public function validateMultiFields($product) {
        $valid = true;
        $multiFields    = $this->multiFields;

        foreach ($multiFields as $field) {
            if (array_key_exists($field, $product)) {
                $value = $product[$field];
                if (is_array($value) && !count($value)) $value = '';
                $valueArray = explode('; ', $value);

                if (!is_array($valueArray) || !count($valueArray)) {
                    $this->importLogger->add([
                        'type' => 'product',
                        'name' => 'Товар, на этом этапе название ещё не известно',
                        'time' => date('d.m.Y H:i:s'),
                        'message' => "Ошибка чтения товара: у товара отсутствует значение поля '" . $field . "'."
                    ]);
                    $valid = false;
                    continue;
                }
            }
        }

        return $valid;
    }
}