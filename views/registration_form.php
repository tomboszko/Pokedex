<!-- registration_form.php -->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
$title = "Connexion";
require __DIR__ . '/partials/header.php';

?>

<h2>User Registration</h2>

<form method="POST" action="/Pokedex/index.php/register">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Register">
</form>

<?php
require_once __DIR__ . '/partials/footer.php';
?>