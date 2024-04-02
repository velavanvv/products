<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
<link rel="stylesheet" type="text/css" href="../products/css/login.css">

</head>
<body>

<div class="container">
	<div class="screen">
		<div class="screen__content">
   
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="login">        
                 <h1 class="intro">Admin login</h1><br>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="name" placeholder="User name " required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name="password" placeholder="Password" required>
				</div>
				<button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
	
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

  
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]="POST"){
session_set_cookie_params([
'lifetime' => 3600,
'samesite'=>'Strict',
'secure'=> true,
'httponly'=>true
]);

session_start();
session_regenerate_id(true);

if(isset($_SESSION['user_id'])){
    header("Location: home.php");
    exit;
}
$server='localhost';
$user='root';
$password='';
$database='test';

if($_SERVER["REQUEST_METHOD"] =="POST"){

$name=$_POST['name'];
$pass=$_POST['password'];
 
$conn=new mysqli($server,$user,$password,$database);
if(!$conn){
    die(mysqli_connect_error());
}
 $str="select * from seller where admin_name= '$name' ";
$result=$conn->query($str);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
       if( $row["admin_password"]==$pass){

$_SESSION['user_id']=$row["admin_id"];
    header("Location: home.php");
exit;
	   
       }
       else {
      
        echo "<h1>password worng please enter correct pass</h1>";
       }
    }
}
else {

    echo "<h1>username worng please enter correct pass</h1>";
   }
}
}
?>