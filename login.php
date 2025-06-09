<?php
session_start();
$error = '';
if (isset($_GET['error'])) {
    $error = htmlspecialchars($_GET['error']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - Brewtiful Mornings</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="auth.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Brewtiful Mornings</div>
        <ul class="nav-links">
            <li><a href="index.html">Home</a></li>
            <li class="dropdown">
                <a href="recipes.html">Recipes</a>
                <ul class="dropdown-content">
                    <li><a href="recipes/latte.html">Latte</a></li>
                    <li><a href="recipes/americano.html">Americano</a></li>
                    <li><a href="recipes/espresso.html">Espresso</a></li>
                    <li><a href="recipes/cold-americano.html">Cold Americano</a></li>
                    <li><a href="recipes/cold-latte.html">Cold Latte</a></li>
                    <li><a href="recipes/chocolate-latte.html">Chocolate Latte</a></li>
                    <li><a href="recipes/vanilla-latte.html">Vanilla Latte</a></li>
                </ul>
            </li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="login.php" class="active">Login</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </ul>
    </nav>

    <section class="auth-section">
        <div class="auth-container">
            <h1>Login</h1>
            <?php if (isset($_SESSION['user'])): ?>
                <div class="success-message">
                    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
                    <div class="user-options">
                        <a href="php/dashboard.php" class="auth-button">Go to Dashboard</a>
                        <a href="php/edit-profile.php" class="auth-button">Edit Profile</a>
                        <a href="php/logout.php" class="auth-button">Logout</a>
                    </div>
                </div>
            <?php else: ?>
                <?php if ($error): ?>
                    <div class="error-message"><?php echo $error; ?></div>
                <?php endif; ?>
                <form class="auth-form" action="php/login.php" method="POST">
                    <div class="form-group">
                        <label for="username_or_email">Username or Email</label>
                        <input type="text" id="username_or_email" name="username_or_email" placeholder="Username or Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="auth-button">Login</button>
                </form>
                <p class="auth-switch">Don't have an account? <a href="signup.php">Sign up</a></p>
            <?php endif; ?>
        </div>
    </section>
</body>
</html> 