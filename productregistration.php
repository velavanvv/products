<?php include 'connection.php'?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

$pname=$_POST['pname'];
$prupees=$_POST['prupees'];
$pdate=$_POST['pdate'];
$pcount=$_POST['pcount'];
$pemail=$_POST['pemail'];
$pnumber=$_POST['pnumber'] ;

try{
$str="insert into products (product_name,product_rupees,product_date,product_count,product_email,product_number) values ('$pname','$prupees','$pdate','$pcount','$pemail','$pnumber')";
$conn->query($str); 
$message="<h1 style='background-color:green ;color:white'>registration success</h1>";
}
catch(Exception $e){
    $message="<h1 style='background-color:red ;color:white'>product already exits</h1>";} 
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
    <?php if(isset($message)):?>
            <?php echo "<h1 style=' padding:10px;display:block;color:red;'> $message</h1>";?>
        <?php endif;?>   
        <header>PRODUCT REGISTRATION</header>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">PRODUCT DETAILS</span><hr>

                    <div class="fields">
                        <div class="input-field">
                            <label>PRODUCT NAME</label>
                            <input type="text" name="pname" placeholder="Enter product name" required>
                        </div>

                       

                        <div class="input-field">
                            <label>PRODUCT RUPEES</label>
                            <input type="text" style="text- wieght: 2000px;" name="prupees" placeholder="Enter product amount" required>
                        </div>

                      

                        <div class="input-field">
                            <label>PRODUCT COUNT</label>
                            <input type="text" name="pcount"  style=" font-weight:1000;" placeholder="Enter count " required>
                        </div>


                    </div>
                </div>

                <div class="details ID">
                    <span class="title">PRODUCT CONDUCT DETAILS</span><hr>

                    <div class="fields">
                     
                     
                    <div class="input-field">
                            <label>MOBILE NUMBER</label>
                            <input type="text" name="pnumber" placeholder="Enter mobile number" required pattern="[0-9]{10}">
                        </div>
                      

                        <div class="input-field">
                            <label>EMAIL</label>
                            <input type="text" name="pemail" placeholder="Enter email Adress" required>
                        </div>

                        <div class="input-field">
                            <label> DATE</label>
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
