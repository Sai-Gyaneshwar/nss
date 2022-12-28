<?php
session_start();
if(!isset($_SESSION["name"])) {
  header("Location:index.php");
  }



$House_Number=$_POST["House_Number"];


@include 'config.php';
if($con==false){
    die("error: could not connect.".mysqli_connect_error());
}
echo "<h>helo</h>";
$temp = "select * from main where House_number='$House_Number';";
$temp2 = mysqli_query($con,$temp);
if(mysqli_num_rows($temp2)>0){
    $que="delete from main where House_number='$House_Number';";
    $record=mysqli_query($con,$que);
    if($record){
    echo "success";
    }else{
        echo "not success";
    }
}
else{
    echo "House number not found";
}

mysqli_close($con);
?>