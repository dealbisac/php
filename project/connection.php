<?php
   $dbhost  ="localhost:3306";
   $user    ="root";
   $pass    ="";
   $db      ="user_cv";
   $connection = mysqli_connect($dbhost, $user, $pass, $db);

   //check whether the connection is made or not.
   if(!$connection){
      die('Cannot connect the database'.mysqli_error());
   }

?>