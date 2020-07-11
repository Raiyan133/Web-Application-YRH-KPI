<?php
include('../include/db.php');
include('../include/username.php');

$type = "6M";
$ind_code = $_SESSION["ind_code"];
$ind_name = $_SESSION["ind_name"];
$first_name = $_SESSION["first_name"];
$last_name = $_SESSION["last_name"];
$year = $_SESSION['year'];
$id = $type . $ind_code . $year;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>ป้อนข้อมูลตัวชี้วัด</title>
  <?php include('../include/head.php'); ?>
</head>

<body id="page-top">
  <div id="wrapper">
    <?php include('../staff/staff_include/staff_sidebar.php'); ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php include('../include/topbar.php'); ?>
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-14 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-5">
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
                            $number2 = $_POST['number2'];
                            $divisor1 = $_POST['divisor1'];
                            $divisor2 = $_POST['divisor2'];

                            if (
                              $number1 != '' && $number2 != '' && $divisor1 != '' && $divisor2 != ''
                            ) {

                              if (
                                is_numeric($number1) && is_numeric($number2) && is_numeric($divisor1) && is_numeric($divisor2)
                              ) {

                                if ($divisor1 == '0' || $divisor2 == '0') {
                                  $message = "ตัวหารต้องไม่เท่ากับ 0";
                                } else {

                                  $sql = "INSERT INTO graph_6m (graph_6m_id, indicator, year, number1, number2, divisor1, divisor2) 
                                    VALUES ('$id','$ind_code','$year','$number1','$number2','$divisor1','$divisor2')";

                                  if ($connect->query($sql) === TRUE) {
                                    $_SESSION['id'] = $id;

                          ?>
                                    <script type="text/javascript">
                                      window.location = "staff_insert_6m_graph.php";
                                    </script>
                          <?php
                                  } else {
                                    echo "Error: " . $sql . "<br>" . $connect->error;
                                  }
                                  $connect->close();
                                }
                              } else if (
                                !is_numeric($number1) || !is_numeric($number2) || !is_numeric($divisor1) || !is_numeric($divisor2)
                              ) {
                                $message = "กรุณาป้อนข้อมูลตัวเลขเท่านั้น";
                              }
                            } else if (
                              empty($number1) || empty($number2) || empty($divisor1) || empty($divisor2)
                            ) {
                              $message = "กรุณาป้อนข้อมูลให้ครบทุกช่อง";
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
                                <td colspan="12" align="left"><?php echo $ind_code; ?></td>
                              </tr>
                              <tr>
                                <th>ชื่อตัวชี้วัด</th>
                                <td colspan="12" align="left"><?php echo $ind_name; ?></td>
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
                                <td colspan="12" align="left">6 เดือน</td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td align="center"></td>
                                <td colspan="12" align="center">ประจำปี พ.ศ. <?php echo $year; ?></td>
                              </tr>
                              <tr>
                                <th></th>
                                <td align="center">ตุลาคม - มีนาคม</td>
                                <td align="center">เมษายน - กันยายน</td>
                              </tr>
                              <tr>
                                <th>ตัวตั้ง</th>
                                <td align="center"><input class="form-control" name="number1" id="number1" type="text" style="width:130px"></td>
                                <td align="center"><input class="form-control" name="number2" id="number2" type="text" style="width:130px"></td>
                              </tr>
                              <tr>
                                <th>ตัวหาร</th>
                                <td align="center"><input class="form-control" name="divisor1" id="divisor1" type="text" style="width:130px"></td>
                                <td align="center"><input class="form-control" name="divisor2" id="divisor2" type="text" style="width:130px"></td>
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