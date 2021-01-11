<?php

// login.php
include('php/session.php');

require_once('php/connection.php');
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ASMA</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">
  <link href="css/resume.min.css" rel="stylesheet">
 

</head>

<body>

  
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
          <a href="php/logout employee.php">Logout</a>
         
          
          </li>
          
        </ul>
      </div>
    </div>
  </nav>








<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
     
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/c4.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">Contact info</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">Personal Info</a>
        </li>
		
    
		<li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="http://localhost/Asma/ASMA/Appointment.php">Create Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Previous Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="contact-form-v5/ContactFrom_v5/complain.php">Issue Complain</a>
        </li>
      </ul>
    </div>
  </nav>
  <?php 




$sql="SELECT * from customer_profile where phone_number='$user_check'";
$statement1=oci_parse($conn,$sql);
oci_execute($statement1);
while ($row=oci_fetch_array($statement1))


{
?>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">Welcome 
          <span class="text-primary"><?php echo $row['CUSTOMER_NAME'];?></span>
        </h1>
        <div class="subheading mb-5">Provided Phone Number:
          <a href="#"><?php echo $row['PHONE_NUMBER'];?></a>
        </div>
        
      </div>
    </section>

    <hr class="m-0">
	
	

   
	
	   

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">Personal Info</h2>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Address: <?php echo $row['ADDRESS']; ?></li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Allergy : <?php echo $row['ALLERGY']; ?></li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
           
            Skin Type : <?php echo $row['SKIN_TYPE']; ?></li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            
            Hair Type : <?php echo $row['HAIR_TYPE']; ?></li>
            <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            
             Disount if any: <?php echo $row['DISCOUNT']; ?></li>
          
        </ul>
      </div>
    </section>

    <?php
}
?>
<hr class="m-0">

<section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
  <div class="w-100">
    <h2 class="mb-5">Your Appointment</h2>

    
      <div class="container">
        <div class="table-responsive">
<table class="table table-dark">
<tr>
    <th>Appointment Time</th>
    <th>Appointment Date</th>
    <th>Chosen service</th>
    <th>Chosen Employee</th>

  </tr>
<?php
$sql3="SELECT customer_id from customer where phone_number='$user_check'";
$statement3=oci_parse($conn,$sql3);
oci_execute($statement3);
$row3=oci_fetch_array($statement3);
$cid = $row3['CUSTOMER_ID'] ;

$sql1="SELECT  ap_time,ap_date , employee_name, service_name from appointment_view_customer  where  customer_id='$cid'";
$statement=oci_parse($conn,$sql1);
oci_execute($statement);
    
while ($row=oci_fetch_array($statement))





{
?>
     
  
            
            <tr>
  <td><?php echo $row['AP_DATE']; ?> </td>
  <td><?php echo $row['AP_TIME']; ?></td>
  <td><?php echo $row['SERVICE_NAME']; ?></td>
  <td><?php echo $row['EMPLOYEE_NAME']; ?></td>
  </tr>

          
      
        <?php
}
?>
  </table>	
</div>
  </div>
		 <hr class="m-0">
		
     </div>
    



</body>







 
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



</html>
