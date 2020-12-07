<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

if (extract($_GET)) {
  $id = isset($_GET['id']) ? $_GET['id'] : "";
  }
  
include('../include/select_graph_y.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>ป้อนข้อมูลตัวชี้วัด</title>
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
            <div class="col-xl-12 col-lg-14 col-md-9">
              <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body p-0 bg-gray-500">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">ป้อนข้อมูลตัวชี้วัด เพื่อแสดงผลกราฟ</h1>
                        </div>

                        <form class="form-group text-right" method="post" name="form1" action="">

                          <?php

                            if (isset($_POST['submit'])) {

                              $number1 = $_POST['number1'];
                              $divisor1 = $_POST['divisor1'];

                              if (
                                $number1 != '' && $divisor1 != ''
                              ) {

                                if (
                                  is_numeric($number1)
                                  && is_numeric($divisor1)
                                ) {

                                  if ($divisor1 == '0' || $divisor2 == '0') {
                                    $message = "ตัวหารต้องไม่เท่ากับ 0";
                                  } else {

                                    $sql = "UPDATE graph_y SET number1='$number1', divisor1='$divisor1' WHERE graph_y_id='$id'";

                                  if ($connect->query($sql) === TRUE) {
                                    $_SESSION['id'] = $id;
                          ?>
                                    <script type="text/javascript">
                                      window.location = "insert_y_graph.php";
                                    </script>
                          <?php
                                    } else {
                                      echo "Error: " . $sql . "<br>" . $connect->error;
                                    }
                                    $connect->close();
                                  }
                                } else {
                                  $message = "กรุณาป้อนข้อมูลตัวเลขเท่านั้น";
                                }
                              } else if (
                                empty($number1) || empty($divisor1)
                              ) {
                                $message = "*จำเป็นต้องป้อนข้อมูลช่องแรก (ตัวตั้งและตัวหาร)";
                              }
                            }
                            ?>

                          <div class="form row">
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

                          <table class="table table-borderless text-gray-800">
                            <thead>
                              <tr>
                                <th></th>
                              </tr>
                              <tr>
                                <th style="width: 100px" align="left">รหัส</th>
                                <td colspan="12" align="left"><?php echo $indicator_code; ?></td>
                              </tr>
                              <tr>
                                <th>ชื่อตัวชี้วัด</th>
                                <td colspan="12" align="left"><?php echo $indicator_name; ?></td>
                              </tr>
                              <tr>
                                <th>ตัวตั้ง</th>
                                <td colspan="12" align="left"><?php echo $first_name; ?></td>
                              </tr>
                              <tr>
                                <th>ตัวหาร</th>
                                <td colspan="12" align="left"><?php echo $last_name; ?></td>
                              </tr>
                              <tr>
                                <th>ความถี่</th>
                                <td colspan="12" align="left">รายปี</td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td align="center"></td>
                                <td colspan="12" align="center">ประจำปี พ.ศ. <?php echo $year; ?></td>
                              </tr>
                              <tr>
                                <th>ตัวตั้ง</th>
                                <td align="center"><input class="form-control" name="number1" id="number1" type="text" value="<?php echo $number1; ?>" style="width:150px"></td>
                              </tr>
                              <tr>
                                <th>ตัวหาร</th>
                                <td align="center"><input class="form-control" name="divisor1" id="divisor1" type="text" value="<?php echo $divisor1; ?>" style="width:150px"></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-8">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit" type="submit" value="">แสดงกราฟ</button>
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