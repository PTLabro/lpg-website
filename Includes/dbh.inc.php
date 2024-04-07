<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "lpg_db";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection not establised: " . mysqli_connect_error());
}
