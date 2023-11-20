<?php
// In AuthController.php
session_start(); // Make sure to start the session

// Function to handle user login
function login($pdo) {
    // Get the username and password from the POST data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database for the user
    $stmt = $pdo->prepare('SELECT * FROM users WHERE user = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    // Check if the user exists and password is correct
    if ($user && $password == $user['password']) {
        // The user is authenticated, store their information in the session
        $_SESSION['user'] = $user;
        header('Location:/Pokedex/'); // Redirect to the root path after successful login
        exit;
    } else {
        // The authentication failed
        header('Location:/Pokedex/index.php/login?error=1'); // Redirect with an error parameter
        exit;
    }
}
?>


