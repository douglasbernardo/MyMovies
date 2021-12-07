<?php require_once __DIR__ . './inicioHtml.php' ?>


    <a href="/insercao">
        <button class="btn btn-warning mt-4 mb-3 m-3">
            Inserir um filme ou série
        </button>
    </a>
    <div class="carrosel-desenhos">
            <div class="owl-carousel owl-theme">
            <?php foreach($filmes as $filme):?>
                <div class="item"><img class="box-desenho w-75" src="assets/images/<?php echo $filme->imagem ?>" alt="<?php echo $filme->nome ?>"></div>
            <?php endforeach ?>
            </div>
    </div>
    <div class="carrosel-desenhos">
        <div class="owl-carousel owl-theme">
            <div class="item"><img class="box-desenho w-75" src="assets/images/round6.jpg" alt="Round6"></div>
            <div class="item"><img class="box-desenho w-75" src="assets/images/st.jpeg" alt="Stranger Things"></div>
            <div class="item"><img class="box-desenho w-75" src="assets/images/riverdale.jpg" alt="Os Flintstones"></div>
            <div class="item"><img class="box-desenho w-75" src="assets/images/la.jpg" alt="Johny O Bravo"></div>
            <div class="item"><img class="box-desenho w-75" src="assets/images/sexEducation.jpg" alt="Turma Do Pateta"></div>
            <div class="item"><img class="box-desenho w-75" src="assets/images/sabrina.jpg" alt="Meninas Super Poderosas"></div>
        </div>
    </div>
<?php require_once __DIR__ . './finalHtml.php' ?>