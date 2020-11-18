<?php
declare(strict_types=1);

namespace App\Models;

class CsvStorage extends Astorage
{

    private string $filePath = __DIR__ . "/articles.csv";

    /**
     * @return Article[]
     */
    public function getAll() : array {
        $articles = [];
        if  (($handle = fopen($this->filePath, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                $articles[] = new Article($data[0], $data[1]);
            }
            fclose($handle);
        }
        return $articles;
    }


    public function saveArticle(Article $article) : void
    {
        if (($handle = fopen($this->filePath, "a")) !== FALSE) {
            fputcsv($handle, [$article->getTitle(), $article->getText()], ";");
            fclose($handle);
        }
    }
}