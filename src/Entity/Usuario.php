<?php

namespace DouglasBernardo\MyMovies\Entity;

use DouglasBernardo\MyMovies\Helper\Conexao;
use DouglasBernardo\MyMovies\Helper\FlashMessages;
use DouglasBernardo\MyMovies\Infra\Queries;
use PDO;

class Usuario
{

    use Conexao;
    use FlashMessages;
    
    private $id;
    private $nome;
    private $email;
    private $senha;


    public function getId(){
        $this->id;
    }

    public function getNome(){
        $this->nome;
    }

    public function setNome(string $nome)
    {
       return $this->nome = $nome;
    }

    public function getEmail(){
        $this->email;
    }
    
    public function setEmail(string $email)
    {
       return $this->email = $email;
    }

    public function getSenha(){
        $this->senha;
    }
    
    public function setSenha(string $senha)
    {
       return $this->senha = $senha;
    }

    public function verifyPassword(string $senha):bool
    {
        return password_verify($senha,$this->senha);
    }

    public function Logado(){
        if(isset($_SESSION['usuario_logado']) && !empty($_SESSION['usuario_logado'])){
            return true;
        }
        return false;
    }

    public function Logar($email,$senha):bool
    {
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql = $this->con->query($sql);
        $sql->execute();

        if($sql->rowCount() > 0){

            $sql = $sql->fetch(PDO::FETCH_OBJ);

            if(password_verify($senha,$sql->senha)){
                $_SESSION['usuario_id'] = $sql->id;
                $_SESSION['usuario_nome'] = $sql->nome;
                $_SESSION['usuario_logado'] = true;
                header("Location: /home");

                return true;
            }else{
                $this->defineMensagem("danger","A senha digitada não bate com a cadastrada");
                header("Location: /login");
            }
       
        }

        return false;
    }
    public function DadosUsuario(){

        foreach((new Queries())->selectAll() as $users){
            echo "<pre>";
                var_dump(
                    $users->nome,
                    $users->email,
                    $users->senha
                );
            echo "</pre>";
        }
    }

    public function usuarioExiste($email){
        $sql  = $this->con->query( "SELECT * FROM usuarios WHERE email = '$email'");

        if($sql->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }   
}
