<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

try
{
    // Connecting to MySQL
    $pdo = new PDO(
        'mysql:host=localhost;dbname=pokédex;charset=utf8',
        'toms', 
        'root');
    $query = 'SELECT * FROM pokémon';
    $pokemons = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    
    // Display the entire table - used for debugging
    echo '<pre>';
    print_r($pokemons);
    echo '</pre>';

    foreach ($pokemons as $pokemon) {
        echo '<a href="/pokemon?name=' . urlencode($pokemon['nom']) . '">' . htmlspecialchars($pokemon['nom']) . '</a><br>';
    }
}
catch(Exception $e)
{
    // In case of error, display a message and stop everything
    die('Error : '.$e->getMessage());
}