<?php 
$db = new PDO('mysql:host=localhost;dbname=pokédex;charset=utf8', 'toms', 'root');

function getPokemonByName($db, $name)
{
    $stmt = $db->prepare("
        SELECT p.*, s.*
        FROM `pokemon` p
        LEFT JOIN `stats` s ON p.id = s.pokemon_id
        WHERE p.`name` = :name
    ");
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

$name = $_GET['name'];
$pokemon = getPokemonByName($db, $name);
?>

<h1><?php echo htmlspecialchars($pokemon['name']); ?></h1>

<!-- Display Pokémon stats -->
<p>HP: <?php echo $pokemon['hp']; ?></p>
<p>Attack: <?php echo $pokemon['attack']; ?></p>
<p>Defense: <?php echo $pokemon['defense']; ?></p>
<!-- Add more stats as needed... -->

<a href="/">Back to list</a>
