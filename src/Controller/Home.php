<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Entity\Usuario;
use DouglasBernardo\MyMovies\Helper\Template;
use DouglasBernardo\MyMovies\Infra\QueriesMovies;

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

        $this->db = new QueriesMovies();
    }

    public function handle(): void
    {
        $filmes = $this->db->selectAllFromMovies();
        echo $this->renderizaHtml('home',[
            "filmes" => $filmes
        ]);
    }
}