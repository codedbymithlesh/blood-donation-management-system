<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "registered_donor";

$conn = new mysqli($server,$user,$pass,$db);
if($conn->connect_error){
    die("Registration Failed!!!" . $conn->connect_error);
}
else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $blood = $_POST['blood'];
    $city = $_POST['city'];

    $sql="INSERT INTO donor_list (name,email,number,blood,city) 
            VALUES('$name','$email','$number','$blood','$city')";
    if($conn->query($sql) === TRUE){
        echo "<h1 align=center>Registration Successful!</h1>";
    }
    else{
        echo "<h1 align=center>Registration Failed</h1>" . $conn->connect_error;
    }
    $conn->close();
}
?>