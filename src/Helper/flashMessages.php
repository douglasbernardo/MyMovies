<?php

namespace DouglasBernardo\MyMovies\Helper;

trait FlashMessages
{

    public function defineMensagem(string $tipo,string $mensagem)
    {
        $_SESSION['tipo'] = $tipo;
        $_SESSION['mensagem'] = $mensagem;
    }
}