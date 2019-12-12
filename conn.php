<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost", "admin", "7fe0bb3f07e5e34ad95e78303dac0e005a31c323def93eb2","transcar_client");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>