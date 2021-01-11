<?php
$conn=oci_connect("ASMADB","asmadb","localhost/XE");
	if(!$conn)
		echo 'Failed to connect to Oracle';
	else
		echo ' ';
global $login_check;
?>