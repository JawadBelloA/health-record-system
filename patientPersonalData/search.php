<?php
if(isset($_POST['search'])){
    $output="";
     $host = "localhost";
     $user = "root";
     $password = "ab_jawadDB247@$&";
     $dbname = "HIMS";
     $patientsRecord = "patientPersonalData";
     
    
    $connection= mysqli_connect($host,$user,$password,$patientsRecord);

  $searchq = $_POST['search'];
 

  $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);

  $query ="SELECT * FROM patientPersonalData WHERE hospitalNo LIKE '$searchq'" or die("could not search");
  $sql=mysqli_query($connection,$query);
  $count = mysqli_num_rows($sql);
  if($count==0){
      $output="Theres no search result";
  }else{
      while($row = mysqli_fetch_array($sql)){
          $patientName= $row['patientName'];

          $output =$patientName;
      }
  }
}




?>
 <form action="" method="post">
          <input  type="text" name="search" id="" placeholder="Search patient..">
          <input type="submit" name="search" value="Search" class="button">
        </form>
        <?php
       print("$output");


      ?>