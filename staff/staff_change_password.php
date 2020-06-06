<?php
  include('../include/username.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Staff Change Password</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

</head>

<?php include "connectdb.php"; ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      //session_start();
      include('../staff/staff_include/staff_sidebar.php');
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
        //session_start();
        include('../include/topbar.php');
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-14 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 bg-gray-500">
                  <!-- Nested Row within Card Body -->
                  <div class="row">                   
                    <div class="col-lg-12">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">เปลี่ยนรหัสผ่าน</h1>
                        </div>
                        <form class="form-group text-right">
                       
                          <div class="form row">
                            <div class="col-sm-4">
                              <span class="h7 text-gray-900 mb-4 form-text">รหัสผ่านใหม่ :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="indicator_id" name="indicator_id" type="text">
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="col-sm-4">
                              <span class="h7 text-gray-900 mb-4 form-text">ยืนยันรหัสผ่านใหม่ :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="indicator_id" name="indicator_id" type="text">
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="col-sm-4">
                              <span class="h7 text-gray-900 mb-4 form-text">รหัสผ่านเก่า :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="indicator_id" name="indicator_id" type="text">
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-4">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-4">
                            <input type="hidden" name="id" id="num_id" />
                                  
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" type="button" name="staff_ind_action" id="staff_ind_action"></button>
                              
                            </div>                          
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div id="result" style="padding-top: 50px; width: 100%" align="center"></div>
          </div>

          
        </div>
        <!-- /.container-fluid -->


      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php
      //session_start();
      include('../include/footer.php');
      ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
