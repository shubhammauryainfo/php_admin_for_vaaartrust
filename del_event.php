<?php 
  session_start();
     
 
  $admin=$_SESSION['admin'];
  if ($admin==true) {
  
  }
  else{
    header("location:index.html");
  }
include "connect.php";

$id = $_GET["id"];

$sql = "DELETE FROM  `events` WHERE`id` = $id";

mysqli_query($conn, $sql);

if($conn){
    header("location:view_event.php");
}
mysqli_close($conn);
?>