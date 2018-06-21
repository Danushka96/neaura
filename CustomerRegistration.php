<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "neaura";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Connection failed" .$conn->connect_error);
}

$fname = $lname= $age= $gender= $mobileno= $email= $password = "";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $age = $_POST['age'];
    $gender = $_POST['Gender'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    $password = $_POST['password'];

}

$s = "INSERT INTO customer VALUE ('$email','$fname','$lname','$age','$gender','$mobileno','$password')";

if($conn->query($s)==TRUE){
    echo "Successful";
}else{
    echo "Error".$s."<br>" . $conn->error;
}

?>