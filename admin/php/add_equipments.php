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
        $add = $_POST['amount'];
        $mod = $_POST['model'];
        $war = $_POST['warranty'];
        $ret =$_POST['ret'];
       
        
    

        $sql="INSERT INTO equipments(eq_id, name ,unit_price,model,amount,warranty)values (' ','$name', '$phn','$mod','$add',to_date('$war','dd/mm/yyyy'))";
        

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
		

		$sql3="SELECT eq_id from equipments where name='$name'";
		$statement3=oci_parse($conn,$sql3);
		oci_execute($statement3);
		
		$row2=oci_fetch_array($statement3) ;
		$eqid =   $row2['EQ_ID'] ;


		$sql2="INSERT INTO r_e values ( '$eqid' , '$ret') ";
		
$statement2=oci_parse($conn,$sql2);
oci_execute($statement2);
oci_commit($conn);


	    header("Location:../equipments_table.php?success=add_successful");
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