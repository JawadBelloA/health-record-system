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
$query = "SELECT * from patientPersonalData where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
$row = mysqli_fetch_assoc($result);

if ($row < 1) {
header('location:view.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<header>

<div class="container mt-6">
<h1 class="title has-text-grey is-size-1-desktop ">Patient Personal Data</h1>
<a href="view.php" class="button has-background-success has-text-white">Back</a>
</div>

</header>
<body>
<div class="container mt-6">
<div class="table-container">
<?php

if (isset($errors)) {
    echo "<span style=\"color:red\">" . $errors . "</span>";
}

?>
<table class="table table is-hoverable table is-striped table is-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>hospital No.</th>
      <th>Reg Date</th>
      <th>Reffered From</th>
      <th>Reffered Date</th>
      <th>Patien tName</th>
      <th>Other Name</th>
      <th>Middle Name</th>
      <th>Occupation</th>
      <th>Address</th>
      <th>Patient GSM</th>
      <th>Nationality</th>
      <th>Place Of Birth</th>
      <th>State Of Origin</th>
      <th>Tribe</th>
      <th>Religion</th>
      <th>Employer</th>
      <th>Sex</th>
      <th>Insurance Status</th>
      <th>Marital Status</th>
      <th>HMO</th>
      <th>Next Of Kin</th>
      <th>Address Of NOK</th>
      <th>GSM Of NOK</th>
      <th>Relationship</th>
      <th>Action</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <th><?php echo $row['id']; ?></th>
    <td><?php echo $row['hospitalNo']; ?></td>
    <td><?php echo $row['regDate']; ?></td>
    <td><?php echo $row['refferedFrom']; ?></td>
    <td><?php echo $row['refferedDate']; ?></td>
    <td><?php echo $row['patientName']; ?></td>
    <td><?php echo $row['otherName']; ?></td>
    <td><?php echo $row['middleName']; ?></td>
    <td><?php echo $row['occupation']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['patientGSM']; ?></td>
    <td><?php echo $row['nationality']; ?></td>
    <td><?php echo $row['placeOfBirth']; ?></td>
    <td><?php echo $row['stateOfOrigin']; ?></td>
    <td><?php echo $row['tribe']; ?></td>
    <td><?php echo $row['religion']; ?></td>
    <td><?php echo $row['employer']; ?></td>
    <td><?php echo $row['sex']; ?></td>
    <td><?php echo $row['insuranceStatus']; ?></td>
    <td><?php echo $row['maritalStatus']; ?></td>
    <td><?php echo $row['HMO']; ?></td>
    <td><?php echo $row['nextOfKin']; ?></td>
    <td><?php echo $row['addressOfNOK']; ?></td>
    <td><?php echo $row['GSMofNOK']; ?></td>
    <td><?php echo $row['relationship']; ?></td>
    <td>
    <a onClick="return confirm('Are you Sure you want to delete this record?')" class=" button has-background-danger has-text-white" href="delete.php?id=<?php echo $row['id']; ?>">Delete<i class="fa fa-trash-alt"></a>
    </td>
    </tr>
   
    
  </tbody>
</table>


    
</body>
</html>
