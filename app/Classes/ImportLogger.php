<?php
namespace App\Classes;

class ImportLogger {
    private $path = '';
    private $log = [];

    public function __construct() {
        $this->path = storage_path() . '/importLogs/import_' . date('d-m-Y-H-i-s', time()) . '.log';
    }

    /**
     * Добавляет запись в лог
     * @param $data
     */
    public function add($data) {
        $this->log[] = $data;
    }

    /**
     * Возвращает массив логов для текущего файла
     * @return array
     */
    public function getLog() {
        return $this->log;
    }

    /**
     * Записывает лог в файл и добавляет его к объекту импорта
     */
    public function save() {
        if ($this->log && count($this->log)) {
            foreach ($this->log as $log) {
                file_put_contents(
                    $this->path,
                    "Время: "     . $log['time'] . "\n" .
                    "Сущность: "  . $log['type'] . "\n" .
                    "Имя: "       . $log['name'] . "\n" .
                    "Сообщение: " . $log['message'] . "\n" .
                    "<----------->\n\n",
                    FILE_APPEND
                );
            }
        }
        return $this->getLog();
    }
}