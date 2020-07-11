<?php
include('../include/db.php');
include('../include/username.php');

extract($_GET);
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
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>จัดการหน้าแรก</title>
  <?php include('../include/head.php'); ?>
</head>

<body id="page-top">
  <div id="wrapper">
    <?php include('../admin/admin_include/admin_sidebar.php'); ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php include('../include/topbar.php'); ?>
        <div class="container-fluid">
          <form id="form1" name="form1" method="post" action="">
            <div class="row justify-content-center">
              <div class="col-xl-12 col-lg-14 col-md-9">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-secondary">กราฟตัวชี้วัดทั้งหมด</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable">
                        <thead>
                          <tr>
                            <th width="3%">ปี</th>
                            <th width="5%">รหัส</th>
                            <th width="%">ชื่อตัวชี้วัด</th>
                            <th width="5%">ความถี่</th>
                            <th width="10%">ระดับ</th>
                            <th width="5%">ทีม</th>
                            <th width="8%">กราฟ</th>
                            <th width="3%">เลือก</th>
                            <th width="9%">ไม่เลือก</th>
                            <th width="3%">สถานะ</th>
                          </tr>
                        </thead>

                        <tbody>

                          <?php
                          $sql = "SELECT graph_m.*, indicator.*, degree.* 
                          FROM graph_m 
                          JOIN indicator ON indicator.indicator_code=graph_m.indicator 
                          JOIN degree ON degree.degree_id=indicator.degree";

                          $result = mysqli_query($connect, $sql);
                          while ($row = mysqli_fetch_array($result)) {

                            $graph_id = $row['graph_m_id'];
                            $indicator_code = $row["indicator_code"];
                            $indicator_name = $row["indicator_name"];
                            $year = $row["year"];
                            $degree_name = $row["degree_name"];
                            $team_code = $row["team_code"];

                          ?>

                            <tr>
                              <td><?php echo $row["year"]; ?></td>
                              <td><?php echo $row["indicator_code"]; ?></td>
                              <td><?php echo $row["indicator_name"]; ?></td>
                              <td><?php echo "รายเดือน"; ?></td>
                              <td><?php echo $row["degree_name"]; ?></td>
                              <td><?php echo $row["team_code"]; ?></td>
                              <td><a href="admin_managehome_view.php?id=<?= $row['graph_m_id']; ?>" type="button" class="btn btn-info btn-user btn-block bg-gradient-info">ดู</a></td>
                              <td>
                                <div align="center">
                                  <a href="admin_managehome.php?active=<?= $row['graph_m_id']; ?> ">
                                    <img src="../img/active.png" width="25" height="25" />
                                  </a>
                                </div>
                              </td>
                              <td>
                                <div align="center">
                                  <a href="admin_managehome.php?non_active=<?= $row['graph_m_id']; ?>">
                                    <img src="../img/active_non.png" width="25" height="25" />
                                  </a>
                                </div>
                              </td>
                              <td>
                                <span>
                                  <?php $status = $row['status'];
                                  if ($status == 1) {
                                    echo '<span style="color:green">เลือก</span>';
                                  } else {
                                    echo '<span style="color:red">ไม่เลือก</span>';
                                  }
                                  ?>
                                </span>
                              </td>
                            </tr>
                          <?php
                          }

                          $sql = "SELECT graph_3m.*, indicator.*, degree.* 
                          FROM graph_3m 
                          JOIN indicator ON indicator.indicator_code=graph_3m.indicator 
                          JOIN degree ON degree.degree_id=indicator.degree";

                          $result = mysqli_query($connect, $sql);
                          while ($row = mysqli_fetch_array($result)) {

                            $graph_id = $row['graph_3m_id'];
                            $indicator_code = $row["indicator_code"];
                            $indicator_name = $row["indicator_name"];
                            $year = $row["year"];
                            $degree_name = $row["degree_name"];
                            $team_code = $row["team_code"];

                          ?>

                            <tr>
                              <td><?php echo $row["year"]; ?></td>
                              <td><?php echo $row["indicator_code"]; ?></td>
                              <td><?php echo $row["indicator_name"]; ?></td>
                              <td><?php echo "3 เดือน"; ?></td>
                              <td><?php echo $row["degree_name"]; ?></td>
                              <td><?php echo $row["team_code"]; ?></td>
                              <td><a href="admin_managehome_view.php?id=<?= $row['graph_3m_id']; ?>" type="button" class="btn btn-info btn-user btn-block bg-gradient-info">ดู</a></td>
                              <td>
                                <div align="center">
                                  <a href="admin_managehome.php?active=<?= $row['graph_3m_id']; ?> ">
                                    <img src="../img/active.png" width="25" height="25" />
                                  </a>
                                </div>
                              </td>
                              <td>
                                <div align="center">
                                  <a href="admin_managehome.php?non_active=<?= $row['graph_3m_id']; ?>">
                                    <img src="../img/active_non.png" width="25" height="25" />
                                  </a>
                                </div>
                              </td>
                              <td>
                                <span>
                                  <?php $status = $row['status'];
                                  if ($status == 1) {
                                    echo '<span style="color:green">เลือก</span>';
                                  } else {
                                    echo '<span style="color:red">ไม่เลือก</span>';
                                  }
                                  ?>
                                </span>
                              </td>
                            </tr>
                          <?php
                          }

                          $sql = "SELECT graph_6m.*, indicator.*, degree.* 
                          FROM graph_6m 
                          JOIN indicator ON indicator.indicator_code=graph_6m.indicator 
                          JOIN degree ON degree.degree_id=indicator.degree";

                          $result = mysqli_query($connect, $sql);
                          while ($row = mysqli_fetch_array($result)) {

                            $graph_id = $row['graph_6m_id'];
                            $indicator_code = $row["indicator_code"];
                            $indicator_name = $row["indicator_name"];
                            $year = $row["year"];
                            $degree_name = $row["degree_name"];
                            $team_code = $row["team_code"];

                          ?>

                            <tr>
                              <td><?php echo $row["year"]; ?></td>
                              <td><?php echo $row["indicator_code"]; ?></td>
                              <td><?php echo $row["indicator_name"]; ?></td>
                              <td><?php echo "6 เดือน"; ?></td>
                              <td><?php echo $row["degree_name"]; ?></td>
                              <td><?php echo $row["team_code"]; ?></td>
                              <td><a href="admin_managehome_view.php?id=<?= $row['graph_6m_id']; ?>" type="button" class="btn btn-info btn-user btn-block bg-gradient-info">ดู</a></td>
                              <td>
                                <div align="center">
                                  <a href="admin_managehome.php?active=<?= $row['graph_6m_id']; ?> ">
                                    <img src="../img/active.png" width="25" height="25" />
                                  </a>
                                </div>
                              </td>
                              <td>
                                <div align="center">
                                  <a href="admin_managehome.php?non_active=<?= $row['graph_6m_id']; ?>">
                                    <img src="../img/active_non.png" width="25" height="25" />
                                  </a>
                                </div>
                              </td>
                              <td>
                                <span>
                                  <?php $status = $row['status'];
                                  if ($status == 1) {
                                    echo '<span style="color:green">เลือก</span>';
                                  } else {
                                    echo '<span style="color:red">ไม่เลือก</span>';
                                  }
                                  ?>
                                </span>
                              </td>

                            </tr>
                          <?php
                          }

                          $sql = "SELECT graph_y.*, indicator.*, degree.* 
                          FROM graph_y 
                          JOIN indicator ON indicator.indicator_code=graph_y.indicator 
                          JOIN degree ON degree.degree_id=indicator.degree";

                          $result = mysqli_query($connect, $sql);
                          while ($row = mysqli_fetch_array($result)) {

                            $graph_id = $row['graph_y_id'];
                            $indicator_code = $row["indicator_code"];
                            $indicator_name = $row["indicator_name"];
                            $year = $row["year"];
                            $degree_name = $row["degree_name"];
                            $team_code = $row["team_code"];

                          ?>

                            <tr>
                              <td><?php echo $row["year"]; ?></td>
                              <td><?php echo $row["indicator_code"]; ?></td>
                              <td><?php echo $row["indicator_name"]; ?></td>
                              <td><?php echo "รายปี"; ?></td>
                              <td><?php echo $row["degree_name"]; ?></td>
                              <td><?php echo $row["team_code"]; ?></td>
                              <td><a href="admin_managehome_view.php?id=<?= $row['graph_y_id']; ?>" type="button" class="btn btn-info btn-user btn-block bg-gradient-info">ดู</a></td>
                              <td>
                                <div align="center">
                                  <a href="admin_managehome.php?active=<?= $row['graph_y_id']; ?> ">
                                    <img src="../img/active.png" width="25" height="25" />
                                  </a>
                                </div>
                              </td>
                              <td>
                                <div align="center">
                                  <a href="admin_managehome.php?non_active=<?= $row['graph_y_id']; ?>">
                                    <img src="../img/active_non.png" width="25" height="25" />
                                  </a>
                                </div>
                              </td>
                              <td>
                                <span>
                                  <?php $status = $row['status'];
                                  if ($status == 1) {
                                    echo '<span style="color:green">เลือก</span>';
                                  } else {
                                    echo '<span style="color:red">ไม่เลือก</span>';
                                  }
                                  ?>
                                </span>
                              </td>
                            </tr>
                          <?php } ?>

                        </tbody>

                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <?php include('../include/footer.php'); ?>
    </div>
  </div>
  <?php include('../include/script.php'); ?>
</body>

</html>