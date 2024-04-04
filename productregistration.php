<?php include 'connection.php'?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

$pname=$_POST['pname'];
$prupees=$_POST['prupees'];
$pdate=$_POST['pdate'];
$pcount=$_POST['pcount'];
$pemail=$_POST['pemail'];
$pnumber=$_POST['pnumber'] ;


$str="insert into products (product_name,product_rupees,product_date,product_count,product_email,product_number) values ('$pname','$prupees','$pdate','$pcount','$pemail','$pnumber')";
$conn->query($str); 

header("Location:".$_SERVER['PHP_SELF']);
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

   <title>products Regisration Form </title>
</head>
<body>
    <?php require 'startsession.php'?>
    <div class="container">
      
        <header>Product Registration</header><button class="nextBtn">
                        <a href="products.php" style="text-decoration:none;color:white;" class="btnText">back</a>
                        <i class="uil uil-navigator"></i>
                    </button>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Product Details</span><hr>

                    <div class="fields">
                        <div class="input-field">
                            <label>product Name</label>
                            <input type="text" name="pname" placeholder="Enter product name" required>
                        </div>

                       

                        <div class="input-field">
                            <label>product rupees</label>
                            <input type="text" style="text- wieght: 2000px;" name="prupees" placeholder="Enter product amount" required>
                        </div>

                      

                        <div class="input-field">
                            <label>product count</label>
                            <input type="text" name="pcount"  style=" font-weight:1000;" placeholder="Enter count " required>
                        </div>


                    </div>
                </div>

                <div class="details ID">
                    <span class="title">product contact Details</span><hr>

                    <div class="fields">
                     
                     
                    <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" name="pnumber" placeholder="Enter mobile number" required>
                        </div>
                      

                        <div class="input-field">
                            <label>email</label>
                            <input type="text" name="pemail" placeholder="Enter email Adress" required>
                        </div>

                        <div class="input-field">
                            <label> Date</label>
                            <input type="date" name="pdate" placeholder="Enter your issued date" required>
                        </div>

                    </div class="btns" >

                    <button class="nextBtn">
                        <span class="btnText" style="color:white;">Register</span>
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
