<?php require_once __DIR__ . '/../inicioHtml.php' ?>

<?php foreach($filme as $filmes): ?>
       
    <div class="containerDetails">
        <img class="imagem" src="/assets/images/uploads/<?= $filmes->imagem ?>" class="figure-img img-fluid rounded" alt="...">
        <div>
            <ul>
                <h4>Nome do Filme: <?= $filmes->nome ?></h4>
                <h4>Minha Nota: <?= $filmes->nota;  ?>/10 <?php for($i=0;$i<$filmes->nota;$i++){echo "<i id='stars' class='fas fa-star'></i>";} ?></h4>
                <h4>Minha Opinião: <?= $filmes->opiniao ?></h4>
                <div class="buttons">
                    <p>
                        <a class="btn btn-outline-primary" href="" role="button" aria-expanded="false">
                            Editar
                        </a>
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Excluir 
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <p>certeza que deseja deletar? <?= $filmes->nome ?></p>
                            <form method="post">
                                <button class="btn btn-sm btn-outline-primary" onclick="deletar(<?= $filmes->id ?>)" type="button">Sim</button>
                                <a class="btn btn-sm btn-outline-primary" href="/home" >Não</a>
                            </form>
                        </div>
                    </div>
                </div>
            </ul>
            
        </div>
    </div>
    

<?php endforeach ?>
<?php require_once __DIR__ . '/../finalHtml.php' ?>