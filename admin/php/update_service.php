<?php

// login.php

require_once('connection.php');


if(isset($_POST)) {
    
    $ename = $_POST['name'];
    $salary = $_POST['price'];
    $bonus= $_POST['offer'];
    $sname= $_POST['emp'];
    
   



    $sql="UPDATE services SET name='$ename' , price= '$salary', offer='$bonus' WHERE name='$sname' ";
    
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
    
    header("Location:../services_table.php?success=add_successful");
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