<?php
session_start();
$connection = mysqli_connect("localhost","root","","lpg_data");

if(isset($_POST['save_data']))
{
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $insert_query = "INSERT INTO user(email, name, phone, address, password) VALUES ('$email','$name','$phone','$address',' $password')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if($insert_query_run)
    {
        $_SESSION['status'] = "Data inserted successfully";
        header('location: ../index.php');
    }
    else
    {
        $_SESSION['status'] = "Insertation of data failed";
        header('location: ../index.php');
    }
}

?>