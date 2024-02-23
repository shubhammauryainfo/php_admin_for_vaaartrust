<?php 
  session_start();
     
 
  $admin=$_SESSION['admin'];
  if ($admin==true) {
  
  }
  else{
    header("location:index.html");
  }
include("connect.php");



$title = $_POST["title"];
$about = $_POST["about"];
$image = $_FILES['image']['name'];

$target_dir = "image/";
$target_file = $target_dir.$image;
move_uploaded_file($_FILES['image']['tmp_name'],"$target_file");


$sql = "INSERT INTO `events`(`id`, `image`,`title`, `about`) VALUES (NULL,'$target_file','$title','$about')";

    if (mysqli_query($conn, $sql)) {
        header("location:view_event.php");

        } 
        else {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);


?>
