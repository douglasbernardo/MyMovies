<?php

namespace DouglasBernardo\MyMovies\Entity;

use DouglasBernardo\MyMovies\Entity\Imagem;

class Filme
{
    private $id;

    private $nome;
    private $img;
    private $nota;
    private $opiniao;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getImagem(): Imagem
    {
        return $this->img;
    }

    public function getNota(): float
    {
        return $this->nota;
    }

    public function getOpiniao(): string
    {
        return $this->opiniao;
    }

    public function setNome(string $nomeFilme)
    {
       return $this->nome = $nomeFilme;
    }

    public function setImagem(?Imagem $imgem)
    {
        return $this->img = $imgem;
    }

    public function setNota(?int $nota)
    {
        return $this->nota = $nota;
    }
    
    public function setOpiniao(string $opiniao)
    {
        return $this->opiniao = $opiniao;
    }
}
