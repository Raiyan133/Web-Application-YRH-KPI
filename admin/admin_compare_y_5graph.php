<?php
include('../include/db.php');
include('../include/username.php');

$graph_1 = $_SESSION['graph_1'];
$graph_2 = $_SESSION['graph_2'];
$graph_3 = $_SESSION['graph_3'];
$graph_4 = $_SESSION['graph_4'];
$graph_5 = $_SESSION['graph_5'];

include('../admin/admin_include/select_compare_graph_y_1.php');
include('../admin/admin_include/select_compare_graph_y_2.php');
include('../admin/admin_include/select_compare_graph_y_3.php');
include('../admin/admin_include/select_compare_graph_y_4.php');
include('../admin/admin_include/select_compare_graph_y_5.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>เปรียบเทียบกราฟ</title>
  <?php include('../include/head.php'); ?>
  <?php include('../include/graph_5.php'); ?>
</head>

<body id="page-top">
  <div id="wrapper">
    <?php
    include('../admin/admin_include/admin_sidebar.php');
    ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php
        include('../include/topbar.php');
        ?>
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-14 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 bg-gray-500">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">เปรียบเทียบกราฟ</h1>
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
                            <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_1"; ?></span></b>
                            <div class="card shadow mb-4">
                              <div class="card-body text-left" style="color:#CE8792">
                                <?php echo $comment_1; ?>
                              </div>
                            </div>
                            <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_2"; ?></span></b>
                            <div class="card shadow mb-4">
                              <div class="card-body text-left" style="color:#819AD4">
                                <?php echo $comment_2; ?>
                              </div>
                            </div>
                            <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_3"; ?></span></b>
                            <div class="card shadow mb-4">
                              <div class="card-body text-left" style="color:#567676">
                                <?php echo $comment_3; ?>
                              </div>
                            </div>
                            <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_4"; ?></span></b>
                            <div class="card shadow mb-4">
                              <div class="card-body text-left" style="color:#DC7633">
                                <?php echo $comment_4; ?>
                              </div>
                            </div>
                            <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟปีงบประมาณ <?php echo "$year_4"; ?></span></b>
                            <div class="card shadow mb-4">
                              <div class="card-body text-left" style="color:#76448A">
                                <?php echo $comment_5; ?>
                              </div>
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                          </div>

                          <form class="form-group text-right" method="post" name="form1" action="">
                            <div class="row justify-content-center">
                              <div class="col-xl-3 col-md-6 mb-2">
                                <a href="../admin/admin_compare.php" class="btn btn-secondary btn-user btn-block bg-gray-900" style="width:100%">
                                  <span class="text">เปรียบเทียบกราฟตัวชี้วัด</span>
                                </a>
                              </div>
                              <div class="col-xl-3 col-md-6 mb-2">
                                <a href="../admin/admin_edit.php" class="btn btn-secondary btn-user btn-block bg-gray-900" style="width:100%;">
                                  <span class="text">จัดการกราฟตัวชี้วัด</span>
                                </a>
                              </div>
                              <div class="col-xl-3 col-md-6 mb-2">
                                <a href="../admin/admin_home.php" class="btn btn-secondary btn-user btn-block bg-gray-900" style="width:100%">
                                  <span class="text">หน้าแรก</span>
                                </a>
                              </div>
                            </div>
                          </form>

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