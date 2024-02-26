<?php 
  session_start();
     

  $admin=$_SESSION['admin'];
  if ($admin==true) {
  
  }
  else{
    header("location:index.php");
  }
include "connect.php";

$No = $_GET["no"];

$sql = "DELETE FROM  `notice` WHERE`No` = $No";

mysqli_query($conn, $sql);

if($conn){
    header("location:notice.php");
}
mysqli_close($conn);
?>