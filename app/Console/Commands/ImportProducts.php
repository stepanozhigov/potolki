<?php

namespace App\Console\Commands;

use Exception;
use App\Classes\Importer;
use App\Classes\ImportValidator;
use App\Classes\ImportLogger;
use App\Classes\ImportParser;
use Illuminate\Console\Command;

class ImportProducts extends Command
{
    /** 9W1f1H5i dc7b19f2d890e6aa3863.xml
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import products';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('[Импорт товаров]: Старт...');

        $this->info('[Импорт товаров]: Чтение файла...');
        $ImportLogger    = new ImportLogger();
        $ImportParser    = new ImportParser($ImportLogger);
        $ImportValidator = new ImportValidator($ImportParser, $ImportLogger);

        $this->info('[Импорт товаров]: Валидация файла...');
        $valid = $ImportValidator->validate();

        if ($valid) {
            $this->info('[Импорт товаров]: Файл валиден, импорт товаров...');

            $Importer = null;
            $Importer = new Importer($ImportParser, $ImportLogger, $ImportValidator);
            $ProductToImport = $Importer->import(false);

            $bar = $this->output->createProgressBar(count($ProductToImport));
            $result = [];
            foreach ($ProductToImport as $product) {
                $item = $Importer->addProduct($product);
                $result[] = $item;
                $bar->advance();
            }
            $bar->finish();
        } else $this->info('[Импорт товаров]: Файл содержит ошибки, отмена импорта...');

        $this->info(PHP_EOL);

        $this->info('[Импорт товаров]: Запись лога...');
        $ImportLogger->save();
        if ($valid) $ImportParser->delete();
        $this->info('[Импорт товаров]: Лог записан...');
        $this->info('[Импорт товаров]: Импорт завершен.');
    }

}