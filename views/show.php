<?php if (isset($pokemon) && $pokemon): ?>
    <h1><?= htmlspecialchars($pokemon['nom']) ?></h1>

    <!-- Display Pokémon image -->
    <img src="../public/img/pokemon/<?= urlencode($pokemon['nom']) ?>.png" wide="200" height="200" alt="<?= htmlspecialchars($pokemon['nom']) ?>">
    <!-- Display Pokémon stats -->
    <p>Number: <?= isset($pokemon['number']) ? htmlspecialchars($pokemon['number']) : 'N/A' ?></p>
    <p>HP: <?= isset($pokemon['hp']) ? htmlspecialchars($pokemon['hp']) : 'N/A' ?></p>
    <p>Attack: <?= isset($pokemon['attack']) ? htmlspecialchars($pokemon['attack']) : 'N/A' ?></p>
    <p>Defense: <?= isset($pokemon['defense']) ? htmlspecialchars($pokemon['defense']) : 'N/A' ?></p>
    <p>Special Defense: <?= isset($pokemon['spec_defense']) ? htmlspecialchars($pokemon['spec_defense']) : 'N/A' ?></p>
    <p>Special Attack: <?= isset($pokemon['spec_attack']) ? htmlspecialchars($pokemon['spec_attack']) : 'N/A' ?></p>
    <p>Speed: <?= isset($pokemon['speed']) ? htmlspecialchars($pokemon['speed']) : 'N/A' ?></p>

    <a href="/">Back to list</a>
<?php else: ?>
    <p>Pokemon data is not available.</p>
<?php endif; ?>