




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" type="text/css" href="../products/css/home.css">
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php require 'startsession.php'?>  
<div class="container">
<nav class="navbar navbar-expand-lg">
  <div class="container"> <a class="navbar-brand navbar-logo" href="#"> <i class="fa fa-laptop" style="font-size:48px;color:red"></i> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="0">Home</a> </li>
         <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="1">contact</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="2">Faq</a> </li>
        <li class="nav-item"> <a class="nav-link" href="stopsession.php" data-scroll-nav="3">log out</a> </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container row ms-5">

  

    </div>
<div class="col-12">
    <div class="row  pt-3">
        <div class="card col-12 col-sm-6" >
          <div class="card-header">  <h1>uers</h1>
        </div>
          <div class="card-body">
        <a href="users.php" class="text-decoration-none">user</a>
</div></div>
<div class="card col-12 col-sm-6" >
          <div class="card-header">  <h1>admin</h1>
        </div>
          <div class="card-body">
        <a href="admin.php" class="text-decoration-none">admin</a>
</div></div>
</div>
    <div class="row pt-5">
    <div class="card col-12 col-sm-6" >
          <div class="card-header">  <h1>products</h1>
        </div>
          <div class="card-body">
        <a href="products.php" class="text-decoration-none">product</a>
</div></div>
<div class="card col-12 col-sm-6 " >
          <div class="card-header">  <h1>order</h1>
        </div>
          <div class="card-body">
        <a href="orders.php" class="text-decoration-none">order</a>
</div></div>

    </div>


</div> 
</div>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
</body>
</html>