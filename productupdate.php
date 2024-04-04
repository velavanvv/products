<?php include 'connection.php'?>
<?php
 $pname='';
 $prupees='';
    $pdate='';
    $pcount='';
    $pemail='';
    $pnumber='';


if(isset($_GET['id'])){
    $id=$_GET['id'];
   
}



$str="select * from products where product_id='$id'";
$result=$conn->query($str); 
while($row=$result->fetch_assoc()){
   

    $pname =$row['product_name'];
    $prupees=$row['product_rupees'];
    $pdate=$row['product_date'];
    $pcount=$row['product_count'];
    $pemail=$row['product_email'];
    $pnumber=$row['product_number'] ;
    
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $pname=$_POST['pname'];
        $prupees=$_POST['prupees'];
        $pdate=$_POST['pdate'];
        $pcount=$_POST['pcount'];
        $pemail=$_POST['pemail'];
        $pnumber=$_POST['pnumber'] ;
        $conn1=new mysqli($server,$user,$password,$database);
if(!$conn1){
    die(mysqli_connect_error());
}
$update= "update products set product_name='$pname',product_rupees='$prupees',product_date='$pdate',product_count='$pcount',product_email='$pemail',product_number='$pnumber' where product_id='$id'";
$result1=$conn1->query($update); 
header("Location:productsdetails.php");
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
      
        <header>Product updatation</header><button class="nextBtn">
                        <a href="users.php" style="text-decoration:none;color:white;" class="btnText">back</a>
                        <i class="uil uil-navigator"></i>
                    </button>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])."?id=$id"; ?>" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Product Details</span><hr>

                    <div class="fields">
                        <div class="input-field">
                            <label>product Name</label>
                            <input type="text" name="pname" value="<?php echo $pname;?>" placeholder="Enter product name" required>
                        </div>

                       

                        <div class="input-field">
                            <label>product rupees</label>
                            <input type="text" style="text- wieght: 2000px;" value="<?php echo $prupees;?>" name="prupees" placeholder="Enter product amount" required>
                        </div>

                      

                        <div class="input-field">
                            <label>product count</label>
                            <input type="text" name="pcount" value="<?php echo $pcount;?>"  style=" font-weight:1000;" placeholder="Enter count " required>
                        </div>


                    </div>
                </div>

                <div class="details ID">
                    <span class="title">product contact Details</span><hr>

                    <div class="fields">
                     
                     
                    <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" name="pnumber" value="<?php echo $pnumber;?>" placeholder="Enter mobile number" required>
                        </div>
                      

                        <div class="input-field">
                            <label>email</label>
                            <input type="text" name="pemail" value="<?php echo $pemail;?>" placeholder="Enter email Adress" required></textarea>
                        </div>

                        <div class="input-field">
                            <label> Date</label>
                            <input type="date" name="pdate" value="<?php echo $pdate;?>" placeholder="Enter your issued date" required>
                        </div>

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
