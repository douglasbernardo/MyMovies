<?php
// aqui ficara as rotas

use DouglasBernardo\MyMovies\Controller\{
    DeleteAccount,
    DeleteMovie,
    Formularios,
    Home,
    Insercao,
    Inserir,
    Logout,
    realizaCadastro,
    realizaLogin,
    Show,
};

return [
    
    '/home' => Home::class,
    '/login' => Formularios::class,
    '/cadastro' => Formularios::class,
    '/realizaCadastro' => realizaCadastro::class,
    '/realizaLogin' => realizaLogin::class,
    '/logout' => Logout::class,
    '/inserir' => Inserir::class,
    '/insercao' => Formularios::class,
    '/deletar-conta' => DeleteAccount::class,
    '/show' => Show::class,
    '/excluir' => DeleteMovie::class
];
