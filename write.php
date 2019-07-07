<?php
$filename = "newfile.txt";
$file = fopen( $filename, "w" );
if( $file == false )
{
 echo ( "Error in opening new file" );
 exit();
}
$status = fwrite( $file, "This is a simple test\n" );
fclose( $file );
?> 
