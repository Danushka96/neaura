<?php

require_once('layout/header.php');

?>

<div>
	<h1>Customer Login</h1>
	<img class="pic" src="Images/customer.png">
</div>

<div class="box1">
	<table class="tableAlign">
		<tr>
			<td>
				<div class="bg">
					<form method="post" action="checkEmail.php ">
						<h3>Create an Account</h3>
						Please Enter Your Email Address<br><br>
						<input type="email" name="checkemail" id="email" placeholder="Email Address"><br><br>
						<input type="submit" value="Create an Account">
					</form>
				</div>
			</td>
			<td> </td>
			<td>
				<div class="columnAlign">
					<form method="post" action="CustomerLogin.php">
						<h3>Already Registered</h3>
						<table>
							<tr>
								<td>Username</td> <td>  <input type="text" name="email"  placeholder="Username"></td></tr>
							<tr><td>Password</td>  <td>  <input type="password" name="password" placeholder="Password"></td></tr>
							<tr> <td><input type="submit" value="Login"></td> </tr>
						</table>
					</form>
				</div>
			</td>
		</tr>
	</table>
</div>

</body>



</html>