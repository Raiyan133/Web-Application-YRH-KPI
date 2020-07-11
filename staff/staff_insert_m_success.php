<?php
include('../include/db.php');
include('../include/username.php');

$id = $_SESSION["id"];

include('../staff/staff_include/select_graph_m.php');
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
                          <h1 class="h4 text-gray-900 mb-4">" บันทึกข้อมูลสำเร็จ "</h1>
                        </div>

                        <div class="row justify-content-center">
                          <div class="col-xl-9 col-lg-7">
                            <div class="card shadow mb-4">
                              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-secondery"><?php echo $indicator_code; ?> : <?php echo $indicator_name; ?> ปี <?php echo $year; ?></h6>
                              </div>
                              <div class="card-body">
                                <div class="chart-area">
                                  <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                                </div>
                                <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟ</span></b>
                                <div class="card shadow mb-4">
                                  <div class="card-body">
                                    <?php echo $comment; ?>
                                  </div>
                                </div>
                                <div class="small text-center">
                                  <span>บันทึกข้อมูลล่าสุด : <?php echo $date; ?> โดย <?php echo $user_post; ?></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <form class="form-group text-right" method="post" name="form1" action="">
                          <div class="row justify-content-center">
                            <div class="col-xl-3 col-md-6 mb-2">
                              <a href="../staff/staff_insert.php" class="btn btn-secondary btn-user btn-block bg-gray-900" style="width:100%">
                                <span class="text">สร้างกราฟตัวชี้วัด</span>
                              </a>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-2">
                              <a href="../staff/staff_edit.php" class="btn btn-secondary btn-user btn-block bg-gray-900" style="width:100%;">
                                <span class="text">จัดกราฟตัวชี้วัด</span>
                              </a>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-2">
                              <a href="../staff/staff_home.php" class="btn btn-secondary btn-user btn-block bg-gray-900" style="width:100%">
                                <span class="text">หน้าแรก</span>
                              </a>
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