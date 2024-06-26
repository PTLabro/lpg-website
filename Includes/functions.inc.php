<?php

function emptyInputSignup($emailAdd, $fullName, $phoneNum, $address, $pwd, $pwdRepeat) {
    $result;
    if (empty($emailAdd) || empty($fullName) || empty($phoneNum) || empty($address) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidNum($phoneNum){
    $result;
    if(!preg_match('/^d+$/', $phoneNum)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmai1($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
    $result = true;
    }
    else {
    $result = false;
    }
    return $result;
}

function numExists($conn, $phoneNum, $email){
    $sql = "SELECT * FROM users WHERE cellNum = ? OR email = ?;";
    $stmt = mysql_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $phoneNum, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $email, $name, $phoneNum, $address, $pwd){
    $sql = "INSERT INTO users (email, fullName, cellNum, homeAddress, userPwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysql_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $email, $name, $phoneNum, $address, $pwd, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}