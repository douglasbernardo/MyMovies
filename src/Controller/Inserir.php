<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\OMDB\Client;
use Statickidz\GoogleTranslate;

class Inserir
{
    public function handle(): void
    {   
    
        $client = new Client("172da14f");

        $movieName = "Squid Game";

        $translator = new GoogleTranslate();
        $result = $translator->translate("pt","en",$movieName); //traduz o filme do portugues para o ingles


        $movie = $client->searchOneMovie(
            urlencode($result),
           // "series"
        );

       echo "<pre>";var_dump($movie);

       echo "<img src='$movie->Poster'>";
    }
}