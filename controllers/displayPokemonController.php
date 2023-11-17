<?php
include 'displayPokemonModel.php';

$name = $_GET['name'];
$pokemon = getPokemonByName($db, $name);

include 'displayPokemon.php';