<?php

function emptyInputSignup($name, $email, $password) {
    $result;
    if (empty($name) || empty($name) || empty($name)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidname($name) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE userName = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); 
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Registration.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $pwd) {
    $sql = "INSERT INTO users (userName, userEmail, userPassword) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../Registration.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../../Registration.php?error=none");
    exit();
}


function emptyInputLogin($email, $pwd) {
    $result;
    if (empty($email) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $password) {
    $uidExists = uidExists($conn, $email, $email);

    if ($uidExists === false) {
        header("location: ../../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["userPassword"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
        header("location: ../../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["id"];
        $_SESSION["useruid"] = $uidExists["id"];
        header("location: ../../home.php");
        exit();
    }
}