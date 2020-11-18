<?php

namespace App\Models;

use App\Core\Model;

class Article extends Model
{
    protected $id;
    protected $title;
    protected $text;
    protected $meno;

    /**
     * Article constructor.
     * @param $title
     * @param $text
     * @param $meno
     */
    public function __construct($title = "", $text = "", $meno = "uzivatel")
    {
        $this->title = $title;
        $this->text = $text;
        $this->meno = $meno;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }




    public function setName($meno)
    {
        return $this->meno = $meno;
    }


    public function getname()
    {
        return $this->meno;
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
        return ['id','text','title', 'meno'];
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