<?php

// login.php

require_once('connection.php');


if(isset($_POST)) {
    
    $ename = $_POST['emp'];
    $salary = $_POST['salary'];
    $bonus= $_POST['bonus'];
    
    
   



    $sql="UPDATE employee SET salary='$salary' , bonus= '$bonus' WHERE e_name='$ename' ";
    
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
    
    header("Location:../employee_table.php?success=employee_updated");
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