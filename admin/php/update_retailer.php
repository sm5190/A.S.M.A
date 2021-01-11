<?php

// login.php

require_once('connection.php');


if(isset($_POST)) {
    
    
    $bc = $_POST['uname'];
    $name = $_POST['sts'];
    $phn = $_POST['bamount'];
    
   
        
       
    $pqname= $_POST['emp'];
    
   



    $sql="UPDATE retailer SET name='$bc', contact_number='$name',address='$phn'  WHERE name='$pqname' ";
    
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
    
    header("Location:../retailer_table.php?success=update_successful");
}

else

{
    oci_rollback($conn); 

    $m = oci_error($objParse);
    echo $m;

    

    
}
}
oci_free_statement($res);
oci_close($conn);


?>