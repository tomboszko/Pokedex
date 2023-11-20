<!-- login_form.php -->
<?php 
$title = "Connexion";
require __DIR__ . '/partials/header.php';
?>



    <h2 class="font-bold flex flex-col items-center mt-2 mb-2">Formulaire de Connexion</h2>

    <?php
    // Display an error message if the error parameter is set
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<p style="color: red;">Invalid username or password.</p>';
    }
    ?>

    <form class="leading-10 flex flex-col items-center" method="POST" action="/Pokedex/index.php/login">
        <label class=" mb-2 font-bold" for="username">Username:</label>
        <input class="border-2 mb-3" type="text" id="username" name="username">

        <label class=" mb-2 font-bold" for="password">Password:</label>
        <input class="border-2 mb-3" type="password" id="password" name="password">

        <input class="leading-6 text-black font-bold " type="submit" value="Login">
    </form>

    <h2>Inscription :</h2>
    <a href="/Pokedex/index.php/register">Register</a>

<?php
require_once __DIR__ . '/partials/footer.php';
?>

