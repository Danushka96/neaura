<?php
session_start();
require_once('inc/config.php');
require_once('layout/header.php');

$producttype=$_GET['type'];

$query="SELECT * FROM items WHERE type='$producttype'";
$querycon=mysqli_query($connection,$query);

$item='';
while ($result=mysqli_fetch_assoc($querycon)) {
	$productname=$result['name'];
	$productid=$result['id'];
	$item=$item."<a href='product.php?product=$productid'>$productname</a><br><br>";
}

?>

<p>
<?php echo $item; ?>
</p>


<!--Footer-->
    
<?php require_once('layout/footer.php'); ?>
</body>
</html>