<?php
session_start();
if (isset($_POST['submit'])) {
    include './evn.php';
    $account = mysqli_real_escape_string($conn, $_POST['user_account']);
    $password = mysqli_real_escape_string($conn, $_POST['user_password']);

    if (empty($account) || empty($password)) {
        header("Location: ../index.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM users where user_account ='$account' ";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../index.php?signin=user_account_notfound");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                $hashPasswordCheck = password_verify($password, $row['user_password']);
                if ($hashPasswordCheck == false) {
                    header("Location ../index.php?login=errorPassword");
                } else if ($hashPasswordCheck == true) {
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_first'];
                    $_SESSION['u_last'] = $row['user_last'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_account'] = $row['user_account'];
                    header("Location: ../index.php?signin=success");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../index.php?signin=error");
}
