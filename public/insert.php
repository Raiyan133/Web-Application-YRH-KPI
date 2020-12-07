<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>ป้อนข้อมูลตัวชี้วัด</title>
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
              <div class="col-xl-11 col-lg-14 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0 bg-gray-500">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="p-5">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">ป้อนข้อมูลตัวชี้วัด เพื่อแสดงผลกราฟ</h1>
                          </div>

                          <form class="form-group text-right" method="post" name="form1" action="" onSubmit="JavaScript:return fncSubmit();">
                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text">ปีงบประมาณ :</span>
                              </div>
                              <div class="col-sm-2">
                                <select class="form-control" name="year" id="year">
                                  <option value="" disabled selected>โปรดเลือกปี</option>
                                  <?php
                                  for ($i = 2550; $i <= date('Y') + 543; $i++) {
                                    echo "<option value='" . $i . "'>$i</option>";
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>

                            <?php
                            include('../include/select_user.php');

                            if ($count_admin == 1) {
                            ?>

                              <div class="form row">
                                <div class="col-sm-2">
                                  <span class="h7 text-gray-900 mb-4 form-text">ตัวชี้วัด :</span>
                                </div>

                                <div class="col-sm-8">
                                  <select class="form-control" name="id" id="id">
                                    <option value="" disabled selected>โปรดเลือกตัวชี้วัด</option>
                                    <?php
                                    $sql = "SELECT * FROM indicator";
                                    $objQuery = mysqli_query($connect, $sql);
                                    while ($objResuut = mysqli_fetch_array($objQuery)) {
                                    ?>
                                      <option value="<?php echo $objResuut["indicator_code"]; ?>"><?php echo $objResuut["indicator_code"] . " : " . $objResuut["indicator_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                  </select>
                                </div>
                              </div>

                            <?php
                            } else if ($count_staff == 1) { ?>

                              <div class="form row">
                                <div class="col-sm-2">
                                  <span class="h7 text-gray-900 mb-4 form-text">ตัวชี้วัด :</span>
                                </div>

                                <div class="col-sm-8">
                                  <select class="form-control" name="id" id="id">
                                    <option value="" disabled selected>โปรดเลือกตัวชี้วัด</option>
                                    <?php
                                    $sql = "SELECT * FROM indicator WHERE team_code = '$username'";
                                    $objQuery = mysqli_query($connect, $sql);
                                    while ($objResuut = mysqli_fetch_array($objQuery)) {
                                    ?>
                                      <option value="<?php echo $objResuut["indicator_code"]; ?>"><?php echo $objResuut["indicator_code"] . " : " . $objResuut["indicator_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                  </select>
                                </div>
                              </div>

                            <?php } ?>

                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text">ความถี่ :</span>
                              </div>
                              <div class="col-sm-8">
                                <select class="form-control" name="type" id="type">
                                  <option value="" disabled selected>โปรดเลือกความถี่</option>
                                  <option value="รายเดือน">รายเดือน</option>
                                  <option value="3 เดือน">3 เดือน</option>
                                  <option value="6 เดือน">6 เดือน</option>
                                  <option value="รายปี">รายปี</option>
                                </select>
                              </div>
                            </div>

                            <div class="form row">
                              <div class="col-sm-2">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                              </div>
                              <div class="col-sm-8">
                                <span class="h7 text-gray-900 mb-4 form-text"></span>
                                <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit" type="submit" value="">สร้างกราฟ</button>
                              </div>
                            </div>

                            <?php
                            if (isset($_POST['submit'])) {
                              if (!empty($_POST['id']) && !empty($_POST['type']) && !empty($_POST['year'])) {
                                $ind_code = $_POST['id'];
                                $type = $_POST['type'];
                                $year = $_POST['year'];
                                $id = $ind_code . $year;

                                $sql1 = "SELECT * FROM graph_m WHERE graph_m_id='$id'";
                                $result1 = mysqli_query($connect, $sql1);
                                $sql2 = "SELECT * FROM graph_3m WHERE graph_3m_id='$id'";
                                $result2 = mysqli_query($connect, $sql2);
                                $sql3 = "SELECT * FROM graph_6m WHERE graph_6m_id='$id'";
                                $result3 = mysqli_query($connect, $sql3);
                                $sql4 = "SELECT * FROM graph_y WHERE graph_y_id='$id'";
                                $result4 = mysqli_query($connect, $sql4);

                                if (mysqli_num_rows($result1) == 0 && mysqli_num_rows($result2) == 0 && mysqli_num_rows($result3) == 0&& mysqli_num_rows($result4) == 0) {
                                  $sql = "SELECT * FROM indicator WHERE indicator_code = '" . $_POST['id'] . "'";
                                  $objQuery = mysqli_query($connect, $sql);
                                  $row = mysqli_fetch_array($objQuery);
                                  $_SESSION['ind_code'] = $row["indicator_code"];
                                  $_SESSION['ind_name'] = $row["indicator_name"];
                                  $_SESSION['first_name'] = $row["first_name"];
                                  $_SESSION['last_name'] = $row["last_name"];
                                  $_SESSION['year'] = $year;
                                  session_write_close();

                                  if ($type == "รายเดือน") {
                            ?>
                                    <script type="text/javascript">
                                      window.location = "insert_m.php";
                                    </script>
                                  <?php
                                  } else if ($type == "3 เดือน") {
                                  ?>
                                    <script type="text/javascript">
                                      window.location = "insert_3m.php";
                                    </script>
                                  <?php
                                  } else if ($type == "6 เดือน") {
                                  ?>
                                    <script type="text/javascript">
                                      window.location = "insert_6m.php";
                                    </script>
                                  <?php
                                  } else if ($type == "รายปี") {
                                  ?>
                                    <script type="text/javascript">
                                      window.location = "insert_y.php";
                                    </script>
                            <?php
                                  }
                                } else {
                                  $message = "รหัสตัวชี้วัด" . " " . $ind_code . " " . "ปี" . " " . $year . " " . "ถูกป้อนข้อมูล เพื่อแสดงกราฟเรียบร้อยแล้ว";
                                }
                              } else if (empty($_POST['id']) || empty($_POST['year'])) {
                                $message = "กรุณาป้อนข้อมูลให้ครบและถูกต้อง";
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