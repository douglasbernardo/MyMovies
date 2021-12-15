<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Series E Filmes</title>
        <link rel="stylesheet" type="text/css" href="assets/estilos/css.css">
        <link rel="stylesheet" type="text/css" href="assets/estilos/about.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link name="viewport" content="width=device-width">
    </head>
    <body style="background-color: black;">
        <nav class="navbar navbar-dark bg-dark">
            <a href="/home" class="navbar-brand"><h1 id="titleH1" class="display-4">MyMovies</h1></a>
            <?php if (isset($_SESSION['usuario_logado'])) :?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <?php echo "<strong>".(ucwords($_SESSION['usuario_nome']))."</strong>" ?>
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cog" style="font-size:20px;"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/logout">Sair</a></li>
                            <li><a class="dropdown-item" href="/deletar-conta">Excluir Conta</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <?php endif ?>
        </nav>
