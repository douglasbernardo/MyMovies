<?php

use Gumlet\ImageResize;

require_once __DIR__ . './inicioHtml.php' ?>


    <a href="/insercao">
        <button class="btn btn-warning mt-4 mb-3 m-3">
            Inserir um filme ou série
        </button>
    </a>
    <div class="images-container">
        <?php foreach($filmes as $filme):?>
        <div class="filmes">
            <a href="#">
                <img src="assets/images/uploads/<?= $filme->imagem ?>" class="card-img-top" alt="<?= $filme->nome ?>">
            </a>
        </div>
        <?php endforeach ?>
    </div>

<?php require_once __DIR__ . './finalHtml.php' ?>