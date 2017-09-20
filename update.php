<?php
require_once "connection.php";

$name = $_POST['name'];
$type = $_POST['type'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$date = $_POST['date'];
$id = $_POST['drinks_id'];


$sql = "UPDATE tbl_drinks SET drinks_name = '$name', drinks_type = '$type', drinks_quantity = '$quantity', drinks_price = '$price', drinks_date_added = '$date' WHERE drinks_id = '$id'";
   
   if ($conn->query($sql) === TRUE) {
   	header("location: index.php");
   }
   else{
   	echo "Error:" . $sql . "<br>" . $conn->error;
   }

$conn->close()

?>
