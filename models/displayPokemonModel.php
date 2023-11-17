<?php
$db = new PDO('mysql:host=localhost;dbname=pokedex;charset=utf8', 'toms', 'root');

function getPokemonByName($db, $name)
{
    $stmt = $db->prepare("
        SELECT p.*, s.*
        FROM `pokemon` p
        LEFT JOIN `stats` s ON p.id = s.pokemon_id
        WHERE p.`name` = :name
    ");
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}