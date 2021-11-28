<?php

//ARQUIVO COM CODIGO DE BUSCAR FILME NA API DO OMDB SERÁ TESTADO DEPOIS 

/*
    function TESTEBUSCAAPI()
    {
        use DouglasBernardo\MyMovies\OMDB\Client;
        use Statickidz\GoogleTranslate;

        $client = new Client("172da14f");

        $movie = $this->traduzSF($nome,$client,$opcao);

            if(){
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

            //Mostra o link da imagem do filme que o usuario escolheu
            echo $this->renderizaHtml('insercao/formulario',[
                "imagem" => $movie->Poster
            ]);

            public function traduzSF($nome,$client,$opcao)
            {
                $translator = new GoogleTranslate();
                $movieTranslated = $translator->translate("pt","en",$nome); //traduz o filme do portugues para o ingles

                return $client->searchOneMovie(
                    urlencode($movieTranslated),
                    $opcao
                );
            }
    }

/*