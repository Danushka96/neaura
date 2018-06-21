<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "neaura";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Connection failed" .$conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $age = $_POST['age'];
    $gender = $_POST['Gender'];
    $mobileno = $_POST['mobileno'];
    $branchno = $_POST['branchno'];
    $email = $_POST['email'];
    $password = $_POST['password'];

}
$s = "INSERT INTO admin VALUE ('$fname','$lname','$age','$gender','$mobileno','$branchno','$email','$password')";

if($conn->query($s)==TRUE){
    echo "Successful";
}else{
    echo "Error".$s."<br>" . $conn->error;
}
