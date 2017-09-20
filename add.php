<?php
require_once "connection.php";

$name = $_POST['name'];
$type = $_POST['type'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];


$sql = "INSERT INTO tbl_drinks(`drinks_name`,`drinks_type`,`drinks_quantity`,`drinks_price`)VALUES('$name','$type','$quantity','$price')";
   
   if ($conn->query($sql) === TRUE) {
   	header("location: index.php");
   }
   else{
   	echo "Error:" . $sql . "<br>" . $conn->error;
   }

$conn->close()

?>
