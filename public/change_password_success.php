<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>ข้อมูลของฉัน</title>
    <?php include('../include/head.php'); ?>
  </head>

  <body id="page-top">
    <div id="wrapper">
      <?php include('../include/sidebar.php'); ?>
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <?php include('../include/topbar.php'); ?>
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-xl-8 col-lg-14 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0 bg-gray-500">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="p-5">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">เปลี่ยนรหัสผ่านสำเร็จ</h1>
                          </div>

                          <form class="form-group text-right" method="post" name="form1" action="">
                            <div class="form-group row">
                              <div class="col-sm-4">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                              <div class="col-sm-4">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                                <a href="home.php" class="btn btn-secondary btn-user btn-block bg-gray-900" style="width:100%;">
                                  <span class="text">หน้าแรก</span>
                                </a>
                              </div>
                              <div class="col-sm-4">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                                <a href="account.php" class="btn btn-secondary btn-user btn-block bg-gray-900" style="width:100%;">
                                  <span class="text">ข้อมูลของฉัน</span>
                                </a> </div>
                            </div>

                          </form>
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

<?php } else {
  Header("Location:home.php");
} ?>