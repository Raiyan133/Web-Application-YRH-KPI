<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

$id = $_SESSION["id"];

include('../include/select_graph_m.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>ป้อนข้อมูลตัวชี้วัด</title>
  <?php include('../include/head.php'); ?>
  <?php include('../include/graph.php'); ?>
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
                          ?>
                            <script type="text/javascript">
                              window.location = "insert_m_edit.php?id=<?= $id ?>";
                            </script>
                            <?php
                          } else if (isset($_POST['submit1'])) {
                            $comment1 = $_POST['comment'];
                            $sql = "UPDATE graph_m SET mean='$mean',comment='$comment1',user_post='$username'  WHERE graph_m_id='$id'";
                            if ($connect->query($sql) === TRUE) {
                            ?>
                              <script type="text/javascript">
                                window.location = "insert_m_success.php";
                              </script>
                          <?php
                            }
                          }
                          ?>

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
                                <td><input class="form-control" type="text" value="<?php echo $number1; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $number2; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $number3; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $number4; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $number5; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $number6; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $number7; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $number8; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $number9; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $number10; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $number11; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $number12; ?>" readonly></td>
                              </tr>
                              <tr>
                                <th>ตัวหาร</th>
                                <td><input class="form-control" type="text" value="<?php echo $divisor1; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $divisor2; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $divisor3; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $divisor4; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $divisor5; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $divisor6; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $divisor7; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $divisor8; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $divisor9; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $divisor10; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $divisor11; ?>" readonly></td>
                                <td><input class="form-control" type="text" value="<?php echo $divisor12; ?>" readonly></td>
                              </tr>
                            </tbody>
                          </table>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-8">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit" type="submit" value="">แก้ไขข้อมูล</button>
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-12">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                              <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-12">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                              <b><span class="text-gray-900 form-text text-left">ค่าเฉลี่ย : <?php echo number_format( $mean , 2 ); ?></span></b>
                              <b><span class="text-gray-900 form-text text-left">ค่าน้อยสุด : <?php echo number_format( $min , 2 ); ?></span></b>
                              <b><span class="text-gray-900 form-text text-left">ค่ามากสุด : <?php echo number_format( $max , 2 ); ?></span></b>
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-12">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                              <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟ</span></b>
                              <textarea class="form-control" name="comment" id="comment" style="height: 200px; width: 100%;" value=""><?php echo $comment; ?></textarea>
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-12">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit1" type="submit" value="">บันทึกข้อมูล</button>
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