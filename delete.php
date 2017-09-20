<?php
require_once("connection.php");

$id = $_POST['check'];

$sql = "DELETE FROM tbl_drinks WHERE drinks_id = '$id'";

if ($conn->query($sql) === TRUE) {
   	header("location: index.php");
   }
   else{
   	echo "Error:" . $sql . "<br>" . $conn->error;
   }

$conn->close()

?>