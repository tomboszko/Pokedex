<?php


function show($name) {
    // Define $db.
    include 'helpers/log.php';
    $db = new PDO('mysql:host=localhost;dbname=pokédex', $login, $password);

    // Get the Pokemon by name and display it.
    $pokemon = getPokemonByName($db, $name);
    if (is_array($pokemon)) {
        echo htmlspecialchars($pokemon['nom']);
    } else {
        echo "Pokemon not found.";
    }
}

if (isset($_GET['nom'])) {
    $name = $_GET['nom'];
} else {
    // Handle the case where 'nom' is not set.
    // For example, you can set a default value for $name.
    $name = 'default';
}

include 'models/displayPokemonModel.php';
$pokemon = getPokemonByName($db, $name);

if (is_array($pokemon)) {
    // Access the elements of $pokemon.
    if (isset($pokemon['nom']) && $pokemon['nom'] !== null) {
        echo htmlspecialchars($pokemon['nom']);
    } else {
        // Handle the case where $pokemon['nom'] is null.
    }
} else {
    // Handle the case where $pokemon is not an array.
    // For example, you can display an error message.
    echo "Pokemon not found.";
}