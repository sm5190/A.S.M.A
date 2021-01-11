<?php

// login.php

require_once('connection.php');

//session_start();
function login_form($message)
{
  echo <<<EOD
  <p>$message</p>

EOD;
}
       



if (isset($_POST)) {
  
 $phn =$_POST['username'];
 $pass =$_POST['pass'];

  $sql="SELECT manager_id from employee where e_name='$phn' and e_pass= '$pass' ";
  $s = oci_parse($conn,$sql );
  oci_execute($s);
  $r = oci_fetch_array($s, OCI_ASSOC);

  if ($r) {
    header("Location:../ASMA/admin.html?success=login_successful");
    
  } 
  else {
    
    header("Location:../login Admin.html?error=invalid_Username/pwd");
    
  }
}
oci_close($conn);
?>