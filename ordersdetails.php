<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders details</title>
<link rel="stylesheet" href="../products/css/details.css">   
</head>
<body>

<?php require 'startsession.php'?>

<?php include 'connection.php'?>
<?php
  $deleteurl="";
  $url=$_SERVER["PHP_SELF"];
  $updateurl="ordersupdate.php";

 $str="select o.orders_id,u.username,u.phone,p.product_name,p.product_rupees,o.order_count,o.order_date,o.total
 from orders o join users u on o.user_id =u.user_id join
 products p on o.product_id = p.product_id ";
 $result=$conn->query($str);
if($_SERVER["REQUEST_METHOD"]=="GET"){

    if(isset($_GET['username'])){
    
        $str="select o.orders_id,u.username,u.phone,p.product_name,p.product_rupees,o.order_count,o.order_date,o.total
        from orders o join users u on o.user_id =u.user_id join
        products p on o.product_id = p.product_id order by u.username asc";

        $result=$conn->query($str);
        
    }
    
    } 
    if($_SERVER["REQUEST_METHOD"]=="GET"){

        if(isset($_GET['productname'])){
        
            $str="select o.orders_id,u.username,u.phone,p.product_name,p.product_rupees,o.order_count,o.order_date,o.total
            from orders o join users u on o.user_id =u.user_id join
            products p on o.product_id = p.product_id order by p.product_name asc";
    
            $result=$conn->query($str);
            
        }
        
        } 
        if($_SERVER["REQUEST_METHOD"]=="GET"){

            if(isset($_GET['productrupees'])){
            
                $str="select o.orders_id,u.username,u.phone,p.product_name,p.product_rupees,o.order_count,o.order_date,o.total
                from orders o join users u on o.user_id =u.user_id join
                products p on o.product_id = p.product_id order by p.product_rupees asc";
        
                $result=$conn->query($str);
                
            }
            
            } 
            if($_SERVER["REQUEST_METHOD"]=="GET"){

                if(isset($_GET['count'])){
                
                    $str="select o.orders_id,u.username,u.phone,p.product_name,p.product_rupees,o.order_count,o.order_date,o.total
                    from orders o join users u on o.user_id =u.user_id join
                    products p on o.product_id = p.product_id order by o.order_count asc";
            
                    $result=$conn->query($str);
                    
                }
                
                } 
                if($_SERVER["REQUEST_METHOD"]=="GET"){

                    if(isset($_GET['total'])){
                    
                        $str="select o.orders_id,u.username,u.phone,p.product_name,p.product_rupees,o.order_count,o.order_date,o.total
                        from orders o join users u on o.user_id =u.user_id join
                        products p on o.product_id = p.product_id order by o.total asc";
                
                        $result=$conn->query($str);
                        
                    }
                    
                    } 
                if($_SERVER["REQUEST_METHOD"]=="GET"){

                    if(isset($_GET['date'])){
                    
                        $str="select o.orders_id,u.username,u.phone,p.product_name,p.product_rupees,o.order_count,o.order_date,o.total
                        from orders o join users u on o.user_id =u.user_id join
                        products p on o.product_id = p.product_id order by o.order_date asc";
                
                        $result=$conn->query($str);
                        
                    }
                    
                    } 
        

if($result->num_rows>0){
  
  
        echo "<div class='table-wrapper'>
        <table class='fl-table'>
        <thead>
        <tr>
        <th>delevered_id</th>
        <th><a style='color:white;text-decoration:none;' href='$url?username=user' style='text-decoration:none'>username</a></th>
        <th>user_phone</th>
        <th><a style='color:white;text-decoration:none;' href='$url?productname=product' style='text-decoration:none'>product_name</a></th>
        <th><a style='color:white;text-decoration:none;' href='$url?productrupees=ruppees' style='text-decoration:none'>product_rupees</a></th>
        <th><a style='color:white;text-decoration:none;' href='$url?count=count' style='text-decoration:none'>delever_count</a></th>
        <th><a style='color:white;text-decoration:none;' href='$url?date=date' style='text-decoration:none'>delevered_date</a></th>
        <th><a style='color:white;text-decoration:none;' href='$url?total=total' style='text-decoration:none'>total</a></th>
   

   </tr></thead><tbody>
        ";
        while($row=$result->fetch_assoc()){
    echo "<tr>
    <td>".$row["orders_id"]."</td>
    <td>".$row["username"]."</td>
    <td>".$row["phone"]."</td>
    <td>".$row["product_name"]."</td>
    <td>".$row["product_rupees"]."</td>
    <td>".$row["order_count"]."</td>
    <td>".$row["order_date"]."</td>
    <td>".$row["total"]."</td>
   
    <td><button class='update' style='  display:inline-block;
    padding: 10px 20px;
    font-size:16px;
    font-weight:bold;
    text-align: center;
    text-decoration: none;
    border: 2px solid #000;
    border-radius:5px;
    background-color: #fff;
    cursor: pointer;'><a style='color:black;text-decoration:none;' href='$updateurl?id=".$row['orders_id']."' style='text-decoration:none'>update</a></button></td><td>
    </tr>";

       }    echo "</tbody></table>";
     
    }
    else{
        echo "<table border='1'>
        <tr>
        <th>order_id</th>
        <th>usernane_name</th>
        <th>phone</th>
        <th>product_name</th>
        <th>product_rupees</th>
        <th>delever_count</th>
        <th>delever_date</th>
</tr></table></div>";
    }

     
   
?> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    // Function to make AJAX request to PHP script
    // Fetch specific data from PHP script
fetch('test.php')
  .then(response => response.json())  // Parse the response as JSON
  .then(data => {
    // Process the parsed JSON data
    console.log(data);  // Output the parsed JSON data
    // You can access properties of the data object here and perform further processing
  })
  .catch(error => console.error('Error fetching data:', error));

</script>
</body>
</html>