<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "fashioncart");

if (isset($_POST["add_to_cart"])) {
	if (isset($_SESSION["shopping_cart1"])) {
		$item_array_id = array_column($_SESSION["shopping_cart1"], "item_id");
		if (!in_array($_GET["id"], $item_array_id)) {
			$count = count($_SESSION["shopping_cart1"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'         =>  $_GET["image"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart1"][$count] = $item_array;
		} else {
			echo '<script>alert("Item Already Added")</script>';
		}
	} else {
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'         =>  $_GET["image"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart1"][0] = $item_array;
	}
}

if (isset($_GET["action"])) {
	if ($_GET["action"] == "delete") {
		foreach ($_SESSION["shopping_cart1"] as $keys => $values) {
			if ($values["item_id"] == $_GET["id"]) {
				unset($_SESSION["shopping_cart1"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="shoe.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>FashionCart</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<br />
	<div class="container">
		<br />
		<br />
		<?php
		$query = "SELECT * FROM tbl_product ORDER BY id ASC";
		$result = mysqli_query($connect, $query);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_array($result)) {
		?>
				<div class="col-md-4">
					<form method="post" action="shoe.php?action=add&id=<?php echo $row["id"]; ?>&image=<?php echo $row["image"]; ?>">
						<div style="border:1px solid #333; background-color:white; border-radius:5px; padding:16px;" align="center">
							<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

							<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

							<input type="text" name="quantity" value="1" class="form-control" />

							<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

							<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

						</div>
					</form>
				</div>
		<?php
			}
		}
		?>
		<div style="clear:both"></div>
		<br />
		<h3>Order Details</h3>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th width="20%">Product</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>
				<?php
				if (!empty($_SESSION["shopping_cart1"])) {
					$total = 0;
					foreach ($_SESSION["shopping_cart1"] as $keys => $values) {
				?>
						<tr>
							<td><img src="images/<?php echo $values["item_name"]; ?>" class="img-responsive" /></td>
							<td><?php echo $values["item_quantity"]; ?></td>
							<td>$ <?php echo $values["item_price"]; ?></td>
							<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
							<td><a href="shoe.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
						</tr>
					<?php
						$total = $total + ($values["item_quantity"] * $values["item_price"]);
					}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td><a href="payment.html">Check-out</a></td>
					</tr>
				<?php
				}
				?>

			</table>
		</div>
	</div>
	</div>
	<br />
</body>

</html>