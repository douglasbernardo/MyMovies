<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Helper\Template;

class Formularios implements Requisicao
{
    use Template;

    public function handle(): void
    {
        switch($_SERVER['REQUEST_URI']){
            case '/login':
                echo $this->renderizaHtml('login/formulario',[]);
            break;

            case '/cadastro':
                echo $this->renderizaHtml('cadastro/formulario',[]);
            break;

            default:
                echo "Erro no sistema";
        }
    }
}