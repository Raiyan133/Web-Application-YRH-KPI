<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];

  extract($_GET);
  $year = isset($_GET['year']) ? $_GET['year'] : "";
  $ind_code = isset($_GET['ind_code']) ? $_GET['ind_code'] : "";
  $count = isset($_GET['count']) ? $_GET['count'] : "";


  $sql = "SELECT * FROM indicator WHERE indicator_code = '" . $ind_code . "'";
  $objQuery = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($objQuery)) {
    $ind_name = $row['indicator_name'];
  }


  if ($count == 3) {
    $year1 = (int)$year - 2;
    $year2 = (int)$year - 1;
    $year3 = (int)$year;
    $graph_1 = $ind_code . $year1;
    $graph_2 = $ind_code . $year2;
    $graph_3 = $ind_code . $year3;
  } else if ($count == 5) {
    $year1 = (int)$year - 4;
    $year2 = (int)$year - 3;
    $year3 = (int)$year - 2;
    $year4 = (int)$year - 1;
    $year5 = (int)$year;
    $graph_1 = $ind_code . $year1;
    $graph_2 = $ind_code . $year2;
    $graph_3 = $ind_code . $year3;
    $graph_4 = $ind_code . $year4;
    $graph_5 = $ind_code . $year5;
  } else if ($count == 8) {
    $year1 = (int)$year - 7;
    $year2 = (int)$year - 6;
    $year3 = (int)$year - 5;
    $year4 = (int)$year - 4;
    $year5 = (int)$year - 3;
    $year6 = (int)$year - 2;
    $year7 = (int)$year - 1;
    $year8 = (int)$year;
    $graph_1 = $ind_code . $year1;
    $graph_2 = $ind_code . $year2;
    $graph_3 = $ind_code . $year3;
    $graph_4 = $ind_code . $year4;
    $graph_5 = $ind_code . $year5;
    $graph_6 = $ind_code . $year6;
    $graph_7 = $ind_code . $year7;
    $graph_8 = $ind_code . $year8;
  } else if ($count == 10) {
    $year1 = (int)$year - 9;
    $year2 = (int)$year - 8;
    $year3 = (int)$year - 7;
    $year4 = (int)$year - 6;
    $year5 = (int)$year - 5;
    $year6 = (int)$year - 4;
    $year7 = (int)$year - 3;
    $year8 = (int)$year - 2;
    $year9 = (int)$year - 1;
    $year10 = (int)$year;
    $graph_1 = $ind_code . $year1;
    $graph_2 = $ind_code . $year2;
    $graph_3 = $ind_code . $year3;
    $graph_4 = $ind_code . $year4;
    $graph_5 = $ind_code . $year5;
    $graph_6 = $ind_code . $year6;
    $graph_7 = $ind_code . $year7;
    $graph_8 = $ind_code . $year8;
    $graph_9 = $ind_code . $year9;
    $graph_10 = $ind_code . $year10;
  }

  include('../include/select_compare_graph.php');

  if ($count == 3) {
    if (!empty($mean_1) && !empty($mean_2) && !empty($mean_3)) {
      $dataPoints = array(
        array("label" => $year1, "y" => $mean_1),
        array("label" => $year2, "y" => $mean_2),
        array("label" => $year3, "y" => $mean_3)
      );
    } else {
      header("location:compareyear_select.php");
    }
  } else if ($count == 5) {
    if (!empty($mean_1) && !empty($mean_2) && !empty($mean_3) && !empty($mean_4) && !empty($mean_5)) {
      $dataPoints = array(
        array("label" => $year1, "y" => $mean_1),
        array("label" => $year2, "y" => $mean_2),
        array("label" => $year3, "y" => $mean_3),
        array("label" => $year4, "y" => $mean_4),
        array("label" => $year5, "y" => $mean_5)
      );
    } else {
      header("location:compareyear_select.php");
    }
  } else if ($count == 8) {
    if (!empty($mean_1) && !empty($mean_2) && !empty($mean_3) && !empty($mean_4) && !empty($mean_5) && !empty($mean_6) && !empty($mean_7) && !empty($mean_8)) {
      $dataPoints = array(
        array("label" => $year1, "y" => $mean_1),
        array("label" => $year2, "y" => $mean_2),
        array("label" => $year3, "y" => $mean_3),
        array("label" => $year4, "y" => $mean_4),
        array("label" => $year5, "y" => $mean_5),
        array("label" => $year6, "y" => $mean_6),
        array("label" => $year7, "y" => $mean_7),
        array("label" => $year8, "y" => $mean_8)
      );
    } else {
      header("location:compareyear_select.php");
    }
  } else if ($count == 10) {
    if (!empty($mean_1) && !empty($mean_2) && !empty($mean_3) && !empty($mean_4) && !empty($mean_5) && !empty($mean_6) && !empty($mean_7) && !empty($mean_8)  && !empty($mean_9) && !empty($mean_10)) {
      $dataPoints = array(
        array("label" => $year1, "y" => $mean_1),
        array("label" => $year2, "y" => $mean_2),
        array("label" => $year3, "y" => $mean_3),
        array("label" => $year4, "y" => $mean_4),
        array("label" => $year5, "y" => $mean_5),
        array("label" => $year6, "y" => $mean_6),
        array("label" => $year7, "y" => $mean_7),
        array("label" => $year8, "y" => $mean_8),
        array("label" => $year9, "y" => $mean_9),
        array("label" => $year10, "y" => $mean_10)
      );
    } else {
      header("location:compareyear_select.php");
    }
  }
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>เปรียบเทียบกราฟเฉลี่ยรายปี</title>
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
                            <h1 class="h4 text-gray-900 mb-4">เปรียบเทียบกราฟเฉลี่ยรายปี</h1>
                          </div>

                          <form class="form-group text-right" method="post" name="form1" action="" onSubmit="JavaScript:return fncSubmit();">
                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-12">
                                <b><span class="text-gray-900 form-text text-center">ตัวชี้วัด : <?php echo $ind_code . " : " . $ind_name; ?></span></b>
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
                                  <div class="card-body text-left">
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
                                  <div class="card-body text-left">
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
                                  <div class="card-body text-left">
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
                                  <div class="card-body text-left">
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
                                  <div class="card-body text-left">
                                    <?php echo $comment_5; ?>
                                  </div>
                                </div>
                              <?php
                              }
                              if (!empty($graph_6)) {
                              ?>
                                <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_6"; ?></span></b>
                                <div class="col-sm-12">
                                  <b><span class="text-gray-900 form-text text-left">ค่าเฉลี่ย : <?php echo number_format($mean_6, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่าน้อยสุด : <?php echo number_format($min_6, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่ามากสุด : <?php echo number_format($max_6, 2); ?></span></b>
                                </div>
                                <div class="card shadow mb-4">
                                  <div class="card-body text-left">
                                    <?php echo $comment_6; ?>
                                  </div>
                                </div>
                              <?php
                              }
                              if (!empty($graph_7)) {
                              ?>
                                <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_7"; ?></span></b>
                                <div class="col-sm-12">
                                  <b><span class="text-gray-900 form-text text-left">ค่าเฉลี่ย : <?php echo number_format($mean_7, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่าน้อยสุด : <?php echo number_format($min_7, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่ามากสุด : <?php echo number_format($max_7, 2); ?></span></b>
                                </div>
                                <div class="card shadow mb-4">
                                  <div class="card-body text-left">
                                    <?php echo $comment_7; ?>
                                  </div>
                                </div>
                              <?php
                              }
                              if (!empty($graph_8)) {
                              ?>
                                <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_8"; ?></span></b>
                                <div class="col-sm-12">
                                  <b><span class="text-gray-900 form-text text-left">ค่าเฉลี่ย : <?php echo number_format($mean_8, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่าน้อยสุด : <?php echo number_format($min_8, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่ามากสุด : <?php echo number_format($max_8, 2); ?></span></b>
                                </div>
                                <div class="card shadow mb-4">
                                  <div class="card-body text-left">
                                    <?php echo $comment_8; ?>
                                  </div>
                                </div>
                              <?php
                              }
                              if (!empty($graph_9)) {
                              ?>
                                <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_9"; ?></span></b>
                                <div class="col-sm-12">
                                  <b><span class="text-gray-900 form-text text-left">ค่าเฉลี่ย : <?php echo number_format($mean_9, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่าน้อยสุด : <?php echo number_format($min_9, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่ามากสุด : <?php echo number_format($max_9, 2); ?></span></b>
                                </div>
                                <div class="card shadow mb-4">
                                  <div class="card-body text-left">
                                    <?php echo $comment_9; ?>
                                  </div>
                                </div>
                              <?php
                              }
                              if (!empty($graph_10)) {
                              ?>
                                <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_10"; ?></span></b>
                                <div class="col-sm-12">
                                  <b><span class="text-gray-900 form-text text-left">ค่าเฉลี่ย : <?php echo number_format($mean_10, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่าน้อยสุด : <?php echo number_format($min_10, 2); ?></span></b>
                                  <b><span class="text-gray-900 form-text text-left">ค่ามากสุด : <?php echo number_format($max_10, 2); ?></span></b>
                                </div>
                                <div class="card shadow mb-4">
                                  <div class="card-body text-left">
                                    <?php echo $comment_10; ?>
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