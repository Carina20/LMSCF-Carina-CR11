<?php 

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "cr11_carina_petadoption";

// create connection
$conn = new  mysqli($localhost, $username, $password, $dbname);

// check connection
if($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
} else {
    echo "Successfully Connected";
}


mysqli_close($conn);
?>
