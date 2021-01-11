<?php
        global $conn, $success_msg, $email_exist, $emptyError1, $emptyError2, $emptyError3, $emptyError5;
        $conn=oci_connect("ASMADB","asmadb","localhost/XE");

	    if (!$conn)
		echo 'Failed to connect to Oracle';
	    else
		echo 'Succesfully connected with Oracle ';
    
    
    

    if(isset($_POST)) {
        $name = $_POST['name'];
	    $phn = $_POST['contactno'];
        $add = $_POST['address'];
        $s_type= $_POST['stype'];
        $h_type = $_POST['htype'];
        $allergies = $_POST['allergies'];
        $pass=  $_POST['password'];

       
        
    

        $sql="INSERT INTO customer (customer_id,customer_name, phone_number, allergy, skin_type, hair_type, c_pass)values (' ','$name', '$phn', '$allergies', '$s_type', '$h_type', '$pass')";
        

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

	    header("Location:../login Customer.html?success=registration_successful");
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