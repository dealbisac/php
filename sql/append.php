<html>
   <head>
      <title>Creating MySQL Database</title>
   </head>
   
   <body>
      <?php
         $dbhost = 'localhost:3036';
         $dbuser = 'root';
         $dbpass = 'rootpassword';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully<br />';
         $sql = 'CREATE DATABASE TUTORIALS';
         $retval = mysql_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not create database: ' . mysql_error());
         }
         echo "Database TUTORIALS created successfully\n";
         mysql_close($conn);
      ?>
   </body>
</html>