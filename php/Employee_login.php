<?php

// login.php

require_once('connection.php');
include('session.php');


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

  $sql="SELECT contact_number from employee where contact_number='$phn' and e_pass= '$pass' ";
  $s = oci_parse($conn,$sql );
  oci_execute($s);
  $r = oci_fetch_array($s, OCI_ASSOC);

  if ($r) {
    $sql1="INSERT INTO login_employee (loggedin_phn)values ('$phn')";
    $_SESSION['login_user']=$_POST['username'];
    $res=oci_parse($conn,$sql1);
    $objExecute=oci_execute($res);
    if($objExecute){
    oci_commit($conn); 
  header("Location:../Employee Profile.php?success=login_successful");
    }
    
  } 
  else {
    
    header("Location:../login Employee.html?error=invalid_UserPhoneNO/pwd");
    
  }
}
oci_close($conn);
?>