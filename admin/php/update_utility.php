<?php

// login.php

require_once('connection.php');


if(isset($_POST)) {
    
    
    $bc = $_POST['uname'];
    $name = $_POST['sts'];
    $phn = $_POST['bamount'];
    $add = $_POST['cmp'];
    $pd = $_POST['pdate'];
        
       
    $pqname= $_POST['emp'];
    
   



    $sql="UPDATE utility SET name='$bc', status='$name',bill_amount='$phn' , paid_on= to_date('$pd','dd/mm/yyyy'), company='$add'  WHERE name='$pqname' ";
    
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
    
    header("Location:../utility_table.php?success=update_successful");
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