<?php
if(isset($_POST['submit'])){
    include("./classes/dbconfig.php");
    include("./classes/saveRecords.class.php");
    $HospitalNumber=$_POST['hospitalNo'];
    $primaryDiagnosis =$_POST['primaryDiagnosis'];
    $primaryDate = $_POST['primaryDate'];
    $primaryYear= $_POST['primaryYear'];
    $primaryConsultant=$_POST['primaryConsultant'];
    $primaryClinic=$_POST['primaryClinic'];
    $associatedDiagnosis =$_POST['associatedDiagnosis'];
    $assocDate=$_POST['assocDate'];
    $assocYear=$_POST['assocYear'];
    $assocConsultant=$_POST['assocConsultant'];
    $assocClinic=$_POST['assocClinic'];
    $complication=$_POST['complication'];
    $compDate=$_POST['compDate'];
    $compYear =$_POST['compYear'];
    $compConsultant=$_POST['compConsultant'];
    $compClinic=$_POST['compClinic'];
    $icd10=$_POST['icd10'];
    $diagnosisNotes=$_POST['diagnosisNotes'];



    $object = new Database();
    $object = new SaveRecords();
    $object->saveDiagnosis($HospitalNumber,$primaryDiagnosis,$primaryDate,$primaryYear,$primaryConsultant,$primaryClinic,$associatedDiagnosis,$assocDate,$assocYear,$assocConsultant,$assocClinic,$complication,$compDate,$compYear,$compConsultant,$compClinic,$icd10,$diagnosisNotes);
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDUTHSOKOTO-Patient Personal Data</title>
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
<span class="title has-text-grey ">Patient Diagnosis Data Form</span>
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
    <label class="label">Primary Diagnosis:</label>   
    <input name="primaryDiagnosis" class="input" type="text" placeholder="Primary Diagnosis">
</div>
<div class="field">
    <label class="label">Date:</label>   
    <input name="primaryDate" class="input" type="text" placeholder="Date">
</div>
<div class="field">
    <label class="label">Year:</label>   
    <input name="primaryYear" class="input" type="text" placeholder="Year">
</div>
<div class="field">
    <label class="label">Consultant:</label>   
    <input name="primaryConsultant" class="input" type="text" placeholder="Consultant">
</div>
<div class="field">
    <label class="label">Clinic/Ward:</label>   
    <input name="primaryClinic" class="input" type="text" placeholder="Clinic/Ward">
</div>
</div>
</div>
<div class="field is-horizontal">

<div class="field-body">

<div class="field">
    <label class="label">Associated Diagnosis:</label>   
    <input name="associatedDiagnosis" class="input" type="text" placeholder="Associated Diagnosis">
</div>
<div class="field">
    <label class="label">Date:</label>   
    <input name="assocDate" class="input" type="text" placeholder="Date">
</div>
<div class="field">
    <label class="label">Year:</label>   
    <input name="assocYear" class="input" type="text" placeholder="Year">
</div>
<div class="field">
    <label class="label">Consultant:</label>   
    <input name="assocConsultant" class="input" type="text" placeholder="Consultant">
</div>
<div class="field">
    <label class="label">Clinic/Ward:</label>   
    <input name="assocClinic" class="input" type="text" placeholder="Clinic/Ward">
</div>
</div>
</div>


<div class="field is-horizontal">

<div class="field-body">

<div class="field">
    <label class="label">Complication:</label>   
    <input name="complication" class="input" type="text" placeholder="Complication">
</div>
<div class="field">
    <label class="label">Date:</label>   
    <input name="compDate" class="input" type="text" placeholder="Date">
</div>
<div class="field">
    <label class="label">Year:</label>   
    <input name="compYear" class="input" type="text" placeholder="Year">
</div>
<div class="field">
    <label class="label">Consultant:</label>   
    <input name="compConsultant" class="input" type="text" placeholder="Consultant">
</div>
<div class="field">
    <label class="label">Clinic/Ward:</label>   
    <input name="compClinic" class="input" type="text" placeholder="Clinic/Ward">
</div>

</div>

</div>


<div class="field-body ">
<div class="field">
<label class="label">ICD 10::</label>  
    <textarea name="icd10" class="textarea" name="" id="" cols="30" rows="2"></textarea>
</div>
<div class="field" >
<label class="label">Diagnosis Notes:</label>  
    <textarea name="diagnosisNotes" class="textarea" name="" id="" cols="30" rows="2"></textarea>
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