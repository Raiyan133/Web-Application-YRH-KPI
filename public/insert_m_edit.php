<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

if (extract($_GET)) {
  $id = isset($_GET['id']) ? $_GET['id'] : "";
  }

include('../include/select_graph_m.php');
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
                                $number1 != '' && $divisor1 != ''
                              ) {

                                if (
                                  is_numeric($number1)
                                  && (is_numeric($number2) || $number2 == NULL)
                                  && (is_numeric($number3) || $number3 == NULL)
                                  && (is_numeric($number4) || $number4 == NULL)
                                  && (is_numeric($number5) || $number5 == NULL)
                                  && (is_numeric($number6) || $number6 == NULL)
                                  && (is_numeric($number7) || $number7 == NULL)
                                  && (is_numeric($number8) || $number8 == NULL)
                                  && (is_numeric($number9) || $number9 == NULL)
                                  && (is_numeric($number10) || $number10 == NULL)
                                  && (is_numeric($number11) || $number11 == NULL)
                                  && (is_numeric($number12) || $number12 == NULL)
                                  && is_numeric($divisor1)
                                  && (is_numeric($divisor2) || $number2 == NULL)
                                  && (is_numeric($divisor3) || $number3 == NULL)
                                  && (is_numeric($divisor4) || $number4 == NULL)
                                  && (is_numeric($divisor5) || $number5 == NULL)
                                  && (is_numeric($divisor6) || $number6 == NULL)
                                  && (is_numeric($divisor7) || $number7 == NULL)
                                  && (is_numeric($divisor8) || $number8 == NULL)
                                  && (is_numeric($divisor9) || $number9 == NULL)
                                  && (is_numeric($divisor10) || $number10 == NULL)
                                  && (is_numeric($divisor11) || $number11 == NULL)
                                  && (is_numeric($divisor12) || $number12 == NULL)
                                ) {

                                  if ($divisor1 == '0' || $divisor2 == '0' || $divisor3 == '0' || $divisor4 == '0' || $divisor5 == '0' || $divisor6 == '0' || $divisor7 == '0' || $divisor8 == '0' || $divisor9 == '0' || $divisor10 == '0' || $divisor11 == '0' || $divisor12 == '0') {
                                    $message = "ตัวหารต้องไม่เท่ากับ 0";
                                  } else {

                                    $sql = "UPDATE graph_m SET number1='$number1', number2='$number2', number3='$number3', number4='$number4', 
                                                 number5='$number5', number6='$number6', number7='$number7', number8='$number8', 
                                                 number9='$number9', number10='$number10', number11='$number11', number12='$number12', 
                                                 divisor1='$divisor1', divisor2='$divisor2', divisor3='$divisor3', divisor4='$divisor4',
                                                 divisor5='$divisor5', divisor6='$divisor6', divisor7='$divisor7', divisor8='$divisor8',
                                                 divisor9='$divisor9', divisor10='$divisor10', divisor11='$divisor11', divisor12='$divisor12'  
                                          WHERE graph_m_id='$id'";

                                  if ($connect->query($sql) === TRUE) {
                                    $_SESSION['id'] = $id;
                          ?>
                                    <script type="text/javascript">
                                      window.location = "insert_m_graph.php";
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
                                <th align="left">ชื่อตัวชี้วัด</th>
                                <td colspan="12" align="left"><?php echo $indicator_name; ?></td>
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
                                <td><input class="form-control" name="number1" id="number1" type="text" value="<?php echo $number1; ?>"></td>
                                <td><input class="form-control" name="number2" id="number2" type="text" value="<?php echo $number2; ?>"></td>
                                <td><input class="form-control" name="number3" id="number3" type="text" value="<?php echo $number3; ?>"></td>
                                <td><input class="form-control" name="number4" id="number4" type="text" value="<?php echo $number4; ?>"></td>
                                <td><input class="form-control" name="number5" id="number5" type="text" value="<?php echo $number5; ?>"></td>
                                <td><input class="form-control" name="number6" id="number6" type="text" value="<?php echo $number6; ?>"></td>
                                <td><input class="form-control" name="number7" id="number7" type="text" value="<?php echo $number7; ?>"></td>
                                <td><input class="form-control" name="number8" id="number8" type="text" value="<?php echo $number8; ?>"></td>
                                <td><input class="form-control" name="number9" id="number9" type="text" value="<?php echo $number9; ?>"></td>
                                <td><input class="form-control" name="number10" id="number10" type="text" value="<?php echo $number10; ?>"></td>
                                <td><input class="form-control" name="number11" id="number11" type="text" value="<?php echo $number11; ?>"></td>
                                <td><input class="form-control" name="number12" id="number12" type="text" value="<?php echo $number12; ?>"></td>
                              </tr>
                              <tr>
                                <th>ตัวหาร</th>
                                <td><input class="form-control" name="divisor1" id="divisor1" type="text" value="<?php echo $divisor1; ?>"></td>
                                <td><input class="form-control" name="divisor2" id="divisor2" type="text" value="<?php echo $divisor2; ?>"></td>
                                <td><input class="form-control" name="divisor3" id="divisor3" type="text" value="<?php echo $divisor3; ?>"></td>
                                <td><input class="form-control" name="divisor4" id="divisor4" type="text" value="<?php echo $divisor4; ?>"></td>
                                <td><input class="form-control" name="divisor5" id="divisor5" type="text" value="<?php echo $divisor5; ?>"></td>
                                <td><input class="form-control" name="divisor6" id="divisor6" type="text" value="<?php echo $divisor6; ?>"></td>
                                <td><input class="form-control" name="divisor7" id="divisor7" type="text" value="<?php echo $divisor7; ?>"></td>
                                <td><input class="form-control" name="divisor8" id="divisor8" type="text" value="<?php echo $divisor8; ?>"></td>
                                <td><input class="form-control" name="divisor9" id="divisor9" type="text" value="<?php echo $divisor9; ?>"></td>
                                <td><input class="form-control" name="divisor10" id="divisor10" type="text" value="<?php echo $divisor10; ?>"></td>
                                <td><input class="form-control" name="divisor11" id="divisor11" type="text" value="<?php echo $divisor11; ?>"></td>
                                <td><input class="form-control" name="divisor12" id="divisor12" type="text" value="<?php echo $divisor12; ?>"></td>
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