<?php

$servername = "localhost:8111";
$dBUsername = "root";
$dBPassword = "";
$dBName = "subtleAsianDating";

$conn = mysqli_connect($servername,$dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connection_error());
} else {
    echo "Connection successful";
}