<?php
session_start();

$title = "Home";
require_once __DIR__ . '/partials/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="dist/style.css" type="text/css">
</head>
</head>
<body>
    
</body>
</html>
<main>
    <h1>Pokedex - Homepage</h1>
    <p>Hello <strong><?php echo $_SESSION['user']['user']  ?></p></strong>
    <div>
        <?php foreach ($pokemons as $key => $pokemon) { ?>
            <div>
                <div>
                    <a href="/Pokedex/index.php/pokemon?name=<?= $pokemon['nom'] ?>">
                        <img src="<?= "public/img/pokemon/{$pokemon['nom']}.png"?>" alt="image of the pokemon">
                    </a>
                </div>
                <div><?= $pokemon['number'] ?></div>
                <div>
                    <a href="/Pokedex/index.php/pokemon?name=<?= $pokemon['nom'] ?>">
                        <?= $pokemon['nom']?>
                    </a>
                </div>
                <div>
                    <div><img src="public/img/types/<?= $pokemons[$key]['type1']?>.png" alt="type en couleur"></div>
                    <div><?php if ($pokemons[$key]['type2'] != 'NULL') : ?><img src="public/img/types/<?= $pokemons[$key]['type2']?>.png" alt="type en couleur"><?php else  : echo ''; endif ?></div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>

<?php
require_once __DIR__ . '/partials/footer.php';
?>
