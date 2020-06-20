<?php
include('../include/db.php');
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

  <title>Admin Insert Value</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
    //session_start();
    include('../admin/admin_include/admin_sidebar.php');
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
            <div class="col-xl-12 col-lg-14 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 bg-gray-500">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">ป้อนข้อมูลตัวชี้วัด เพื่อแสดงผลกราฟ</h1>
                        </div>

                        <form class="form-group text-right" method="post" name="form1" action="" onSubmit="JavaScript:return fncSubmit();">
                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                          </div>
                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">รหัสตัวชี้วัด :</span>
                            </div>
                            <div class="col-sm-5">
                              <select class="form-control" name="id" id="id">
                                <option value="" disabled selected>โปรดเลือก</option>
                                <?php
                                $sql = "SELECT * FROM indicator ORDER BY indicator_id ASC";
                                $objQuery = mysqli_query($connect, $sql);
                                while ($objResuut = mysqli_fetch_array($objQuery)) {
                                ?>
                                  <option value="<?php echo $objResuut["indicator_id"]; ?>"><?php echo $objResuut["indicator_id"] . " : " . $objResuut["indicator_name"]; ?></option>
                                <?php
                                }
                                ?>
                              </select>
                            </div>
                            <div class="col-sm-1">
                              <span class="h7 text-gray-900 mb-4 form-text">ปี พ.ศ. </span>
                            </div>
                            <div class="col-sm-2">
                              <input class="form-control" name="year" id="year" type="text" value="">
                            </div>
                            <div class="col-sm-1">
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="go" type="submit" value="">go</button>
                            </div>
                          </div>

                          <?php
                          if (isset($_POST['go'])) {

                            if (!empty($_POST['id']) && !empty($_POST['year'])) {

                              if (is_numeric($_POST['year'])) {

                                $sql = "SELECT * FROM indicator WHERE indicator_id = '" . $_POST['id'] . "'";
                                $objQuery = mysqli_query($connect, $sql);
                                while ($row = mysqli_fetch_array($objQuery)) {
                                  $ind_id = $row["indicator_id"];
                                  $ind_name = $row["indicator_name"];
                                  $first_name = $row["first_name"];
                                  $last_name = $row["last_name"];
                                  $type = $row["type"];
                                }
                                $year = $_POST['year'];



                                // ร า ย เ ดื อ น

                                if ($type == "รายเดือน") {

                                  $id = $ind_id . $year;

                                  $sql = "SELECT * FROM graph WHERE graph_id='$id'";
                                  $result = mysqli_query($connect, $sql);
                          ?>
                                  <div class="form row">
                                    <div class="col-sm-2">
                                      <span class="h7 text-gray-900 mb-4 form-text"></span>
                                    </div>
                                  </div>
                                  <div class="form row">
                                    <div class="col-sm-2">
                                      <span class="h7 text-gray-900 mb-4 form-text"></span>
                                    </div>
                                    <div class="col-sm-8" align="center">
                                      <?php if (mysqli_num_rows($result) > 0) {
                                        echo "<span style=\"color:red\">รหัสตัวชี้วัด" . " " . $_POST['id'] . " " . "ปี" . " " . $_POST['year'] . " " . "ถูกป้อนข้อมูล เพื่อแสดงกราฟแล้ว</span>";
                                      ?>
                                    </div>
                                  </div>
                                <?php
                                      } else {

                                        $sql = "SELECT * FROM indicator WHERE indicator_id = '" . $_POST['id'] . "'";
                                        $objQuery = mysqli_query($connect, $sql);
                                        $row = mysqli_fetch_array($objQuery);

                                        $_SESSION['ind_id'] = $row["indicator_id"];
                                        $_SESSION['ind_name'] = $row["indicator_name"];
                                        $_SESSION['first_name'] = $row["first_name"];
                                        $_SESSION['last_name'] = $row["last_name"];
                                        $_SESSION['type'] = $row["type"];
                                        $_SESSION['year'] = $_POST['year'];

                                        session_write_close();

                                ?>

                                  <script type="text/javascript">
                                    window.location = "admin_insert_m.php";
                                  </script>



                                <?php
                                      }

                                      // ร า ย 3 เ ดื อ น

                                    } else if ($type == "3 เดือน") {

                                      $id = $ind_id . $year;

                                      $sql = "SELECT * FROM graph WHERE graph_id='$id'";
                                      $result = mysqli_query($connect, $sql);
                                ?>
                                <div class="form row">
                                  <div class="col-sm-2">
                                    <span class="h7 text-gray-900 mb-4 form-text"></span>
                                  </div>
                                </div>
                                <div class="form row">
                                  <div class="col-sm-2">
                                    <span class="h7 text-gray-900 mb-4 form-text"></span>
                                  </div>
                                  <div class="col-sm-8" align="center">
                                    <?php if (mysqli_num_rows($result) > 0) {
                                        echo "<span style=\"color:red\">รหัสตัวชี้วัด" . " " . $_POST['id'] . " " . "ปี" . " " . $_POST['year'] . " " . "ถูกป้อนข้อมูล เพื่อแสดงกราฟแล้ว</span>";
                                    ?>
                                  </div>
                                </div>
                              <?php
                                      } else {


                                        $sql = "SELECT * FROM indicator WHERE indicator_id = '" . $_POST['id'] . "'";
                                        $objQuery = mysqli_query($connect, $sql);
                                        $row = mysqli_fetch_array($objQuery);

                                        $_SESSION['ind_id'] = $row["indicator_id"];
                                        $_SESSION['ind_name'] = $row["indicator_name"];
                                        $_SESSION['first_name'] = $row["first_name"];
                                        $_SESSION['last_name'] = $row["last_name"];
                                        $_SESSION['type'] = $row["type"];
                                        $_SESSION['year'] = $_POST['year'];

                                        session_write_close();

                              ?>

                                <script type="text/javascript">
                                  window.location = "admin_insert_3m.php";
                                </script>



                              <?php
                                      }

                                      // ร า ย 6 เ ดื อ น

                                    } else if ($type == "6 เดือน") {

                                      $id = $ind_id . $year;

                                      $sql = "SELECT * FROM graph WHERE graph_id='$id'";
                                      $result = mysqli_query($connect, $sql);
                              ?>
                              <div class="form row">
                                <div class="col-sm-2">
                                  <span class="h7 text-gray-900 mb-4 form-text"></span>
                                </div>
                              </div>
                              <div class="form row">

                                <div class="col-sm-2">
                                  <span class="h7 text-gray-900 mb-4 form-text"></span>
                                </div>
                                <div class="col-sm-8" align="center">
                                  <?php if (mysqli_num_rows($result) > 0) {
                                        echo "<span style=\"color:red\">รหัสตัวชี้วัด" . " " . $_POST['id'] . " " . "ปี" . " " . $_POST['year'] . " " . "ถูกป้อนข้อมูล เพื่อแสดงกราฟแล้ว</span>";
                                  ?>
                                </div>
                              </div>
                            <?php
                                      } else {

                                        $sql = "SELECT * FROM indicator WHERE indicator_id = '" . $_POST['id'] . "'";
                                        $objQuery = mysqli_query($connect, $sql);
                                        $row = mysqli_fetch_array($objQuery);

                                        $_SESSION['ind_id'] = $row["indicator_id"];
                                        $_SESSION['ind_name'] = $row["indicator_name"];
                                        $_SESSION['first_name'] = $row["first_name"];
                                        $_SESSION['last_name'] = $row["last_name"];
                                        $_SESSION['type'] = $row["type"];
                                        $_SESSION['year'] = $_POST['year'];

                                        session_write_close();

                            ?>

                              <script type="text/javascript">
                                window.location = "admin_insert_6m.php";
                              </script>



                            <?php
                                      }
                                      // ร า ย ปี

                                    } else if ($type == "รายปี") {
                                      $id = $ind_id . $year;

                                      $sql = "SELECT * FROM graph WHERE graph_id='$id'";
                                      $result = mysqli_query($connect, $sql);
                            ?>
                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                            </div>
                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                              <div class="col-sm-8" align="center">
                                <?php if (mysqli_num_rows($result) > 0) {
                                        echo "<span style=\"color:red\">รหัสตัวชี้วัด" . " " . $_POST['id'] . " " . "ปี" . " " . $_POST['year'] . " " . "ถูกป้อนข้อมูล เพื่อแสดงกราฟแล้ว</span>";
                                ?>
                              </div>
                            </div>
                          <?php
                                      } else {

                                        $sql = "SELECT * FROM indicator WHERE indicator_id = '" . $_POST['id'] . "'";
                                        $objQuery = mysqli_query($connect, $sql);
                                        $row = mysqli_fetch_array($objQuery);

                                        $_SESSION['ind_id'] = $row["indicator_id"];
                                        $_SESSION['ind_name'] = $row["indicator_name"];
                                        $_SESSION['first_name'] = $row["first_name"];
                                        $_SESSION['last_name'] = $row["last_name"];
                                        $_SESSION['type'] = $row["type"];
                                        $_SESSION['year'] = $_POST['year'];

                                        session_write_close();

                          ?>

                            <script type="text/javascript">
                              window.location = "admin_insert_y.php";
                            </script>





                  <?php
                                      }
                                    }
                                  } else {
                                    $message = "กรุณาป้อนข้อมูลให้ครบและถูกต้อง";
                                  }
                                } else if (empty($_POST['id']) || empty($_POST['year'])) {
                                  $message = "กรุณาป้อนข้อมูลให้ครบและถูกต้อง";
                                }
                              }
                  ?>
                  <div class="form row">
                    <div class="col-sm-2">
                      <span class="h7 text-gray-900 mb-4 form-text"></span>
                    </div>
                  </div>
                  <div class="form row">
                    <div class="col-sm-2">
                      <span class="h7 text-gray-900 mb-4 form-text"></span>
                    </div>
                    <div class="col-sm-8" align="center">
                      <?php if (!empty($message)) {
                        echo "<span style=\"color:red\">$message</span>";
                      }
                      ?>
                    </div>
                  </div>
                        </form>





                      </div>
                    </div>
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

</body>

</html>