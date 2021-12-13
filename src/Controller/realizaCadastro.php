<?php 

namespace DouglasBernardo\MyMovies\Controller;


use DouglasBernardo\MyMovies\Entity\Usuario;
use DouglasBernardo\MyMovies\Helper\FlashMessages;
use DouglasBernardo\MyMovies\Infra\QueriesUsers;

class realizaCadastro implements Requisicao
{

    use FlashMessages;

    public function __construct()
    {
        $this->db = new QueriesUsers();   
    }

    public function handle(): void
    {
        $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
        $email= filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

        if($nome == "" && $email == "" && $senha == ""){
            $this->defineMensagem("danger","Os dados devem ser preenchidos");
            header("Location: /cadastro");
            return;
        }

        if($nome === ""){
            $this->defineMensagem("danger","nome não pode ser vazio");
            header("Location: /cadastro");
            return;
        }
        if($email == ""){
            $this->defineMensagem("danger","O E-mail não pode ser vazio");
            header("Location: /cadastro");
            return;
        }

        if($senha === ""){
            $this->defineMensagem("danger","A senha não pode ser vazia");
            header("Location: /cadastro");
            return;
        }

        $usuario = new Usuario();

        $values = [
            "nome" => $usuario->setNome($nome),
            "email"=>  $usuario->setEmail($email),
            "senha"=> password_hash($usuario->setSenha($senha),PASSWORD_DEFAULT)
        ];

        
        if($usuario->usuarioExiste($email)){
            $this->defineMensagem("danger","E-mail já existente");
            header("Location: /cadastro");
            return;
        }
        
        $_SESSION['usuario'] = $this->db->insert($values);
        $_SESSION['usuario_nome'] = $values["nome"];
        $_SESSION['usuario_email'] = $values["email"];
        $_SESSION['usuario_logado'] = true;

        header("Location: /login");
    }
}
