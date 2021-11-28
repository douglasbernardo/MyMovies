<?php

namespace DouglasBernardo\MyMovies\OMDB;;

class Client
{

    public $apiToken;

    public function __construct($api)
    {
        $this->apiToken = $api;
    }

    public function searchOneMovie($movie,$tipo=null)
    {
        $cs = curl_init();
        curl_setopt($cs, CURLOPT_URL, "http://www.omdbapi.com/?t=".$movie."&apikey=".$this->apiToken."&type=".$tipo);
        curl_setopt($cs, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($cs, CURLOPT_HEADER, FALSE);
        curl_setopt($cs, CURLOPT_HTTPHEADER, array("Accept: application/json"));
        $response17 = curl_exec($cs);
        curl_close($cs);
        
        return json_decode($response17);
    }
}