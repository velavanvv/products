




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php require 'startsession.php'?>
<div class="container ">
    <div class="row col-12">
        <h1> welcome</h1>
    <nav class= " d-flex p-3 justify-content-end">
<ul class="list-inline">
    <li class="list-inline-item">
<a href="" class="text-decoration-none">Home</a>
    </li>
    <li class="list-inline-item">
<a href="" class="text-decoration-none">aboutus</a>
    </li><li class="list-inline-item">
<a href="stopsession.php" class="text-decoration-none">Log out</a>
    </li>
</ul>
    </nav>
    </div>

    <div class="row pt-3">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>