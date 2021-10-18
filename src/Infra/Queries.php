<?php

namespace DouglasBernardo\MyMovies\Infra;

use DouglasBernardo\MyMovies\Helper\Conexao;
use PDO;
use PDOException;

class Queries
{
    use Conexao;

    public function insert($values){
        $dados = array_keys($values);
        $campos = array_pad([],count($dados),'?');
        $con = $this->con->prepare('INSERT INTO usuarios'. '('.implode(',',$dados).') VALUES ('.implode(',',$campos).')');
        $con->execute(array_values($values));
    }

    public function select($values){
        $sql = "SELECT nome,email FROM usuarios WHERE email = :email and senha = :senha";
        $sql = $this->con->prepare($sql);
        $sql->execute(array_values($values));

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
            
            echo $dados['id'];
        }
    }

    public function selectAll(){
        $sql = $this->con->query("SELECT * FROM usuarios");
        
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }
}