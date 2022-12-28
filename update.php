<?php

session_start();
if(!isset($_SESSION["name"])) {
  header("Location:index.php");
  }


$owner_name=$_POST["Name"];
$FHName=$_POST["FHName"];
$Phonenumber=$_POST["Phonenumber"];
$House_Number=$_POST["House_Number"];
$DOA=$_POST["DOA"];
$House_Tax=$_POST["House_Tax"];
$Library_Tax=$_POST["Library_Tax"];
$Amount=$_POST["Amount"];

@include 'config.php';
if($con==false){
    die("error: could not connect.".mysqli_connect_error());
}
echo "<h>helo</h>";
$que="insert into main values('$DOA','$House_Number','$owner_name','$FHName','$Phonenumber','$House_Tax','$Library_Tax','$Amount');";
$record=mysqli_query($con,$que);
if($record){
echo "success";
}else{
    echo "not success";
}
mysqli_close($con);
?>