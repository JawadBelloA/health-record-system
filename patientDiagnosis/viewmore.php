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
$query = "SELECT * from patientDiagnosisData where id='".$id."'"; 
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
<h1 class="title has-text-grey is-size-1-desktop ">Patient Diagnosis Data</h1>
<a href="view.php" class="button has-background-success has-text-white">Back</a>
</div>

</header>
<body>
<div class="container mt-6">
<div class="table-container">
<table class="table table is-hoverable table is-striped table is-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>hospital No.</th>
      <th>Primary Diagnosis</th>
      <th>Primary Diagnosis Date</th>
      <th>rimary Diagnosis Year</th>
      <th>Primary Diagnosis Consultant</th>
      <th>Primary Diagnosis Clinic</th>
      <th>Associated Diagnosis</th>
      <th>Associated Diagnosis Date</th>
      <th>Associated Diagnosis year</th>
      <th>Associated Diagnosis consultant</th>
      <th>Associated Diagnosis clinic</th>
      <th>Complication</th>
      <th>Complication Date</th>
      <th>Complication Year</th>
      <th>Complication Clinic</th>
      <th>Complication Consultant</th>
      <th>icd10</th>
      <th>Diagnosis Notes</th>
      <th>Action</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <th><?php echo $row['id']; ?></th>
    <td><?php echo $row['hospitalNumber']; ?></td>
    <td><?php echo $row['primaryDiagnosis']; ?></td>
    <td><?php echo $row['primaryDate']; ?></td>
    <td><?php echo $row['primaryYear']; ?></td>
    <td><?php echo $row['primaryConsultant']; ?></td>
    <td><?php echo $row['primaryClinic']; ?></td>
    <td><?php echo $row['associatedDiagnosis']; ?></td>
    <td><?php echo $row['assocDate']; ?></td>
    <td><?php echo $row['assocYear']; ?></td>
    <td><?php echo $row['assocConsultant']; ?></td>
    <td><?php echo $row['assocClinic']; ?></td>
    <td><?php echo $row['complication']; ?></td>
    <td><?php echo $row['compDate']; ?></td>
    <td><?php echo $row['compYear']; ?></td>
    <td><?php echo $row['compClinic']; ?></td>
    <td><?php echo $row['compConsultant']; ?></td>
    <td><?php echo $row['icd10']; ?></td>
    <td><?php echo $row['diagnosisNotes']; ?></td>
    <td>
    <a onClick="return confirm('Are you Sure you want to delete this record?')" class=" button has-background-danger has-text-white" href="delete.php?id=<?php echo $row['id']; ?>">Delete<i class="fa fa-trash-alt"></a>
    </td>
    </tr>
   
    
  </tbody>
</table>


    
    <br>
    </tr>
</div>
</div>
</body>
</html>
