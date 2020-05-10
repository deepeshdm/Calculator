<?php 
$dbhostname="localhost:3307";
$dbusername="root";
$dbpassword=" ";
$dbname="socialbiz";

$conn=mysqli_connect($dbhostname,$dbusername,$dbpassword,$dbname);
if (!$conn) {
	echo "CONNECTION FAILED : ".mysqli_connect_error();
	exit();
}

?>