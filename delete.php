<?php
$id = $_GET['id'];
include_once 'database.php';
$sql = "DELETE FROM `user` WHERE `user`.`id` = $id";
$result = mysqli_query($mysqli,$sql);
 //var_dump($result);
 if($result){
    header("Location: http://localhost/test1/table.php");
 }
 $mysqli -> close();
?>