<?php require_once __DIR__ . '/../inicioHtml.php' ?>

<div class="container mt-4">
    <form method="post" action="">
        <div class="form-group">
            <label for="nome" class="text-primary">Nome</label>
            <input type="text" class="form-control" name="nome" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
            <small id="emailHelp" class="form-text text-muted">Digite o seu nome completo.</small>
        </div>
        <div class="form-group">
            <label for="email" class="text-primary">Email </label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted">fique tranquilo não compartilharemos seu e-mail com ninguem.</small>
        </div>
        <div class="form-group">
            <label for="senha" class="text-primary">Password</label>
            <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
            <small id="emailHelp" class="form-text text-muted">Coloque uma senha segura.</small>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <p class="text-secondary">Já tem cadastro? Faça o <a href="/login">login</a></p>
    </form>
</div>

<?php require_once __DIR__ . '/../finalHtml.php' ?>