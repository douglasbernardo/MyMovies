<?php
// aqui ficara as rotas

use DouglasBernardo\MyMovies\Controller\{
    Formularios,
    Home,
};

return [
    
    '/home' => Home::class,
    '/login' => Formularios::class,
    '/cadastro' => Formularios::class
];
