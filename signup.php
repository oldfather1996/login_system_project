<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page Login System</title>
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/signup.css">

</head>

<body class="home index">
    <div class="warp">
        <nav class="nav nav-custom">
            <h1 class="home-login">Login</h1>
            <form action="" class="form-signin">
                <input required class="login-input" type="text" placeholder="Username/Email" name="user_account">
                <input required class="login-input" type="password" placeholder="password" name="user_password">
                <button class="login-button" type="submit">Login</button>
            </form>
            <a href="signup.php" class="btn btn-red signup">Register</a>
        </nav>
        <section>
            <h3>Sign Up</h3>
            <div class="content">
                <form action="">
                    <input class="signup-input" type="text" placeholder="First Name" name="user_first">
                    <input class="signup-input" type="text" placeholder="Last Name" name="user_last">
                    <input class="signup-input" type="email" placeholder="Email" name="user_email">
                    <input class="signup-input" type="text" placeholder="Account" name="user_account">
                    <input class="signup-input" type="password" placeholder="Password" name=" user_password">
                    <button class="signup-register" type="submit"> Register</button>
                </form>
            </div>
        </section>
        <footer>
            <p>Desgin by <a href="#">Dung An</a></p>
        </footer>
    </div>
</body>

</html>