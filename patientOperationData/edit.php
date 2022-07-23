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
$query = "SELECT * from patientOperationData where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
$row = mysqli_fetch_assoc($result);

if ($row < 1) {
header('location:admin.php');
}

if (isset($_POST['update'])) {
$hospitalNumber = $_POST['hospitalNumber'];
$operationDate = $_POST['operationDate'];
$operationCode = $_POST['operationCode'];
$operationType = $_POST['operationType'];
 $surgeon = $_POST['surgeon'];
 $operationNotes =$_POST['operationNotes'];


$sql = "UPDATE patientOperationData SET 

operationDate='$operationDate', 
operationCode='$operationCode', 
operationType='$operationType',
surgeon='$surgeon',
operationNotes='$operationNotes'
WHERE id='$id'";
       

$result = $conn->query($sql);

if ($result == TRUE) {
echo "Record Updated successfully.";
header('location:view.php');
}else{
echo "Error:". $sql . "<br>". $conn->error;
}

$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDUTHSOKOTO-Patient Personal Data - Update </title>
    <link rel="stylesheet" href="/css/bulma.min.css">
</head>
<body>
<div class="section breadcrumb pt-4 pb-0 ">
    <nav class="breadcrumb ">
      <ul class="container is-size-6-desktop is-size-7-mobile">
    <li>
          <a class="has-text-grey" href="index.html">Back</a>
    </li>
    <li>
      <a class="has-text-grey" href="/patientOperationData/index.html">Operation</a>
    </li>
    <li>
      <a class="has-text-grey" href="/patientOperationData/edit.php">Update</a>
    </li>
    <li>
      <a class="has-text-grey" href="view.php">View</a>
    </li>
    <li class="">
      <a class="has-text-success" href="create.php">Create</a>
    </li>
  </ul>
</nav>
</div>
<div class="has-text-centered">
<span class="title has-text-grey ">Patient Operation Data Update Form</span>
<br>
<br> 
</div>
<form action="" method="post">
<div class="container is-size-6-desktop is-size-7-mobile mt-6">
<div class="field is-horizontal">

<div class="field-body">
<div class="">
    <label class="label">Hospital No:</label>   
    <input name="hospitalNo" class="input" name="hospitalNumber" value="<?php echo $row['hospitalNumber'] ?>" type="text" placeholder="Hospital No.">
</div>

</div>
</div>
<div class="field is-horizontal">

<div class="field-body">

<!-- <div class="field">
    <label class="label">Hospital No:</label>   
    <input name="hospitalNumber" class="input" type="text" placeholder="Hospital No.">
</div> -->
<div class="field">
    <label class="label">Date of operation:</label>   
    <input name="operationDate" class="input"  value="<?php echo $row['operationDate'] ?>" type="text" placeholder="">
</div>
<div class="field">
    <label class="label">Code of operation:</label>   
    <input name="operationCode" class="input" type="text" value="<?php echo $row['operationCode'] ?>"  placeholder="Code of Operation">
</div>

<div class="field">
    <label class="label">Type of operation:</label>   
    <input name="operationType" class="input" type="text" value="<?php echo $row['operationType'] ?>"  placeholder="Type of operation">
</div>
<div class="field">
    <label class="label">Surgeon:</label>   
    <input name="surgeon" class="input" type="text" value="<?php
echo $row['surgeon']
?>" placeholder="Surgeon">
</div>

</div>
</div>



<div class="field-body ">

<div class="" >
<label class="label">Operation Notes:</label>  
    <!-- <textarea name="operationNotes" class="textarea"  id="" cols="30" rows="2"  ></textarea> -->
    <input class="textarea" name="operationNotes"  type="text" value="<?php echo $row['operationNotes']?>">
</div>
</div>

<div class="has-text-right mt-6 ">
<!-- <button type="submit" class="button is-primary " name="submit">
    Save record
  </button>  -->
  <input class="button is-primary " type="submit" value="Update" name="update">

</div>

    

</div>
</form>
<div class="footer"></div>
</body>
</html>
