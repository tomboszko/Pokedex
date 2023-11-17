<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$query = 'SELECT * FROM pokémon';
$pokemons = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

$query = 'SELECT * FROM type';
$types = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);