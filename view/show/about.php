<?php require_once __DIR__ . '/../inicioHtml.php' ?>

<?php foreach($filme as $filmes): ?>
       
    <div class="container">
        <div class="things">
            <h4>Nome do Filme:<?= $filmes->nome ?></h4>
        </div>
        <img src="/assets/images/uploads/<?= $filmes->imagem ?>" class="figure-img img-fluid rounded" alt="...">
    </div>

<?php endforeach ?>
<?php require_once __DIR__ . '/../finalHtml.php' ?>