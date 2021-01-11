<!--
@Author: Batuyong, Genesis
@Date: 12/14/2020
@Version: 1.0
-->
<?php

if(isset($_POST["submit"])) {
    $user_name = $_POST["user_name"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $password = $_POST["pwd"];
    $password_repeat = $_POST["pwd_repeat"];

      require_once 'db.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($user_name, $first_name, $last_name, $password, $password_repeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (pwdMatch($password, $password_repeat) !== false) {
        header("location: ../signup.php?error=passworderror");
        exit();
    }

    if (userNameExists($conn, $user_name) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $user_name, $first_name, $last_name, $password);
    header("location: ../signup.php?error=none");

} else {
    header("location: ../signup.php");
    exit();
}