<?php 
  session_start();
     
  $fund=$_SESSION['fund'];
  $admin=$_SESSION['admin'];
  if ($admin||$fund==true) {
  
  }
  else{
    header("location:index.html");
  }
include("connect.php");


$fname = $_POST["fname"];
$amount=$_POST["amount"];
$date = $_POST["date"];
$mode = $_POST["mode"];
$tid=$_POST["tid"];
$time = $_POST["time"];
$type = $_POST["type"];


$sql = "INSERT INTO `$type` (`id`, `fname`, `amount`, `tid`, `date`, `time`) VALUES (NULL,'$fname','$amount','$tid','$date','$time')";

    if (mysqli_query($conn, $sql)) {
        header("location:funds.html");

        } 
        else {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);


?>
