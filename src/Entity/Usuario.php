<?php

namespace DouglasBernardo\MyMovies\Entity;

use DouglasBernardo\MyMovies\Infra\Conexao;
use DouglasBernardo\MyMovies\Infra\Queries;
use PDO;
use Symfony\Component\Console\Event\ConsoleEvent;

class Usuario
{
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function __construct()
    {
        $this->db = new Queries();
    }

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

    public function Logado(){
        if(isset($_SESSION['usuario_logado']) && !empty($_SESSION['usuario_logado'])){
            return true;
        }
        return false;
    }

    public function Logar($email,$senha)
    {
        $sql = (new Queries())->select($email,$senha);
        $sql->bindValue(":email",$email);
        $sql->bindValue(":senha",$senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
            
            echo $dados['id'];
        }
    }
    public function DadosUsuario(){

        foreach((new Queries())->selectAll() as $users){
            echo "<pre>";
                var_dump(
                    $users->nome,
                    $users->email,
                    $users->senha
                );
            echo "</pre>";
        }
    }
}
