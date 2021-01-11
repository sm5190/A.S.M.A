<?php
        global $conn, $success_msg, $email_exist, $emptyError1, $emptyError2, $emptyError3, $id;
        $conn=oci_connect("ASMADB","asmadb","localhost/XE");

	    if (!$conn)
		echo 'Failed to connect to Oracle';
	    else
		echo 'Succesfully connected with Oracle ';
    
    
    

    if(isset($_POST)) {
        $bc = $_POST['typ'];
        $name = $_POST['emp'];
	    $phn = $_POST['serv'];
        $add = $_POST['equip'];
		$pd = $_POST['prod'];
		$pd1 = $_POST['util'];
		$pd2 = $_POST['price'];
		$pd3 = $_POST['offer'];
		
		$sql1="SELECT e_id from employee where e_name='$name'";
		$statement1=oci_parse($conn,$sql1);
		oci_execute($statement1);
		
		$row1=oci_fetch_array($statement1);

		$sql2="SELECT s_code from services where name='$phn'";
		$statement2=oci_parse($conn,$sql2);
		oci_execute($statement2);
		
		$row2=oci_fetch_array($statement2);

		$sql3="SELECT eq_id from equipments where name='$add'";
		$statement3=oci_parse($conn,$sql3);
		oci_execute($statement3);
		
		$row3=oci_fetch_array($statement3);
        
		
		$sql4="SELECT barcode from products where prod_name='$pd'";
		$statement4=oci_parse($conn,$sql4);
		oci_execute($statement4);
		
		$row4=oci_fetch_array($statement4);

		$sql5="SELECT u_id from utility where name='$pd1'";
		$statement5=oci_parse($conn,$sql5);
		oci_execute($statement5);
		
		$row5=oci_fetch_array($statement5);


		$scode=$row2['S_CODE'] ;
	
   $eid =   $row1['E_ID'] ;
   $eqid = $row3['EQ_ID'] ;
   $pid=$row4['BARCODE'] ;
   $uid =   $row5['U_ID'] ;
   


		if (!is_null($scode))
		{
		
			$sql="INSERT INTO accounts(transaction_id,type, id, amount, paid_on)values (' ', 'Income', '$scode', '$pd2', to_date('$pd3','DD-MM-YYYY'))";
			$res=oci_parse($conn,$sql);
			$objExecute=oci_execute($res);
			//oci_commit($conn); 
			

		}
		else if ( !is_null($eid ))

		{  
			$sql="INSERT INTO accounts(transaction_id,type, id, amount, paid_on)values (' ', 'Employee', '$eid', '$pd2', to_date('$pd3','DD-MM-YYYY'))";
			$res=oci_parse($conn,$sql);
			$objExecute=oci_execute($res);
			//oci_commit($conn); 
			 }

		else if ( ! is_null($eqid))
		{     
			$sql="INSERT INTO accounts(transaction_id,type, id, amount, paid_on)values (' ', 'Equipment', '$eqid', '$pd2', to_date('$pd3','DD-MM-YYYY'))";
			$res=oci_parse($conn,$sql);
			$objExecute=oci_execute($res);
			//oci_commit($conn); 
			}
		else if ( !is_null($pid ))  
		{  
			$sql="INSERT INTO accounts(transaction_id,type, id, amount, paid_on)values (' ', 'Product', '$pid', '$pd2', to_date('$pd3','DD-MM-YYYY'))";
			$res=oci_parse($conn,$sql);
			$objExecute=oci_execute($res);
			//oci_commit($conn); 
			 }
		else if (!is_null($uid))
			  {     
				$sql="INSERT INTO accounts(transaction_id,type, id, amount, paid_on)values (' ', 'Utility', '$uid', '$pd2', to_date('$pd3','DD-MM-YYYY'))";
				$res=oci_parse($conn,$sql);
				$objExecute=oci_execute($res);
				//oci_commit($conn); 
	}    
				else 
				{

					echo 'Failure';
				}
oci_commit($conn);
header("Location:../accounts_table.php?success=add_successful");
			}
			oci_close($conn);		  
			  ?>