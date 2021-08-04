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

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersName = ? or usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
}