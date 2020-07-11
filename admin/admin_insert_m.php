<?php
include('../include/db.php');
include('../include/username.php');

$type = "M";
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
    <?php include('../admin/admin_include/admin_sidebar.php'); ?>
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
                            $number3 = $_POST['number3'];
                            $number4 = $_POST['number4'];
                            $number5 = $_POST['number5'];
                            $number6 = $_POST['number6'];
                            $number7 = $_POST['number7'];
                            $number8 = $_POST['number8'];
                            $number9 = $_POST['number9'];
                            $number10 = $_POST['number10'];
                            $number11 = $_POST['number11'];
                            $number12 = $_POST['number12'];
                            $divisor1 = $_POST['divisor1'];
                            $divisor2 = $_POST['divisor2'];
                            $divisor3 = $_POST['divisor3'];
                            $divisor4 = $_POST['divisor4'];
                            $divisor5 = $_POST['divisor5'];
                            $divisor6 = $_POST['divisor6'];
                            $divisor7 = $_POST['divisor7'];
                            $divisor8 = $_POST['divisor8'];
                            $divisor9 = $_POST['divisor9'];
                            $divisor10 = $_POST['divisor10'];
                            $divisor11 = $_POST['divisor11'];
                            $divisor12 = $_POST['divisor12'];

                            if (
                              $number1 != '' && $number2 != '' && $number3 != '' && $number4 != ''
                              && $number5 != '' && $number6 != '' && $number7 != '' && $number8 != ''
                              && $number9 != '' && $number10 != '' && $number11 != '' && $number12 != ''
                              && $divisor1 != '' && $divisor2 != '' && $divisor3 != '' && $divisor4 != ''
                              && $divisor5 != '' && $divisor6 != '' && $divisor7 != '' && $divisor8 != ''
                              && $divisor9 != '' && $divisor10 != '' && $divisor11 != '' && $divisor12 != ''
                            ) {

                              if (
                                is_numeric($number1) && is_numeric($number2) && is_numeric($number3) && is_numeric($number4)
                                && is_numeric($number5) && is_numeric($number6) && is_numeric($number7) && is_numeric($number8)
                                && is_numeric($number9) && is_numeric($number10) && is_numeric($number11) && is_numeric($number12)
                                && is_numeric($divisor1) && is_numeric($divisor2) && is_numeric($divisor3) && is_numeric($divisor4)
                                && is_numeric($divisor5) && is_numeric($divisor6) && is_numeric($divisor7) && is_numeric($divisor8)
                                && is_numeric($divisor9) && is_numeric($divisor10) && is_numeric($divisor11) && is_numeric($divisor12)
                              ) {

                                if (
                                  $divisor1 == '0' || $divisor2 == '0' || $divisor3 == '0' || $divisor4 == '0'
                                  || $divisor5 == '0' || $divisor6 == '0' || $divisor7 == '0' || $divisor8 == '0'
                                  || $divisor9 == '0' || $divisor10 == '0' || $divisor11 == '0' || $divisor12 == '0'
                                ) {
                                  $message = "ตัวหารต้องไม่เท่ากับ 0";
                                } else {

                                  $sql = "INSERT INTO graph_m (graph_m_id, indicator, year, number1, number2, number3, number4, number5, number6, 
                                              number7, number8, number9, number10, number11, number12, divisor1, divisor2, divisor3, divisor4, 
                                              divisor5, divisor6, divisor7, divisor8, divisor9, divisor10, divisor11, divisor12) 
                                          VALUES ('$id','$ind_code','$year','$number1','$number2','$number3','$number4',
                                          '$number5','$number6','$number7','$number8','$number9','$number10','$number11',
                                          '$number12','$divisor1','$divisor2','$divisor3','$divisor4','$divisor5','$divisor6',
                                          '$divisor7','$divisor8','$divisor9','$divisor10','$divisor11','$divisor12')";

                                  if ($connect->query($sql) === TRUE) {
                                    $_SESSION['id'] = $id;

                          ?>
                                    <script type="text/javascript">
                                      window.location = "admin_insert_m_graph.php";
                                    </script>
                          <?php
                                  } else {
                                    echo "Error: " . $sql . "<br>" . $connect->error;
                                  }

                                  $connect->close();
                                }
                              } else if (
                                !is_numeric($number1) || !is_numeric($number2) || !is_numeric($number3) || !is_numeric($number4)
                                || !is_numeric($number5) || !is_numeric($number6) || !is_numeric($number7) || !is_numeric($number8)
                                || !is_numeric($number9) || !is_numeric($number10) || !is_numeric($number11) || !is_numeric($number12)
                                || !is_numeric($divisor1) || !is_numeric($divisor2) || !is_numeric($divisor3) || !is_numeric($divisor4)
                                || !is_numeric($divisor5) || !is_numeric($divisor6) || !is_numeric($divisor7) || !is_numeric($divisor8)
                                || !is_numeric($divisor9) || !is_numeric($divisor10) || !is_numeric($divisor11) || !is_numeric($divisor12)
                              ) {
                                $message = "กรุณาป้อนข้อมูลตัวเลขเท่านั้น";
                              }
                            } else if (
                              empty($number1) || empty($number2) || empty($number3) || empty($number4)
                              || empty($number5) || empty($number6) || empty($number7) || empty($number8)
                              || empty($number9) || empty($number10) || empty($number11) || empty($number12)
                              || empty($divisor1) || empty($divisor2) || empty($divisor3) || empty($divisor4)
                              || empty($divisor5) || empty($divisor6) || empty($divisor7) || empty($divisor8)
                              || empty($divisor9) || empty($divisor10) || empty($divisor11) || empty($divisor12)
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
                                <th align="left">ชื่อตัวชี้วัด</th>
                                <td colspan="12" align="left"><?php echo $ind_name; ?></td>
                              </tr>
                              <tr>
                                <th align="left">ตัวตั้ง</th>
                                <td colspan="12" align="left"><?php echo $first_name; ?></td>
                              </tr>
                              <tr>
                                <th align="left">ตัวหาร</th>
                                <td colspan="12" align="left"><?php echo $last_name; ?></td>
                              </tr>
                              <tr>
                                <th align="left">ความถี่</th>
                                <td colspan="12" align="left">รายเดือน</td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td align="center"></td>
                                <td colspan="12" align="center">ประจำปี พ.ศ. <?php echo $year; ?></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td align="center">ต.ค.</td>
                                <td align="center">พ.ย.</td>
                                <td align="center">ธ.ค.</td>
                                <td align="center">ม.ค.</td>
                                <td align="center">ก.พ.</td>
                                <td align="center">มี.ค.</td>
                                <td align="center">เม.ย.</td>
                                <td align="center">พ.ค.</td>
                                <td align="center">มิ.ย.</td>
                                <td align="center">ก.ค.</td>
                                <td align="center">ส.ค.</td>
                                <td align="center">ก.ย.</td>
                              </tr>
                              <tr>
                                <th>ตัวตั้ง</th>
                                <td><input class="form-control" name="number1" id="number1" type="text"></td>
                                <td><input class="form-control" name="number2" id="number2" type="text"></td>
                                <td><input class="form-control" name="number3" id="number3" type="text"></td>
                                <td><input class="form-control" name="number4" id="number4" type="text"></td>
                                <td><input class="form-control" name="number5" id="number5" type="text"></td>
                                <td><input class="form-control" name="number6" id="number6" type="text"></td>
                                <td><input class="form-control" name="number7" id="number7" type="text"></td>
                                <td><input class="form-control" name="number8" id="number8" type="text"></td>
                                <td><input class="form-control" name="number9" id="number9" type="text"></td>
                                <td><input class="form-control" name="number10" id="number10" type="text"></td>
                                <td><input class="form-control" name="number11" id="number11" type="text"></td>
                                <td><input class="form-control" name="number12" id="number12" type="text"></td>
                              </tr>
                              <tr>
                                <th>ตัวหาร</th>
                                <td><input class="form-control" name="divisor1" id="divisor1" type="text"></td>
                                <td><input class="form-control" name="divisor2" id="divisor2" type="text"></td>
                                <td><input class="form-control" name="divisor3" id="divisor3" type="text"></td>
                                <td><input class="form-control" name="divisor4" id="divisor4" type="text"></td>
                                <td><input class="form-control" name="divisor5" id="divisor5" type="text"></td>
                                <td><input class="form-control" name="divisor6" id="divisor6" type="text"></td>
                                <td><input class="form-control" name="divisor7" id="divisor7" type="text"></td>
                                <td><input class="form-control" name="divisor8" id="divisor8" type="text"></td>
                                <td><input class="form-control" name="divisor9" id="divisor9" type="text"></td>
                                <td><input class="form-control" name="divisor10" id="divisor10" type="text"></td>
                                <td><input class="form-control" name="divisor11" id="divisor11" type="text"></td>
                                <td><input class="form-control" name="divisor12" id="divisor12" type="text"></td>
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