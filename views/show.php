<h1><?php echo htmlspecialchars($pokemon['name']); ?></h1>

<!-- Display Pokémon stats -->
<p>HP: <?php echo $pokemon['hp']; ?></p>
<p>Attack: <?php echo $pokemon['attack']; ?></p>
<p>Defense: <?php echo $pokemon['defense']; ?></p>


<a href="/">Back to list</a>