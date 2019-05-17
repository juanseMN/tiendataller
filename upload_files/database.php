<?php
$username = "root" ;
$servername = "localhost" ; // 127.0.0.1
$pass = "" ;
$dbname = "files" ;
$conn  = new mysqli ( $servername , $username , $pass , $dbname );
if ( $conn->connect_error ) {
die ( " connection failed " .  $conn ->connect_error );
} else {
  // die ("conexion exitosa a market");
}
 ?>
