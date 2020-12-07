<?php
include('../include/db.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>About us</title>
  <?php include('../include/head.php'); ?>
</head>

<body id="page-top">
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        <nav class="navbar navbar-expand navbar-light bg-gray-900 topbar mb-4 static-top shadow">

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <a href="http://www.yaranghospital.com/web/index.php">
            <form class=" mr-auto ml-md-3 my-2 my-md-2 mw-100 ">
              <div class="input-group">
                <img class="img-profile rounded-circle" src="../img/logo.jpg" width="45px" height="45px">
              </div>
            </form>
          </a>
          <form class=" mr-auto ml-md-1 my-2 my-md-2 mw-1 ">
            <div class="sidebar-brand-text mx-2 text-lg text-gray-100">ระบบตัวชี้วัดเพื่อวัดระดับคุณภาพโรงพยาบาลยะรัง</div>
          </form>

          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown no-arrow">
              <a href="home.php" class="btn btn-secondary align-items-center">
                <span class="text">Home</span>
              </a>
            </li>
          </ul>
        </nav>

        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-14 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 bg-gray-500">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4"><br><br><br>FINAL YEAR PROJECT</h1>
                        </div>

                        <div class="form row text-center">
                            <div class="col-sm-12">
                              <span class="h7 text-gray-900 mb-4 form-text">Raiyan Japakeeya</span>
                            </div>
                          </div>
                          <div class="form row text-center">
                            <div class="col-sm-12">
                              <span class="h7 text-gray-900 mb-4 form-text">Department of Information Technology<br>Faculty of Science and Technology<br>Fatoni University</span>
                            </div>
                          </div>
                          <div class="form row text-center">
                            <div class="col-sm-12">
                              <span class="h7 text-gray-900 mb-4 form-text">2020<br>...<br><br><br></span>
                            </div>
                          </div>










                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="result" style="padding-top: 50px; width: 100%"></div>
          </div>
        </div>
      </div>
      <?php include('../include/footer.php'); ?>
    </div>
  </div>
  <?php include('../include/script.php'); ?>
</body>


</html>