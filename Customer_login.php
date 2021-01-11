<?php

// login.php

require_once('connection.php');
function login_form($message)
{
  echo <<<EOD
  <p>$message</p>

EOD;
}
       



if (isset($_POST)) {
  
 $phn =$_POST['username'];
 $pass =$_POST['password'];
 
  $sql="SELECT customer_id from customer where phone_number='$phn' and c_pass= '$pass' ";

  $s = oci_parse($conn,$sql );
  oci_execute($s);
  $r = oci_fetch_array($s, OCI_ASSOC);

  if ($r) {
  
    
  }
  } 
  else {
    
    header("Location:../login Customer.html?error=invalid_UserPhoneNO/pwd");
  }
}
oci_close($conn);
?>