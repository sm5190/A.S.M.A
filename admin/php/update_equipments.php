<?php

// login.php

require_once('connection.php');


if(isset($_POST)) {
    
    $ename = $_POST['name'];
    $salary = $_POST['price'];
    $bonus= $_POST['amount'];
    $war= $_POST['warranty'];
    $mod= $_POST['imodel'];
    $eqname= $_POST['emp'];
    
   



    $sql="UPDATE equipments SET name='$ename' , unit_price= '$salary', amount='$bonus',warranty='$war', model='$mod'  WHERE name='$eqname' ";
    
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
    
    header("Location:../equipments_table.php?success=update_successful");
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