<?php
session_start();

if(isset($_SESSION['email'])){
    header("location: ./index.php");
}
if(isset($_POST['submit'])){
    require_once('inc/config.php');

    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
    //echo $query;
    $selectq=mysqli_query($connection,$query);
    if(mysqli_num_rows($selectq)>0){
        $result=mysqli_fetch_assoc($selectq);
        $_SESSION['email']=$result['email'];
        $_SESSION['type']=$result['type'];

        $cusqu="SELECT * FROM customers WHERE email='$email' LIMIT 1";
        $cusqur=mysqli_query($connection, $cusqu);
        if(mysqli_num_rows($cusqur)>0){
        	$cusresult=mysqli_fetch_assoc($cusqur);
        	$_SESSION['name']=$cusresult['firstname'];
            $_SESSION['customerid']=$cusresult['id'];
        }
        header("location: ./index.php");
    }else{
    	echo "<script>alert('Username or Password is invalied!');</script>";
    }
}

require_once('layout/header.php');

?>

<div>
	<h1>Customer Login</h1>
	<img class="pic" src="Images/customer.png">
</div>

<div class="box1">
	<table class="tableAlign">
		<tr>
			<td> </td>
			<td>
				<div class="columnAlign">
					<form method="post" action="customer.php">
						<h3>Login</h3>
						<table>
							<tr>
								<td>Email</td> <td>  <input type="email" name="email"  placeholder="Email"></td></tr>
							<tr><td>Password</td>  <td>  <input type="password" name="password" placeholder="Password"></td></tr>
							<tr> <td><input type="submit" value="Login" name="submit"></td> </tr>
						</table>
						<p>New User? <a href="cusreg.php">Register Here</a></p>
					</form>
				</div>
			</td>
		</tr>
	</table>
</div>

</body>



</html>