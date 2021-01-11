<?php
        global $conn, $success_msg, $email_exist, $emptyError1, $emptyError2, $emptyError3, $emptyError5;
        $conn=oci_connect("ASMADB","asmadb","localhost/XE");

	    if (!$conn)
		echo 'Failed to connect to Oracle';
	    else
		echo 'Succesfully connected with Oracle ';
    
    
    

    if(isset($_POST)) {
        $name = $_POST['name'];
	    $phn = $_POST['price'];
        $add = $_POST['offer'];
        
       
        
    

        $sql="INSERT INTO services (s_code,name,price, offer)values (' ','$name', '$phn','$add')";
        

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

	    header("Location:../services_table.php?success=add_successful");
	}

	else

	{
	    oci_rollback($conn); 

	    $m = oci_error($objParse);

	    header("Location:../customer.html?error=registration_unsuccessful");
	}
	
oci_free_statement($res);
oci_close($conn);
	}
?>