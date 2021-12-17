<?php 

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Helper\FlashMessages;
use DouglasBernardo\MyMovies\Infra\QueriesMovies;

class DeleteMovie implements Requisicao
{

    use FlashMessages;

    public function __construct()
    {
        $this->db = new QueriesMovies();
    }
    public function handle(): void
    {

        $this->db->deleteMovie($_GET['id']);

        $this->defineMensagem('success','Removido com sucesso');
        header("Location: /home");
    }
}