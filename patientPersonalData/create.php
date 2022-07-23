<?php
if(isset($_POST['submit'])){
    include("./classes/dbconfig.php");
    include("./classes/saveRecords.class.php");
    $HospitalNumber=$_POST['hospitalNo' ];
    $regDate=$_POST['regDate'];
    $refferedFrom=$_POST['refferedFrom'];
    $refferedDate=$_POST['refferedDate'];
    $patientName=$_POST['patientName'];
    $otherName=$_POST['otherName'];
    $middleName=$_POST['middleName'];
    $occupation=$_POST['occupation'];
    $address=$_POST['address'];
    $patientGSM=$_POST['patientGSM'];
    $nationality=$_POST['nationality'];
    $placeOfBirth=$_POST['placeOfBirth'];
    $stateOfOrigin=$_POST['stateOfOrigin'];
    $tribe=$_POST['tribe'];
    $religion=$_POST['religion'];
    $employer=$_POST['employer'];
    $sex=$_POST['sex'];
    $insuranceStatus=$_POST['insuranceStatus'];
    $maritalStatus=$_POST['maritalStatus'];
    $HMO=$_POST['HMO'];
    $nextOfKin=$_POST['nextOfKin'];
    $addressOfNOK=$_POST['addressOfNOK'];
    $GSMofNOK=$_POST['GSMofNOK'];
    $relationship=$_POST['relationship'];



    $object = new Database();
    $object = new SaveRecords();
    $object->savePatients($HospitalNumber,$regDate,$refferedFrom,$refferedDate, $patientName,$otherName, $middleName,$occupation,$address,$patientGSM,$nationality,$placeOfBirth, $stateOfOrigin,  $tribe,$religion,$employer,$sex,$insuranceStatus,$maritalStatus,$HMO,$nextOfKin,$addressOfNOK,$GSMofNOK,$relationship);
    
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
      <a class="has-text-grey" href="/patientDiagnosis/index.html">Diagnosis</a>
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
<span class="title has-text-grey ">Patient Personal Data Form</span>
<br>
<br> 
</div>
<form action="" method="post">
<div class="container is-size-6-desktop is-size-7-mobile mt-6">

<div class="field is-horizontal">

<div class="field-body">
<div class="field">
    <label class="label">Hospital No:</label>   
    <input name="hospitalNo" class="input" type="text" placeholder="Hospital No.">
</div>
<!-- <div class="field">
    <label class="label">Hospital No:</label>   
    <input name="hospitalNumber" class="input" type="text" placeholder="Hospital No.">
</div> -->
<div class="field">
    <label class="label">Reg Date:</label>   
    <input name="regDate" class="input" type="text" placeholder="Reg Date">
</div>
<div class="field">
    <label class="label">Reffered From:</label>   
    <input name="refferedFrom" class="input" type="text" placeholder="Reffered From">
</div>
<div class="field">
    <label class="label">Reffered Date:</label>   
    <input name="refferedDate" class="input" type="text" placeholder="Reffered Date">
</div>
</div>
</div>
<div class="field is-horizontal">

<div class="field-body">
<div class="field">
    <label class="label">Surname:</label>   
    <input name="patientName" class="input" type="text" placeholder="Surname">
</div>
<div class="field">
    <label class="label">Other Name:</label>   
    <input name="otherName" class="input" type="text" placeholder="Other Name">
</div>
<div class="field">
    <label class="label">Middle Name:</label>   
    <input name="middleName" class="input" type="text" placeholder="Middle Name">
</div>
<div class="field">
    <label class="label">Occupation:</label>   
    <input name="occupation" class="input" type="text" placeholder="Occupation">
</div>
</div>
</div>


<div class="field is-horizontal">

<div class="field-body">
<div class="field">
    <label class="label">Address:</label>   
    <input name="address" class="input" type="text" placeholder="Address">
</div>
<div class="field">
    <label class="label">Patient GSM:</label>   
    <input name="patientGSM" class="input" type="number" placeholder="Patient GSM">
</div>
<div class="field">
    <label class="label">Nationality:</label>   
    <input name="nationality" class="input" type="text" placeholder="Nationality">
</div>
<div class="field">
    <label class="label">Place Of Birth:</label>   
    <input name="placeOfBirth" class="input" type="text" placeholder="Place Of Birth">
</div>
</div>
</div>
<div class="field is-horizontal">

<div class="field-body">
<div class="field">
    <label class="label">State of Origin:</label>   
    <input name="stateOfOrigin" class="input" type="text" placeholder="State of Origin">
</div>
<div class="field">
    <label class="label">Tribe:</label>   
    <input name="tribe" class="input" type="text" placeholder="Tribe">
</div>
<div class="field">
    <label class="label">Religion:</label>   
    <input name="religion" class="input" type="text" placeholder="Religion">
</div>
<div class="field">
    <label class="label">Employer:</label>   
    <input name="employer" class="input" type="text" placeholder="Employer">
</div>
</div>
</div>
<div class="field is-horizontal">
<div class="field-body is-horizontal">
  <div class="field">
    <label class="label">Sex:</label>  
    <div class="select">
        <select name="sex">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
    </div>
    <div class="field">
    <label class="label">Insurance Status:</label>  
    <div class="select">
        <select name="insuranceStatus">
          <option value="Active">Active</option>
          <option value="Expired">Expired</option>
        </select>
      </div>
    </div>
    
    <div class="field">
    <label class="label">Marital Status:</label>  
    <div class="select">
        <select name="maritalStatus">
          <option value="Single">Single</option>
          <option value="Married">Married</option>
        </select>
      </div>
    </div>
    <div class="field">
    <label class="label">HMO:</label>  
    <div class="select">
        <select name="HMO">
          <option value="Option 1">Option 1</option>
          <option value="Option 2">WOption 2</option>
        </select>
      </div>
    </div>

</div>

</div>


<div class=" container has-text-centered mt-6">
<h3 class="title">Emergency Contact:</h3>
<div class="field is-horizontal">

<div class="field-body">
<div class="field">
    <label class="label">Next of Kin:</label>   
    <input name="nextOfKin" class="input" type="text" placeholder="Next of Kin">
</div>
<div class="field">
    <label class="label">Address of NOK:</label>   
    <input name="addressOfNOK" class="input" type="text" placeholder="Address of NOK">
</div>
<div class="field">
    <label class="label">GSM of NOK:</label>   
    <input name="GSMofNOK" class="input" type="text" placeholder="GSM of NOK">
</div>
<div class="field">
  <label class="label">Relationship:</label>  
  <div class="select">
      <select name="relationship">
        <option value="Father">Father</option>
        <option value="Mother">Mother</option>
        <option value="Brother">Brother</option>
        <option value="Sister">Sister</option>
      </select>
    </div>
  </div>
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
<div class="footer">

</div>
</body>
</html>



