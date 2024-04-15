<?php include 'connection.php'?>
<?php
 $uname='';
 $gender='';
    $adress='';
    $phone='';
    $email='';
    $date='';



if(isset($_GET['id'])){
    $id=$_GET['id'];
   
}


$str="select * from users where user_id='$id'";
$result=$conn->query($str); 
while($row=$result->fetch_assoc()){
   

    $uname =$row['username'];
    $gender=$row['gender'];
    $adress=$row['user_adress'];
    $phone=$row['phone'];
    $email=$row['user_email'];
    $date=$row['issued_date'] ;
    
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $uname=$_POST['uname'];
        $gender=$_POST['gender'];
        $adress=$_POST['adress'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $date=$_POST['date'] ;

$update= "update users set username='$uname',gender='$gender',user_adress='$adress',phone='$phone',user_email='$email',issued_date='$date' where user_id='$id'";
$result1=$conn->query($update); 
header("Location:userdetails.php");
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

   <title> USER UPDATE FORM </title>
</head>
<body>
    <?php require 'startsession.php'?>
    <div class="container">
      
        <header>USER UPDATION</header>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])."?id=$id"; ?>" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">USER DETAILS</span><hr>

                    <div class="fields">
                        <div class="input-field">
                            <label>USER NAME</label>
                            <input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Enter product name" required>
                        </div>

                       

                        <div class="input-field">
                            <label>GENDER</label>
                            <select type="text" style="text- wieght: 2000px;"  name="gender" placeholder="Enter product amount" required>
                        <option>male</option>
                        <option value="">Female</option>
                        <option value="">others</option>

                        </select>
                        
                        </div>

                      

                        <div class="input-field">
                            <label>date</label>
                            <input type="date" name="date" value="<?php echo $date;?>" placeholder="Enter mobile number" required>
                        </div>

                    </div>
                </div>

                <div class="details ID">
                    <span class="title">USER contact Details</span><hr>

                    <div class="fields">
                     
                     
                    <div class="input-field">
                            <label>MOBILE NUMBER</label>
                            <input type="text" name="phone" value="<?php echo $phone;?>"  style=" font-weight:1000;" placeholder="Enter count " required  pattern="[0-9]{10}">
                        </div>

                      

                        <div class="input-field">
                            <label>email</label>
                            <input type="text" name="email" value="<?php echo $email;?>" placeholder="Enter email Adress" required></textarea>
                        </div>

                        <div class="input-field">
                            <label>adress</label>
                            <input type="text" name="adress" value="<?php echo $adress;?>" placeholder="Enter email Adress" required></textarea>
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
    <script src="../users/js/register.js"></script>

</body>
</html>
