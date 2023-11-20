<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Check if the Pokémon data is available -->
<?php if (isset($pokemon) && $pokemon && isset($pokemon[0]['nom'])): ?>
    <!-- Display the Pokémon's name -->
    <h1><?= htmlspecialchars($pokemon[0]['nom']) ?></h1>

    <!-- Display the Pokémon's image -->
    <img src="../public/img/pokemon/<?= urlencode($pokemon[0]['nom']) ?>.png" alt="<?= htmlspecialchars($pokemon[0]['nom']) ?>">

    <!-- Display the Pokémon's number -->
    <p>Number: <?= isset($pokemon[0]['number']) ? htmlspecialchars($pokemon[0]['number']) : 'N/A' ?></p>

    <!-- Display the Pokémon's evolutions -->
    
    <p>Evolutions:</p>
    <ul>
    <!-- Loop through each evolution and display its details -->
    <?php foreach ($pokemon as $p): ?>
        <li>
            <!-- Check if the evolution data is available -->
            <?php if (isset($p['evolution'])): ?>
                <!-- Link to the evolution's details page -->
                <a href="/Pokedex/index.php/pokemon?name=<?= urlencode($p['evolution']) ?>"> <!--main issue-->
                    <!-- Display the evolution's name and image -->
                    <?= htmlspecialchars($p['evolution']) ?>
                    <img src="../public/img/pokemon/<?= urlencode($p['evolution']) ?>.png" wide="50" height="50" alt="<?= htmlspecialchars($p['evolution']) ?>">
                </a>
            <?php else: ?>
                <!-- Display a message if the Pokémon has no evolutions -->
                No evolution
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
    </ul>
   
    

    <!-- Display the Pokémon's stats -->
    <p>HP: <?= isset($pokemon[0]['hp']) ? htmlspecialchars($pokemon[0]['hp']) : 'N/A' ?></p>
    <p>Attack: <?= isset($pokemon[0]['attack']) ? htmlspecialchars($pokemon[0]['attack']) : 'N/A' ?></p>
    <p>Defense: <?= isset($pokemon[0]['defense']) ? htmlspecialchars($pokemon[0]['defense']) : 'N/A' ?></p>
    <p>Special Defense: <?= isset($pokemon[0]['spec_defense']) ? htmlspecialchars($pokemon[0]['spec_defense']) : 'N/A' ?></p>
    <p>Special Attack: <?= isset($pokemon[0]['spec_attack']) ? htmlspecialchars($pokemon[0]['spec_attack']) : 'N/A' ?></p>
    <p>Speed: <?= isset($pokemon[0]['speed']) ? htmlspecialchars($pokemon[0]['speed']) : 'N/A' ?></p>

    <!-- Link to go back to the list of Pokémon -->
    <a href="/">Back to list</a>
<?php else: ?>
    <!-- Display a message if the Pokémon data is not available -->
    <p>Pokemon data is not available.</p>
<?php endif; ?>

</body>
</html>

