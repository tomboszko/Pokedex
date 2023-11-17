<?php
include 'helpers/log.php';


try {
    $db = new PDO('mysql:host=localhost;dbname=pokédex;charset=utf8', $login, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}

function getPokemonByName($db, $name) {
    try {
        $stmt = $db->prepare("SELECT pokémon.*, stats.number, stats.attack, stats.defense, stats.spec_defense, stats.spec_attack, stats.speed, stats.hp, evo.nom AS evolution FROM pokémon LEFT JOIN stats ON pokémon.number = stats.number LEFT JOIN evolution ON pokémon.number = evolution.number LEFT JOIN pokémon AS evo ON evolution.number_evolve = evo.number WHERE pokémon.nom = :nom");
        $stmt->bindParam(':nom', $name, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        logError($e->getMessage());
        return false;
    }
}

