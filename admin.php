<?php
session_start();

if(isset($_SESSION['email'])){
    header("location: ./index.php");
}
if(isset($_POST['submit'])){
    require_once('inc/config.php');

    $username=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM users WHERE email='$username' AND password='$password' LIMIT 1";

    $selectq=mysqli_query($connection,$query);
    if(mysqli_num_rows($selectq)>0){
        $result=mysqli_fetch_assoc($selectq);
        $_SESSION['email']=$result['email'];
        $_SESSION['type']=$result['type'];
        $_SESSION['branch']=$result['branch'];

        header("location: ./adminpanel.php");
    }
}

require_once('layout/header.php');

?>


<div>
    <img class="pic" src="Images/Admin.png">
    <h1>Admin login</h1>

</div>

<form method="post" action="admin.php">


    <div class="box">

        <table class="tableAlign" >


            <tr>
                <td>Email</td> <td>  <input type="email" name="email" id="email" placeholder="Email"></td></tr>
            <tr><td>Password</td>  <td>  <input type="password" name="password" id="password" placeholder="Password"></td></tr>
            <tr> <td><input type="submit" value="Login" name="submit"></td> </tr>

        </table>

    </div>



</form>

</table>

</body>
</html>