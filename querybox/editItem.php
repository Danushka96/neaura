<?php
session_start();
require_once('../inc/config.php');

$item=$_GET['item'];
$id=$_SESSION['branch'];

$selectq="SELECT * FROM items where id='$item'";
//echo $selectq;
$selectcon=mysqli_query($connection,$selectq);
$selectresult=mysqli_fetch_assoc($selectcon);

$quanq="SELECT * FROM branchitems WHERE branchid='$id' and itemid='$item'";
//echo $quanq;
$quancon=mysqli_query($connection,$quanq);
$quantity=mysqli_fetch_assoc($quancon);

if(isset($_POST['itemedit'])){
	$itemid=$_POST['itemid'];
	$name=$_POST['itemname'];
	$price=$_POST['itemprice'];
	$quantity=$_POST['itemquantity'];
	$type=$_POST['type'];
	$image=$_POST['itemimage'];

	$insqq="UPDATE items SET name='$name', price='$price', type='$type', image='$image' WHERE id='$itemid'";
	$inscon=mysqli_query($connection,$insqq);

	$insqitem="UPDATE branchitems SET quantity='$quantity' WHERE itemid='$itemid' AND branchid='$id'";
	//echo $insqitem;
	$insqcon=mysqli_query($connection,$insqitem);
	//echo $insqitem;
	if($inscon&&$insqcon){
		echo "<script>window.close();</script>";
	}else{
		echo "<script>alert('Something Wrong');</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Item</title>
	<link rel="stylesheet" type="text/css" href="./../css/styles.css">
	<link rel="stylesheet" type="text/css" href="./../css/adminpanel.css">
</head>
<body>
<div class="modal-content">
		<form method="POST" action="">
			<div class="modal-header"> Update Item </div>
			<div class="modal-body">
				<div class="modal-property">ID<input type="text" name="itemid" value="<?php echo $selectresult['id'] ?>"></div>
				<div class="modal-property">Name<input type="text" name="itemname" value="<?php echo $selectresult['name'] ?>"></div>
				<div class="modal-property">Price<input type="text" name="itemprice" value="<?php echo $selectresult['price'] ?>"></div>
				<div class="modal-property">Quantity<input type="text" name="itemquantity" value="<?php echo $quantity['quantity'] ?>"></div>
				<div class="modal-property">Type
					<select name="type" style="	float: right;
												margin: 0px;
												padding-left: 10px;
												width: 300px;
												height: 35px;
												line-height: 35px;
												font-size: 20px;">
						<option value="1" <?php if($selectresult['type']==1){echo "selected";} ?>>Face Care</option>
						<option value="2" <?php if($selectresult['type']==2){echo "selected";} ?>>Hair Care</option>
						<option value="3" <?php if($selectresult['type']==3){echo "selected";} ?>>Body Care</option>
					</select>
				</div>
				<div class="modal-property">Image<input type="text" name="itemimage" value="<?php echo $selectresult['image'] ?>"></div>
			</div>
			<div class="modal-footer">
				<button type="submit" name="itemedit">update</button>
			</div>
		</form>
	</div>
</body>
</html>