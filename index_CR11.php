<?php

$db = mysqli_connect("localhost","root","","cr11_carina_petadoption"); 
$sql = "SELECT image FROM animal";
$result = $db->query($sql);
while ($row=mysqli_fetch_assoc($result)) {

echo '<img src="data:blob;base64,'.base64_encode( $row['image'] ).'"/>';

}



?>