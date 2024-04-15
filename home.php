<?php require 'startsession.php'?>
<!DOCTYPE html>
<html xmlms:th="http://www.thymeleaf.org">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../products/css/index.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>

<body>

    <div class="nav">
        <h1><b>ADMIN PAGE</b></h1>
        

    </div>

    <div class="icon-bar">
        <a class="active" href="#">Home</a>
        <a class="#" href="stopsession.php">log out</a>
       
    </div>
    <div class="d0">
        <div class="d1">
            <h2 class="head2">MENU</h2>
            <div class="line">
           <div class="dropdown">
<a class="dropbtn">USERS</a><br>
<div class="dropdown-content">
    <a href="userregister.php" target="ifrm"> REGISTER</a>
    <a href="userdetails.php" target="ifrm"> DETAILS</a>

</div><hr><br>
            </div>
            <div class="dropdown">
<a class="dropbtn">ADMIN</a>
<div class="dropdown-content">
    <a href="adminregister.php" target="ifrm">REGISTER</a>
    <a href="admindetails.php " target="ifrm">DETAILS</a>
</div><hr><br>
            </div>
            <div class="dropdown">
<a class="dropbtn">PRODUCTS</a>
<div class="dropdown-content">
    <a href="productregistration.php" target="ifrm">REGISTER</a>
    <a href="productsdetails.php" target="ifrm">DETAILS</a>
    
</div><hr><br>
            </div>
            <div class="dropdown">
<a class="dropbtn">ORDERS</a>
<div class="dropdown-content">
    <a href="orderregister.php" target="ifrm">REGISTER</a>
    <a href="ordersdetails.php" target="ifrm">DETAILS</a>
</div><hr><br>
            </div></div>
             </div>

        <div class="d2"><iframe allowtransparency="true" style="width:100%; height:1200px; padding-left:5px;" name="ifrm"
                id="ifrm" src="" frameborder="0"></iframe></div>
        
     
        <div class="footer" style="text-align: center; background-color: black; color: white; text-align: center; width: 100%;"> <p > Copyright &copy; 2011 webprosindia.com. All rights reserved. Design by Webpros solutions pvt Ltd. .
        
        </p></div>
    </div>
    
   
</body>
    </html>