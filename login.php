<?php
session_start();
include('include/db.php');

// username and password receive from register form
if (isset($_POST['ok'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // To protect MySQL injection (more detail about MySQL injection)
//        $username = stripslashes($username);
//        $password = stripslashes($password);
//        $username = mysqli_real_escape_string($connection, $username);
//        $password = mysqli_real_escape_string($connection, $password);
        //check compare to database
        $sql = "SELECT * FROM admin WHERE username='$username' and password='$password'";
        $result = mysqli_query($connect, $sql);
        // Mysql_num_row is counting table row
        $count = mysqli_num_rows($result);
        // If result matched $myusername and $mypassword, table row must be 1 row
        if ($count == 1) {
            // Register $username, $password and redirect to file "login_success.php"
            $_SESSION['username'] = $username;
//            $_SESSION['password'] = $password;
            // redirect to profile page
            header("Location:admin/admin_home.php");
        } else {
            //$error='Wrong Username or Password';
            $message = "Username & Password ไม่ถูกต้อง";
        }


        $sql1 = "SELECT * FROM staff WHERE staff_username='$username' and staff_password='$password'";
        $result1 = mysqli_query($connect, $sql1);
        // Mysql_num_row is counting table row
        $count1 = mysqli_num_rows($result1);
        // If result matched $myusername and $mypassword, table row must be 1 row
        if ($count1 == 1) {
            // Register $username, $password and redirect to file "login_success.php"
            $_SESSION['username'] = $username;
//            $_SESSION['password'] = $password;
            // redirect to profile page
            header("Location:staff/staff_home.php");
        } else {
            //$error='Wrong Username or Password';
            $message = "Username & Password ไม่ถูกต้อง";
        }


    } else if (empty($_POST['username']) && empty($_POST['password'])) {
        $message = "กรุณาป้อนข้อมูลให้ครบและถูกต้อง";
    } else if (empty($_POST['username']) && !empty($_POST['password'])) {
        $message = "กรุณาป้อนข้อมูลให้ครบและถูกต้อง";
    } else if (!empty($_POST['username']) && empty($_POST['password'])) {
        $message = "กรุณาป้อนข้อมูลให้ครบและถูกต้อง";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YRH KPI - Login</title>

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
              <a href="index.php" class="btn btn-secondary align-items-center" >
                <span class="text">กลับ</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container">

          <!-- Outer Row -->
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-12 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-4"></div>
              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 bg-gray-600">
                  <div class="card o-hidden border-0 shadow-lg my-3"></div>
                  <!-- Nested Row within Card Body -->
                  <div class="row justify-content-center">                   
                    <div class="col-lg-8">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">ลงชื่อเข้าใช้</h1>
                            <div class="form-group">
                              <?php if (!empty($message)) {
                                echo "<span style=\"color:red\">$message</span>";
                              }
                              ?>
                            </div>  
                            <form action="" method="post" class="user">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Username">
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                              </div>
                              <input class="btn btn-secondary btn-user btn-block bg-gray-900" type="submit" name="ok" id="ok" value="Login" />
                            </form>
                        </div>
                      </div>
                    </div>
                  </div><div class="card o-hidden border-0 shadow-lg my-3"></div>
                </div>
              </div>
              <div class="card o-hidden border-0 shadow-lg my-5"></div>
              <div class="card o-hidden border-0 shadow-lg my-4"></div>
            </div>
          </div>
        </div>
        <!-- End of Main Content -->

      <!-- Footer -->
      <?php
      //session_start();
      include('include/footer.php');
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
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
