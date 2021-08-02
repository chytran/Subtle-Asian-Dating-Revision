<?php

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once 'database.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $password) !== false) {
        header("location: ../Registration.php?error=emptyinput");
        exit();
    }
}