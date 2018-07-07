<?php

session_start();
require_once('inc/config.php');

if(!isset($_SESSION['branch'])){
	header("location: ./admin.php");
}

//Branches
$id=$_SESSION['branch'];
$selectb="SELECT * FROM branches WHERE id=$id";
$selectcon=mysqli_query($connection,$selectb);


//Outlets
$itemq="SELECT * FROM items";
$itemcon=mysqli_query($connection,$itemq);


//Services
$servicesq="SELECT * FROM services";
$servicecon=mysqli_query($connection,$servicesq);

if(isset($_POST['branchsubmit'])){
	$name=$_POST['branchname'];
	$location=$_POST['branchlocation'];
	$hours=$_POST['branchhours'];
	$appointments=$_POST['branchappointment'];

	$upq="UPDATE branches SET name='$name', location='$location', hours='$hours', appointments='$appointments' WHERE id='$id'";
	echo $upq;
	$upqcon=mysqli_query($connection,$upq);
	if($upqcon){
		header("location: ./adminpanel.php");
	}else{
		echo "<script>alert('Something Wrong');</script>";
	}
}
if(isset($_POST['additem'])){
	$itemid=$_POST['itemid'];
	$name=$_POST['itemname'];
	$price=$_POST['itemprice'];
	$quantity=$_POST['itemquantity'];
	$type=$_POST['type'];
	$image=$_POST['itemimage'];

	$insqq="INSERT INTO items VALUES('$itemid','$name','$price','$type','$image')";
	$inscon=mysqli_query($connection,$insqq);

	$insqitem="INSERT INTO branchitems VALUES ('$itemid','$id','$quantity')";
	$insqcon=mysqli_query($connection,$insqitem);
	//echo $insqitem;
	if($inscon&&$insqcon){
		header("location: ./adminpanel.php");
	}else{
		echo "<script>alert('Something Wrong');</script>";
	}
}

if(isset($_POST['serviceSubmit'])){
	$servicename=$_POST['serviceName'];
	$serviceprice=$_POST['servicePrice'];

	$serviceins="INSERT INTO services (name, branchid, price) VALUES('$servicename','$id','$serviceprice')";
	$serviceinscon=mysqli_query($connection,$serviceins);
	if($serviceinscon){
		header("location: ./adminpanel.php");
	}else{
		echo "<script>alert('Something Wrong');</script>";
	}
}

if(isset($_GET['delitem'])){
	$itemid=$_GET['delitem'];
	$delitem="DELETE FROM items WHERE id='$itemid'";
	$delcon=mysqli_query($connection,$delitem);
	if($delcon){
		header("location: ./adminpanel.php");
	}else{
		echo "<script>alert('Something Wrong');</script>";
	}
}

