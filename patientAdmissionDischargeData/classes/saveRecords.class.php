<?php

class SaveRecords extends Database
{

    public function saveAdmission($HospitalNumber,$admissionDate,$admissionWard,$lengthOfStay,$outcome,$dateOfOutcome)
    {
        $connection = $this->connect();
        if (mysqli_num_rows(mysqli_query($connection, "SELECT hospitalNumber FROM ".$this->DBtable." WHERE hospitalNumber='$HospitalNumber'")) >= 1) {
            echo "record already exist";
        }
        else{
            
            mysqli_query($connection, "INSERT INTO " . $this->DBtable. "(HospitalNumber,admissionDate,admissionWard,lengthOfStay,outcome,dateOfOutcome)values('$HospitalNumber','$admissionDate','$admissionWard','$lengthOfStay','$outcome','$dateOfOutcome')") or die(mysqli_error($connection));
            echo "sucess";
            return $this->saveAdmission;
            
        }

    }   
}