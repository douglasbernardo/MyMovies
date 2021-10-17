<?php

namespace DouglasBernardo\MyMovies\Infra;

use PDO;
use PDOException;

class Conexao
{

    const dados = [
        'host' => 'localhost',
        'dbname' => 'mymovies',
        'user' => 'root', 
        'password' => 'douglas@[melo]'
    ];

    public static function conectar(){
        try {
            $conn = new PDO(
                            'mysql:host='.self::dados['host'].
                            ';dbname='.self::dados['dbname'], 
                            self::dados['user'], self::dados['password']
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Conexão realizada com sucesso";

        }catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}