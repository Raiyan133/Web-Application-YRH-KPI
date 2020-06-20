<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YRH KPI - หน้าแรก</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-gray-900 topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Topic -->
          <a href="http://www.yaranghospital.com/web/index.php">
            <form class=" mr-auto ml-md-3 my-2 my-md-2 mw-100 ">
              <div class="input-group">
                <img class="img-profile rounded-circle" src="img/logo.jpg" width="45px" height="45px">
            </form>
          </a>
            <form class=" mr-auto ml-md-1 my-2 my-md-2 mw-1 ">
                <div class="sidebar-brand-text mx-2 text-lg text-gray-100">ระบบตัวชี้วัดเพื่อวัดระดับคุณภาพโรงพยาบาลยะรัง</div>
              </div>
            </form>   
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a href="login.php" class="btn btn-secondary align-items-center" >
                <span class="text">Login</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row justify-content-center">

            <!-- Earnings (Monthly) Card Example -->
            
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="#" class="btn btn-secondary btn-icon-split align-items-center" style="width:200px;height:50px">
                <span class="text">ตัวชี้วัดทั้งหมด</span>
              </a>
            </div>
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="#" class="btn btn-secondary btn-icon-split align-items-center" style="width:200px;height:50px">
                <span class="text">ตัวชี้วัดระดับโรงพยาบาล</span>
              </a>
            </div>
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="#" class="btn btn-secondary btn-icon-split align-items-center" style="width:200px;height:50px">
                <span class="text">ตัวชี้วัดระดับหน่วยงาน</span>
              </a>
            </div>
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="#" class="btn btn-secondary btn-icon-split align-items-center" id="navbarDropdown" role="button" data-toggle="dropdown" style="width:200px;height:50px">
                <span class="text">ตัวชี้วัดเลือกตามรหัส</span>
              </a>
                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row justify-content-center">

            <!-- Area Chart -->
            <div class="col-xl-9 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
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
            <span>Copyright &copy; Trainee Raiyan.J FTU 2019</span>
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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
