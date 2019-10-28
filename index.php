<a href="array.php">Array</a>
<a href="table.php">table</a>
<form method = "post" action="#">
    <input type="text" name ="username" required/> <br>
    <input type="password" name ="password" required/> <br>
    <input type="submit" name ="sub">
</form>

<?php
if(isset($_POST["sub"])){
include_once 'database.php';
 $username = $_POST["username"];
 $password = $_POST["password"];

 $sql = "INSERT INTO `user` (`id`, `name`, `password`) VALUES (NULL, '$username', '$password')";
 $result = mysqli_query($mysqli,$sql);
 //var_dump($result);
  $mysqli -> close();
}
?>