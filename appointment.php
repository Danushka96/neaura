<?php
session_start();
require_once('inc/config.php');

if(!isset($_SESSION['name'])){
	header("location: ./customer.php");
}

$serviceq="SELECT * FROM services";
$servicecon=mysqli_query($connection,$serviceq);
$customer=$_SESSION['customerid'];

if(isset($_POST['appoint'])){
	$tel=$_POST['tel'];
	$branch=$_POST['branch'];
	$appdate=$_POST['date1'];
	$serviceid=$_POST['service'];
	$apptime=$_POST['time1'];

	//echo $apptime;
	$insq="INSERT INTO appointment (branchid, customerid, service_id, appdate, apptime) VALUES ('$branch','$customer','$serviceid','$appdate','$apptime')";
	echo $insq;
	$inscon=mysqli_query($connection,$insq);

	if($inscon){
		echo "<script>alert('submitted Successfully')</script>";
	}else{
		echo "<script>alert('somethning went wrong')</script>";
	}
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Appointment Form</title>
<link rel="stylesheet" type="text/css" href="css/appointment.css">
</head>

<body>
<div id="ap">
<h1>Hi, <?php echo $_SESSION['name']; ?></h1>
<h1>Quick Appointment</h1>
<form method="POST" action="">
<label for="tel">Enter Phone Number</label>
<input type="tel" name="tel" id="tel" maxlength="10" placeholder="Phone Number"/><br><br>
<label for="branch">Select Branch</label>
<select name="branch">
<option selected value="1">Borella </option>
<option value="2">Moratuwa</option>
<option value="3">Kelaniya</option>
</select><br><br>
<label for="tel">Appointment Date</label>
<input type="date" name="date1" id="date"/><br><br>
<label for="services">Select the service</label>
<select name="service">
<?php
while ($result=mysqli_fetch_assoc($servicecon)) {
	$sub="<option value=".$result['id'].">".$result['name']." </option>";
	echo $sub;
}
?>

</select><br><br>
<label for="time">Appointment Time</label>
<input type="time" name="time1" id="time"/><br><br>
</select>
<input type="submit" name="appoint" value="Submit">
</form>
</div>
</body>
</html>
