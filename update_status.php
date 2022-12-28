<?php

session_start();
if(!isset($_SESSION["name"])) {
  header("Location:index.php");
  }


// $House_Number=$_POST["House_Number"];

$House_Number=$_POST["House_Number"];
@include 'config.php';
if($con==false){
    die("error: could not connect.".mysqli_connect_error());
}

$que="select Owner_name from main where House_number = '$House_Number';";
$record=mysqli_query($con,$que);
if($record){
    
    if (mysqli_num_rows($record) > 0) {
        // output data of each row
    
        while($row = mysqli_fetch_assoc($record)) {
           
          echo "Owner name: " . $row["Owner_name"]."<br>";
        }
      }
}else{
    echo "not success";
}
mysqli_close($con);
?>