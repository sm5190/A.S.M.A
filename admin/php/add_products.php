<?php
        global $conn, $success_msg, $email_exist, $emptyError1, $emptyError2, $emptyError3, $emptyError5;
        $conn=oci_connect("ASMADB","asmadb","localhost/XE");

	    if (!$conn)
		echo 'Failed to connect to Oracle';
	    else
		echo 'Succesfully connected with Oracle ';
    
    
    

    if(isset($_POST)) {
        $bc = $_POST['bcode'];
        $name = $_POST['name'];
	    $phn = $_POST['price'];
        $add = $_POST['specs'];
        $mod = $_POST['size'];
        $bd = $_POST['bdate'];
        $ed = $_POST['edate'];
        $sa = $_POST['samount'];
		$wa = $_POST['wamount'];
		$ret =$_POST['ret'];
        
       
        
    

        $sql="INSERT INTO products (barcode, prod_name ,prod_specification,prod_size,unit_price,batch_date,exp_date,storage_amount,withdrawn_amount)
		values ('$bc','$name', '$add','$mod','$phn',to_date('$bd','dd/mm/yyyy'),to_date('$ed','dd/mm/yyyy'),'$sa', '$wa')";
		

		+
		
$res=oci_parse($conn,$sql);
if(!$res)
echo "error";
else
{
echo "Successfully Inserted";

}
$objExecute=oci_execute($res);
	if($objExecute ){
	

		oci_commit($conn); 
		
		$sql2="INSERT INTO r_p values ( '$bc' , '$ret') ";
		
$statement2=oci_parse($conn,$sql2);
oci_execute($statement2);
oci_commit($conn);


	    header("Location:../products_table.php?success=add_successful");
	}

	else

	{
	    oci_rollback($conn); 

	    $m = oci_error($objParse);

	    //header("Location:../customer.html?error=registration_unsuccessful");
	}
	
oci_free_statement($res);
oci_close($conn);
	}
?>