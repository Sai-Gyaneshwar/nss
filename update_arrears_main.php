<?php
session_start();
if(!isset($_SESSION["name"])) {
  header("Location:index.php");
  }


//echo "<script>alert('Hello')</script>";
  $arr = $_POST['arr'];
  $cur = $_POST['curr'];
  if(!empty($arr) and !empty($cur) ){


    echo "<script>alert('$arr')</script>";
    echo "<script>alert('$cur')</script>";

  }


?>