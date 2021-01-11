<?php
include('connection.php');
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql="SELECT * from login_customer where loggedin_phn='$user_check'";
$statement=oci_parse($conn,$ses_sql);
oci_execute($statement);
$row=oci_fetch_array($statement);
$loggedin_session=$row['LOGGEDIN_PHN'];

if (!isset($loggedin_session)) {
 echo " ";
}
else{
 
}

?>