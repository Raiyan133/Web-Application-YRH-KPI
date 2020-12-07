<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];

  $sql = "SELECT staff.*, degree.* FROM staff, degree WHERE degree.degree_id=Staff.staff_degree AND staff_username = '$username'";
  $objQuery = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($objQuery);

  $staff_name = $row["staff_name"];
  $staff_surname = $row["staff_surname"];
  $staff_birthday = $row["staff_birthday"];
  $staff_id_num = $row["staff_id_num"];
  $degree = $row["degree_name"];
  $team = $row["staff_team"];
  $staff_position = $row["staff_position"];
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
                            <h1 class="h4 text-gray-900 mb-4">ข้อมูลของฉัน</h1>
                          </div>
                          <form class="form-group text-right" method="post" name="form1" action="">

                            <div class="form-group row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text">ชื่อ :</span>
                              </div>
                              <div class="col-sm-4">
                                <input class="form-control" id="staff_name" name="staff_name" type="text" value="<?php echo $staff_name; ?>" readonly>
                              </div>
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text">นามสกุล :</span>
                              </div>
                              <div class="col-sm-4">
                                <input class="form-control" id="staff_surname" name="staff_surname" type="text" value="<?php echo $staff_surname; ?>" readonly>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text">วันเกิด :</span>
                              </div>
                              <div class="col-sm-4">
                                <input class="form-control" id="staff_birthday" name="staff_birthday" type="text" value="<?php echo $staff_birthday; ?>" readonly>
                              </div>
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text">เลขปชช. :</span>
                              </div>
                              <div class="col-sm-4">
                                <input class="form-control" id="staff_id_num" name="staff_id_num" type="text" value="<?php echo $staff_id_num; ?>" readonly>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text">ระดับ :</span>
                              </div>
                              <div class="col-sm-4">
                                <input class="form-control" id="degree" name="degree" type="text" value="<?php echo $degree; ?>" readonly>
                              </div>
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text">ทีม :</span>
                              </div>
                              <div class="col-sm-4">
                                <input class="form-control" id="team" name="team" type="text" value="<?php echo $team; ?>" readonly>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text">ตำแหน่ง :</span>
                              </div>
                              <div class="col-sm-4">
                                <input class="form-control" id="staff_position" name="staff_position" type="text" value="<?php echo $staff_position; ?>" readonly>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-4">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                              <div class="col-sm-4">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                                <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit" type="submit" value="">แก้ไขข้อมูล</button>
                              </div>
                            </div>

                            <?php
                          if (isset($_POST['submit'])) {
                            ?>
                              <script type="text/javascript">
                                window.location = "account_edit.php";
                              </script>
                          <?php
                          }

                            ?>

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

<?php } else { Header("Location:home.php"); } ?>