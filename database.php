<?php

$server='localhost';
$user='root';
$password='';
$database='test';


$username=$_POST['username'];
$gender=$_POST['gender'];
$adress=$_POST['adress'];
$phone=$_POST['number'];
$email=$_POST['email'];
$date=$_POST['date'] ;


$conn=new mysqli($server,$user,$password,$database);
if(!$conn){
    die(mysqli_connect_error());
}
$str="insert into users (username,gender,user_adress,phone,user_email,issued_date) values ('$username','$gender','$adress','$phone','$email','$date')";
$conn->query($str); 
echo "value stored";












?>