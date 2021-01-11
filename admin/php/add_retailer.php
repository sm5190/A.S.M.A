<?php
        global $conn, $success_msg, $email_exist, $emptyError1, $emptyError2, $emptyError3, $emptyError5;
        $conn=oci_connect("ASMADB","asmadb","localhost/XE");

	    if (!$conn)
		echo 'Failed to connect to Oracle';
	    else
		echo 'Succesfully connected with Oracle ';
    
    
    

    if(isset($_POST)) {
        $bc = $_POST['uname'];
        $name = $_POST['sts'];
	    $phn = $_POST['bamount'];
        
       
        
    

        $sql="INSERT INTO retailer (name, contact_number ,address)
        values ('$bc','$name', '$phn')";
        

$res=oci_parse($conn,$sql);
if(!$res)
echo "error";
else
{
echo "Successfully Inserted";

}
$objExecute=oci_execute($res);
	if($objExecute){
	

	    oci_commit($conn); 

	    header("Location:../retailer_table.php?success=add_successful");
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