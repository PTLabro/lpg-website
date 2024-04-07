<?php

if(isset($_POST["signup_confirm"])){
    
    $emailAdd = $_POST["email"];
    $fullName = $_POST["name"];
    $phoneNum = $_POST["phone"];
    $address = $_POST["address"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["pwdRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($emailAdd, $fullName, $phoneNum, $address, $pwd, $pwdRepeat) !== false){
        header("location: ../index.php?error=emptyinputfields");
        exit();
    }
    if(invalidNum($phoneNum) !== false){
        header("location: ../index.php?error=invalidnumber");
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../index.php?error=password won't match");
    }
    if(numExists($conn, $phoneNum) !== false){
        header("locationL ../index.php?error=Phone number already registered");
    }

    createUser($conn, $email, $name, $phoneNum, $address, $pwd);
}
else { 
    header("location: ../index.php");
}