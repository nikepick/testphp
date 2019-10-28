<?php
$host = "localhost";
$user = "root";
$psw = "";
$databse = "testphp1";
$mysqli = mysqli_connect($host,$user,$psw,$databse);

if(mysqli_connect_errno($mysqli)){
    echo "failed to connect to Mysql" .mysqli_connect_error();
  }

?>