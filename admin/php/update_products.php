<?php

// login.php

require_once('connection.php');


if(isset($_POST)) {
    
    $bc = $_POST['bcode'];
        $pname = $_POST['pname'];
	    $phn = $_POST['price'];
        $add = $_POST['specs'];
        $mod = $_POST['size'];
        $bd = $_POST['bdate'];
        $ed = $_POST['eedate'];
        $sa = $_POST['samount'];
        $wa = $_POST['wamount'];
        
       
    $pqname= $_POST['emp'];
    
   



    $sql="UPDATE products SET prod_name='$pname', prod_specification='$add',prod_size='$mod' , unit_price= '$phn', storage_amount='$sa',withdrawn_amount='$wa', batch_date=to_date('$bd','dd/mm/yy') ,exp_date=to_date('$ed','dd/mm/yy')   WHERE prod_name='$pqname' ";
    
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
    
    header("Location:../products_table.php?success=update_successful");
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