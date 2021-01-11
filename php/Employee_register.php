<?php
        global $conn;
        $conn=oci_connect("ASMADB","asmadb","localhost/XE");

	    if (!$conn)
		echo 'Failed to connect to Oracle';
	    else
		echo 'Succesfully connected with Oracle ';
    
    
    

    if(isset($_POST)) {
        $uname = $_POST['name'];
	    $phn = $_POST['contactno'];
		$cadd = $_POST['caddress'];
		$padd = $_POST['paddress'];
        $skills= $_POST['skills'];
        $hdate = $_POST['hdate'];
        $pass=  $_POST['password'];

		
        
	
    

        $sql="INSERT INTO employee (e_id,e_name,contact_number, hiredate, current_address, permanent_address, skills, e_pass)values(' ','$uname', '$phn', to_date('$hdate','dd/mm/yyyy'), '$cadd', '$padd' ,'$skills' ,'$pass')";
        

$res=oci_parse($conn,$sql);
if(!$res)
echo "error";
else
{
echo "Successfully Inserted";

}
$objExecute=oci_execute($res);
if($objExecute)
	{

	    oci_commit($conn); 

	    header("Location:../login Employee.html?success=registration_successful");
	}
        
	 

	else

	{
	    oci_rollback($conn); 

	    header("Location:../employee.html?error=registration_unsuccessful");
	}

oci_free_statement($res);
oci_close($conn);
    }
?>