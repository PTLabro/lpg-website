<?php

session_start();

if(!isset($_SESSION['auth']) or $_SESSION['auth'] != true)
{
    $_SESSION['message'] = "Login first! To access the site";
    header('location: ../index.php');
    die();
}


?>