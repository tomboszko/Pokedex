<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if (isset($pokemon) && $pokemon && isset($pokemon[0]['nom'])): ?>
    <h1><?= htmlspecialchars($pokemon[0]['nom']) ?></h1>

    <!-- Display Pokémon image -->
    <img src="../public/img/pokemon/<?= urlencode($pokemon[0]['nom']) ?>.png" alt="<?= htmlspecialchars($pokemon[0]['nom']) ?>">

    <!-- Display Pokémon stats -->
    <p>Number: <?= isset($pokemon[0]['number']) ? htmlspecialchars($pokemon[0]['number']) : 'N/A' ?></p>
    <!-- Display evolution -->
    <p>Evolutions:</p>
    <ul>
    <?php foreach ($pokemon as $p): ?>
        <li>
            <?php if (isset($p['evolution'])): ?>
                <a href="/show.php?name=<?= urlencode($p['evolution']) ?>">
                    <?= htmlspecialchars($p['evolution']) ?>
                    <img src="../public/img/pokemon/<?= urlencode($p['evolution']) ?>.png" wide="50" height="50" alt="<?= htmlspecialchars($p['evolution']) ?>">
                </a>
            <?php else: ?>
                No evolution
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
    </ul>
    <!-- Display STATS -->
    <p>HP: <?= isset($pokemon[0]['hp']) ? htmlspecialchars($pokemon[0]['hp']) : 'N/A' ?></p>
    <p>Attack: <?= isset($pokemon[0]['attack']) ? htmlspecialchars($pokemon[0]['attack']) : 'N/A' ?></p>
    <p>Defense: <?= isset($pokemon[0]['defense']) ? htmlspecialchars($pokemon[0]['defense']) : 'N/A' ?></p>
    <p>Special Defense: <?= isset($pokemon[0]['spec_defense']) ? htmlspecialchars($pokemon[0]['spec_defense']) : 'N/A' ?></p>
    <p>Special Attack: <?= isset($pokemon[0]['spec_attack']) ? htmlspecialchars($pokemon[0]['spec_attack']) : 'N/A' ?></p>
    <p>Speed: <?= isset($pokemon[0]['speed']) ? htmlspecialchars($pokemon[0]['speed']) : 'N/A' ?></p>

    <a href="/">Back to list</a>
<?php else: ?>
    <p>Pokemon data is not available.</p>
<?php endif; ?>

</body>
</html>

