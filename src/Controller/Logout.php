<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Controller\Requisicao;

class Logout implements Requisicao
{

    public function handle(): void
    {
        session_destroy();
        header("Location: /login");
    }
}