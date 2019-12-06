<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","transcar_info");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>