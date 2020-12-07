<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('ลงชื่อเข้าใช้ผิดพลาด !! $username ได้ลงชื่อเข้าใช้แล้ว');
    window.location.href='../index.php';
    </script>");

  //header('location:../index.php');
} else {
  $username = '';

  // username and password receive from register form
  if (isset($_POST['ok'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $sql_admin = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
      $result_admin = mysqli_query($connect, $sql_admin);
      $count_admin = mysqli_num_rows($result_admin);

      $sql_staff = "SELECT * FROM staff WHERE staff_username = '$username' AND staff_password = '$password'";
      $result_staff = mysqli_query($connect, $sql_staff);
      $count_staff = mysqli_num_rows($result_staff);

      if ($count_admin == 1 || $count_staff == 1) {
        $_SESSION['username'] = $username;
        header("Location:home.php");
      } else {
        $message = "Username & Password ไม่ถูกต้อง";
      }
    } else if (empty($_POST['username']) || empty($_POST['password'])) {
      $message = "กรุณาป้อนข้อมูลให้ครบและถูกต้อง";
    }
  }

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>ลงชื่อเข้าใช้</title>
    <?php include('../include/head.php'); ?>
  </head>

  <body id="page-top">
    <div id="wrapper">
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <?php include('../include/topbar.php'); ?>
          <div class="container">

            <div class="row justify-content-center">
              <div class="col-xl-8 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-4"></div>
                <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0 bg-gray-600">
                    <div class="card o-hidden border-0 shadow-lg my-3"></div>
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
                    </div>
                    <div class="card o-hidden border-0 shadow-lg my-3"></div>
                  </div>
                </div>
                <div class="card o-hidden border-0 shadow-lg my-5"></div>
                <div class="card o-hidden border-0 shadow-lg my-4"></div>
              </div>
            </div>
          </div>

          <?php include('../include/footer.php'); ?>
        </div>
      </div>
      <?php include('../include/script.php'); ?>
  </body>

  </html>

<?php } ?>