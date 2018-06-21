<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "neaura";

$conn = new mysqli($servername, $username, $password, $dbname);

$checkEmail="";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $checkEmail = $_POST['checkemail'];

}
$sql1= "SELECT Email FROM customer WHERE Email='".$checkEmail."';";
$result1 = $conn->query($sql1);

if($result1->num_rows> 0) {
    header('Location:https://www.google.com/');
}else{
    header('Location:CustomerRegistration.html');
}

?>