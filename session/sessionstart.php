<?php
session_start();
if(isset($_SESSION['counter'])){
    $_SESSION['counter']+=1;
}else{
    $_SESSION['counter']=1;
}
$message = "You have visited this page <b>".$_SESSION['counter']."</b> times";
$message .= " in this session";

?>
<html>
<head>
<title>Session Example</title>
</head>
<body>
<?php
echo $message;
#session_destroy();

unset($_SESSION['counter']);

?>
</body>
</html>