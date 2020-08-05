<?php
ob_start();
session_start();
require_once '../dbconnectNewCR11.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['admin' ]) && !isset($_SESSION['user']) ) {
 header("Location: index_CR11.php");
 exit;
}
if( isset($_SESSION['user' ]) ) {
  header("Location: home_CR11.php");
  exit;
}
// select logged-in users details
$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['admin']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>