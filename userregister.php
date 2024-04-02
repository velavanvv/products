<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$server='localhost';
$user='root';
$password='';
$database='test';


$username=$_POST['username'];
$gender=$_POST['gender'];
$adress=$_POST['adress'];
$phone=$_POST['number'];
$email=$_POST['email'];
$date=$_POST['date'] ;


$conn=new mysqli($server,$user,$password,$database);
if(!$conn){
    die(mysqli_connect_error());
}
$str="insert into users (username,gender,user_adress,phone,user_email,issued_date) values ('$username','$gender','$adress','$phone','$email','$date')";
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

   <title>Responsive Regisration Form </title>
</head>
<body>
    <?php require 'startsession.php'?>
    <div class="container">
      
        <header>Registration</header><button class="nextBtn">
                        <a href="users.php" style="text-decoration:none;color:white;" class="btnText">back</a>
                        <i class="uil uil-navigator"></i>
                    </button>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span><hr>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="username" placeholder="Enter your name" required>
                        </div>

                       

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>

                      

                        <div class="input-field">
                            <label>Gender</label>
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
                    <span class="title">Identity Details</span><hr>

                    <div class="fields">
                     
                     
                    <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" name="number" placeholder="Enter mobile number" required>
                        </div>
                      

                        <div class="input-field">
                            <label>Adress</label>
                            <textarea type="text" name="adress" placeholder="Enter Adress" required></textarea>
                        </div>

                        <div class="input-field">
                            <label>Issued Date</label>
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
