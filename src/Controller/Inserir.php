<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\OMDB\ApiToken;
use Statickidz\GoogleTranslate;

class Inserir
{
    public function handle(): void
    {   
    
        $client = new ApiToken("172da14f");

        $movieName = "I Am Legend";

        $translator = new GoogleTranslate();
        $result = $translator->translate("pt","en",$movieName);


        $movie = $client->searchOneMovie(urlencode($result));

       echo "<pre>";var_dump($movie);

       echo "<img src='$movie->Poster'>";
    }
}