<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Entity\Usuario;
use DouglasBernardo\MyMovies\Helper\Template;

class Home implements Requisicao
{
    use Template;

    public function __construct()
    {
        $user = new Usuario();
        if(!$user->Logado()){
            header("Location: /cadastro");
            return;
        }
    }

    public function handle(): void
    {
        echo $this->renderizaHtml('home',[]);
    }
}