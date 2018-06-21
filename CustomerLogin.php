<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "neaura";

$conn = new mysqli($servername, $username, $password, $dbname);

$user = $pass = "";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $user = $_POST['email'];
    $pass = $_POST['password'];

}
$sql= "SELECT Email, Password FROM customer WHERE Email='".$user."';";
$result = $conn->query($sql);

if($result->num_rows> 0){
       $row=$result->fetch_assoc();
       if($row['Email']==$user)

           if($row['Password']==$pass){
               echo "Successful";
               $_SESSION['uname']= $user;
           }else{
               echo "Password incorrect";
           }
       }else {
        echo "Username incorrect";

}



?>