<?php

namespace DouglasBernardo\MyMovies\Helper;

trait Template //classe não será instanciada
{
    public function renderizaHtml(string $caminhoTemplate,array $dados) : string
    {

        extract($dados);
        ob_start();
        require __DIR__ . '/../../view/'.$caminhoTemplate.".php";
        $html = ob_get_clean();
       
        return $html;
    }
}