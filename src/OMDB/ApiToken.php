<?php

namespace DouglasBernardo\MyMovies\OMDB;

class ApiToken{

    public $apiToken;

    public function __construct($api)
    {
        $this->apiToken = $api;
    }

    public function searchOneMovie($movie)
    {
        $cs = curl_init();
        curl_setopt($cs, CURLOPT_URL, "http://www.omdbapi.com/?t=".$movie."&apikey=".$this->apiToken);
        curl_setopt($cs, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($cs, CURLOPT_HEADER, FALSE);
        curl_setopt($cs, CURLOPT_HTTPHEADER, array("Accept: application/json"));
        $response17 = curl_exec($cs);
        curl_close($cs);
        
        return json_decode($response17);
    }
}