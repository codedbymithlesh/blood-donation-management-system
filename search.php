<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "blood_donation";

$conn = new mysqli($server, $user, $pass, $db);


if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if ($server["GET"] == "GET") {
    $blood = $_GET["blood"];
    $location = $_GET["location"];

  
    $blood = $conn->real_escape_string($blood);
    $location = $conn->real_escape_string($location);

    $sql ="SELECT * from donor_list WHERE blood='$blood' and location='$location'";
    $result = $conn->query($sql);
}

?>