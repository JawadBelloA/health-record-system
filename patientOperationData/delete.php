<?php
// $servername = "localhost";
// $username = "root"; 
// $password = "ab_jawadDB247@$&"; 
// $dbname = "HIMS"; 


// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

class Delete extends Database{
    public function deleteRecord(){
        $connection = $this->connect();
        $id=$_REQUEST['id'];
        $query = "DELETE FROM patientOperationData WHERE id=$id"; 
        mysqli_query($connection,$query) or die ( mysqli_error($connection));
        header("Location: view.php"); 
        return $this->deleteRecord;
    }
}
?>