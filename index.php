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
		<div class="row col-mid-12" style="margin-top: 50px;">
      <form method="post" name="drinks">
			<table class="table table-bordered table-hover"></div>
		<tr>
      <th></th>
			<th class="text-center">Name</th>
			<th class="text-center">Type</th>
			<th class="text-center">Quantity</th>
			<th class="text-center">Price</th>
      <th class="text-center">Date</th>
      <th class="text-center">Total</th>
		</tr>
    <?php
    $sql = "SELECT * FROM tbl_drinks";
      $result = $conn->query($sql);

      if ($result->num_rows >0) {
        while($row = $result->fetch_assoc()){
          $totalprice = $row['drinks_price'] * $row['drinks_quantity'];
          $originaldate = $row['drinks_date_added'];
          $newdate = date("M/d/Y h:i a", strtotime($originaldate));
    ?>
		<tr>
      <td class="text-center">
      <input type="checkbox" value="<?php echo $row['drinks_id'];?>" name="check"></td>
			<td class="text-center"><?php echo $row['drinks_name'];?></td>
			<td class="text-center"><?php echo $row['drinks_type'];?></td>
			<td class="text-center"><?php echo $row['drinks_quantity'];?></td>
			<td class="text-center"><?php echo $row['drinks_price'];?></td>
      <td class="text-center"><?php echo $newdate?></td>
      <td class="text-center"><?php echo $totalprice?></td>
		</tr>
    <?php 

        }
      }
      ?>
		
		</table>
		</div>
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add">Add</button>
  <a onClick="edit_drinks();" class="btn btn-warning btn-lg">Edit</a>
  <a onClick="delete_drinks();" class="btn btn-danger btn-lg">Delete</a>
  </form>

  <div class="modal fade" id="add" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add</h4>
        </div>
        <form method="post" action="add.php">
        <div class="modal-body">
                <div class="well">
          	
          		<div>
          		<label>Name:</label>
          		<input type="name" name="name" id="name">
          		</div>
          		<div>
          		<label>Type:</label>
              <select class="form-control" name="type">
                <option>Soda</option>
                <option>Coffee</option>
                <option>Juice</option>
                <option>Water</option>
                <option>Milk</option>
                <option>Choco</option>
              </select>
          		</div>
          		<div>
          		<label>Quantity:</label>
          		<input type="quantity" name="quantity" id="quantity">
          		</div>
          		<div>
          		<label>Price:</label>
          		<input type="price" name="price" id="price">
          		</div>
              </div>
              <div>
          </div>
          
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-default" value="Add">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div></form>
      </div>
    </div>
    </div>
  </form>
  </div>
	</div>
</body>
</html>