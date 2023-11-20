<!-- login_form.php -->
<?php 
$title = "Connexion";
require __DIR__ . '/partials/header.php';
?>



    <h2>Formulaire de Connexion</h2>

    <?php
    // Display an error message if the error parameter is set
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<p style="color: red;">Invalid username or password.</p>';
    }
    ?>

    <form method="POST" action="/Pokedex/index.php/login">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <input type="submit" value="Login">
    </form>

    <h2>Inscription :</h2>
    <a href="/Pokedex/index.php/register">Register</a>

<?php
require_once __DIR__ . '/partials/footer.php';
?>

