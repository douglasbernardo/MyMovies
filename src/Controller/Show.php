<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Controller\Requisicao;
use DouglasBernardo\MyMovies\Helper\Template;
use DouglasBernardo\MyMovies\Infra\QueriesMovies;

class Show implements Requisicao
{

    use Template;

    public function __construct()
    {
     $this->db  = new QueriesMovies();   
    }

    public function handle(): void
    {
        $filme = $this->db->selectOneMovie($_GET['id']);

        echo $this->renderizaHtml("show/aboutMovie",[
            "filme" => $filme
        ]);
    }
}