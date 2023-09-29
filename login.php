<?php
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['login'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } else if (empty($password)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM accounts WHERE user_name = '$uname' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $password) {
                // *************************************************
                /* Link to home page */
                header("Location: home.php");
                exit();
            }
        } else {
            header("Location: index.php?error=Incorrect User name or Password");
            exit();
        }
    }
} else if (isset($_POST['signup'])) {
    header("Location: signuppage.php");
    exit();
} else {
    header("Location: index.php?error");
    exit();
}