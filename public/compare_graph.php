<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];

  extract($_GET);
  $graph_1 = isset($_GET['graph_1']) ? $_GET['graph_1'] : "";
  $graph_2 = isset($_GET['graph_2']) ? $_GET['graph_2'] : "";
  $graph_3 = isset($_GET['graph_3']) ? $_GET['graph_3'] : "";
  $graph_4 = isset($_GET['graph_4']) ? $_GET['graph_4'] : "";
  $graph_5 = isset($_GET['graph_5']) ? $_GET['graph_5'] : "";

  include('../include/select_compare_graph.php');
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>เปรียบเทียบกราฟแบบละเอียด</title>
    <?php include('../include/head.php'); ?>
    <?php include('../include/graph_compare.php'); ?>
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
                            <h1 class="h4 text-gray-900 mb-4">เปรียบเทียบกราฟแบบละเอียด</h1>
                          </div>

                          <form class="form-group text-right" method="post" name="form1" action="" onSubmit="JavaScript:return fncSubmit();">
                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-12">
                                <b><span class="text-gray-900 form-text text-center">ตัวชี้วัด : <?php echo $indicator_id_1 . " : " . $indicator_name_1; ?></span></b>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                              <div class="col-sm-12">
                                <div class="card-body">
                                  <span class="h7 text-gray-900 mb-4 form-text"></span>
                                  <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                                </div>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                            </div>

                            <div class="card-body">

                              <?php
                              if (!empty($graph_1)) {
                              ?>
                                <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_1"; ?></span></b>
                                <div class="col-sm-12">
                                  <b><span class="text-gray-900 form-text text-left">ค่าเฉลี่ย : <?php echo number_format($mean_1, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่าน้อยสุด : <?php echo number_format($min_1, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่ามากสุด : <?php echo number_format($max_1, 2); ?></span></b>
                                </div>
                                <div class="card shadow mb-4">
                                  <div class="card-body text-left" style="color:#CE8792">
                                    <?php echo $comment_1; ?>
                                  </div>
                                </div>
                              <?php
                              }
                              if (!empty($graph_2)) {
                              ?>
                                <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_2"; ?></span></b>
                                <div class="col-sm-12">
                                  <b><span class="text-gray-900 form-text text-left">ค่าเฉลี่ย : <?php echo number_format($mean_2, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่าน้อยสุด : <?php echo number_format($min_2, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่ามากสุด : <?php echo number_format($max_2, 2); ?></span></b>
                                </div>
                                <div class="card shadow mb-4">
                                  <div class="card-body text-left" style="color:#819AD4">
                                    <?php echo $comment_2; ?>
                                  </div>
                                </div>
                              <?php
                              }
                              if (!empty($graph_3)) {
                              ?>
                                <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_3"; ?></span></b>
                                <div class="col-sm-12">
                                  <b><span class="text-gray-900 form-text text-left">ค่าเฉลี่ย : <?php echo number_format($mean_3, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่าน้อยสุด : <?php echo number_format($min_3, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่ามากสุด : <?php echo number_format($max_3, 2); ?></span></b>
                                </div>
                                <div class="card shadow mb-4">
                                  <div class="card-body text-left" style="color:#567676">
                                    <?php echo $comment_3; ?>
                                  </div>
                                </div>
                              <?php
                              }
                              if (!empty($graph_4)) {
                              ?>
                                <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_4"; ?></span></b>
                                <div class="col-sm-12">
                                  <b><span class="text-gray-900 form-text text-left">ค่าเฉลี่ย : <?php echo number_format($mean_4, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่าน้อยสุด : <?php echo number_format($min_4, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่ามากสุด : <?php echo number_format($max_4, 2); ?></span></b>
                                </div>
                                <div class="card shadow mb-4">
                                  <div class="card-body text-left" style="color:#DC7633">
                                    <?php echo $comment_4; ?>
                                  </div>
                                </div>
                              <?php
                              }
                              if (!empty($graph_5)) {
                              ?>
                                <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_5"; ?></span></b>
                                <div class="col-sm-12">
                                  <b><span class="text-gray-900 form-text text-left">ค่าเฉลี่ย : <?php echo number_format($mean_5, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่าน้อยสุด : <?php echo number_format($min_5, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่ามากสุด : <?php echo number_format($max_5, 2); ?></span></b>
                                </div>
                                <div class="card shadow mb-4">
                                  <div class="card-body text-left" style="color:#76448A">
                                    <?php echo $comment_5; ?>
                                  </div>
                                </div>
                            </div>
                          <?php } ?>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                          </div>

                          <?php include('../include/button_compare.php'); ?>

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

<?php } else {
  Header("Location:home.php");
} ?>