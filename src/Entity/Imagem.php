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

    public function manipularImagem(): string
    {

        if(isset($this->imagem) && empty($this->imagem->type)){
            echo "Imagem Inexistente";
            return false;
        }
    
        $permitidos = ["image/png", "image/jpeg", "image/jpg"];
            
        echo !in_array($this->imagem->type,$permitidos) ? "Extensão não permitida" : "";

        if(!in_array($this->imagem->type,$permitidos)){
            echo "Extensão não permitida";
        }
        $nomeHash = md5(time().rand(0,999)).'.jpg';

        return $nomeHash;

    }
}