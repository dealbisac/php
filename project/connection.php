<?php
   $dbhost  ="localhost:3306";
   $user    ="root";
   $pass    ="";
   $connection = mysqli_connect($dbhost, $user, $pass);

   //check whether the connection is made or not.
   if(!$connection){
      die('Cannot connect the database'.mysqli_error());
   }

   //selecting the database
   mysqli_select_db('user_cv');
   mysqli_close($connection);
?>