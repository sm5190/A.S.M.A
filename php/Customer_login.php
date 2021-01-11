<?php

// login.php

require_once('connection.php');
include('session.php');

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
    
    $sql1="INSERT INTO login_customer (loggedin_phn)values ('$phn')";
    $_SESSION['login_user']=$_POST['username'];
    $res=oci_parse($conn,$sql1);
    $objExecute=oci_execute($res);
    if($objExecute){
    oci_commit($conn); 
  header("Location:../Customer Profile.php?success=login_successful");
  
  } 
}
  else {
    
    header("Location:../login Customer.html?error=invalid_UserPhoneNO/pwd");
  }
}
oci_close($conn);
?>