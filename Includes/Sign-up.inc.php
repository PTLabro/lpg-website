<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        //code...
    } catch (\Throwable $th) {
        //throw $th;
    }

} else {
    header("Location: ../index.php");
    die();
}