<?php
session_start();
if(isset($_POST['submit'])){
    $name       = $_POST['name'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
}
//checking whether values are assigned or not.
// echo $name;
// echo $username;
// echo $password;

//Suppose the username and password in the database are dip and dip respectively then,

if($username == "dip" && $password =="dip"){
    $_SESSION['name'] = $name;
    header("Location: dashboard.php");
}else{
    echo "Username or password wrong";
    header("Location: userform.php");
}
?>