<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>เปรียบเทียบกราฟ</title>
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
            <div class="col-xl-11 col-lg-14 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 bg-gray-500">

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">เปรียบเทียบกราฟ</h1>
                        </div>

                        <form class="form-group text-right" method="post" name="form1" action="" onSubmit="JavaScript:return fncSubmit();">
                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                          </div>

                          <?php
                          include('../include/select_user.php');

                          if ($count_admin == 1) {
                          ?>
                          
                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text">ตัวชี้วัด :</span>
                              </div>

                              <div class="col-sm-8">
                                <select class="form-control" name="ind_code" id="ind_code">
                                  <option value="" disabled selected>โปรดเลือกตัวชี้วัด</option>
                                  <?php
                                  $sql = "SELECT * FROM indicator";
                                  $objQuery = mysqli_query($connect, $sql);
                                  while ($objResuut = mysqli_fetch_array($objQuery)) {
                                  ?>
                                    <option value="<?php echo $objResuut["indicator_code"]; ?>"><?php echo $objResuut["indicator_code"] . " : " . $objResuut["indicator_name"]; ?></option>
                                  <?php
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>

                          <?php
                          } else if ($count_staff == 1) { ?>

                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text">ตัวชี้วัด :</span>
                              </div>

                              <div class="col-sm-8">
                                <select class="form-control" name="ind_code" id="ind_code">
                                  <option value="" disabled selected>โปรดเลือกตัวชี้วัด</option>
                                  <?php
                                  $sql = "SELECT * FROM indicator WHERE team_code = '$username'";
                                  $objQuery = mysqli_query($connect, $sql);
                                  while ($objResuut = mysqli_fetch_array($objQuery)) {
                                  ?>
                                    <option value="<?php echo $objResuut["indicator_code"]; ?>"><?php echo $objResuut["indicator_code"] . " : " . $objResuut["indicator_name"]; ?></option>
                                  <?php
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>

                          <?php } ?>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-4">
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit" type="submit" value="">เปรียบเทียบแบบละเอียด</button>
                            </div>
                            <div class="col-sm-4">
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit1" type="submit1" value="">เปรียบเทียบเฉลี่ยรายปี</button>
                            </div>
                          </div>


                          <?php
                          if (isset($_POST['submit'])) {
                            if (!empty($_POST['ind_code'])) {
                              $ind_code = $_POST['ind_code'];
                              $sql1 = "SELECT * FROM graph_m WHERE indicator='$ind_code'";
                              $result1 = mysqli_query($connect, $sql1);
                              $sql2 = "SELECT * FROM graph_3m WHERE indicator='$ind_code'";
                              $result2 = mysqli_query($connect, $sql2);
                              $sql3 = "SELECT * FROM graph_6m WHERE indicator='$ind_code'";
                              $result3 = mysqli_query($connect, $sql3);
                              $sql4 = "SELECT * FROM graph_y WHERE indicator='$ind_code'";
                              $result4 = mysqli_query($connect, $sql4);

                              if (mysqli_num_rows($result1) >= 1 || mysqli_num_rows($result2) >= 1 || mysqli_num_rows($result3) >= 1 || mysqli_num_rows($result4) >= 1) {
                                $sql = "SELECT indicator_name FROM indicator WHERE indicator_code='$ind_code'";
                                $objQuery = mysqli_query($connect, $sql);
                                $row = mysqli_fetch_array($objQuery);
                                $_SESSION['ind_code'] = $ind_code;
                                $_SESSION['ind_name'] = $row["indicator_name"];
                                session_write_close();
                                ?>
                                  <script type="text/javascript">
                                    window.location = "compare_select.php";
                                  </script>
                                <?php
                              } else {
                                $message = "รหัสตัวชี้วัด" . " " . $_POST['ind_code'] . " " . "ไม่สามารถเปรียบเทียบได้";
                              }
                            } else {
                              $message = "กรุณาเลือกตัวชี้วัด";
                            }
                          } else if (isset($_POST['submit1'])) {
                            if (!empty($_POST['ind_code'])) {
                              $ind_code = $_POST['ind_code'];
                              $sql1 = "SELECT * FROM graph_m WHERE indicator='$ind_code'";
                              $result1 = mysqli_query($connect, $sql1);
                              $sql2 = "SELECT * FROM graph_3m WHERE indicator='$ind_code'";
                              $result2 = mysqli_query($connect, $sql2);
                              $sql3 = "SELECT * FROM graph_6m WHERE indicator='$ind_code'";
                              $result3 = mysqli_query($connect, $sql3);
                              $sql4 = "SELECT * FROM graph_y WHERE indicator='$ind_code'";
                              $result4 = mysqli_query($connect, $sql4);

                              if (mysqli_num_rows($result1) >= 1) {
                                $sql = "SELECT indicator_name FROM indicator WHERE indicator_code='$ind_code'";
                                $objQuery = mysqli_query($connect, $sql);
                                $row = mysqli_fetch_array($objQuery);
                                $_SESSION['ind_code'] = $ind_code;
                                $_SESSION['ind_name'] = $row["indicator_name"];
                                session_write_close();
                                ?>
                                  <script type="text/javascript">
                                    window.location = "compareyear_select.php";
                                  </script>
                                <?php
                              } else if (mysqli_num_rows($result2) >= 1) {
                                $sql = "SELECT indicator_name FROM indicator WHERE indicator_code='$ind_code'";
                                $objQuery = mysqli_query($connect, $sql);
                                $row = mysqli_fetch_array($objQuery);
                                $_SESSION['ind_code'] = $ind_code;
                                $_SESSION['ind_name'] = $row["indicator_name"];
                                session_write_close();
                                ?>
                                  <script type="text/javascript">
                                    window.location = "compareyear_select.php";
                                  </script>
                                <?php
                              } else if (mysqli_num_rows($result3) >= 1) {
                                $sql = "SELECT indicator_name FROM indicator WHERE indicator_code='$ind_code'";
                                $objQuery = mysqli_query($connect, $sql);
                                $row = mysqli_fetch_array($objQuery);
                                $_SESSION['ind_code'] = $ind_code;
                                $_SESSION['ind_name'] = $row["indicator_name"];
                                session_write_close();
                                ?>
                                  <script type="text/javascript">
                                    window.location = "compareyear_select.php";
                                  </script>
                                <?php
                              } else if (mysqli_num_rows($result4) >= 1) {
                                $sql = "SELECT indicator_name FROM indicator WHERE indicator_code='$ind_code'";
                                $objQuery = mysqli_query($connect, $sql);
                                $row = mysqli_fetch_array($objQuery);
                                $_SESSION['ind_code'] = $ind_code;
                                $_SESSION['ind_name'] = $row["indicator_name"];
                                session_write_close();
                                ?>
                                  <script type="text/javascript">
                                    window.location = "compareyear_select.php";
                                  </script>
                                <?php
                              } else {
                                $message = "รหัสตัวชี้วัด" . " " . $_POST['ind_code'] . " " . "ไม่สามารถเปรียบเทียบได้";
                              }
                            } else {
                              $message = "กรุณาเลือกตัวชี้วัด";
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
      </div>
      <?php include('../include/footer.php'); ?>
    </div>
  </div>
  <?php include('../include/script.php'); ?>
</body>

</html>

    <?php } else { Header("Location:home.php");} ?>