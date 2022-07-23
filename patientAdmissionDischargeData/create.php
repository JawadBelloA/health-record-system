<?php
if(isset($_POST['submit'])){
    include("./classes/dbconfig.php");
    include("./classes/saveRecords.class.php");
    $HospitalNumber=$_POST['hospitalNo'];
    $admissionDate =$_POST['admissionDate'];
    $admissionWard = $_POST['admissionWard'];
    $lengthOfStay= $_POST['lengthOfStay'];
    $outcome=$_POST['outcome'];
    $dateOfOutcome=$_POST['dateOfOutcome'];



    $object = new Database();
    $object = new SaveRecords();
    $object->saveAdmission($HospitalNumber,$admissionDate,$admissionWard,$lengthOfStay,$outcome,$dateOfOutcome);
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDUTH SOKOTO - Patient Personal Data</title>
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
      <a class="has-text-grey" href="/patientOperationData/index.html">Operation</a>
    </li>
    <li>
      <a class="has-text-grey" href="view.php">View</a>
    </li>
    <li class="is-active">
      <a class="has-text-success" href="">Create</a>
    </li>
  </ul>
</nav>
</div>
<div class="has-text-centered">
<span class="title has-text-grey ">Patient Operation Data Form</span>
<br>
<br> 
</div>
<form action="" method="post">
<div class="container is-size-6-desktop is-size-7-mobile mt-6">
<div class="field is-horizontal">

<div class="field-body">
<div class="">
    <label class="label">Hospital No:</label>   
    <input name="hospitalNo" class="input" type="text" placeholder="Hospital No.">
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
    <label class="label">Admission Date:</label>   
    <input name="admissionDate" class="input" type="text" placeholder="Admission Date">
</div>
<div class="field">
    <label class="label">Admission Ward:</label>   
    <input name="admissionWard" class="input" type="text" placeholder="Admission Ward">
</div>

<div class="field">
    <label class="label">Length of Stay:</label>   
    <input name="lengthOfStay" class="input" type="text" placeholder="Length of Stay">
</div>
<div class="field">
    <label class="label">Outcome:</label>   
    <input name="outcome" class="input" type="text" placeholder="Outcome">
</div>
<div class="field">
    <label class="label">Date of Outcome:</label>   
    <input name="dateOfOutcome" class="input" type="text" placeholder="Date of Outcome">
</div>

</div>
</div>





<div class="has-text-right mt-6 ">
<!-- <button type="submit" class="button is-primary " name="submit">
    Save record
  </button>  -->
  <input class="button is-primary " type="submit" value="Save record" name="submit">

</div>

    

</div>
</form>
<div class="footer"></div>
</body>
</html>