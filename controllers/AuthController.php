// In AuthController.php
// <?php
function login() {
    // Get the username and password from the POST data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database for the user
    // This would be done through your model in a real application
    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    // Check if the user exists and the password is correct
    if ($user && password_verify($password, $user['password'])) {
        // The user is authenticated, store their information in the session
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
        exit;
    } else {
        // The authentication failed
        echo 'Invalid username or password.';
    }
}
