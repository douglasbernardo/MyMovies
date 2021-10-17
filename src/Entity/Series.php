<?php

namespace DouglasBernardo\MyMovies\Controller;

class Serie
{
    private $id;
    private $nome;
    private $temporadas;
    private $episodios;
    private $nota;
    private $descricao;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }


    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }
}
