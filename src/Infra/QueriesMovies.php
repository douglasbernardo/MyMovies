<?php

namespace DouglasBernardo\MyMovies\Infra;

use DouglasBernardo\MyMovies\Helper\Conexao;
use PDO;
use PDOException;

class QueriesMovies
{
    use Conexao;

    public function insertMovie($nome,$imagem,$nota,$opiniao,$id_user){
        // $dados = array_keys($values);
        // $campos = array_pad([],count($dados),'?');
        // $con = $this->con->prepare('INSERT INTO filmes SET id_usuario = '.$id_user.' ('.implode(',',$dados).') VALUES ('.implode(',',$campos));
        
        // // print_r($con);

        // // return;
        // $con->execute(array_values($values));

        $this->con->query("INSERT INTO filmes SET id_usuario = '".$id_user."', nome = '$nome', imagem = '$imagem', nota = '$nota', opiniao = '$opiniao'");

      //  return $this->con->lastInsertId();
    }

    // public function insertSeries($values){
    //     $dados = array_keys($values);
    //     $campos = array_pad([],count($dados),'?');
    //     $con = $this->con->prepare('INSERT INTO series'. '('.implode(',',$dados).') VALUES ('.implode(',',$campos).')');
    //     $con->execute(array_values($values));

    //     return $this->con->lastInsertId();
    // }

    // public function select($email,$senha){
    //     $sql = "SELECT email,senha FROM usuarios WHERE email = :email and senha = :senha";
    //     $sql = $this->con->prepare($sql);
    //     $sql->bindValue(":email",$email);
    //     $sql->bindValue(":senha",$senha);
    //     $sql->execute();

    //     if($sql->rowCount() > 0){
    //         $dados = $sql->fetch();
            
    //         echo $dados['id'];
    //     }
    // }

    public function selectAllFromMovies(){
      return $this->con->query("SELECT * FROM filmes WHERE id_usuario =". $_SESSION['usuario_id'] )->fetchAll(PDO::FETCH_OBJ);
    }

    public function selectAllSeries()
    {
        return $this->con->query("SELECT * FROM series")->fetchAll(PDO::FETCH_OBJ);
    }
}