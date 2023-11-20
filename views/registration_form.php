<!-- registration_form.php -->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
$title = "Connexion";
require __DIR__ . '/partials/header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pokémon</title>
</head>
<body>

    <h2 class="text-4xl text-center m-10">Add Pokémon</h2>

<form class="flex flex-col items-center gap-4" method="POST" action="/Pokedex/index.php/register">
    <label for="username">Username:</label>
    <input class="bg-slate-300 px-2 py-1" type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input class="bg-slate-300 px-2 py-1" type="password" id="password" name="password" required>

    <input class="bg-slate-300 px-2 py-1" type="submit" value="Register">
</form>

<?php
require_once __DIR__ . '/partials/footer.php';
?>