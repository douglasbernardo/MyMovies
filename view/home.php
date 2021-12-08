<?php require_once __DIR__ . './inicioHtml.php' ?>


    <a href="/insercao">
        <button class="btn btn-warning mt-4 mb-3 m-3">
            Inserir um filme ou série
        </button>
    </a>
    <?php foreach($filmes as $filme):?>
    <div class="card" style="width: 18rem;">
            <img src="assets/images/uploads/<?= $filme->imagem ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    <?php endforeach ?>
    <!-- <div class="carrosel-desenhos">
        <div class="owl-carousel owl-theme">
            <?php foreach($filmes as $filme):?>
                <div class="item">
                    <img class="box-desenho w-75" src="assets/images/uploads/<?= $filme->imagem ?>" alt="<?php echo $filme->nome ?>">
                </div>
            <?php endforeach ?>
        </div>
    </div> -->

<?php require_once __DIR__ . './finalHtml.php' ?>