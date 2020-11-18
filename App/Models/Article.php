<?php

namespace App\Models;

use App\Core\Model;

class Article extends Model
{
    protected $id;
    protected $title;
    protected $text;
    protected $name;

    /**
     * Article constructor.
     * @param $title
     * @param $text
     * @param $name
     */
    public function __construct($title = "", $text = "", $name = "uzivatel")
    {
        $this->title = $title;
        $this->text = $text;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }




    public function setName($name)
    {
        return $this->name = $name;
    }


    public function getname()
    {
        return $this->name;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    static public function setDbColumns()
    {
        return ['id','text','title', 'name'];
    }

    static public function setTableName()
    {
        return "articles";
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}