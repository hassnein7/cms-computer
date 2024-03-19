<?php
$conn = mysqli_connect("localhost","root","","latest" );
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Set character set
mysqli_set_charset($conn, "utf8"); 
?>