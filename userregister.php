<?php include 'connection.php'?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){


$username=$_POST['username'];
$gender=$_POST['gender'];
$adress=$_POST['adress'];
$phone=$_POST['number'];
$email=$_POST['email'];
$date=$_POST['date'] ;



$str="insert into users (username,gender,user_adress,phone,user_email,issued_date) values ('$username','$gender','$adress','$phone','$email','$date')";
try{
$conn->query($str); 
$message="<h1 style='background-color:green ;color:white'>registration success</h1>";
}
catch(Exception $e){
    $message="<h1 style='background-color:red ;color:white'>user already exits</h1>";} 
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

   <title>user Regisration Form </title>
</head>
<body>
    <?php require 'startsession.php'?>
    <div class="container">
    <div class="container">
        <?php if(isset($message)):?>
            <?php echo "<h1 style=' padding:10px;display:block;color:red;'> $message</h1>";?>
        <?php endif;?>
        <header>USER REGISTRATION</header>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">PERSONAL DETAILS</span><hr>

                    <div class="fields">
                        <div class="input-field">
                            <label>FULL NAME</label>
                            <input type="text" name="username" placeholder="Enter your name" required>
                        </div>

                       

                        <div class="input-field">
                            <label>EMAIL</label>
                            <input type="text" name="email" placeholder="Enter your email" required pattern="[a-z]+[0-9]+@gmail.com" title="ENTER VALID EMAIL">
                        </div>

                      

                        <div class="input-field">
                            <label>GENDER</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="details ID">
                    <span class="title">IDENTITY DETAILS</span><hr>

                    <div class="fields">
                     
                     
                    <div class="input-field">
                            <label>MOBILE NUMBER</label>
                            <input type="text" name="number" placeholder="Enter mobile number" required pattern="[0-9]{10}">
                        </div>
                      

                        <div class="input-field">
                            <label>ADRESS</label>
                            <textarea type="text" name="adress" placeholder="Enter Adress" required></textarea>
                        </div>

                        <div class="input-field">
                            <label>ISSUED DATE</label>
                            <input type="date" name="date" placeholder="Enter your issued date" required>
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
