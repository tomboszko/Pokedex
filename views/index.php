<?php
// Set the title of the page
$title = "Home";

// Include the header file
require_once __DIR__ . '/partials/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <!-- Link to the CSS stylesheet -->
    <link rel="stylesheet" href="dist/style.css" type="text/css">
</head>
<body>
<main>
    <h1>Pokedex - Homepage</h1>
    <!-- Display a welcome message with the user's name -->
    <p>Hello <strong><?php echo $user['name'] ?></p></strong>
    <div>
        <!-- Loop through each Pokémon and display its details -->
        <?php foreach ($pokemons as $key => $pokemon) { ?>
            <div>
                <div>
                    <!-- Link to the Pokémon's details page -->
                    <a href="index.php/pokemon?name=<?= $pokemon['nom'] ?>">
                        <!-- Display the Pokémon's image -->
                        <img src="<?= "public/img/pokemon/{$pokemon['nom']}.png"?>" alt="image of the pokemon">
                    </a>
                </div>
                <!-- Display the Pokémon's number -->
                <div><?= $pokemon['number'] ?></div>
                <div>
                    <!-- Link to the Pokémon's details page -->
                    <a href="Pokedex/index.php/pokemon?name=<?= $pokemon['nom'] ?>">
                        <!-- Display the Pokémon's name -->
                        <?= $pokemon['nom']?>
                    </a>
                </div>
                <div>
                    <!-- Display the Pokémon's type -->
                    <div><img src="public/img/types/<?= $pokemons[$key]['type1']?>.png" alt="type en couleur"></div>
                    <!-- If the Pokémon has a second type, display it -->
                    <div><?php if ($pokemons[$key]['type2'] != 'NULL') : ?><img src="public/img/types/<?= $pokemons[$key]['type2']?>.png" alt="type en couleur"><?php else  : echo ''; endif ?></div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>

<!-- Include the footer file -->
<?php
require_once __DIR__ . '/partials/footer.php';
?>