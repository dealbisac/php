<?php
session_start();
require('connection.php');
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
}
//fetching the value of admin info table
$usersql = "SELECT * FROM `admin` WHERE `username`=='$username' AND `password` =='$password'";
$userresult = mysqli_query($connection, $usersql);

if (mysqli_num_rows($userresult) == 1) {
while($row = mysqli_fetch_assoc($userresult)) {
    $name       =$row["name"];
    $email      =$row["email"];
    $_SESSION['name'] = $name;
    header("Location: admin/index.php");
    }
}else {
    echo "Username or password wrong";
    header("Location: login.php");
}


?>
