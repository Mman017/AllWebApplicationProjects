<!--
@Author: Batuyong, Genesis
@Date: 12/14/2020
@Version: 1.0
-->
<?php
/* This functions.inc php file contains the collection of function used in the website */ 

//function to check if there is an empty or blank text-field in the sign-up form.
function emptyInputSignup($user_name, $first_name, $last_name, $password, $password_repeat) {
     global $result;

    if(empty($user_name) || empty($first_name) || empty($last_name) || empty($password) || empty($password_repeat)) {
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}
//function to check whether the input password match the input password_repeat return false if not return true.
function pwdMatch($password, $password_repeat) {
    global $result; 

    if ($password !== $password_repeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
//function for checking whether the username input exists on the users table. 
function userNameExists($conn, $user_name) {
    $sql = "SELECT * FROM users WHERE usersName = ?;";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql )){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($statement, "s", $user_name);
    mysqli_stmt_execute($statement);

    $resultData = mysqli_stmt_get_result($statement);
    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;         
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($statement);
}
//Function in inserting the user's data if no error was encountered during the sign-up process.
function createUser($conn, $user_name, $first_name, $last_name, $password) {
    $sql = "INSERT INTO users (usersName, usersFirstName, usersLastName, usersPwd) VALUES (?, ?, ?, ?);";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($statement, "ssss", $user_name, $first_name, $last_name, $hashedPwd);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    header("location: ..//admin.php");
}
//Function for checking log-in form if submitted and the text-fields is empty. 
function emptyInputLogin($user_name, $pwd) {
    global $result;
    if (empty($user_name) || empty($pwd)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
//function that checks if the login data of the user exists on the users table.
function loginUser($conn, $user_name, $pwd) {
    $userNameExists = userNameExists($conn, $user_name);

    if ($userNameExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $userNameExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=loginerror");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["usersId"] = $userNameExists["usersId"];
        $_SESSION["usersName"] = $userNameExists["usersName"];
        header("location: ../admin.php");
        exit();
    }
}




