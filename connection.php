<?php $server='localhost';
$user='root';
$password='';
$database='test';



 
$conn=new mysqli($server,$user,$password,$database);
if(!$conn){
    die(mysqli_connect_errno()."connection lost");
}/* 
echo "connected";
$string="select * from user";

$result=$conn->query($string);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      echo "<p>".$row["userid"]."</p>";
    }
}
else{
echo "no row";
} */

?>