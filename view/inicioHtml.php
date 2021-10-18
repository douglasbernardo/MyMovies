<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Series E Filmes</title>
        <link rel="stylesheet" type="text/css" href="assets/estilos/css.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/estilos/owl/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="assets/estilos/owl/owl.theme.default.min.css">
        <link rel="stylesheet" type="text/css" href="assets/estilos/responsive.css">
    </head>
    <body style="background-color: black;">
        <nav class="navbar navbar-dark bg-dark">
            <a href="/home" class="navbar-brand"><h1 id="titleH1" class="display-4">MyMovies</h1></a>
            <?php if (isset($_SESSION['usuario_logado'])) :?>
            <h4>Bem vindo usuario: <?php 
                echo $_SESSION['usuario']
            ?></h4>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="/logout">
                        <i class="fas fa-cog text-info" style="font-size: 25px;"></i>
                    </a>
                </li>
            </ul>
            <?php endif ?>
        </nav>
