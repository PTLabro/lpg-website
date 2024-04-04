<?php
session_start();
$connection = mysqli_connect("localhost","root","","lpg_data");

if(isset($_POST['login_btn']))
{  

//    $_SESSION['auth'] = true;

    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $login_query = "SELECT * FROM user WHERE phone='$phone' AND password='$password' ";
    $login_query_run = mysqli_query($connection, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
    //    $row = mysqli_fetch_array($login_query_run);
       header("location: ../index.php?success");
    }
    else
    {
        $_SESSION['login_err_mssg'] = "Login failed";
        header("location: ../index.php?error=loginfailed");
    }
}

?>