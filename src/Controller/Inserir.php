<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Helper\FlashMessages;
use DouglasBernardo\MyMovies\Helper\Template;
use DouglasBernardo\MyMovies\OMDB\Client;
use Statickidz\GoogleTranslate;

class Inserir
{

    use FlashMessages;
    use Template;

    public function handle(): void
    {   
    
        $client = new Client("172da14f");

       $movieName = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
       $opcao = filter_input(INPUT_POST,'options',FILTER_SANITIZE_STRING);
        
        $translator = new GoogleTranslate();
        $movieTranslated = $translator->translate("pt","en",$movieName); //traduz o filme do portugues para o ingles

        $movie = $client->searchOneMovie(
            urlencode($movieTranslated),
            $opcao
        );

        if($movie->Poster === "N/A") //se a imagem do filme for NOT FOUND
        {
            $this->defineMensagem("danger","A imagem do filme não foi encontrado na nossa Api, faça o download de uma e a adicione");
            header("Location: /insercao");
            return;
        }

        if($movie->Response === "False") //se a resposta for == "False" é porque o filme não foi encontrado
        {
            $this->defineMensagem("danger","Não conseguimos encontrar esse filme na nossa Api");
            header("Location: /insercao");
            return;
        }
        
        // echo "<pre>";
        //   var_dump(
        //      $movie
        //      // $movie->Title,
        //      // $movie->Poster
        //   );
        // echo "</pre>";


        //Mostra o link da imagem do filme que o usuario escolheu
        echo $this->renderizaHtml('insercao/formulario',[
            "imagem" => $movie->Poster
        ]);
    }
}