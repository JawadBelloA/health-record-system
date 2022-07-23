<?php

class SaveRecords extends Database
{
    
    public function savePatients($HospitalNumber,$patientName,$regDate)
    {
        $connection = $this->connect();
        if (mysqli_num_rows(mysqli_query($connection, "SELECT hospitalNumber FROM ".$this->patientsRecord." WHERE hospitalNumber='$HospitalNumber'")) >= 1) {
            echo "Record already exist";
        }
        else{
            
            mysqli_query($connection, "INSERT INTO " . $this->patientsRecord. "(HospitalNumber,patientName,regDate)values('$HospitalNumber','$patientName','$regDate')") or die(mysqli_error($connection));
            echo "Success";
            return $this->savePatients;
            
        }

    }
    public function saveDiagnosis($HospitalNumber,$patientName,$diagnosis)
    {
        $connection = $this->connect();
        if (mysqli_num_rows(mysqli_query($connection, "SELECT hospitalNumber FROM ".$this->patientRecord." WHERE hospitalNumber='$HospitalNumber'")) >= 1) {
            echo "record already exist";
        }
        else{
            
            mysqli_query($connection, "INSERT INTO " . $this->patientRecord. "(HospitalNumber,patientName)values('$HospitalNumber','$patientName')") or die(mysqli_error($connection));
            echo "sucess";
            return $this->savePatients;
            
        }

    }
}