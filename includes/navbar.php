<nav class="nav nav-custom">
    <h1 class="home-login">Login</h1>
    <?php
    if (isset($_SESSION['u_id'])) {
        //display logout button
        echo '  
      <a href="database/db_logout.php" class="btn btn-red signup" name="submit" type="submit">LogOut</a>';
    } else {
        echo '
        <form action="database/db_signin.php" method="POST" class="form-signin">
        <input required class="login-input" type="text" placeholder="Username/Email" name="user_account">
        <input required class="login-input" type="password" placeholder="password" name="user_password">
        <button class="login-button" name="submit" type="submit">Login</button>
    </form>
    <a href="signup.php" class="btn btn-red signup">Register</a>
    ';
    }
    ?>
</nav>