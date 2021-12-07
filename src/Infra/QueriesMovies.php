<?php

namespace DouglasBernardo\MyMovies\Infra;

use DouglasBernardo\MyMovies\Helper\Conexao;
use PDO;
use PDOException;

class QueriesMovies
{
    use Conexao;

    public function insertMovie($nome,$imagem,$nota,$opiniao){

        $this->con->query("INSERT INTO filmes SET id_usuario = '".$_SESSION['usuario_id']."', nome = '$nome', imagem = '$imagem', nota = '$nota', opiniao = '$opiniao'");

    }

    // public function insertSeries($values){
    //     $dados = array_keys($values);
    //     $campos = array_pad([],count($dados),'?');
    //     $con = $this->con->prepare('INSERT INTO series'. '('.implode(',',$dados).') VALUES ('.implode(',',$campos).')');
    //     $con->execute(array_values($values));

    //     return $this->con->lastInsertId();
    // }

    public function selectAllFromMovies(){
      return $this->con->query("SELECT * FROM filmes WHERE id_usuario =". $_SESSION['usuario_id'] )->fetchAll(PDO::FETCH_OBJ);
    }

    public function selectAllSeries()
    {
        return $this->con->query("SELECT * FROM series")->fetchAll(PDO::FETCH_OBJ);
    }
}