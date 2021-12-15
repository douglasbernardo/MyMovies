<?php require_once __DIR__ . '/../inicioHtml.php' ?>

<?php foreach($filme as $filmes): ?>
       
    <div class="containerDetails">
        <img class="imagem" src="/assets/images/uploads/<?= $filmes->imagem ?>" class="figure-img img-fluid rounded" alt="...">
        <div>
            <ul>
                <h4>Nome do Filme: <?= $filmes->nome ?></h4>
                <h4>Minha Nota: <?= $filmes->nota;  ?>/10 <?php for($i=0;$i<$filmes->nota;$i++){echo "<i style='color:yellow' class='fas fa-star'></i>";} ?></h4>
                <h4>Minha Opinião: <?= $filmes->opiniao ?></h4>
            </ul>
        </div>
    </div>

<?php endforeach ?>
<?php require_once __DIR__ . '/../finalHtml.php' ?>