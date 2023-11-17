<?php

function getPokemonByName($db, $name)
{
    $pdo = new PDO(
        'mysql:host=localhost;dbname=pokédex;charset=utf8',
        'toms', 
        'root');
    $query = 'SELECT * FROM stats';
    $pokemons = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    $stmt = $db->prepare("
        SELECT p.*, s.*
        FROM `pokémon` p
        LEFT JOIN `stats` s ON p.id = s.pokemon_id
        WHERE p.`nom` = :name
    ");
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

?>