<?php
include('session.php');

require_once('connection.php');





   


$ses_sql="DELETE  from login_employee where loggedin_phn='$user_check'";
$statement=oci_parse($conn,$ses_sql);
oci_execute($statement);

    oci_commit($conn); 
 
   
    
  
unset($_SESSION["login_user"]);
session_destroy();
session_write_close();
header('Location:/Asma/ASMA');

?>