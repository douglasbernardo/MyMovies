<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Entity\Usuario;
use DouglasBernardo\MyMovies\Helper\FlashMessages;

class realizaLogin implements Requisicao
{

    use FlashMessages;

    public function handle(): void
    {
        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
            $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

            if (is_null($email) || $email === false){
                $this->defineMensagem("danger","Digite um email valido");
                header('location: /login');
                return;
            }

            if (is_null($senha) || $senha == ""){
                $this->defineMensagem("danger","Digite uma senha valida");
                header('location: /login');
                return;
            }

            $usuario = new Usuario();

            if(!$usuario->usuarioExiste($email)){
                $this->defineMensagem("danger","E-mail ou senha invalidos");
                header('location: /login');
                return;
            }
            else{
                $usuario->Logar($email,$senha);
            }
        }

    }
}