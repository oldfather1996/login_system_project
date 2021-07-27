<?php
// check data back-end

if (isset($_POST['submit'])) {
    include_once 'evn.php';

    // expect error special char

    $first = mysqli_real_escape_string($conn, $_POST['user_first']);
    $last = mysqli_real_escape_string($conn, $_POST['user_last']);
    $email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $account = mysqli_real_escape_string($conn, $_POST['user_account']);
    $password = mysqli_real_escape_string($conn, $_POST['user_password']);
    // Error handlers
    // check for empty fields
    $sql_insert = "INSERT INTO 
    users (user_first,user_last,user_email,user_account,user_password) VALUES
    (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (empty($first) || empty($last) || empty($email) || empty($account) || empty($password)) {
        header("Location :../signup.php?signup=empty");
        exit();
    } else {
        // check if input character are vaild
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("Location: ../signup.php?signup=invalid");
            exit();
        } else {
            // check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location ../signup.php?signup=email");
            } else {
                // check exits account duplicated
                $sql = "SELECT * FROM users where user_account='$account'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck >0) {
                    header("Location: ../signup.php?signup=userDuplicated");
                    exit();
                } else {
                    if (!mysqli_stmt_prepare($stmt, $sql_insert)) {
                        echo "SQL error";
                    } else {
                        // Hasing the password
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, 'sssss', $first, $last, $email, $account, $hashedPassword);
                        mysqli_stmt_execute($stmt);
                        echo $first . $last . $email . $account . $hashedPassword;
                        header("Location: ../signup.php?signup=success");
                        exit();
                        // Insert the user into the database}
                    }
                }
            }
        }
    }
} else {
    header("Location : ../signup.php?signup=error");
}
