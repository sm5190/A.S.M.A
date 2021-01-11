<?php

// login.php
include('../php/session.php');

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
            <<li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="http://localhost/Asma/Customer Profile.php"> Go to Profile</a>

         
          
          

        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section clearfix">
    <div class="container">



	<form  method="post" action="php/appointment.php">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputTypeOfServices">Type of Services</label>
      <select id="inputTypeOfServices" class="form-control" >
        <option selected>Pick a Type</option>
        <option>Hair Cuts</option>
		<option>Hair Styles</option>
		<option>Spa and Skin Care</option>
		<option>Threading</option>
		<option>Makeup & Drapping</option>
		<option>Henna</option>
      </select>
    </div>
	 </div>
   <?php
    $sql="SELECT name, price  from services";
$statement=oci_parse($conn,$sql);
oci_execute($statement);
?>
	<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputServices">Services</label>
      <select id="inputServices" class="form-control"  name="serv">
      <option selected >Pick a Service</option>
<?php      

while ($row=oci_fetch_array($statement))


{
  ?>
        
        <option value="<?php echo $row['NAME']; ?>"><?php echo $row['NAME']  ?>   : <?php echo $row['PRICE']  ?> tk</option>
	

        <?php
       
}
?>
      </select>
    </div>
   </div>
   
   <?php
    $sql1="SELECT e_name from employee where e_name!='Admin'";
$statement1=oci_parse($conn,$sql1);
oci_execute($statement1);
?>
	<div class="form-row">
  <div class="form-group col-md-4">
      <label for="inputPerformedEmployee">Employee Choice</label>
      <select id="inputPerformedEmployee" class="form-control"  name="emp">
        <option selected >Choose an Employee</option>
        <?php      

while ($row=oci_fetch_array($statement1))


{
  ?>
        
        <option value="<?php echo $row['E_NAME']; ?>"><?php echo $row['E_NAME']; ?></option>
	

        <?php
       
}
?>
		
      </select>
    </div>
	 </div>

	<div class="form-row">
  <div class="form-group">
    <label for="inputDate">Appointment Date</label>
    <input type="text" class="form-control" id="inputDate" placeholder="dd/mm/yyyy" name="ap_date">
  </div>
   </div>

  <div class="form-row">
   <div class="form-group">
    <label for="inputTime">Appointment Time</label>
    <input type="text" class="form-control" id="inputTime" placeholder="hours:minutes"  name="ap_time">
  </div>
   </div>

  

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Create Appointment
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirm Appointment?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Click Ok to continue</p>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div>

</form>


    </div>
  </section>


  <footer class="footer text-faded text-center py-5" style="margin-top:20%">
    <div class="container">
      <p class="m-0 small">Copyright &copy; ASMA 2020</p>
    </div>
  </footer>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php
oci_close($conn);
?>