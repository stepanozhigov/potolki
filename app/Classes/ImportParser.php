<?php
namespace App\Classes;

class ImportParser {
    private $files;
    private $file;
    private $importPath;
    private $filePath;
    private $importLogger;
    private $fileName;

    public function __construct(ImportLogger $importLogger)
    {
        $this->importLogger = $importLogger;
        $this->importPath = storage_path() . '/import';
        $this->files = scandir($this->importPath, 1);

        if (count($this->files) > 3) {
            $this->importLogger->add([
                'type' => 'file',
                'name' => $this->importPath,
                'time' => date('d.m.Y H:i:s'),
                'message' => "Ошибка чтения папки с файлами: в папке более 1 файла импорта."
            ]);
        }

        if (count($this->files) > 2) {
            $this->fileName = current($this->files);
            $this->filePath = $this->importPath . '/' . $this->fileName;
            if (!$this->read()) return;
        } else {
            $this->importLogger->add([
                'type' => 'file',
                'name' => $this->importPath,
                'time' => date('d.m.Y H:i:s'),
                'message' => "Ошибка чтения папки с файлами: в папке не найдено файлов импорта."
            ]);
        }
    }

    /**
     * Удаляет файл импорта
     */
    public function delete()
    {
        if ($this->filePath) unlink($this->filePath);
    }

    /**
     * Читает файл импорта в массив
     * @return mixed|array|bool
     */
    public function read() {
        if (!$this->filePath) return false;
        if ($this->file) return $this->file;
        try {
            $fileData = @simplexml_load_file($this->filePath);
            $this->file = json_decode(json_encode($fileData), true);
            return $this->file;
        } catch (\Exception $e) {
            $this->importLogger->add([
                'type' => 'file',
                'name' => $this->filePath,
                'time' => date('d.m.Y H:i:s'),
                'message' => "Ошибка чтения файла импорта."
            ]);
            return false;
        }
    }

    /**
     * Возвращает массив структур из файла импорта
     * @return mixed|array
     */
    public function getFile() {
        return $this->read();
    }
}