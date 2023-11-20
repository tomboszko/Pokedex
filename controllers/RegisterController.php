<?php
// In RegisterController.php

function register($pdo) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the username and password from the POST data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Insert the user into the database with the password in plain text
        $stmt = $pdo->prepare('INSERT INTO users (user, password) VALUES (?, ?)');
        $success = $stmt->execute([$username, $password]);

        if ($success) {
            // Redirect to the login page after successful registration
            header('Location: /Pokedex/index.php/login');
            exit;
        } else {
            // Display an error message
            echo 'Error inserting user into the database.';
        }
    }

    // Include the registration form if the request method is not POST
    require 'views/registration_form.php';
}

