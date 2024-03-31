<?php

$host = 'localhost';
$dbname = 'lpg';
$dbusername = 'root';
$dbpassword = '';

try {
    $pdo = mew PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
} catch (PDOException $e) {
    die("connection failed:" . $->getMessage());
}