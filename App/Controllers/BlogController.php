<?php

namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Article;

class BlogController extends AControllerBase
{

    public function index()
    {
        //$storage = new CsvStorage();
        return [
            'articles' => Article::getAll()
        ];
    }



    public function edit() {
        $id = $_GET['id'];
        $article = new Article();
        $article->getOne($id);

        if  (isset($_POST['title'])) {
            $article->setText($_POST['text']);
            $article->setTitle($_POST['title']);
            $article->setName($_POST['meno']);
            $article->setMail($_POST['email']);
            $article->save();
            header("Location: ?c=blog");
        }

        return [
            'article' => $article
        ];
    }

    public function add()
    {
        if  (isset($_POST['title'])) {
            $article = new Article($_POST['title'], $_POST['text'], $_POST['meno'], $_POST['email']);

            $article->save();
            header("Location: ?c=blog");
        }

        return[];

    }

    public function delete(){
        $id = $_GET['id'];
        $article = new Article();
        $article->getOne($id);
        $article->delete();
        header("Location: ?c=blog");
        exit();
    }
}