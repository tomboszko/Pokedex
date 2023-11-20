<!-- registration_form.php -->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>

    <h2>Add Pokémon :</h2>

    <form method="POST" action="/Pokedex/index.php/addpokemon">
        <h3>Pokémon Information:</h3>
        <label for="number">Number of pokémon :</label>
        <input type="text" name="number" id="number" required>
        <br>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>
        <br>
        <label for="type1">Type 1 :</label>
        <select id="type1" name="type1">
            <option value="1">Plante</option>
            <option value="2">Feu</option>
            <option value="3">Eau</option>
            <option value="4">Insecte</option>
            <option value="5">Vol</option>
            <option value="6">Poison</option>
            <option value="7">Sol</option>
            <option value="8">Fée</option>
            <option value="9">Électrique</option>
            <option value="10">Roche</option>
            <option value="11">Combat</option>
            <option value="12">Psy</option>
            <option value="13">Spectre</option>
            <option value="14">Ténèbres</option>
            <option value="15">Dragon</option>
            <option value="16">Acier</option>
            <option value="17">Glace</option>
            <option value="18">Normal</option>
        </select>
        <label for="type2">Type 2 :</label>
        <select id="type2" name="type2">
            <option value="0">NULL</option>
            <option value="1">Plante</option>
            <option value="2">Feu</option>
            <option value="3">Eau</option>
            <option value="4">Insecte</option>
            <option value="5">Vol</option>
            <option value="6">Poison</option>
            <option value="7">Sol</option>
            <option value="8">Fée</option>
            <option value="9">Électrique</option>
            <option value="10">Roche</option>
            <option value="11">Combat</option>
            <option value="12">Psy</option>
            <option value="13">Spectre</option>
            <option value="14">Ténèbres</option>
            <option value="15">Dragon</option>
            <option value="16">Acier</option>
            <option value="17">Glace</option>
            <option value="18">Normal</option>
        </select>
        <h3>Stats:</h3>
        <label for="hp">HP:</label>
        <input type="text" name="hp" id="hp" required>
        <br>
        <label for="attack">Attack:</label>
        <input type="text" name="attack" id="attack" required>
        <br>
        <label for="defense">Defense:</label>
        <input type="text" name="defense" id="defense" required>
        <br>
        <label for="spec_attack">Sp. Attack:</label>
        <input type="text" name="spec_attack" id="spec_attack" required>
        <br>
        <label for="spec_defense">Sp. Defense:</label>
        <input type="text" name="spec_defense" id="spec_defense" required>
        <br>
        <label for="speed">Speed:</label>
        <input type="text" name="speed" id="speed" required>
        <br>
        <h3>Evolutions:</h3>
        <label for="number_evolve">Number to Evolve:</label>
        <input type="text" name="number_evolve" id="number_evolve">
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>