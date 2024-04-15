<?php include 'connection.php'?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){



$admin_name=$_POST['admin_name'];
$admin_password=$_POST['admin_password'];

try{
$str="insert into seller (admin_name,admin_password) values ('$admin_name','$admin_password')";
$conn->query($str); 

$message="<h1 style='background-color:green ;color:white'>registration success</h1>";
}
catch(Exception $e){
    $message="<h1 style='background-color:red ;color:white'>ADMIN already exits</h1>";} 
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

   <title>admin Regisration Form </title>
</head>
<body>
    <?php require 'startsession.php'?>
    <div class="container">
    <?php if(isset($message)):?>
            <?php echo "<h1 style=' padding:10px;display:block;color:red;'> $message</h1>";?>
        <?php endif;?>
      
        <header>ADMIN REGISTRATION</header>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">PERSONAL DETAILS</span><hr>

                    <div class="fields">
                        <div class="input-field">
                            <label>FULL NAME</label>
                            <input type="text" name="admin_name" placeholder="Enter your name" required>
                        </div>

                       
           

                        <div class="input-field">
                            <label>PASSWORD</label>
                            <input type="text" name="admin_password" placeholder="Enter password" required></input>
                        </div>


                    
                        <button class="nextBtn">
                        <span class="btnText" style="color:white;">Register</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                  

             
                    </div>
                </div>

                
            </div>

          

            </div>
        </form>
 	
</div>
    <script src="../products/js/register.js"></script>

</body>
</html>