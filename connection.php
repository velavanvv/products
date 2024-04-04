<?php $server='localhost';
$user='root';
$password='';
$database='test';



 
$conn=new mysqli($server,$user,$password,$database);
if(!$conn){
    die(mysqli_connect_error());
}
?>