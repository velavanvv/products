<?php include 'connection.php'?>
<?php
$message='';
$select="select * from users";
$result=$conn->query($select);
$product="select * from products";
$result1=$conn->query($product);

if($_SERVER["REQUEST_METHOD"]=="POST"){
$string=$_POST['userid'];
preg_match('/\d+/',$string,$matches);
$userid=$matches[0];
$date=$_POST['orderdate'];
$string1=$_POST['productid'];
preg_match('/\d+/',$string1,$matches);
$productid=$matches[0];
$count=$_POST['count'];
$str2="select * from products where product_id='$productid'";
$result2=$conn->query($str2); 

$row=$result2->fetch_assoc();
    $pcount=$row['product_count'];

    
 $total=$count*$row['product_rupees'];
$productcount=$pcount-$count;
if($productcount>3){
$str1="update products set product_count='$productcount' where product_id='$productid'";
$conn->query($str1);

$str="insert into orders (user_id,order_date,product_id,order_count,total) values ('$userid','$date','$productid','$count','$total')";
$conn->query($str); 
$message="<h1 style='background-color:green ;color:white'>order registration success</h1>";}
else{
$message="<h1 style='background-color:red ;color:white'>product less than 1</h1>";
}


}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../products/css/register.css">
     
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title> order Regisration Form </title>
</head>
<body>
    <?php require 'startsession.php'?>
    <div class="container">
        <?php if(isset($message)):?>
            <?php echo "<h1 style=' padding:10px;display:block;color:red;'> $message</h1>";?>
        <?php endif;?><header>ORDER REGISTRATION</header>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">PERSONAL DETAILS</span><hr>

                    <div class="fields">
 <!--                        <div class="input-field">
                            <label>user id</label>
                            <input type="number" name="userid" placeholder="Enter userid" required>
                        </div> -->

                        <div class="input-field">
                            <label>users</label>
                            <select name="userid" required>    
                            <option disabled selected>SELECT USERS</option>
                                <?php    while($row=$result->fetch_assoc()){

                              echo" 
                                <option>".$row["user_id"]."-".$row["username"]."</option>
                              ";}?>
                            </select>
                        </div>


                        <div class="input-field">
                            <label>order date</label>
                            <input type="date" name="orderdate"  required>
                        </div>
                        <div class="input-field">
                            <label>products</label>
                            <select name="productid" required>   
                            <option disabled selected>SELECT PRODUCTS</option>
                                 <?php    while($row=$result1->fetch_assoc()){

                              echo" 
                                <option>".$row["product_id"]."-".$row["product_name"]."</option>
                              ";}?>
                            </select>
                        </div>

                      
                        <div class="input-field">
                            <label>PRODUCT COUNT</label>
                            <input type="number" name="count" placeholder="Enter product count" required>
                        </div>
                      
                                              
                    </div class="btns" >

<button class="nextBtn">
    <span class="btnText" style="color:white;">REGISTER</span>
    <i class="uil uil-navigator"></i>
</button>

</div>   

                    </div>
                </div>

        

            </div>

          

            </div>
        </form>
 	
</div>
    <script src="../products/js/register.js"></script>

</body>
</html>
