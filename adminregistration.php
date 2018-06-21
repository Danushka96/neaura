<?php

require_once('layout/header.php');

?>

<div>
    <img src="Images/adminReg.png" class="pic">
    <h1>Create A Admin Account</h1>

</div>

<div class="box">
    <form method="post" action="AdminReg.php">
        <div class="bg">
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
                    <td>Gender</td>
                    <td><input type="radio" name="Gender" value="male" >Male
                        <input type="radio" name="Gender" value="female" >Female</td>

                </tr>
                <tr>
                    <td>Mobile No</td>
                    <td><input type="text" name="mobileno"></td>

                </tr>

                <tr>
                    <td>Branch no</td>
                    <td>
                        <select name="branchno">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>

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
                    <td><input type="password" id="re-password" onkeyup="checkPassword()"></td>

                </tr>
                <tr>

                    <td><input type="submit" value="Register Now" ></td>

                </tr>


            </table>
        </div>

    </form>
</div>

<script>
    function checkPassword() {
        var pass1 = document.getElementById('password').value;
        var pass2 = document.getElementById('re-password').value;

        if(pass1 != pass2){
            alert("Password not correct");
            return false;
        }else{
            return true;
        }
    }

</script>

</body>
</html>