<?php
session_start();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if user already exists
    $users = file('users.txt');
    foreach ($users as $user) {
        $fields = explode(',', $user);
        if ($fields[0] === $email) {
            $_SESSION['error'] = 'User already exists. Please log in.';
            header('Location: login.php');
            exit;
        }
    }

    // Add new user to text file
    $data = "$email,$password\n";
    file_put_contents('users.txt', $data, FILE_APPEND);

    $_SESSION['message'] = 'Registration successful. Please log in.';
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
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
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>
