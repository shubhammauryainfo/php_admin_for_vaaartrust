<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "vaaar");

// Check connection
if (!$conn) {
 echo"failed ".mysqli_connect_error($conn);
}

?>