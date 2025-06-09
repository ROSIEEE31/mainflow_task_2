<?php
session_start();

$isLoggedIn = isset($_SESSION['user']);
$username = $isLoggedIn ? $_SESSION['user'] : '';
?>
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
        <?php if ($isLoggedIn): ?>
            <li class="dropdown">
                <a href="#">Hi, <?php echo htmlspecialchars($username); ?></a>
                <ul class="dropdown-content">
                    <li><a href="php/dashboard.php">Dashboard</a></li>
                    <li><a href="php/profile.php">Edit Profile</a></li>
                    <li><a href="php/logout.php">Logout</a></li>
                </ul>
            </li>
        <?php else: ?>
            <li class="dropdown">
                <a href="#">Login | Sign Up</a>
                <ul class="dropdown-content">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="signup.html">Sign Up</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</nav> 