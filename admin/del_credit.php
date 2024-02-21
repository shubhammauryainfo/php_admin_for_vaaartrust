<?php 
    session_start();
          
    $fund=$_SESSION['fund'];
    $admin=$_SESSION['admin'];
    if ($admin||$fund==true) {
    
    }
    else{
      header("location:index.html");
    }
include "connect.php";

$id = $_GET["id"];

$sql = "DELETE FROM  `credit` WHERE`id` = $id";

mysqli_query($conn, $sql);

if($conn){
    header("location:credit.php");
}
mysqli_close($conn);
?>