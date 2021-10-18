<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Entity\Usuario;
use DouglasBernardo\MyMovies\Infra\Conexao;
use DouglasBernardo\MyMovies\Infra\Queries;

class realizaLogin implements Requisicao
{

    public function __construct()
    {
        $this->db = new Queries();
    }

    public function handle(): void
    {
        $dados = [
            "email" => filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL),
            "senha" => filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING)
        ];

        if (is_null($dados['email']) || $dados['email'] === false){
            echo "Digite um email valido";
            //header('location: /login');
            return;
        }

        if (is_null($dados['senha']) || $dados['senha'] == ""){
            echo "Digite uma senha valida";
            //header('location: /login');
            return;
        }

        $usuario = new Usuario();

        $sql = "SELECT nome,email FROM usuarios WHERE email = :email and senha = :senha";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":email",$dados['email']);
        $sql->bindValue(":senha",$dados['senha']);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
            
            echo $dados['id'];
        }
        $_SESSION['usuario_logado'] = true;


        header("Location: /home");


    
    }
}