<?php

require_once('layout/header.php');

if(isset($_SESSION['email'])){
    header("location: ./index.php");
}

if(isset($_POST['submit'])){
    require_once('inc/config.php');
    $fname=$_POST['Fname'];
    $lname=$_POST['Lname'];
    $age=$_POST['age'];
    $mobile=$_POST['mobileno'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $userq="INSERT INTO users VALUES ('$email','$password',2)";
    $usercon=mysqli_query($connection,$userq);

    $cusq="INSERT INTO customers (firstname, lastname, age, email, contact) VALUES ('$fname','$lname',$age,'$email','$mobile')";
    $cuscon=mysqli_query($connection,$cusq);
    
    //echo $cusq;
    if($cuscon&&$usercon){
        echo "<script>alert('Registered Successfully');</script>";
        header("location: ./customer.php");
    }else{
        echo "<script>alert('Something Wrong');</script>";
    }
}

?>



<div>
    <img src="Images/customer-reg.png" class="pic">
    <h1>Create A Customer Account</h1>

</div>

<div class="box">
    <form method="post" action="cusreg.php">
        <div class="bg" style="margin-left: 0px">
            <table class="tableAlign">
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="Fname" ></td>

                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="Lname" ></td>

                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" name="age" ></td>
                </tr>
                
                <tr>
                    <td>Mobile No</td>
                    <td><input type="text" name="mobileno"></td>

                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>

                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id="password"></td>

                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="re-password" id="re-password" onkeyup="checkPassword()" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="color: red" id="passlabel">Password not matched</td>
                </tr>
                <tr>
                    <td><input type="submit" value="Register Now" name="submit" ></td>

                </tr>

            </table>
        </div>




    </form>


</div>

<script>
    function checkPassword() {
        var pass1 = document.getElementById('password').value;
        var pass2 = document.getElementById('re-password').value;
        var label = document.getElementById('passlabel');

        if(pass1 != pass2){
            //alert("Password not correct");
            return false;
        }else{
            document.getElementById('passlabel').setAttribute("style","display:none");
            return true;
        }
    }

</script>

</body>
</html>