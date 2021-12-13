<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Infra\QueriesUsers;

class DeleteAccount implements Requisicao
{
    public function __construct()
    {
        $this->db = new QueriesUsers();   

    }

    public function handle(): void
    {
        $this->db->deleteUserMovieAccount($_SESSION['usuario_id']);
        $this->db->deleteUserAccount($_SESSION['usuario_id']);
        session_destroy();

        header('location:/cadastro');
    }
}