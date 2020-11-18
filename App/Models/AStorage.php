<?php
declare(strict_types=1);

namespace App\Models;

abstract class AStorage
{
    /**
     * @return Article[]
     */
    public abstract function getAll() : array;

    public abstract function saveArticle(Article $article) : void;

    public function createPost(string $title, string $text) : void
    {
        $article = new Article($title, $text);
        $this->saveArticle($article);
    }
}