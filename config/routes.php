<?php
// aqui ficara as rotas

use DouglasBernardo\MyMovies\Controller\{
    Formularios,
    Home,
    Inserir,
    Logout,
    realizaCadastro,
    realizaLogin,
};

return [
    
    '/home' => Home::class,
    '/login' => Formularios::class,
    '/cadastro' => Formularios::class,
    '/realizaCadastro' => realizaCadastro::class,
    '/realizaLogin' => realizaLogin::class,
    '/logout' => Logout::class,
    '/inserir' => Inserir::class
];
