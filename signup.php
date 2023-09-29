<?php
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['phonenumber']) && isset($_POST['password']) && isset($_POST['password2'])) {
    if (isset($_POST['login'])) {
        header("Location: index.htm");
        exit();
    } 

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $phonenumber = validate($_POST['phonenumber']);
    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']);
    $password2 = validate($_POST['password2']);

    if (empty($name)) {
        header("Location: signuppage.php?error=Name is required");
        exit();
    }

    if (empty($email)) {
        header("Location: signuppage.php?error=Email is required");
        exit();
    }

    if (empty($phonenumber)) {
        header("Location: signuppage.php?error=Phone number is required");
        exit();
    }

    if (empty($uname)) {
        header("Location: signuppage.php?error=User name is required");
        exit();
    }

    if (empty($password)) {
        header("Location: signuppage.php?error=Password is required");
        exit();
    }

    if (empty($password2)) {
        header("Location: signuppage.php?error=Confirm password is required");
        exit();
    }

    if ($password != $password2) {
        header("Location: signuppage.php?error=2 password does not match");
        exit();
    }

    try {
        $sql = "INSERT INTO accounts(user_name, password, name, email, phonenumber) VALUES ('$uname', '$password', '$name', '$email', '$phonenumber');";
        if ($conn->query($sql) === TRUE) {
            echo "<script type='text/javascript'>
                    alert('Successfully registered');
                    window.location='index.htm';
                </script>";
        }
    } catch(Exception $e) {
        header("Location: signuppage.php?error=User name already exists");
        exit();
    }
} else {
    header("Location: signuppage.php?error");
    exit();
}