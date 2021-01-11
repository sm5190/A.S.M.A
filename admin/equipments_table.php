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
                    <h1 class="h3 mb-2 text-gray-800">Equipments of ASMA</h1>
                    <?php
    $sql="SELECT * from equipments";
$statement=oci_parse($conn,$sql);
oci_execute($statement);

?>                  

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Update</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat">Add</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3" data-whatever="@getbootstrap">Delete</button>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="php/update_equipments.php">
          <div class="form-group">
          <?php
    $sql1="SELECT name  from equipments";
$statement1=oci_parse($conn,$sql1);
oci_execute($statement1);
?>
            <label for="inputPerformedEmployee">Choose Equipments</label>
      <select id="inputPerformedEmployee" class="form-control"  name="emp">
        <option selected >Choose Equipments</option>
        <?php      

while ($row=oci_fetch_array($statement1))


{
  ?>
        
        <option value="<?php echo $row['NAME']; ?>"><?php echo $row['NAME']; ?></option>
	

        <?php
       
}
?>
		
      </select>
</div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Name</label>
            <textarea class="form-control" id="message-text" name="name"></textarea>
          </div>
        
          <div class="form-group">
            <label for="message-text" class="col-form-label"> Unit Price</label>
            <textarea class="form-control" id="message-text"  name="price"></textarea>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Model</label>
            <textarea class="form-control" id="message-text"  name="imodel"></textarea>
          </div>
        
          <div class="form-group">
            <label for="message-text" class="col-form-label">Amount</label>
            <textarea class="form-control" id="message-text"  name="amount"></textarea>
          </div>  

          <div class="form-group">
            <label for="message-text" class="col-form-label">Warranty</label>
            <textarea class="form-control" id="message-text"  name="warranty"></textarea>
          </div>  

      
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Confirm Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

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
        <form method="post" action="php/add_equipments.php">
        <div class="form-group">
            <label for="message-text" class="col-form-label">Name</label>
            <textarea class="form-control" id="message-text" name="name"></textarea>
          </div>
        
          <div class="form-group">
            <label for="message-text" class="col-form-label"> Unit Price</label>
            <textarea class="form-control" id="message-text"  name="price"></textarea>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Model</label>
            <textarea class="form-control" id="message-text"  name="model"></textarea>
          </div>
        
          <div class="form-group">
            <label for="message-text" class="col-form-label">Amount</label>
            <textarea class="form-control" id="message-text"  name="amount"></textarea>
          </div>  

          <div class="form-group">
            <label for="message-text" class="col-form-label">Warranty</label>
            <textarea class="form-control" id="message-text"  name="warranty"></textarea>
          </div>  
        
          <div class="form-group">
          <?php
    $sql1="SELECT name  from retailer";
$statement1=oci_parse($conn,$sql1);
oci_execute($statement1);
?>
            <label for="inputPerformedEmployee">Choose retailer for the product</label>
      <select id="inputPerformedEmployee" class="form-control"  name="ret">
        <option selected >Choose retailer</option>
        <?php      

while ($row=oci_fetch_array($statement1))


{
  ?>
        
        <option value="<?php echo $row['NAME']; ?>"><?php echo $row['NAME']; ?></option>
	

        <?php
       
}
?>
		
      </select>
</div>




      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Add New</button>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form   action="php/delete_equipments.php"  method="post">
          <div class="form-group">
          <?php
    $sql1="SELECT name from equipments";
$statement1=oci_parse($conn,$sql1);
oci_execute($statement1);
?>
            <label for="inputPerformedEmployee">Service Choice</label>
      <select id="inputPerformedEmployee" class="form-control"  name="emp">
        <option selected >Choose an equipments</option>
        <?php      

while ($row=oci_fetch_array($statement1))


{
  ?>
        
        <option value="<?php echo $row['NAME']; ?>"><?php echo $row['NAME']; ?></option>
	

        <?php
       
}
?>
		
      </select>
       
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Confirm Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th> Name</th>
                                            <th>Unit Price</th>
                                            <th>Model</th>
                                            <th>Amount</th>
                                            <th>Warranty</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <?php

while ($row=oci_fetch_array($statement))

{
    ?>
                                        <tr>
                                        <td><?php echo $row['NAME']; ?></td>
                                        <td><?php echo $row['UNIT_PRICE']; ?></td>
                                        <td><?php echo $row['MODEL']; ?></td>
                                        <td><?php echo $row['AMOUNT']; ?></td>
                                        <td><?php echo $row['WARRANTY']; ?></td>
                                        
									
                                           
                                            
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