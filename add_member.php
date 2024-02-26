<?php 

include("connect.php");
session_start();
     
$admin=$_SESSION['admin'];

if ($admin==true) {

}
else{
  header("location:index.html");
}

$name = $_POST["name"];
$lname=$_POST["lastname"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$Email=$_POST["email"];
$address = $_POST["address"];
$contact = $_POST["phone"];
$vid =$_POST["vid"];

$sql = "INSERT INTO `member`(`id`, `first_name`, `sur_name`, `gender`, `phone`, `Email`, `vid`, `birthdate`,`address`) VALUES (NULL,'$name','$lname','$gender','$contact','$Email','$vid','$dob','$address')";

    if (mysqli_query($conn, $sql)) {
        header("location:dashboard.php");

        } 
        else {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);


?>
