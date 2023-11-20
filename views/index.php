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
<main class="w-full">
    <h1>Pokedex - Homepage</h1>
    <p>Hello <strong><?php echo isset($_SESSION['user']['user']) ? $_SESSION['user']['user'] : 'Guest';  ?></strong></p>
    <div>
        <?php foreach ($pokemons as $key => $pokemon) { ?>
            <div class="flex gap-2 flex-col items-center border-2 w-1/6 p-6">
                <div>
                    <a href="show.php?name=<?= urlencode($pokemon['nom']) ?>">
                        <img src="<?= "public/img/pokemon/{$pokemon['nom']}.png"?>" width="100" height="100" alt="image of the pokemon">
                    </a>
                </div>
                <div><?= $pokemon['number'] ?></div>
                <div class="font-bold">
                    <a href="show.php?name=<?= urlencode($pokemon['nom']) ?>">
                        <?= $pokemon['nom']?>
                    </a>
                </div>
                <div class="flex gap-4">
                    <div><img class="w-24" src="public/img/types/<?= $pokemons[$key]['type1']?>.png" alt="type en couleur"></div>
                    <div <?php if ($pokemons[$key]['type2'] == 'NULL') { echo 'class="hidden"';}?> ><img class="w-24" src="public/img/types/<?php echo $pokemons[$key]['type2']; ?>.png" alt="type en couleur"></div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>
<?php
require_once __DIR__ . '/partials/footer.php';
?>
