<?php
        global $conn, $success_msg, $email_exist, $emptyError1, $emptyError2, $emptyError3, $emptyError5;
        $conn=oci_connect("ASMADB","asmadb","localhost/XE");

	    if (!$conn)
		echo 'Failed to connect to Oracle';
	    else
		echo '';
    
    
    

    if(isset($_POST)) {
        $name = $_POST['emp'];
	    $phn = $_POST['ctype'];
        $add = $_POST['complain'];
        

        $sql2="SELECT e_id from employee where e_name='$name'";
        $statement2=oci_parse($conn,$sql2);
        oci_execute($statement2);
        
        $row2=oci_fetch_array($statement2) ;
        $eid =   $row2['E_ID'] ;
    

        $sql="INSERT INTO hr (e_id,type, complain)values ('$eid', '$phn', '$add')";
        

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

	    header("Location:../../Customer Profile.php?success=complain_recorded");
	}

	else

	{
	    oci_rollback($conn); 

	    $m = oci_error($objParse);

	   
	}
	
oci_free_statement($res);
oci_close($conn);
	}
?>