<?php
/**
 * Created by PhpStorm.
 * User: Madumal Sameera
 * Date: 3/18/2016
 * Time: 10:22 AM
 */
if($_SERVER['REQUEST_METHOD']=="post"){
    require 'Connection.php';
    createUser();
}

function createUser(){
    global $connect;
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query="insert into users(username,password) VALUES ('$username','$password')";
    mysqli_query($connect,$query) or die(mysqli_error($connect));
    mysqli_close($connect);
}