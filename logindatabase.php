<?php

$server='localhost';
$user='root';
$password='';
$database='test';



$name=$_POST['name'];
$pass=$_POST['password'];
 
$conn=new mysqli($server,$user,$password,$database);
if(!$conn){
    die(mysqli_connect_error());
}
 $str="select * from seller where admin_name= '$name' ";
$result=$conn->query($str);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
       if( $row["admin_password"]==$pass){
header("Location: userregister.php");
exit;
       }
       else {
      
        echo "<h1>password worng please enter correct pass</h1>";
       }
    }
}
else {

    echo "<h1>username worng please enter correct pass</h1>";
   }

?>