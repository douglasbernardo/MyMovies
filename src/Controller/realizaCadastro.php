<?php 

namespace DouglasBernardo\MyMovies\Controller;


use DouglasBernardo\MyMovies\Entity\Usuario;
use DouglasBernardo\MyMovies\Infra\Queries;

class realizaCadastro implements Requisicao
{

    public function __construct()
    {
        $this->db = new Queries();   
    }

    public function handle(): void
    {
        $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
        $email= filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

        if($nome == "" && $email == "" && $senha == ""){
            echo "Os dados devem ser preenchidos";
            return;
        }

        if($nome === ""){
            echo "nome não pode ser vazio";
            return;
        }
        if($email == ""){
            echo "O E-mail não pode ser vazio";
            return;
        }

        if($senha === ""){
            echo "A senha não pode ser vazia";
            return;
        }

        $usuarios = new Usuario();

        $values = [
            "nome" => $usuarios->setNome($nome),
            "email"=>  $usuarios->setEmail($email),
            "senha"=> password_hash($usuarios->setSenha($senha),PASSWORD_DEFAULT)
        ];

        $_SESSION['usuario'] = $this->db->insert($values);
        $_SESSION['usuario_logado'] = true;

        header("Location: /home");
    }
}
