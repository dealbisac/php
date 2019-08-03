<?php
session_start();
$name= $_SESSION['name'];
$message = "Welcome <b>".$_SESSION['name']."</b>";

?>
<html>
<head>
<title>Dashboard</title>
</head>
<body>
    <nav>
        <a href="dashboard.php">Home</a>
        <a href="#contact.php">Contact</a>
        <a href="logout.php">Logout</a>
    </nav>
<h3> This is the Dashboard </h3>
<?php   echo $message; ?>
</body>
</html>