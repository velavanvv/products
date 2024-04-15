<?php include 'connection.php'?>
<?php
 $userid='';
 $orderdate='';
    $productid='';
    $ordercount='';

/* $server='localhost';
$user='root';
$password='';
$database='test'; */

if(isset($_GET['id'])){
    $id=$_GET['id'];
   
}


/* $conn=new mysqli($server,$user,$password,$database);
if(!$conn){
    die(mysqli_connect_error());
} */
$str="select * from orders where orders_id='$id'";
$result=$conn->query($str); 
while($row=$result->fetch_assoc()){
   

    $userid =$row['user_id'];
    $orderdate=$row['order_date'];
    $productid=$row['product_id'];
    $ordercount=$row['order_count'];

    
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $userid=$_POST['userid'];
        $orderdate=$_POST['orderdate'];
        $productid=$_POST['productid'];
        $ordercount=$_POST['ordercount'];
        
 
$update= "update orders set user_id='$userid',order_date='$orderdate',product_id='$productid',order_count='$ordercount' where orders_id='$id'";
$result1=$conn->query($update); 
header("Location:ordersdetails.php");
exit;
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

   <title> product update Form </title>
</head>
<body>
    <?php require 'startsession.php'?>
    <div class="container">
      
        <header>ORDER UPDATION</header>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])."?id=$id"; ?>" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">PRODUCT DETAILS</span><hr>

                    <div class="fields">
                        <div class="input-field">
                            <label>USER ID</label>
                            <input type="text" name="userid" value="<?php echo $userid;?>" placeholder="Enter product name" required>
                        </div>
                        <div class="input-field">
                            <label> PRODUCT ID</label>
                            <input type="text" name="productid" value="<?php echo $productid;?>" placeholder="Enter your issued date" required>
                        </div>
                       

                        <div class="input-field">
                            <label>DELEVERED DATE</label>
                            <input type="date" style="text- wieght: 2000px;" value="<?php echo $orderdate;?>" name="orderdate" placeholder="Enter product amount" required>
                        </div>

                      

                        <div class="input-field">
                            <label>DELEVER COUNT</label>
                            <input type="text" name="ordercount" value="<?php echo $ordercount;?>"  style=" font-weight:1000;" placeholder="Enter count " required>
                        </div>


                    </div>
                </div>

                <div class="details ID">
                 
                     

                      

  
                    

                    </div class="btns" >

                    <button class="nextBtn">
                        <span class="btnText" style="color:white;">update</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                  
                </div>   
            </div>

          

            </div>
        </form>
 	
</div>
    <script src="../products/js/register.js"></script>

</body>
</html>
