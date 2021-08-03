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