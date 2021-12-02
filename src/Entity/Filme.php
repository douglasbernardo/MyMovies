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

    public function getNota(): float
    {
        return $this->nota;
    }

    public function getOpiniao(): string
    {
        return $this->opiniao;
    }

    public function getImagem(): Imagem
    {
        return $this->img;
    }

    public function setNome(string $nomeFilme)
    {
        $this->nome = $nomeFilme;
    }

    public function setNota(?float $nota)
    {
        return $this->nota = $nota;
    }
    
    public function setOpiniao(string $opiniao)
    {
        $this->opiniao = $opiniao;
    }
}
