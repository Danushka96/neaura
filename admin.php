<?php

require_once('layout/header.php');

?>


<div>
    <img class="pic" src="Images/Admin.png">
    <h1>Admin login</h1>

</div>

<form method="post" action="AdminLogin.php">


    <div class="box">

        <table class="tableAlign" >


            <tr>
                <td>Username</td> <td>  <input type="text" name="email" id="email" placeholder="Username"></td></tr>
            <tr><td>Password</td>  <td>  <input type="password" name="password" id="password" placeholder="Password"></td></tr>
            <tr> <td><input type="submit" value="Login"></td> </tr>

        </table>

    </div>



</form>

</table>

</body>
</html>