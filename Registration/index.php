
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <img src="./University_of_Pangasinan_logo (1).png" alt="Logo" class="logo">
        <h2>UPang Registrar</h2>
        <?php if (!empty($error)) echo "<p class='error-message'>$error</p>"; ?>
        <form method="post">
            <label>Username</label>
            <input type="text" name="username" placeholder="Student ID" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log in</button>
        </form>
        <a href="#" class="forgot-password">Forgot Password?</a>
    </div>
    <?php
    session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === ADMIN_USER && $password === ADMIN_PASS) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admindashboard.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

</body>
</html>