<?php require_once __DIR__ . '/../inicioHtml.php' ?>

<div class="container mt-4">
    <form>
        <div class="form-group">
            <label for="email" class="text-primary">Email </label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="senha" class="text-primary">Password</label>
            <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary">Logar</button>
        <p class="text-secondary">Ainda não tem cadastro? <a href="/cadastro">Cadastre-se</a></p>
    </form>
</div>

<?php require_once __DIR__ . '/../finalHtml.php' ?>