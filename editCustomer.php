<?php

session_start();

require_once('layout/header.php');

if(!isset($_SESSION['email'])){
    header("location: ./index.php");
}

require_once('inc/config.php');

$cusEmail=$_SESSION['email'];
$selectq="SELECT * FROM customers WHERE email='$cusEmail'";
$selectcon=mysqli_query($connection,$selectq);
$result=mysqli_fetch_assoc($selectcon);


if(isset($_POST['submit'])){
    require_once('inc/config.php');
    $fname=$_POST['Fname'];
    $lname=$_POST['Lname'];
    $age=$_POST['age'];
    $mobile=$_POST['mobileno'];

    $cusq="UPDATE customers SET firstname='$fname', lastname='$lname', age='$age', contact='$mobile' WHERE email='$_SESSION[email]' ";
    $cuscon=mysqli_query($connection,$cusq);
    
    //echo $cusq;
    if($cuscon){
        echo "<script>alert('Registered Successfully');</script>";
        header("location: ./editCustomer.php");
    }else{
        echo "<script>alert('Something Wrong');</script>";
    }
}

?>



<div>
    <img src="Images/customer-reg.png" class="pic">
    <h1>Edit Your Account</h1>

</div>

<div class="box">
    <form method="post" action="editCustomer.php">
        <div class="bg" style="margin-left: 0px">
            <table class="tableAlign">
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="Fname" value="<?php echo $result['firstname']; ?>" ></td>

                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="Lname" value="<?php echo $result['lastname']; ?>"></td>

                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" name="age" value="<?php echo $result['age']; ?>"></td>
                </tr>
                
                <tr>
                    <td>Mobile No</td>
                    <td><input type="text" name="mobileno" value="<?php echo $result['contact']; ?>"></td>

                </tr>
                <tr>
                    <td><input type="submit" value="Edit" name="submit" ></td>

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