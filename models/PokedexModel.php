<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

try
{
	//Connecting to MySQL
	$pdo = new PDO(
		'mysql:host=localhost;dbname=pokédex;charset=utf8',
		'phpmyadmin', 
		'mypassword');
    $query = 'SELECT * FROM pokémon';
    $pokemons = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    $query = 'SELECT * FROM type';
    $types = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    
    // Display all table - used to debug
    echo '<pre>';
    print_r($types);
    echo '</pre>';

    echo '<pre>';
    print_r($pokemons);
    echo '</pre>';
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}