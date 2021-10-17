<?php

namespace DouglasBernardo\MyMovies\Controller;

class Filme
{
    private $id;

    private $nome;
    private $nota;
    private $descricao;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNome(): int
    {
        return $this->nome;
    }

    public function setNome(int $nome): void
    {
        $this->nome = $nome;
    }

    public function setNota(float $nota)
    {
        return $this->nota = $nota;
    }
    
    public function getNota()
    {
        $this->nota;
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
