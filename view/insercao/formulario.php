<?php require_once __DIR__ . '/../inicioHtml.php' ?>

    <div class="container mt-5">
        <form>
            <div class="form-group">
                <input type="email" class="form-control form-control-lg" id="email" placeholder="Ex: The Flash ou Mib">
            </div>
            <div class="form-group">
                <select class="form-control form-control-lg" id="getOptions">
                    <option selected>Escolher...</option>
                    <option value="filme">Filme</option>
                    <option value="serie">Série</option>
                </select>
            </div>
            <p style="color: red;">Escolha uma imagem se a nossa selecionada não aparecer aqui. Recomendamos pegar uma imagem do <a href="https://www.themoviedb.org/">TMDB</a></p>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control form-control-lg" id="minhaImagem" placeholder="Imagem procurada">
                </div>
                <div class="col">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>

            <div class="SerieOption" style="display:none">
                <div class="form-group mt-3">
                    <input type="number" class="form-control form-control-lg" id="qtdTemporadas" placeholder="Quantidade de Temporadas">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control form-control-lg" id="qtdEpisodios" placeholder="Quantidade de Episodios">
                </div>
            </div>
            <div class="form-group mt-3">
                    <input type="float" class="form-control form-control-lg" id="minhaNota" placeholder="Sua nota até 10">
                </div>
            <div class="form-group mt-3">
                <textarea class="form-control form-control-lg" id="opiniao" rows="3" placeholder="Sua Opinião sobre"></textarea>
            </div>

            <button type="button" class="btn btn-primary btn-lg btn-block">Cadastrar</button>
        </form>
    </div>

      
<?php require_once __DIR__ . '/../finalHtml.php' ?>