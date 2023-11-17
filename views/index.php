<?php
$title = "Home";
require_once __DIR__ . '/partials/header.php';
?>

<main>
    <h1>Pokedex - Homepage</h1>
    <p>Hello <strong><?php echo $user['name'] ?></p></strong>
    <div>
        <?php foreach ($pokemons as $key => $pokemon) { ?>
            <div>
                <div><img src="<?= "public/img/pokemon/{$pokemon['nom']}.png"?>" alt="image of the pokemon"></div>
                <div><?= $pokemon['number'] ?></div>
                <div><?= $pokemon['nom']?></div>
                <div>
                    <div><img src="public/img/types/<?= $pokemons[$key]['type1']?>.png" alt="type en couleur"></div>
                    <div><?php if ($pokemons[$key]['type2'] != 'NULL') : ?><img src="public/img/types/<?= $pokemons[$key]['type2']?>.png" alt="type en couleur"><?php else  : echo ''; endif ?></div>
                </div>
            </div>
        <?php } ?>
    </div>
    <a href="/Pokedex/index.php/pokemon?name=pickachu">Pikachu</a>
</main>

<?php
require_once __DIR__ . '/partials/footer.php';
?>