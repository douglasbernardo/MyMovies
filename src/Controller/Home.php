<?php

namespace DouglasBernardo\MyMovies\Controller;

use DouglasBernardo\MyMovies\Helper\Template;

class Home implements Requisicao
{
    use Template;

    public function handle(): void
    {
        echo $this->renderizaHtml('home',[]);
    }
}