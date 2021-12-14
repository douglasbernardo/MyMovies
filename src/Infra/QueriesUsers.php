<?php

namespace DouglasBernardo\MyMovies\Infra;

use DouglasBernardo\MyMovies\Helper\Conexao;
use PDO;

class QueriesUsers
{
    use Conexao;

    public function insert($values){
        $dados = array_keys($values);
        $campos = array_pad([],count($dados),'?');
        $con = $this->con->prepare('INSERT INTO usuarios'. '('.implode(',',$dados).') VALUES ('.implode(',',$campos).')');
        $con->execute(array_values($values));

        return $this->con->lastInsertId();
    }

    public function select($email,$senha){
        $sql = "SELECT email,senha FROM usuarios WHERE email = :email and senha = :senha";
        $sql = $this->con->prepare($sql);
        $sql->bindValue(":email",$email);
        $sql->bindValue(":senha",$senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
            
            echo $dados['id'];
        }
    }

    public function selectAll(){
      return $this->con->query("SELECT * FROM usuarios")->fetchAll(PDO::FETCH_OBJ);
    }


    public function deleteUserAccount($id)
    {
        return $this->con->query("DELETE FROM usuarios WHERE id = $id");
    }
    public function deleteUserMovieAccount($id)
    {
        return $this->con->query("DELETE FROM filmes WHERE filmes.id_usuario = $id");
    }
}