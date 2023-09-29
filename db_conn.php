<?php

$sname = "localhost";
$uname = "root";
$password = "password";

$db_name = "accountManagement";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
