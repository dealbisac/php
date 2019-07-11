<html>
<head>
   <title>Creating the Database</title>
</head>
<body>
<?php
   $dbhost  ="localhost:3306";
   $user    ="root";
   $pass    ="";
   $connection = mysqli_connect($dbhost, $user, $pass);

   //check whether the connection is made or not.
   if(!$connection){
      die('Cannot connect the database'.mysqli_error());
   }
   echo "Succesfully Connected";
   echo "<br>";

   //Creating the database
   $sql ="CREATE DATABASE phpnewclass";
   $query =mysqli_query($sql, $connection);

   if(!$query){
      die('Cannot create the database'.mysqli_error());
   }
   echo "Database Created Successfully";



?>
</body>
</html>