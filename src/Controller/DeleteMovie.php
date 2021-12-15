<?php 

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Infra\QueriesMovies;

class DeleteMovie implements Requisicao
{
    public function __construct()
    {
        $this->db = new QueriesMovies();
    }
    public function handle(): void
    {
        var_dump($this->db->deleteMovie($_GET['id']));

        header('/location:home');
    }
}