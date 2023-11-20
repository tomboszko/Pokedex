<?php
// In newpoke.php

function addpokemon($pdo) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the info from Pokémon, Stats, and Evolutions from the POST data
        $number = (int)$_POST['number'];
        $name = $_POST['nom'];
        $type1 = $_POST['type1'];
        $type2 = ($_POST['type2'] !== '0') ? $_POST['type2'] : null;

        // Stats
        $hp = (int)$_POST['hp'];
        $attack = (int)$_POST['attack'];
        $defense = (int)$_POST['defense'];
        $spec_defense = (int)$_POST['spec_defense'];
        $spec_attack = (int)$_POST['spec_attack'];
        $speed = (int)$_POST['speed'];

        // Evolutions
        $number_evolve = (isset($_POST['number_evolve'])) ? (int)$_POST['number_evolve'] : null;

        // Insert Pokémon into the database
        $stmt_pokemon = $pdo->prepare('INSERT INTO pokémon (number, nom, type1, type2) VALUES (?, ?, ?, ?)');
        $success_pokemon = $stmt_pokemon->execute([$number, $name, $type1, $type2]);

        // Get the ID of the inserted Pokémon for referencing in other tables
        $pokemon_id = $pdo->lastInsertId();

        // Insert Stats into the database
        $stmt_stats = $pdo->prepare('INSERT INTO stats (number, hp, attack, defense, spec_defense, spec_attack, speed) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $success_stats = $stmt_stats->execute([$pokemon_id, $hp, $attack, $defense, $spec_defense, $spec_attack, $speed]);

        // Insert Evolutions into the database
        $stmt_evolution = $pdo->prepare('INSERT INTO evolution (number, number_evolve) VALUES (?, ?)');
        $success_evolution = $stmt_evolution->execute([$number, $number_evolve]);

        if ($success_pokemon && $success_stats && $success_evolution) {
            // Redirect to a success page or wherever needed
            header('Location: /Pokedex/');
            exit;
        } else {
            // Display an error message
            echo 'Error inserting Pokémon, Stats, or Evolutions into the database.';
        }
    }

    // Include the addpokemon.php if the request method is not POST
    require 'views/addpokemon.php';
}
