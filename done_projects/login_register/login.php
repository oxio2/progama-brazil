<?php
session_start();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user exists and password is correct
    $users = file('users.txt');
    foreach ($users as $user) {
        $fields = explode(',', $user);
        if ($fields[0] === $email && password_verify($password, trim($fields[1]))) {
            $_SESSION['email'] = $email;
            $_SESSION['loggedin'] = true; // Set the loggedin session variable
            header('Location: welcome.php');
            exit;
        }
    }

    $_SESSION['error'] = 'Invalid email or password.';
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($_SESSION['error'])): ?>
        <p><?php echo $_SESSION['error']; ?></p>
    <?php endif; ?>
    <form method="post">
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>
