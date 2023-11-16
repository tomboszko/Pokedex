<?php 

function index()
{
    $user = [
        'name' => 'John Doe',
        'email' => 'johndoe@email.com'
    ];
    require_once __DIR__.'/../models/PokedexModel.php';
    require_once __DIR__.'/../views/index.php';

    return $user;
}

