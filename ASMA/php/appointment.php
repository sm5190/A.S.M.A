<?php
        
        include('../../php/session.php');

require_once('connection.php');
    

    

    if(isset($_POST)) {
        $sname = $_POST['serv'];
	    $ename = $_POST['emp'];
        $aptime = $_POST['ap_time'];
        $apdate= $_POST['ap_date'];
        
        
        $sql1="SELECT s_code from services where name='$sname'";
$statement1=oci_parse($conn,$sql1);
oci_execute($statement1);

$row1=oci_fetch_array($statement1);
$sql2="SELECT e_id from employee where e_name='$ename'";
$statement2=oci_parse($conn,$sql2);
oci_execute($statement2);

$row2=oci_fetch_array($statement2) ;
$sql3="SELECT customer_id from customer where phone_number='$user_check'";
$statement3=oci_parse($conn,$sql3);
oci_execute($statement3);

$row3=oci_fetch_array($statement3);


 
   $scode=$row1['S_CODE'] ;
   $eid =   $row2['E_ID'] ;
   $cid = $row3['CUSTOMER_ID'] ;
   
    

        $sql="INSERT INTO appointment (e_id,s_code,customer_id,ap_time,ap_date)values ('$eid', '$scode', '$cid', '$aptime', to_date('$apdate','dd/mm/yyyy'))";
        
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
        
	    header("Location:../appointment.php?success=appointment_created");
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