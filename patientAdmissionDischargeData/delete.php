<?php
$servername = "localhost";
$username = "root"; 
$password = "ab_jawadDB247@$&"; 
$dbname = "HIMS"; 


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id=$_REQUEST['id'];
$query = "DELETE FROM patientAdmissionnData WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
header("Location: view.php"); 
?> 