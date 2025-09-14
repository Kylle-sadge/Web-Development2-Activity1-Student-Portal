<?php
session_start();

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Predefined credentials
    $valid_username = 'admin';
    $valid_password = '1234';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid username or password.';
    }
}
?>

<?php include 'header.php'; ?>
<link rel="stylesheet" href="login.css">
<div class="form-container">
    <h2>Login</h2>
    <?php if ($error): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>
    <form method="post" action="login.php">
        <label>Username:</label>
        <input type="text" name="username" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</div>
<?php include('footer.php'); ?>