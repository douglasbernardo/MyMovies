<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Entity\Filme;
use DouglasBernardo\MyMovies\Entity\Imagem;
use DouglasBernardo\MyMovies\Entity\Serie;
use DouglasBernardo\MyMovies\Helper\FlashMessages;
use DouglasBernardo\MyMovies\Helper\Template;
use Error;
use Exception;

class Inserir
{
    use FlashMessages;
    use Template;

    public function handle(): void
    {   

        $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
        $opcao = filter_input(INPUT_POST,'options',FILTER_SANITIZE_STRING);
        $qtdTemporadas = filter_input(INPUT_POST,'qtdTemporadas',FILTER_VALIDATE_INT);
        $qtdEpisodios = filter_input(INPUT_POST,'qtdEpisodios',FILTER_VALIDATE_INT);
        $opiniao = filter_input(INPUT_POST,'opiniao',FILTER_SANITIZE_STRING);
        $nota = filter_input(INPUT_POST,'minhaNota',FILTER_VALIDATE_FLOAT);

    
        $imgem = new Imagem($_FILES['arquivo']);

        if(isset($nome) == "" || isset($opcao) == "" || isset($opiniao) == "" || isset($nota) == ""){
            $this->defineMensagem("warning","Preencha todos os dados");
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

        if(strlen($opiniao) < 10 || strlen($opiniao) > 280){
            $this->defineMensagem("danger","Opinião deve ter entre 10 e 200 caracteres");
            header("Location: /insercao");
            return;
        }

        switch($opcao){
            case "movie":
                $filme = new Filme();
                $filme->setNome($nome);
                $filme->setImagem($imgem);
                echo $imgem->manipularImegem();
                $filme->setNota($nota);
                $filme->setOpiniao($opiniao);
    
                echo "<pre>";var_dump($filme); echo "</pre>";
                
                break;
            
            case "series":
                $serie = new Serie();
                $serie->setNome($nome);
                $serie->setImagem($imgem);
                $imgem->manipularImegem();
                $serie->setTemporadas($qtdTemporadas);
                $serie->setEpisodios($qtdEpisodios);
                $serie->setNota($nota);
                $serie->setOpiniao($opiniao);

                echo "<pre>";var_dump($serie); echo "</pre>";

                break;

            default:
                //throw new Exception("Opção não encontrada");
                break;
        }
    }
}
