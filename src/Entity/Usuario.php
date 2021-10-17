<?php

namespace DouglasBernardo\MyMovies\Entity;

class Usuario
{
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function getId(){
        $this->id;
    }

    public function getNome(){
        $this->nome;
    }

    public function setNome(string $nome)
    {
       return $this->nome = $nome;
    }

    public function getEmail(){
        $this->email;
    }
    
    public function setEmail(string $email)
    {
       return $this->email = $email;
    }

    public function getSenha(){
        $this->senha;
    }
    
    public function setSenha(string $senha)
    {
       return $this->senha = $senha;
    }

    public function senhaEstaCorreta(string $senhaPura): bool
    {
        return password_verify($senhaPura, $this->senha);
    }
}
