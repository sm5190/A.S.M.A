<?php

// login.php

require_once('connection.php');


if(isset($_POST)) {
    
    $ename = $_POST['emp'];
    
    
    
   



    $sql="DELETE FROM utility where name='$ename' ";
    
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
    
    header("Location:../utility_table.php?success=delete_successful");
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