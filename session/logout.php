<?php
session_start();
$name= $_SESSION['name'];
$message = "Good Bye <b>".$_SESSION['name']."</b>";
$message .= "See you soon!";
echo $message;
session_destroy();
header("Location: userform.php");

?>