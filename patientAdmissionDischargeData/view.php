<?php
$servername = "localhost";
$username = "root"; 
$password = "ab_jawadDB247@$&"; 
$dbname = "HIMS"; 


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM  patientAdmissionnData";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
    <div class="section breadcrumb pt-4 pb-0 ">
        <nav class="breadcrumb ">
          <ul class="container is-size-6-desktop is-size-7-mobile">
            <li>
              <a class="has-text-grey" href="/index.html">Home</a>
            </li>
            <li>
              <a class="has-text-grey" href="create.php">Create</a>
            </li>
            <li class="is-active">
              <a class="has-text-grey" href="">View</a>
            </li>
          </ul>
        </nav>
      </div>
     
      <div class="content">
     <div class="container mt-6">
    <h1 class="title has-text-grey is-size-1-desktop ">Patient Discharge & Admission Data</h1>

    
    
    <table class="table table-is-hoverable table is-striped table is-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Hospital No.</th>
      <th>Admission date</th>
      <th>Admission Ward</th>
      <th>Legnth Of Stay</th>
      <th>Outcome</th>
      <th>Date Of Outcome</th>
      <th>Action</th>
    </tr>
  </thead>
  
  <tbody>
  <?php
    if ($result->num_rows > 0) {
    //output data of each row
    while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
    <th><?php echo $row['id']; ?></th>
    <td><?php echo $row['hospitalNumber']; ?></td>
    <td><?php echo $row['admissionDate']; ?></td>
    <td><?php echo $row['admissionWard']; ?></td>
    <td><?php echo $row['lengthOfStay']; ?></td>
    <td><?php echo $row['outcome']; ?></td>
    <td><?php echo $row['dateOfOutcome']; ?></td>
    <td><a onClick="return confirm('Are you Sure you want to delete this record?')" class=" button has-background-danger has-text-white" href="delete.php?id=<?php echo $row['id']; ?>">Delete<i class="fa fa-trash-alt"></a>
    </td>
    </tr>
   
    <?php		}
    }
    ?>
    
  </tbody>
</table>
</div>
     </div>


</body>
</html>
