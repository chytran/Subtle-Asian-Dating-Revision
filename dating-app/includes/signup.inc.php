<?php

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once 'database.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $password) !== false) {
        header("location: ../../Registration.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../../Registration.php?error=invalidemail");
        exit();
    }

    if (invalidname($name) !== false) {
        header("location: ../../Registration.php?error=invalidname");
        exit();
    }

    if (uidExists($conn, $name, $email) !== false) {
        header("location: ../../Registration.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $password);
}
else {
    header("location: ../../login.php");
    exit();
}