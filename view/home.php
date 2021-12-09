<?php require_once __DIR__ . './inicioHtml.php' ?>


    <a href="/insercao">
        <button class="btn btn-warning mt-4 mb-3 m-3">
            Inserir um filme ou série
        </button>
    </a>
    <div class="card-images">
        <?php foreach($filmes as $filme):?>
        <div class="card" style="border-radius: 15%; border:black;">
            <img src="assets/images/uploads/<?= $filme->imagem ?>" style="border-radius: 15%;" class="card-img-top" alt="...">
            <!-- <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div> -->
        </div>
        <?php endforeach ?>
    </div>

<?php require_once __DIR__ . './finalHtml.php' ?>