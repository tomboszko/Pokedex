<?php

require_once 'helpers/log.php';
$db = new PDO('mysql:host=localhost;dbname=pokédex;charset=utf8', $login, $password);
function getPokemonByName($db, $name) {
    $stmt = $db->prepare('SELECT * FROM pokémon WHERE nom = :nom');
    $stmt->execute(['nom' => $name]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}