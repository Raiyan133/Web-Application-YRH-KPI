<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

$id = $_SESSION["id"];

include('../include/select_graph_6m.php');
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

                        <?php include('../include/button_insert.php'); ?>

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