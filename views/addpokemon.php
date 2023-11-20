<!-- registration_form.php -->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__ . '/partials/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body class="bg-gray-100 p-8">

    <h2 class="text-2xl font-bold mb-4">Add Pokémon :</h2>

    <form class="max-w-md bg-white p-6 rounded-md shadow-md" method="POST" action="/Pokedex/index.php/addpokemon">
        <h3 class="text-lg font-semibold mb-2">Pokémon Information:</h3>
        <label for="number" class="block mb-2">Number of pokémon :</label>
        <input type="text" name="number" id="number" class="w-full border p-2 mb-2" required>
        <br>
        <label for="nom" class="block mb-2">Nom :</label>
        <input type="text" name="nom" id="nom" class="w-full border p-2 mb-2" required>
        <br>
        <label for="type1" class="block mb-2">Type 1 :</label>
        <select id="type1" name="type1" class="w-full border p-2 mb-2">
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
        <label for="type2" class="block mb-2">Type 2 :</label>
        <select id="type2" name="type2" class="w-full border p-2 mb-2">
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
        <h3 class="text-lg font-semibold mb-2">Stats:</h3>

        <label for="hp" class="block mb-2">HP:</label>
        <input type="text" name="hp" id="hp" class="w-full border p-2 mb-2" required>

        <label for="attack" class="block mb-2">Attack:</label>
        <input type="text" name="attack" id="attack" class="w-full border p-2 mb-2" required>

        <label for="defense" class="block mb-2">Defense:</label>
        <input type="text" name="defense" id="defense" class="w-full border p-2 mb-2" required>

        <label for="spec_attack" class="block mb-2">Sp. Attack:</label>
        <input type="text" name="spec_attack" id="spec_attack" class="w-full border p-2 mb-2" required>

        <label for="spec_defense" class="block mb-2">Sp. Defense:</label>
        <input type="text" name="spec_defense" id="spec_defense" class="w-full border p-2 mb-2" required>

        <label for="speed" class="block mb-2">Speed:</label>
        <input type="text" name="speed" id="speed" class="w-full border p-2 mb-2" required>
        <br>
        <h3 class="text-lg font-semibold mb-2">Evolutions:</h3>
        <label for="number_evolve" class="block mb-2">Number to Evolve:</label>
        <input type="text" name="number_evolve" id="number_evolve" class="w-full border p-2 mb-4">
        <br>
        <input type="submit" value="Register" class="bg-blue-500 text-white py-2 px-4 rounded-md cursor-pointer">
    </form>
</body>
</html>