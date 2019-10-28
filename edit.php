<form method ="post" action = "#">

<?php
$id = $_GET['id'];
include_once 'database.php';
$sql = "SELECT *  FROM `user` WHERE `id` = $id";
$result = mysqli_query($mysqli,$sql);
 //var_dump($result);
 if($result){
    while($row = $result ->fetch_assoc()){
        echo "<input type = 'text' name ='userName' value = '".$row['name']."'/>";
        echo "<br>";
        echo "<input type = 'text' name ='password' value = '".$row['password']."'/>";
        echo "<br>";
    }

 }
?>
<input type = "submit" name = "sub"/>
</form>

<?php
if(isset($_POST['sub'])) {

    $name = $_POST['userName'];
    $password = $_POST['password'];

    $sql = $sql = "UPDATE `user` SET `name` = '$name', `password` = '$password' WHERE `user`.`id` = $id"; 
    $result = mysqli_query($mysqli,$sql);
    if($result){
        header("Location: http://localhost/test1/table.php");
    }
    $mysqli -> close();

}
?>