<?php

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "loyal_partners_ltd";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
  die("Coneection failed :" .mysqli_connect_error());

}


 ?>
