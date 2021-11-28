<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Helper\FlashMessages;
use DouglasBernardo\MyMovies\Helper\Template;

class Inserir
{
    use FlashMessages;
    use Template;

    public function handle(): void
    {   

        $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
        $opcao = filter_input(INPUT_POST,'options',FILTER_SANITIZE_STRING);
        $img =  filter_input(INPUT_POST,'imagem',FILTER_SANITIZE_STRING);
        $opiniao = filter_input(INPUT_POST,'opiniao',FILTER_SANITIZE_STRING);
        $nota = filter_input(INPUT_POST,'minhaNota',FILTER_VALIDATE_FLOAT);
        
        if($nome == "" || $opcao == "" || $opiniao == "" || $nota == ""){
            $this->defineMensagem("danger","Os dados devem ser preenchidos");
            header("Location: /insercao");
            return; 
        }

        if($nome === ""){
            $this->defineMensagem("danger","O nome do filme deve ser preenchido");
            header("Location: /insercao");
            return;

        }

        if($nota > 10){
            $this->defineMensagem("danger","Nota não pode ser maior do que 10");
            header("Location: /insercao");
            return;
        }

    }
}
