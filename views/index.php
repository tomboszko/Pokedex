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
                    <div><?= $pokemons[$key]['type1']?></div>
                    <div><?= $pokemons[$key]['type2']?></div>
                </div>
            </div>
        <?php } ?>
    </div>
    <a href="/Pokedex/index.php/pokemon?name=pickachu">Pikachu</a>
</main>

<?php
require_once __DIR__ . '/partials/footer.php';
?>