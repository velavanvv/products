<?php $server='localhost';
$user='root';
$password='';
$database='test';



 
$conn=new mysqli($server,$user,$password,$database);
if(!$conn){
    die(mysqli_connect_errno()."connection lost");
}
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    // Fetch associative array
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close connection
$conn->close();

// Output data as JSON
header('Content-Type: application/json');
echo json_encode($data);

?>