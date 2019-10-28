<?php
include_once 'database.php';
$sql = "SELECT * FROM `user`";
$result = mysqli_query($mysqli,$sql);
$myednpoint = array();
$databucket = array();

if($result){
while($row = $result -> fetch_assoc()){
   $data = array();
   $data['id'] = $row["id"];
   $data['name'] = $row["name"];
   $data['psw'] = $row["password"];
   $databucket[] = $data;
   }
   $myednpoint['data'] = $databucket;
}
header('Content-Type: application/json');
$json = json_encode($myednpoint);
echo $json;
?>
