<?php
require_once("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Financial App</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="buttons.js"></script>
</head>
<body>
	<div class="container">
		<br><br>
		<?php
			$id = $_POST['check'];

			$sql = "SELECT * FROM tbl_drinks WHERE drinks_id = '$id'";
			$result = $conn->query($sql);
			$row = $result->fetch_array();
		?>
			<form method="post" action="update.php">
				<input type="hidden" name="drinks_id" value="<?php echo $row['drinks_id'];?>">
				<div class="form-group col-md-6 col-md-offset-3">
					<label>Name</label>
					<input type="text" name="name" class="form-control" value="<?php echo $row['drinks_name'];?>">
				</div>
				<div class="form-group col-md-6 col-md-offset-3">
					<label>Type</label>
					<select class="form-control" name="type">
					<option>Soda</option>
                	<option>Coffee</option>
                	<option>Juice</option>
                	<option>Water</option>
                	<option>Milk</option>
                	<option>Choco</option>
					</select>
					</div>
				<div class="form-group col-md-6 col-md-offset-3">
					<label>Quantity</label>
					<input type="text" name="quantity" class="form-control" value="<?php echo $row['drinks_quantity'];?>">
				</div>
				<div class="form-group col-md-6 col-md-offset-3">
					<label>Price</label>
					<input type="text" name="price" class="form-control" value="<?php echo $row['drinks_price'];?>">
				</div>
				<div class="form-group col-md-6 col-md-offset-3">
					<button type="submit" name="update" class="btn btn-success">Submit</button>
				</div>
			</form>
	</div>
</body>
</html>
