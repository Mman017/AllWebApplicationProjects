<!--
@Author: Batuyong, Genesis
@Date: 12/14/2020
@Version: 1.0
-->
<?php
if(isset($_POST["submit"])) {

    $user_name = $_POST["user_name"];
    $pwd = $_POST["pwd"];

    require_once 'db.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($user_name, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    loginUser($conn, $user_name, $pwd);
} else {
    header("location: ../login.php");
    exit();
}