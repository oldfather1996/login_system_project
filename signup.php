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
        <?php
        include_once './includes/navbar.php'
        ?>
        <section>
            <h3>Sign Up</h3>
            <div class="content">
                <form action="./database/db_signup.php" method="POST">
                    <input require class="signup-input" type="text" placeholder="First Name" name="user_first">
                    <input require class="signup-input" type="text" placeholder="Last Name" name="user_last">
                    <input require class="signup-input" type="email" placeholder="Email" name="user_email">
                    <input require class="signup-input" type="text" placeholder="Account" name="user_account">
                    <input require class="signup-input" type="password" placeholder="Password" name=" user_password">
                    <button class="signup-register" name="submit" type="submit"> Register</button>
                </form>
            </div>
        </section>
        <?php
        include_once './includes/footer.php';
        ?>
    </div>
</body>

</html>