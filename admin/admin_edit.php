<?php
include('../include/db.php');
include('../include/username.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>จัดการกราฟ</title>
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
                            <th width="1">รหัส</th>
                            <th width="1">ชื่อตัวชี้วัด</th>
                            <th width="1">ความถี่</th>
                            <th width="1">ปี</th>
                            <th width="1">ระดับ</th>
                            <th width="1">ทีม</th>
                            <th width="1">ดูกราฟ</th>
                            <th width="1">แก้ไข</th>
                            <th width="1">ลบ</th>
                          </tr>
                          <thead>

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
                                <td><?php echo $indicator_code ?></td>
                                <td><?php echo $indicator_name ?></td>
                                <td><?php echo "รายเดือน" ?></td>
                                <td><?php echo $year ?></td>
                                <td><?php echo $degree_name ?></td>
                                <td><?php echo $team_code ?></td>
                                <td><a href="admin_edit_view.php?id=<?= $graph_id ?>" type="button" class="btn btn-info btn-user btn-block bg-gradient-info">ดู</a></td>
                                <td><a href="admin_edit_edit.php?id=<?= $graph_id ?>" type="button" class="btn btn-warning btn-user btn-block bg-gradient-warning">แก้ไข</a></td>
                                <td><a href="admin_edit_delete.php?id=<?= $graph_id ?>" type="button" class="btn btn-danger btn-user btn-block bg-gradient-danger" onclick="return confirm('คุณต้องการลบกราฟตัวชี้วัดนี้หรือไม่ ?')">ลบ</a></td>
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
                                <td><?php echo $indicator_code ?></td>
                                <td><?php echo $indicator_name ?></td>
                                <td><?php echo "3 เดือน" ?></td>
                                <td><?php echo $year ?></td>
                                <td><?php echo $degree_name ?></td>
                                <td><?php echo $team_code ?></td>
                                <td><a href="admin_edit_view.php?id=<?= $graph_id ?>" type="button" class="btn btn-info btn-user btn-block bg-gradient-info">ดู</a></td>
                                <td><a href="admin_edit_edit.php?id=<?= $graph_id ?>" type="button" class="btn btn-warning btn-user btn-block bg-gradient-warning">แก้ไข</a></td>
                                <td><a href="admin_edit_delete.php?id=<?= $graph_id ?>" type="button" class="btn btn-danger btn-user btn-block bg-gradient-danger" onclick="return confirm('คุณต้องการลบกราฟตัวชี้วัดนี้หรือไม่ ?')">ลบ</a></td>
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
                                <td><?php echo $indicator_code ?></td>
                                <td><?php echo $indicator_name ?></td>
                                <td><?php echo "6 เดือน" ?></td>
                                <td><?php echo $year ?></td>
                                <td><?php echo $degree_name ?></td>
                                <td><?php echo $team_code ?></td>
                                <td><a href="admin_edit_view.php?id=<?= $graph_id ?>" type="button" class="btn btn-info btn-user btn-block bg-gradient-info">ดู</a></td>
                                <td><a href="admin_edit_edit.php?id=<?= $graph_id ?>" type="button" class="btn btn-warning btn-user btn-block bg-gradient-warning">แก้ไข</a></td>
                                <td><a href="admin_edit_delete.php?id=<?= $graph_id ?>" type="button" class="btn btn-danger btn-user btn-block bg-gradient-danger" onclick="return confirm('คุณต้องการลบกราฟตัวชี้วัดนี้หรือไม่ ?')">ลบ</a></td>
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
                                <td><?php echo $indicator_code ?></td>
                                <td><?php echo $indicator_name ?></td>
                                <td><?php echo "รายปี"; ?></td>
                                <td><?php echo $year ?></td>
                                <td><?php echo $degree_name ?></td>
                                <td><?php echo $team_code ?></td>
                                <td><a href="admin_edit_view.php?id=<?= $graph_id ?>" type="button" class="btn btn-info btn-user btn-block bg-gradient-info">ดู</a></td>
                                <td><a href="admin_edit_edit.php?id=<?= $graph_id ?>" type="button" class="btn btn-warning btn-user btn-block bg-gradient-warning">แก้ไข</a></td>
                                <td><a href="admin_edit_delete.php?id=<?= $graph_id ?>" type="button" class="btn btn-danger btn-user btn-block bg-gradient-danger" onclick="return confirm('คุณต้องการลบกราฟตัวชี้วัดนี้หรือไม่ ?')">ลบ</a></td>
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