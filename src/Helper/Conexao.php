<?php


namespace DouglasBernardo\MyMovies\Helper;

use PDO;
use PDOException;

trait Conexao
{ 

    private $localhost = "localhost";
    private $dbname = "mymovies";
    private $user = "root";
    private $password = "douglas@[melo]";

    private $con;

    public function __construct()
    {
        $this->conectar();  
    }

    public function conectar(){
        try {
            $this->con = new PDO(
                            'mysql:host='.$this->localhost.
                            ';dbname='.$this->dbname, 
                            $this->user, $this->password
            );

            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          //  echo "Conexão realizada com sucesso";

        }catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

}