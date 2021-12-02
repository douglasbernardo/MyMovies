<?php

namespace DouglasBernardo\MyMovies\Entity;

use DouglasBernardo\MyMovies\Entity\Imagem;

class Serie
{
    private $id;
    private $nome;
    private $img;
    private $temporadas;
    private $episodios;
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

    public function getTemporadas(): string
    {
        return $this->temporadas;
    }
    
    public function getEpisodios(): int
    {
        return $this->episodios;
    }

    public function getNota(): float
    {
        return $this->nota;
    }

    public function getOpiniao(): string
    {
        return $this->opiniao;
    }


    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setImagem(Imagem $imgem)
    {
        $this->img = $imgem;
    }

    public function setTemporadas(int $temporadas)
    {
        $this->temporadas = $temporadas;
    }

    public function setEpisodios(int $episodios)
    {
        $this->episodios = $episodios;
    }

    public function setNota(?int $nota)
    {
        $this->nota = $nota;
    }

    public function setOpiniao(string $opiniao)
    {
        $this->opiniao = $opiniao;
    }
}
