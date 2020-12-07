<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];

  $sql = "SELECT staff.*, degree.* FROM staff, degree WHERE degree.degree_id=Staff.staff_degree AND staff_username = '$username'";
  $objQuery = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($objQuery);

  $staff_username = $row["staff_username"];
  $staff_password = $row["staff_password"];
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
                            <h1 class="h4 text-gray-900 mb-4">เปลี่ยนรหัสผ่าน</h1>
                          </div>

                          <form class="form-group text-right" method="post" name="form1" action="">

                            <?php

                            if (isset($_POST['submit'])) {

                              $password_new = $_POST['password_new'];
                              $password_confirm = $_POST['password_confirm'];
                              $password_old = $_POST['password_old'];

                              if (!empty($password_new) && !empty($password_confirm) && !empty($password_old)) {
                                if ($password_new == $password_confirm) {
                                  if ($password_old != $staff_password) {
                                    $message = "รหัสผ่านเก่าไม่ถูกต้อง";
                                  } else {
                                    $sql = "UPDATE staff SET staff_password='$password_new' WHERE staff_team='$username'";
                                    if ($connect->query($sql) === TRUE) {
                            ?>
                                      <script type="text/javascript">
                                        window.location = "change_password_success.php";
                                      </script>
                            <?php
                                    } else {
                                      echo "Error: " . $sql . "<br>" . $connect->error;
                                    }
                                    $connect->close();
                                  }
                                } else {
                                  $message = "รหัสผ่านใหม่และยืนยันรหัสผ่านใหม่ไม่ตรงกัน";
                                }
                              } else {
                                $message = "กรุณาป้อนข้อมูลให้ครบทุกช่อง";
                              }
                            }
                            ?>

                            <div class="form-group row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                              <div class="col-sm-8" align="center">
                                <?php
                                if (!empty($message)) {
                                  echo "<span style=\"color:red\">$message</span>";
                                }
                                ?>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-sm-4">
                                <span class="h7 text-gray-900 mb-4 form-text">Username :</span>
                              </div>
                              <div class="col-sm-4">
                                <input class="form-control" value="<? echo " $staff_username";?>" type="text" readonly>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-4">
                                <span class="h7 text-gray-900 mb-4 form-text">รหัสผ่านใหม่ :</span>
                              </div>
                              <div class="col-sm-4">
                                <input class="form-control" id="password_new" name="password_new" type="password" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-sm-4">
                                <span class="h7 text-gray-900 mb-4 form-text">ยืนยันรหัสผ่านใหม่ :</span>
                              </div>
                              <div class="col-sm-4">
                                <input class="form-control" id="password_confirm" name="password_confirm" type="password" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-sm-4">
                                <span class="h7 text-gray-900 mb-4 form-text">รหัสผ่านเก่า :</span>
                              </div>
                              <div class="col-sm-4">
                                <input class="form-control" id="password_old" name="password_old" type="password" autocomplete="off">
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-4">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                              <div class="col-sm-4">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                                <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit" type="submit" value="">บันทึก</button>
                              </div>
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