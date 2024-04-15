<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product deatails</title>
    <link rel="stylesheet" href="../products/css/details.css">   

</head>
<body>

<?php require 'startsession.php'?>
<?php include 'connection.php'?>
<?php



 $str="select * from products";
$result=$conn->query($str);
$urlcustom=$_SERVER['PHP_SELF'];  
if($_SERVER["REQUEST_METHOD"]=="GET"){

    if(isset($_GET['productname'])){
    
        $str="select * from products order by product_name asc";

        $result=$conn->query($str);
        
    }
    
    } 
    if($_SERVER["REQUEST_METHOD"]=="GET"){

        if(isset($_GET['productcount'])){
        
            $str="select * from products order by product_count asc";
    
            $result=$conn->query($str);
            
        }
        
        } 
        if($_SERVER["REQUEST_METHOD"]=="GET"){

            if(isset($_GET['productrupees'])){
            
                $str="select * from products order by product_rupees asc";
        
                $result=$conn->query($str);
                
            }
            
            } 
            if($_SERVER["REQUEST_METHOD"]=="GET"){

                if(isset($_GET['productdate'])){
                
                    $str="select * from products order by product_date asc";
            
                    $result=$conn->query($str);
                    
                }
                
                } 
$url="productupdate.php";
$deleteurl=$_SERVER["PHP_SELF"];
if($result->num_rows>0){
  
  
        echo "<div class='table-wrapper'>

        <table class='fl-table'>
        <thead><tr>
        <th>product_id</th>
        <th><a style='color:white;text-decoration:none;' href='$urlcustom?productname=user' style='text-decoration:none'>product_name</a></th>
        <th><a style='color:white;text-decoration:none;' href='$urlcustom?productcount=count' style='text-decoration:none'>product_count</a></th>
        <th>product_email</th>
        <th>product_number</th>
        <th><a style='color:white;text-decoration:none;' href='$urlcustom?productrupees=rupees' style='text-decoration:none'>product_rupees</a></th>
        <th><a style='color:white;text-decoration:none;' href='$urlcustom?productdate=date' style='text-decoration:none'>product_date</a></th>
        <th>product_update</th>
        <th>product_delete</th>

</tr>        </thead><tbody>
   
        ";
        while($row=$result->fetch_assoc()){
    echo "<tr>
    <td>".$row["product_id"]."</td>
    <td>".$row["product_name"]."</td>
    <td>".$row["product_count"]."</td>
    <td>".$row["product_email"]."</td>
    <td>".$row["product_number"]."</td>
    <td>".$row["product_rupees"]."</td>
    <td>".$row["product_date"]."</td>
    <td><button class='update' style='  display:inline-block;
    padding: 10px 20px;
    font-size:16px;
    font-weight:bold;
    text-align: center;
    text-decoration: none;
    border: 2px solid #000;
    border-radius:5px;
    background-color: #fff;
    cursor: pointer;'><a style='color:black;text-decoration:none;' href='$url?id=".$row['product_id']."' style='text-decoration:none'>update</a></button></td><td>
    <button class='update' style='  display:inline-block;
    padding: 10px 20px;
    font-size:16px;
    font-weight:bold;
    text-align: center;
    text-decoration: none;
    border: 2px solid #000;
    border-radius:5px;
    background-color: #fff;
    cursor: pointer;'><a style='color:black;text-decoration:none;' href='$deleteurl?id=".$row['product_id']."' style='text-decoration:none' method='post'>delete</a></button></td>
   
    </tr>";

       }    echo "<tbody></table></div>";
     
    }
    else{
        echo "<table border='1'>
        <tr>
        <th>product_id</th>
        <th>product_name</th>
        <th>product_count</th>
        <th>product_email</th>
        <th>product_number</th>
        <th>product_rupees</th>
        <th>product_date</th>
</tr></table> </div>";
    }

if($_SERVER["REQUEST_METHOD"]=="GET"){

if(isset($_GET['id'])){
    $id=$_GET['id'];
   


    $delete="delete from products where product_id=$id";
    $conn->query($delete);

}
} 
    
?>     
</body>
</html>