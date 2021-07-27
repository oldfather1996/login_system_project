<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page Login System</title>
    <link rel="stylesheet" href="./asset/css/style.css">

</head>

<body class="home index">
    <div class="warp">
        <?php
        include_once './includes/navbar.php'
        ?>
        <section>
            <h3>Home</h3>
            <?php
            if (isset($_SESSION['u_id'])) {
                echo "<h1> U are loggin</h1>";
            }
            ?>
        </section>
        <?php
        include_once './includes/footer.php';
        ?>
    </div>
</body>

</html>