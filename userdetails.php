<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user details</title>
    <link rel="stylesheet" href="../products/css/details.css">   
</head>
<body>


<?php require 'startsession.php'?>
<?php include 'connection.php'?>
<?php



$url="usersupdate.php";
$deleteurl=$_SERVER["PHP_SELF"];



 $str="select * from users";
$result=$conn->query($str);

if($result->num_rows>0){
  
  
        echo "<div class='table-wrapper'>
        <table class='fl-table'>
        <thead><tr>
        <th>user_id</th>
        <th>user_name</th>
        <th>user_gender</th>
        <th>user_adress</th>
        <th>user_phone</th>
        <th>user_gmail</th>
        <th>isssue_Date</th></tr></thead><tbody>";
        while($row=$result->fetch_assoc()){
    echo "<tr>
    <td>".$row["user_id"]."</td>
    <td>".$row["username"]."</td>
    <td>".$row["gender"]."</td>
    <td>".$row["user_adress"]."</td>
    <td>".$row["phone"]."</td>
    <td>".$row["user_email"]."</td>
    <td>".$row["issued_date"]."</td>
    <td><button class='update' style='  display:inline-block;
    padding: 10px 20px;
    font-size:16px;
    font-weight:bold;
    text-align: center;
    text-decoration: none;
    border: 2px solid #000;
    border-radius:5px;
    background-color: #fff;
    cursor: pointer;'><a style='color:black;text-decoration:none;'href='$url?id=".$row['user_id']."' style='text-decoration:none'>update</a></button></td>
  
    </tr>";

       }    echo "</tbody></table></div>";
     
    }else{
        echo "no result";
    }

    if($_SERVER["REQUEST_METHOD"]=="GET"){

        if(isset($_GET['id'])){
            $id=$_GET['id'];
           
            $deleteurl=$_SERVER["PHP_SELF"];
        
            $delete="delete from users where user_id=$id";
            $conn->query($delete);

            $conn->query($str);
        }
        
        } 



?>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html><!--  <button class='update' style='  display:inline-block;
    padding: 10px 20px;
    font-size:16px;
    font-weight:bold;
    text-align: center;
    text-decoration: none;
    border: 2px solid #000;
    border-radius:5px;
    background-color: #fff;
    cursor: pointer;'><a style='color:black;text-decoration:none;' href='$deleteurl?id=".$row['user_id']."' style='text-decoration:none' method='post'>delete</a></button> -->