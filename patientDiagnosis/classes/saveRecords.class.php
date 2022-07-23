<?php

class SaveRecords extends Database
{
    public function saveDiagnosis($HospitalNumber,$primaryDiagnosis,$primaryDate,$primaryYear,$primaryConsultant,$primaryClinic,$associatedDiagnosis,$assocDate,$assocYear,$assocConsultant,$assocClinic,$complication,$compDate,$compYear,$compConsultant,$compClinic,$icd10,$diagnosisNotes)
    {
        $connection = $this->connect();
        if (mysqli_num_rows(mysqli_query($connection, "SELECT hospitalNumber FROM ".$this->DBtable." WHERE hospitalNumber='$HospitalNumber'")) >= 1) {
            echo "record already exist";
        }
        else{
            mysqli_query($connection, "INSERT INTO " . $this->DBtable."(	hospitalNumber,primaryDiagnosis,primaryDate,primaryYear,primaryConsultant,primaryClinic,associatedDiagnosis,assocDate,assocYear,assocConsultant,assocClinic,complication,compDate,compYear,compConsultant,compClinic,icd10,diagnosisNotes)values('$HospitalNumber','$primaryDiagnosis','$primaryDate','$primaryYear','$primaryConsultant','$primaryClinic','$associatedDiagnosis','$assocDate','$assocYear','$assocConsultant','$assocClinic','$complication','$compDate','$compYear','$compConsultant','$compClinic','$icd10','$diagnosisNotes')") or die(mysqli_error($connection));
            echo "Success";
            return $this->saveDiagnosis;
 
            
        }

    }   
  
}