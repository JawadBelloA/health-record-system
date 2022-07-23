<?php
class Database
{
    var $host = "localhost";
    var $user = "root";
    var $password = "ab_jawadDB247@$&";
    var $dbname = "HIMS";
    var $DBtable = "patientAdmissionnData";
    
public function connect()
{
    $connection = mysqli_connect($this->host,$this->user,$this->password,$this->dbname);
    return $connection;  
}



// public function fetchRecords($username,$password)
// {
//     $connection = $this->connect();
//     $sql="SELECT * FROM " . $this->tbname.  "WHERE username='$username' and password='$password'";
//    $query= mysqli_query($connection,$sql);

//     $row = mysqli_fetch_assoc($query);
//     if($row >=1){
//         $_SESSION['userIsLoggedIn'] = true;
//         $_SESSION['username'] = $row['username'];

//         header("location:chatHome.php");
//     }else{
//         echo 'Username or Password incorrect';
//     }
// }

 

}
