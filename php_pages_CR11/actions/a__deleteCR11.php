<?php 

ob_start();
session_start();
require_once 'dbconnectNewCR11.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['admin' ]) && !isset($_SESSION['user']) ) {
 header("Location: index_CR11.php");
 exit;
}
if( isset($_SESSION['user' ]) ) {
  header("Location: home_CR11.php");
  exit;
}


if ($_POST) {
   $name = $_POST['name'];

   $sql = "DELETE FROM animal WHERE name = '$name'";
    if($conn->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       echo "<a href='../admin_CR11.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $conn->close();
}

?>