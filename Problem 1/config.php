<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'CSEB';
  $con=mysqli_connect($hostName, $userName, $password, $databaseName); 
    
if ($con){
  
}
else{
    echo "Connection failed!!" + mysqli_connect_error();
}
?>