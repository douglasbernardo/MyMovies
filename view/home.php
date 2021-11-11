<?php require_once __DIR__ . './inicioHtml.php' ?>

        <div id="ContainerFilmeSeries" class="container-fluid bg-dark">
            <div class="d-flex justify-content-end">
                <a href="#" id="blockForm" class=" d-flex justify-content-end mt-2">
                    <i class="fas fa-times-circle" style="color:beige;font-size: 20px;"></i>
                </a>
            </div>
            <form class="mb-2">
                <div class="form-row mt-3">
                    <input type="text" class="form-control-sm w-50" id="" placeholder="Ex Round 6">
                </div>
                <div class="form-row mt-3">
                    <input type="file" class="form-control-sm w-50" id="" placeholder="Ex Round 6">
                </div>
                <div class="form-row mt-3">
                    <textarea class="form-control-sm mb-3 w-50" id="" rows="3" placeholder="Sua opinião"></textarea>
                </div>
                <div class="form-row">
                    <input type="text" class="form-control-sm w-50" id="" placeholder="Quantos episodios">
                </div>
                <div class="form-row mt-3">
                    <input type="text" class="form-control-sm w-50" id="" placeholder="Quantas Temporadas">
                </div>
                <button type="submit" class="btn btn-outline-light mb-3 mt-3">
                    Adicionar
                </button>   
            </form>
        </div>
        <div class="carrosel-desenhos">
            <div class="owl-carousel owl-theme">
                <div class="item"><img class="box-desenho w-75" src="assets/images/arrow.jpg" alt="Desenho Bob Esponja"></div>
                <div class="item"><img class="box-desenho w-75" src="assets/images/theflash.jpg" alt="Desenho O Mundo de Gumball"></div>
                <div class="item"><img class="box-desenho w-75" src="assets/images/b99.jpg" alt="Os Jovens Titans em Ação"></div>
                <div class="item"><img class="box-desenho w-75" src="assets/images/pb.jpg" alt="Phineas E Ferb"></div>
                <div class="item"><img class="box-desenho w-75" src="assets/images/elite.jpeg" alt="Phineas E Ferb"></div>
                <div class="item"><img class="box-desenho w-75" src="assets/images/sense8.jpg" alt="Phineas E Ferb"></div>
                <div class="item"><img class="box-desenho w-75" src="assets/images/gotham.jpg" alt="Phineas E Ferb"></div>
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