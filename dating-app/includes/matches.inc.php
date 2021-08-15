<?php

include_once "functions.inc.php";
include_once 'database.inc.php';

if ($conn-> connect_error) {
    die("Connection failed:" . $conn-> connect_error);
}

$sql = "SELECT id, userName, userEmail, userPassword FROM users";
$result = $conn-> query($sql);