<?php 

function index($pdo)
{
    $user = [
        'name' => 'John Doe',
        'email' => 'johndoe@email.com'
    ];
    require_once __DIR__.'/../models/PokedexModel.php';

    foreach($pokemons as $i => $pokemon) {
        // echo '<pre>';
        // print_r($pokemons[$i]);
        // echo '</pre>';

        foreach($types as $j => $type) {
                if ($pokemon['type1'] == $type['id']) {
                    $pokemons[$i]['type1'] = $type['type'];
                }
                if ($pokemon['type2'] == $type['id']) {
                    $pokemons[$i]['type2'] = $type['type'];
                }
        }
        // echo 'après :';
        // echo '<pre>';
        // print_r($pokemons[$i]);
        // echo '</pre>';
    }

    require_once __DIR__.'/../views/index.php';

    return $user;
}

