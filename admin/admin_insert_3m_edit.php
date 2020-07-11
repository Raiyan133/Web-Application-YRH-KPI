<?php
include('../include/db.php');
include('../include/username.php');

$id = $_SESSION["id"];

include('../admin/admin_include/select_graph_3m.php');
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
                            $divisor1 = $_POST['divisor1'];
                            $divisor2 = $_POST['divisor2'];
                            $divisor3 = $_POST['divisor3'];
                            $divisor4 = $_POST['divisor4'];

                            if (
                              $number1 != '' && $number2 != '' && $number3 != '' && $number4 != ''
                              && $divisor1 != '' && $divisor2 != '' && $divisor3 != '' && $divisor4 != ''
                            ) {
                              if (
                                is_numeric($number1) && is_numeric($number2) && is_numeric($number3) && is_numeric($number4)
                                && is_numeric($divisor1) && is_numeric($divisor2) && is_numeric($divisor3) && is_numeric($divisor4)
                              ) {
                                if ($divisor1 == '0' || $divisor2 == '0' || $divisor3 == '0' || $divisor4 == '0') {
                                  $message = "ตัวหารต้องไม่เท่ากับ 0";
                                } else {

                                  $sql = "UPDATE graph_3m SET number1='$number1', number2='$number2', number3='$number3', number4='$number4', 
                                                 divisor1='$divisor1', divisor2='$divisor2', divisor3='$divisor3', divisor4='$divisor4'  
                                          WHERE graph_3m_id='$id'";

                                  if ($connect->query($sql) === TRUE) {

                                    $_SESSION['id'] = $id;

                          ?>
                                    <script type="text/javascript">
                                      window.location = "admin_insert_3m_graph.php";
                                    </script>
                          <?php

                                  } else {
                                    echo "Error: " . $sql . "<br>" . $connect->error;
                                  }
                                  $connect->close();
                                }
                              } else if (
                                !is_numeric($number1) || !is_numeric($number2) || !is_numeric($number3) || !is_numeric($number4)
                                || !is_numeric($divisor1) || !is_numeric($divisor2) || !is_numeric($divisor3) || !is_numeric($divisor4)
                              ) {
                                $message = "กรุณาป้อนข้อมูลตัวเลขเท่านั้น";
                              }
                            } else if (
                              empty($number1) || empty($number2) || empty($number3) || empty($number4)
                              || empty($divisor1) || empty($divisor2) || empty($divisor3) || empty($divisor4)
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
                                <td colspan="12" align="left">3 เดือน</td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td align="center"></td>
                                <td colspan="12" align="center">ประจำปี พ.ศ. <?php echo $year; ?></td>
                              </tr>
                              <tr>
                                <th></th>
                                <td align="center">ต.ค. - ธ.ค.</td>
                                <td align="center">ม.ค. - มี.ค.</td>
                                <td align="center">เม.ย. - มิ.ย.</td>
                                <td align="center">ก.ค. - ก.ย.</td>
                              </tr>
                              <tr>
                                <th>ตัวตั้ง</th>
                                <td align="center"><input class="form-control" name="number1" id="number1" type="text" value="<?php echo $number1; ?>" style="width:100px"></td>
                                <td align="center"><input class="form-control" name="number2" id="number2" type="text" value="<?php echo $number2; ?>" style="width:100px"></td>
                                <td align="center"><input class="form-control" name="number3" id="number3" type="text" value="<?php echo $number3; ?>" style="width:100px"></td>
                                <td align="center"><input class="form-control" name="number4" id="number4" type="text" value="<?php echo $number4; ?>" style="width:100px"></td>
                              </tr>
                              <tr>
                                <th>ตัวหาร</th>
                                <td align="center"><input class="form-control" name="divisor1" id="divisor1" type="text" value="<?php echo $divisor1; ?>" style="width:100px"></td>
                                <td align="center"><input class="form-control" name="divisor2" id="divisor2" type="text" value="<?php echo $divisor2; ?>" style="width:100px"></td>
                                <td align="center"><input class="form-control" name="divisor3" id="divisor3" type="text" value="<?php echo $divisor3; ?>" style="width:100px"></td>
                                <td align="center"><input class="form-control" name="divisor4" id="divisor4" type="text" value="<?php echo $divisor4; ?>" style="width:100px"></td>
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