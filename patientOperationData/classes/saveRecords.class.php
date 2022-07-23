<?php

class SaveRecords extends Database
{
    public function saveOperation($HospitalNumber,$operationDate,$operationCode,$operationType,$surgeon,$operationNotes)
    {
    $connection = $this->connect();
    if (mysqli_num_rows(mysqli_query($connection, "SELECT hospitalNumber FROM ".$this->DBtable." WHERE hospitalNumber='$HospitalNumber'")) >= 1) {
    echo "record already exist";
    }
    else{
    mysqli_query($connection, "INSERT INTO " . $this->DBtable. "(HospitalNumber,operationDate,operationCode,operationType,surgeon,operationNotes)values('$HospitalNumber','$operationDate','$operationCode','$operationType','$surgeon','$operationNotes')") or die(mysqli_error($connection));
    echo "sucess";
    return $this->saveOperation;  
    }
    }   
}