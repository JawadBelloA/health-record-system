<?php

class SaveRecords extends Database
{
    
    public function savePatients
    ($HospitalNumber ,$regDate,$refferedFrom,$refferedDate, $patientName,$otherName,$middleName,$occupation,$address,$patientGSM, $nationality,$placeOfBirth,$stateOfOrigin,$tribe,$religion,$employer,$sex,$insuranceStatus,$maritalStatus,$HMO,$nextOfKin,$addressOfNOK,$GSMofNOK,$relationship){
        $connection = $this->connect();
        if (mysqli_num_rows(mysqli_query($connection, "SELECT hospitalNo FROM ".$this->patientsRecord." WHERE hospitalNo='$HospitalNumber'")) >= 1) {
            echo "Record already exist";
        }
        else{
            mysqli_query($connection, "INSERT INTO " . $this->patientsRecord."
            (hospitalNo,regDate,refferedFrom,refferedDate,patientName,otherName,middleName,occupation,address,patientGSM,nationality,placeOfBirth,stateOfOrigin,tribe,religion, employer, sex, insuranceStatus, maritalStatus,HMO,nextOfKin,
            addressOfNOK,GSMofNOK,relationship)VALUES('$HospitalNumber','$regDate','$refferedFrom','$refferedDate','$patientName','$otherName', '$middleName','$occupation','$address','$patientGSM','$nationality','$placeOfBirth', '$stateOfOrigin','$tribe','$religion','$employer','$sex','$insuranceStatus','$maritalStatus','$HMO','$nextOfKin','$addressOfNOK','$GSMofNOK','$relationship')") or die(mysqli_error($connection));
            echo "Success";
            return $this->savePatients;
            
        }

    }
    public function saveDiagnosis($HospitalNumber,$patientName,$diagnosis)
    {
        $connection = $this->connect();
        if (mysqli_num_rows(mysqli_query($connection, "SELECT hospitalNumber FROM ".$this->patientRecord." WHERE hospitalNumber='$HospitalNumber'")) >= 1) {
            $errors= "record already exist";
        }
        else{
            
            mysqli_query($connection, "INSERT INTO " . $this->patientRecord. "(HospitalNumber,patientName)values('$HospitalNumber','$patientName')") or die(mysqli_error($connection));
            echo "sucess";
            return $this->savePatients;
            
        }

    }   
}