<?php require_once __DIR__ . '/../inicioHtml.php' ?>

    <?php if (isset($_SESSION['mensagem'])) : ?>
            <div class="alert alert-<?= $_SESSION['tipo']; ?> text-center mt-4 w-auto">
                <?= $_SESSION['mensagem']; ?>
            </div>
    <?php 
        unset($_SESSION['mensagem']);
        unset($_SESSION['tipo']);
        endif;
    ?>

    <div class="container mt-5">
        <form action="/inserir" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="nome" class="form-control form-control-lg" autocomplete="off" id="nome" placeholder="Ex: Velozes e Furiosos">
            </div>
            <div class="form-group">
                <select class="form-control form-control-lg" name="options" id="getOptions">
                    <option selected>Escolher...</option>
                    <option value="movie">Filme</option>
                    <option value="series">Série</option>
                </select>
            </div>
            <p style="color: red;">Indicamos escolher uma imagem do <a href="https://www.themoviedb.org/">TMDB</a> <small>*Lembrando que a imagem é opcional</small></p>
            <div class="form-row">
                <div class="col">
                    <input type="file" name="arquivo" class="form-control-file" id="imagem">
                </div>
            </div>

            <div class="SerieOption" style="display:none">
                <div class="form-group mt-3">
                    <input type="number" class="form-control form-control-lg" name="qtdTemporadas" id="qtdTemporadas" placeholder="Quantidade de Temporadas">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control form-control-lg" name="qtdEpisodios" id="qtdEpisodios" placeholder="Quantidade de Episodios por Temporadas">
                </div>
            </div>
            <div class="form-group mt-3">
                    <input type="number" step="0.1" max="10" class="form-control form-control-lg" name="minhaNota" id="minhaNota" placeholder="Sua nota até 10">
                </div>
            <div class="form-group mt-3">
                <textarea class="form-control form-control-lg" name="opiniao" id="opiniao" rows="3" placeholder="Sua Opinião sobre"></textarea>
            </div>

            <button type="submit" id="CadastrarButton" class="btn btn-primary btn-lg btn-block">Cadastrar</button>
        </form>
    </div>

      
<?php require_once __DIR__ . '/../finalHtml.php' ?>