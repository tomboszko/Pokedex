<?php
include 'models/displayPokemonModel.php';

// Initialize or include the database connection here


function show($name, $db) {
    $pokemon = getPokemonByName($db, $name);
    if ($pokemon) {
        include 'views/show.php'; // Display the details in a separate view file
    } else {
        echo "Pokemon not found.";
    }
}

$name = isset($_GET['nom']) ? filter_input(INPUT_GET, 'nom', FILTER_SANITIZE_STRING) : 'default';

show($name, $db);
?>
