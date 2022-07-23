<?php
$servername = "localhost";
$username = "root"; 
$password = "ab_jawadDB247@$&"; 
$dbname = "HIMS"; 


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM  patientOperationData";
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
    <h1 class="title has-text-grey is-size-1-desktop ">Patient Operation Data</h1>

    
    
    <table class="table table-is-hoverable table is-striped table is-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>hospital No.</th>
      <th>Operation date</th>
      <th>Operation Code</th>
      <th>Operation Type</th>
      <th>Surgeon</th>
      <th>Operation Notes</th>
      <th>Action <th>Action</th></th>
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
    <td><?php echo $row['operationDate']; ?></td>
    <td><?php echo $row['operationCode']; ?></td>
    <td><?php echo $row['operationType']; ?></td>
    <td><?php echo $row['surgeon']; ?></td>
    <td><?php echo $row['operationNotes']; ?></td>
    <td>
    <a class="button has-background-warning has-text-black" href="edit.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i>Edit</a> 
    </td>
    <td>
    <a onClick="return confirm('Are you Sure you want to delete this record?')" class=" button has-background-danger has-text-white" href="delete.php?id=<?php echo $row['id']; ?>">Delete<i class="fa fa-trash-alt"></a>
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