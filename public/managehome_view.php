<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

extract($_GET);
$id = isset($_GET['id']) ? $_GET['id'] : "";
$active = isset($_GET['active']) ? $_GET['active'] : "";
$non_active = isset($_GET['non_active']) ? $_GET['non_active'] : "";
if (!empty($active)) {
  $sql = "UPDATE graph_m SET status='1' WHERE graph_m_id='$active' ";
  $result = mysqli_query($connect, $sql);
  $sql1 = "UPDATE graph_3m SET status='1' WHERE graph_3m_id='$active' ";
  $result1 = mysqli_query($connect, $sql1);
  $sql2 = "UPDATE graph_6m SET status='1' WHERE graph_6m_id='$active' ";
  $result2 = mysqli_query($connect, $sql2);
  $sql3 = "UPDATE graph_y SET status='1' WHERE graph_y_id='$active' ";
  $result3 = mysqli_query($connect, $sql3);

  $id = $active;
} else {
  if (!empty($non_active)) {
    $sql = "UPDATE graph_m SET status='0' WHERE graph_m_id='$non_active' ";
    $result = mysqli_query($connect, $sql);
    $sql1 = "UPDATE graph_3m SET status='0' WHERE graph_3m_id='$non_active' ";
    $result1 = mysqli_query($connect, $sql1);
    $sql2 = "UPDATE graph_6m SET status='0' WHERE graph_6m_id='$non_active' ";
    $result2 = mysqli_query($connect, $sql2);
    $sql3 = "UPDATE graph_y SET status='0' WHERE graph_y_id='$non_active' ";
    $result3 = mysqli_query($connect, $sql3);
    $id = $non_active;
  }
}

if (!empty($id)) {

  include('../include/select_graph_m.php');
  include('../include/select_graph_3m.php');
  include('../include/select_graph_6m.php');
  include('../include/select_graph_y.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>จัดการหน้าแรก</title>
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
              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 bg-gray-500">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="p-5">

                        <form class="form-group text-right" method="post" name="form1" action="">

                          <div class="row justify-content-center">
                            <div class="col-xl-3 col-md-6 mb-2">
                              <a href="../public/managehome.php" class="btn btn-secondary btn-user btn-block bg-gray-900" style="width:100%">
                                <span class="text">
                                  << กลับไปหน้าจัดการหน้าแรก</span> </a> </div> <div class="col-xl-1 col-md-6 mb-2">
                            </div>
                            <div class="col-xl-1 col-md-6 mb-2">
                              <div class="btn btn-block bg-gray-100">
                                <a href="managehome_view.php?active=<?= $graph_id ?> "><img src="../img/active.png" width="25" height="25" /></a>
                              </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-2">
                              <div class="btn btn-block bg-gray-100">

                                <span>
                                  <?php
                                  if ($status == 1) {
                                    echo '<span style="color:green">สถานะ : เลือกแสดงหน้าแรก</span>';
                                  } else {
                                    echo '<span style="color:red">สถานะ : ไม่เลือกแสดงหน้าแรก</span>';
                                  }
                                  ?>
                                </span>

                              </div>
                            </div>

                            <div class="col-xl-1 col-md-6 mb-2">
                              <div class="btn btn-block bg-gray-100">
                                <a href="managehome_view.php?non_active=<?= $graph_id ?>"><img src="../img/active_non.png" width="25" height="25" /></a>
                              </div>
                            </div>
                          </div>
                        </form>

                        <div class="row justify-content-center">
                          <div class="col-xl-9 col-lg-7">
                            <div class="card shadow mb-4">
                              <!-- Card Header - Dropdown -->
                              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-secondery"><?php echo $indicator_code; ?> : <?php echo $indicator_name; ?> ปี <?php echo $year; ?></h6>
                              </div>
                              <!-- Card Body -->
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