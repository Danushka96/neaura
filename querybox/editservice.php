<?php
session_start();
require_once('../inc/config.php');

$service=$_GET['service'];
$id=$_SESSION['branch'];

$selectq="SELECT * FROM services where id='$service'";
//echo $selectq;
$selectcon=mysqli_query($connection,$selectq);
$selectresult=mysqli_fetch_assoc($selectcon);

if(isset($_POST['serviceSubmit'])){
	$servicename=$_POST['serviceName'];
	$serviceprice=$_POST['servicePrice'];
	
	$insqq="UPDATE services SET name='$servicename', price='$serviceprice' WHERE id='$service'";
	$inscon=mysqli_query($connection,$insqq);

	
	if($inscon){
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
		<div class="modal-header"> Edit Item </div>
		<div class="modal-body">
			<div class="modal-property">Name<input type="text" name="serviceName" value="<?php echo $selectresult['name']; ?>"></div>
			<div class="modal-property">Price<input type="text" name="servicePrice" value="<?php echo $selectresult['price']; ?>"></div>
		</div>
		<div class="modal-footer">
			<button type="submit" name="serviceSubmit">Update</button>
		</div>
	</form>
</div>
</body>
</html>