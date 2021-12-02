<?php

namespace DouglasBernardo\MyMovies\Entity;

class Imagem
{

    public $imagem;

    public function __construct($img)
    {
        $this->imagem = (object) $img;
    }

    public function getImageData()
    {
        return $this->imagem;
    }
    public function getImageName()
    {
        return $this->imagem->name;
    }

    public function getImageSize()
    {
        return $this->imagem->size;
    }

    public function getImageTmpName()
    {
        return $this->imagem->tmp_name;
    }

    public function getImageType()
    {
        return $this->imagem->type;
    }

    public function manipularImegem()
    {
        $permitidos = ["image/png", "image/jpeg", "image/jpg"];

        if(!in_array($this->imagem->type,$permitidos)){
            echo "Extensão não é permitida";
        }

    }
}