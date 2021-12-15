<?php require_once __DIR__ . './inicioHtml.php' ?>


    <a href="/insercao">
        <button class="btn btn-outline-primary mt-4 mb-3 m-3">
            Inserir um filme ou série
        </button>
    </a>
    <div class="images-container">
        <?php foreach($filmes as $filme):?>
        <div class="filmes">
            <?php 
                echo $filme->imagem == "" ? 
                    "<a href='/show?id=$filme->id'><img class='card-img-top' src='assets/images/noImage.png' alt='$filme->nome'></a>" : 
                    "<a href='/show?id=$filme->id'><img class='card-img-top' src='assets/images/uploads/$filme->imagem' alt='$filme->nome'></a>";
            ?>
        </div>
        <?php endforeach ?>
    </div>

<?php require_once __DIR__ . './finalHtml.php' ?>