if(isset($_GET['delservice'])){
	$serviceid=$_GET['delservice'];
	$delservice="DELETE FROM services WHERE id='$serviceid'";
	$delcon=mysqli_query($connection,$delservice);
	if($delcon){
		header("location: ./adminpanel.php");
	}else{
		echo "<script>alert('Something Wrong');</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="./css/styles.css">
	<link rel="stylesheet" type="text/css" href="./css/adminpanel.css">
</head>

<body>
<div class="page">

	<div class="tab-panel left">
		<div class="tab-header">Ne'Aura</div>
		<div id="tabBranch" class="tab" onclick="showTable(1)">Branches</div>
		<div id="tabOutlets" class="tab" onclick="showTable(2)">Outlets</div>
		<div id="tabServices" class="tab" onclick="showTable(3)">Services</div>
	</div>

	<div class="table-panel right">

		<div id="welcome_panel" style="display: block;">
			Welcome
		</div>

		<div id="branch_table" style="display: none;">
			<div class="table-title">Branch Managing</div>
			<table>
				<tr><button id="btnEditBranch" class="btnAddition">Edit Branch Info</button></tr>
				<tr>
					<th>Name</th>
					<th>Location</th>
					<th>Open Hours</th>
					<th>Number of Appointment</th>
				</tr>
				<?php
					$branch=mysqli_fetch_assoc($selectcon);
					$branchRow="<tr>
									<td> ".$branch['name']."</td>
									<td> ".$branch['location']."</td>
									<td> ".$branch['hours']."</td>
									<td> ".$branch['appointments']."</td>
								</tr>";
					echo $branchRow;
				?>
				<!--Get table data from the DB-->
			</table>
		</div>

		<div id="outlet_table" style="display: none;">
			<div class="table-title">Outlets Managing</div>
			<table>
				<tr><button id="btnAddItem" class="btnAddition">ADD A NEW ITEM</button></tr>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
				<!--Get table data from the DB-->
				<?php
					while($item=mysqli_fetch_assoc($itemcon)){
						$branchid=$id;
						$itemid=$item['id'];
						$finditemq="SELECT * FROM branchitems WHERE itemid='$itemid' AND branchid='$branchid' LIMIT 1";
						$finditemcon=mysqli_query($connection,$finditemq);
						$itemquntity=mysqli_fetch_assoc($finditemcon);
						$itemRow="<tr>
										<td> ".$item['id']."</td>
										<td> ".$item['name']."</td>
										<td> ".$item['price']."</td>
										<td> ".$itemquntity['quantity']."</td>
										<td> ".$item['image']."</td>
										<td> 
											<button onclick='edititem($itemid)'>Edit</button>
											<a href='adminpanel.php?delitem=$itemid'><button>Delete</button></a>
										</td>
									</tr>";
						echo $itemRow;
					}
				?>
			</table>
		</div>

		<div id="service_table" style="display: none;">
			<div class="table-title">Services Managing</div>
			<table>
				<tr><button id="btnAddService" class="btnAddition" onclick="showmodel()">ADD A NEW SERVICE</button></tr>
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
				<?php
					while($service=mysqli_fetch_assoc($servicecon)){
						$branchRow="<tr>
										<td> ".$service['name']."</td>
										<td> ".$service['price']."</td>
										<td> <button onclick='editservice($service[id])'>Edit</button>
											<a href='adminpanel.php?delservice=$service[id]'><button>Delete</button></a>
										</td>
									</tr>";
						echo $branchRow;
					}
				?>

			</table>
		</div>
	</div>
</div>

<!-- Model Box start -->

<!-- Edit Branch model box -->
<div id="editbranch" class="model">
	<div class="modal-content">
		<form method="POST" action="adminpanel.php">
			<div class="modal-header"> Edit Branch Info </div>
			<div class="modal-body">
				<div class="modal-property">Name<input type="text" name="branchname" value="<?php echo $branch['name']; ?>"></div>
				<div class="modal-property">Location<input type="text" name="branchlocation" value="<?php echo $branch['location']; ?>"></div>
				<div class="modal-property">Open Hours<input type="text" name="branchhours" value="<?php echo $branch['hours']; ?>"></div>
				<div class="modal-property">Appointments/h<input type="text" name="branchappointment" value="<?php echo $branch['appointments']; ?>"></div>
			</div>
			<div class="modal-footer">
				<button id="btnCanceleditbranch">Cancel</button>
				<button type="submit" name="branchsubmit">Edit</button>
			</div>
		</form>
	</div>
</div>

<!-- Customer adding model box -->
<div id="additem" class="model">
		<div class="modal-content">
		<form method="POST" action="adminpanel.php">
			<div class="modal-header"> Add Item </div>
			<div class="modal-body">
				<div class="modal-property">ID<input type="text" name="itemid" ></div>
				<div class="modal-property">Name<input type="text" name="itemname"></div>
				<div class="modal-property">Price<input type="text" name="itemprice"></div>
				<div class="modal-property">Quantity<input type="text" name="itemquantity"></div>
				<div class="modal-property">Type
					<select name="type" style="	float: right;
												margin: 0px;
												padding-left: 10px;
												width: 300px;
												height: 35px;
												line-height: 35px;
												font-size: 20px;">
						<option value="1">Face Care</option>
						<option value="2">Hair Care</option>
						<option value="3">Body Care</option>
					</select>
				</div>
				<div class="modal-property">Image<input type="text" name="itemimage"></div>
			</div>
			<div class="modal-footer">
				<button id="btnCancelEditClient">Cancel</button>
				<button type="submit" name="additem">Submit</button>
			</div>
		</form>
	</div>
</div>

<!-- Service adding model box -->
<div id="addservice" class="model">
	<div class="modal-content">
		<form method="POST" action="adminpanel.php">
			<div class="modal-header"> Add Item </div>
			<div class="modal-body">
				<div class="modal-property">Name<input type="text" name="serviceName"></div>
				<div class="modal-property">Price<input type="text" name="servicePrice"></div>
			</div>
			<div class="modal-footer">
				<button id="btnCancelAddService">Cancel</button>
				<button type="submit" name="serviceSubmit">Save</button>
			</div>
		</form>
	</div>
</div>

<!-- JavaScript linking -->
<script src="./js/adminpanel.js" type="text/javascript"></script>

<script>
function edititem(id) {
	var url="querybox/editItem.php?item="+id;
    var myWindow = window.open(url, "", "width=700,height=400");
}

function editservice(id) {
	var url="querybox/editservice.php?service="+id;
    var myWindow = window.open(url, "", "width=700,height=400");
}

function showmodel(){
	var mdlAddService = document.getElementById("addservice");
	mdlAddService.style.display = "block";
}
</script>

</body>
</html>