<?php 

function index()
{
    $user = [
        'name' => 'John Doe',
        'email' => 'johndoe@email.com'
    ];

    require_once __DIR__.'/../models/PokedexModel.php';

    foreach($pokemons as $i => $pokemon) {
        echo '<pre>';
        print_r($pokemons[$i]);
        echo '</pre>';

       foreach($types as $j => $type) {
            if ($pokemon['type1'] == $type['id']) {
                $pokemons[$i]['type1'] = $type['type'];
                echo 'type1';
                echo $pokemons[$i]['type1'];
            }
            if ($pokemon['type2'] == $type['id']) {
                $pokemons[$i]['type2'] = $type['type'];
                echo 'type2';
                echo $pokemons[$i]['type2'];
            }
       }
       echo 'après :';
       echo '<pre>';
       print_r($pokemons[$i]);
       echo '</pre>';
    }

    require_once __DIR__.'/../views/index.php';

    return $user;
}

