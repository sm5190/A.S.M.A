<?php

// login.php

require_once('connection.php');


if(isset($_POST)) {
    
    $ename = $_POST['emp'];
    $sql3="SELECT customer_id from customer where phone_number='$ename'";
$statement3=oci_parse($conn,$sql3);
oci_execute($statement3);

$row3=oci_fetch_array($statement3);
$cid = $row3['CUSTOMER_ID'] ;
    $bonus= $_POST['ctype'];
    
    
   



    $sql="DECLARE
    var varchar2(20);
    var1 Number;
    BEGIN
    Loyality_cuustomer('$ename','$bonus' ,var1,var);
    END;";
    
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
    
    header("Location:../customer_table.php?success=customer_updated");
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