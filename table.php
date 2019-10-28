
<table border="1">
<thead>
    <tr>
        <td>
            S.N.
        </td>
        <TD>
            Name
        </TD>
        <td>
            Password
        </td>
        <td>
            Update
        </td>
        <td>
            Delete
        </td>
    </tr>
</thead>

<?php
include_once 'database.php';
$sql = "SELECT * FROM `user`";
$result = mysqli_query($mysqli,$sql);
$sn = 0;

$myednpoint = array();
$databucket = array();

if($result){
while($row = $result -> fetch_assoc()){
   $data = array();
   $data['id'] = $row["id"];
    echo "<tr>";

   echo "<td>";
   echo $sn++;
   echo "</td>";

   echo "<td>";
   echo $row["name"]; 
   $data['name'] = $row["name"];
   echo "</td>";

    echo "<td>";
   echo $row["password"];
   $data['psw'] = $row["password"];
   echo "</td>";

   echo "<td>";
   echo "<a href = 'edit.php?id=".$row['id']."'>edit</a>";
   echo "</td>";
   
   echo "<td>";
   echo "<a href = 'delete.php?id=".$row['id']."'>delete</a>";
   echo "</td>";        

   echo "</tr>"; 
   $databucket[] = $data;
   }
   $myednpoint['data'] = $databucket;
}

$json = json_encode($myednpoint);
//echo $json;
?>
</table>
