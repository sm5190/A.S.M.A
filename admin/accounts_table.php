<?php

// login.php

require_once('php/connection.php');
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ASMA Admin</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-database"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="admin.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading" style="margin-top: 5%">
                Interface
            </div>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item" style="margin-top: 3%">
                <a class="nav-link collapsed" href="view.html">
                    <i class="fa fa-window-maximize"></i>
                    <span>View</span>
                </a>
                
            </li>
            

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item" style="margin-top: 3%">
                <a class="nav-link collapsed" href="../ASMA/index.html">
                    <i class="fas fa fa-home"></i>
                    <span>Back to Home</span>
                </a>
                
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">ASMA Accounts</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat">Add</button>




<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="php/add_accounts.php">
        <div class="form-group">
            <label for="message-text" class="col-form-label">Transaction Type</label>
            <textarea class="form-control" id="message-text"  name="typ"></textarea>
</div>
        
          

          <?php
    $sql="SELECT e_name from employee";
$statement=oci_parse($conn,$sql);
oci_execute($statement);
?>
	
    <div class="form-group ">
      <label for="inputServices">Employee name</label>
      <select id="inputServices" class="form-control"  name="emp">
      <option selected >Pick a Employee</option>
<?php      

while ($row=oci_fetch_array($statement))


{
  ?>
        
        <option value="<?php echo $row['E_NAME']; ?>"><?php echo $row['E_NAME']  ?>   </option>
	

        <?php
       
}
?>
      </select>
    </div>




    <?php
    $sql="SELECT service_name  from appointment_view_admin";
$statement=oci_parse($conn,$sql);
oci_execute($statement);
?>
	
    <div class="form-group">
      <label for="inputServices">Services for Income Type</label>
      <select id="inputServices" class="form-control"  name="serv">
      <option selected >Pick a Service</option>
<?php      

while ($row=oci_fetch_array($statement))


{
  ?>
        
        <option value="<?php echo $row['SERVICE_NAME']; ?>"><?php echo $row['SERVICE_NAME']  ?>  </option>
	

        <?php
       
}
?>
      </select>
    </div>

 
    <?php
    $sql="SELECT name from equipments";
$statement=oci_parse($conn,$sql);
oci_execute($statement);
?>
	
    <div class="form-group ">
      <label for="inputServices">Equipments</label>
      <select id="inputServices" class="form-control"  name="equip">
      <option selected >Pick a Equipment</option>
<?php      

while ($row=oci_fetch_array($statement))


{
  ?>
        
        <option value="<?php echo $row['NAME']; ?>"><?php echo $row['NAME']  ?>   </option>
	

        <?php
       
}
?>
      </select>
    </div>
  

    <?php
    $sql="SELECT prod_name from products";
$statement=oci_parse($conn,$sql);
oci_execute($statement);
?>

    <div class="form-group">
      <label for="inputServices">Product Name:</label>
      <select id="inputServices" class="form-control"  name="prod">
      <option selected >Pick a product</option>
<?php      

while ($row=oci_fetch_array($statement))


{
  ?>
        
        <option value="<?php echo $row['PROD_NAME']; ?>"><?php echo $row['PROD_NAME']  ?>   </option>
	

        <?php
       
}
?>
      </select>
    </div>
 

    <?php
    $sql="SELECT name from utility";
$statement=oci_parse($conn,$sql);
oci_execute($statement);
?>
	
    <div class="form-group">
      <label for="inputServices">Utility Name :</label>
      <select id="inputServices" class="form-control"  name="util">
      <option selected >Pick a Utility</option>
<?php      

while ($row=oci_fetch_array($statement))


{
  ?>
        
        <option value="<?php echo $row['NAME']; ?>"><?php echo $row['NAME']  ?>   </option>
	

        <?php
       
}
?>
      </select>
    </div>




    <div class="form-group">
            <label for="message-text" class="col-form-label">Amount</label>
            <textarea class="form-control" id="message-text"  name="price"></textarea>
          </div>
        
          <div class="form-group">
            <label for="message-text" class="col-form-label">Paid on date</label>
            <textarea class="form-control" id="message-text"  name="offer"></textarea>
          </div>  

      
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Add New</button>
        </form>

</div>

      </div>
    </div>
  </div>
</div>





</h6>

<?php
    $sql2="SELECT * from accounts";
$statement2=oci_parse($conn,$sql2);
oci_execute($statement2);

?>                 
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th> Transaction ID</th>
                                            <th>Transaction Type</th>
                                            <th>Amount</th>
                                            <th>Type ID</th>
                                            <th>Paid on</th>

                                            
                                            
                                        </tr>
                                    </thead>
</tfoot>
                                
                                    <?php

while ($r=oci_fetch_array($statement2))


{
    ?>
      <tr>                                
                                        <td><?php echo $r['TRANSACTION_ID']; ?></td>
                                        <td><?php echo $r['TYPE']; ?></td>
                                        <td><?php echo $r['AMOUNT']; ?></td>
                                        <td><?php echo $r['ID']; ?></td>
                                        <td><?php echo $r['PAID_ON']; ?></td>
                                        </tr>     
									
                                           
                                            
                                       
 <?php
}
?>

                                    </tfoot>
                                    <tbody>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script>$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})</script>
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>