<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];

  $ind_code = $_SESSION["ind_code"];
  $ind_name = $_SESSION["ind_name"];
  $message = "* กรุณาเลือกปีและปีย้อนหลังให้สอดคล้องกัน";
  
  extract($_GET);
  $year = isset($_GET['year']) ? $_GET['year'] : "";
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>เปรียบเทียบกราฟเฉลี่ยรายปี</title>
    <?php include('../include/head.php'); ?>
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
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text">ตัวชี้วัด :</span>
                              </div>
                              <div class="col-sm-8">
                                <input class="form-control" type="text" value="<?php echo $ind_code . " : " . $ind_name; ?>" readonly>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-3">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-3">
                                <span class="h7 text-gray-900 mb-4 form-text">ปี :</span>
                              </div>
                              <div class="col-sm-2">
                                <select class="form-control" name="select" id="select">
                                  <option value="" disabled selected>เลือกปี</option>
                                  <?php include('../include/select_year_graph_m.php'); ?>
                                  <?php include('../include/select_year_graph_3m.php'); ?>
                                  <?php include('../include/select_year_graph_6m.php'); ?>
                                  <?php include('../include/select_year_graph_y.php'); ?>
                                </select>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-3">
                                <span class="h7 text-gray-900 mb-4 form-text">ย้อนหลัง :</span>
                              </div>
                              <div class="col-sm-2">
                                <select class="form-control" name="year" id="year">
                                  <option value="" disabled selected>เลือกปีย้อนหลัง</option>
                                  <option value="3">3 ปี</option>
                                  <option value="5">5 ปี</option>
                                  <option value="8">8 ปี</option>
                                  <option value="10">10 ปี</option>
                                </select>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-3">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                              <div class="col-sm-6">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                                <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit" type="submit" value="">เปรียบเทียบกราฟ</button>
                              </div>
                            </div>


                            <?php
                            if (isset($_POST['submit'])) {
                              if (!empty($_POST['select']) && !empty($_POST['year'])) {
                                $select_year = $_POST['select'];
                                $count_year = $_POST['year'];

                                $sql1 = "SELECT * FROM graph_m WHERE graph_m_id='$select_year'";
                                $result1 = mysqli_query($connect, $sql1);
                                $sql2 = "SELECT * FROM graph_3m WHERE graph_3m_id='$select_year'";
                                $result2 = mysqli_query($connect, $sql2);
                                $sql3 = "SELECT * FROM graph_6m WHERE graph_6m_id='$select_year'";
                                $result3 = mysqli_query($connect, $sql3);
                                $sql4 = "SELECT * FROM graph_y WHERE graph_y_id='$select_year'";
                                $result4 = mysqli_query($connect, $sql4);

                                if (mysqli_num_rows($result1) > 0) {
                                  $sql = "SELECT * FROM graph_m WHERE graph_m_id = '" . $select_year . "'";
                                  $objQuery = mysqli_query($connect, $sql);
                                  while ($row = mysqli_fetch_array($objQuery)) {
                                    $year = $row['year'];
                                  }
                                } else if (mysqli_num_rows($result2) > 0) {
                                  $sql = "SELECT * FROM graph_3m WHERE graph_3m_id = '" . $select_year . "'";
                                  $objQuery = mysqli_query($connect, $sql);
                                  while ($row = mysqli_fetch_array($objQuery)) {
                                    $year = $row['year'];
                                  }
                                } else if (mysqli_num_rows($result3) > 0) {
                                  $sql = "SELECT * FROM graph_6m WHERE graph_6m_id = '" . $select_year . "'";
                                  $objQuery = mysqli_query($connect, $sql);
                                  while ($row = mysqli_fetch_array($objQuery)) {
                                    $year = $row['year'];
                                  }
                                } else if (mysqli_num_rows($result4) > 0) {
                                  $sql = "SELECT * FROM graph_y WHERE graph_y_id = '" . $select_year . "'";
                                  $objQuery = mysqli_query($connect, $sql);
                                  while ($row = mysqli_fetch_array($objQuery)) {
                                    $year = $row['year'];
                                  }
                                }

                            ?>
                                  <script type="text/javascript">
                                    window.location = "compareyear_graph.php?year=<?= $year; ?>&&ind_code=<?= $ind_code; ?>&&count=<?= $count_year; ?>";
                                  </script>
                            <?php
                                
                              } else {
                                $message = "กรุณาเลือกข้อมูลให้ครบและถูกต้อง";
                              }
                            }
                            ?>


                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                              <div class="col-sm-8" align="center">
                                <?php if (!empty($message)) {
                                  echo "<span style=\"color:red\">$message</span>";
                                }
                                ?>
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

<?php } else {
  Header("Location:home.php");
} ?>