<?php

// login.php

require_once('connection.php');


if(isset($_POST)) {
    
    $ename = $_POST['emp'];
    $salary = $_POST['emp1'];
    
    
    $sql2="SELECT e_id from employee where e_name='$salary'";
$statement2=oci_parse($conn,$sql2);
oci_execute($statement2);

$row2=oci_fetch_array($statement2) ;
$eid =   $row2['E_ID'] ;
   

$sql3="SELECT customer_id from customer where customer_name='$ename'";
$statement3=oci_parse($conn,$sql3);
oci_execute($statement3);

$row3=oci_fetch_array($statement3);
$cid = $row3['CUSTOMER_ID'] ;

    $sql="UPDATE appointment SET e_id='$eid' where customer_id='$cid' ";
    
$res=oci_parse($conn,$sql);
if(!$res)
echo "error";
else
{


}
$objExecute=oci_execute($res);
if($objExecute)
{

    oci_commit($conn); 
    
    header("Location:../appointment_table.php?success=employee_updated");
}

else

{
    oci_rollback($conn); 

    
    echo "commit unsuccessful";

    
}
}
oci_free_statement($res);
oci_close($conn);


?>