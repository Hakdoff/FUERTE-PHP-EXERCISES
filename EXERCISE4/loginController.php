<?php
include 'loginModel.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["uname"];
    $password = $_POST["pass"];

    if($username === $uname && $password ===$pass) {
        echo "Welcome $uname!!!<br> Your are successfully logged in";
       
    } else {
        $error_message = "Invalid username and password.";
    }
}
