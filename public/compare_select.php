<?php
include('../include/db.php');
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

$ind_code = $_SESSION["ind_code"];
$ind_name = $_SESSION["ind_name"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>เปรียบเทียบกราฟแบบละเอียด</title>
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
                          <h1 class="h4 text-gray-900 mb-4">เปรียบเทียบกราฟแบบละเอียด</h1>
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
                              <select class="form-control" name="select1" id="select1">
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
                              <span class="h7 text-gray-900 mb-4 form-text">ปี :</span>
                            </div>
                            <div class="col-sm-2">
                              <select class="form-control" name="select2" id="select2">
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
                              <span class="h7 text-gray-900 mb-4 form-text">ปี :</span>
                            </div>
                            <div class="col-sm-2">
                              <select class="form-control" name="select3" id="select3">
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
                              <span class="h7 text-gray-900 mb-4 form-text">ปี :</span>
                            </div>
                            <div class="col-sm-2">
                              <select class="form-control" name="select4" id="select4">
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
                              <span class="h7 text-gray-900 mb-4 form-text">ปี :</span>
                            </div>
                            <div class="col-sm-2">
                              <select class="form-control" name="select5" id="select5">
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
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-6">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit" type="submit" value="">เปรียบเทียบกราฟ</button>
                            </div>
                          </div>
                          
                          <?php
                          if (isset($_POST['submit'])) {
                            if (!empty($_POST['select1']) && !empty($_POST['select2']) && empty($_POST['select3']) && empty($_POST['select4']) && empty($_POST['select5'])) {
                              if ($_POST['select1'] != $_POST['select2']) {
                                ?>
                                <script type="text/javascript">
                                  window.location = "compare_graph.php?graph_1=<?= $_POST['select1'];?>&&graph_2=<?= $_POST['select2'];?>";
                                </script>
                          <?php
                              } else {
                                $message = "กรุณาห้ามเลือกปี ซ้ำกัน";
                              }

                            } else if (!empty($_POST['select1']) && !empty($_POST['select2']) && !empty($_POST['select3']) && empty($_POST['select4']) && empty($_POST['select5'])) {
                              if ($_POST['select1'] != $_POST['select2'] 
                              && $_POST['select1'] != $_POST['select3'] 
                              && $_POST['select2'] != $_POST['select3']) {

                                $_SESSION['graph_1'] = $_POST['select1'];
                                $_SESSION['graph_2'] = $_POST['select2'];
                                $_SESSION['graph_3'] = $_POST['select3'];
                          ?>
                                <script type="text/javascript">
                                  window.location = "compare_graph.php?graph_1=<?= $_POST['select1'];?>&&graph_2=<?= $_POST['select2'];?>&&graph_3=<?= $_POST['select3'];?>";
                                </script>
                          <?php
                              } else {
                                $message = "กรุณาห้ามเลือกปี ซ้ำกัน";
                              }

                            } else if (!empty($_POST['select1']) && !empty($_POST['select2']) && !empty($_POST['select3']) && !empty($_POST['select4']) && empty($_POST['select5'])) {
                              if ($_POST['select1'] != $_POST['select2'] 
                              && $_POST['select1'] != $_POST['select3'] 
                              && $_POST['select1'] != $_POST['select4'] 
                              && $_POST['select2'] != $_POST['select3'] 
                              && $_POST['select2'] != $_POST['select4'] 
                              && $_POST['select3'] != $_POST['select4']) {
                                
                                $_SESSION['graph_1'] = $_POST['select1'];
                                $_SESSION['graph_2'] = $_POST['select2'];
                                $_SESSION['graph_3'] = $_POST['select3'];
                                $_SESSION['graph_4'] = $_POST['select4'];
                          ?>
                                <script type="text/javascript">
                                  window.location = "compare_graph.php?graph_1=<?= $_POST['select1'];?>&&graph_2=<?= $_POST['select2'];?>&&graph_3=<?= $_POST['select3'];?>&&graph_4=<?= $_POST['select4'];?>";
                                </script>
                          <?php
                              } else {
                                $message = "กรุณาห้ามเลือกปี ซ้ำกัน";
                              }

                            } else if (!empty($_POST['select1']) && !empty($_POST['select2']) && !empty($_POST['select3']) && !empty($_POST['select4']) && !empty($_POST['select5'])) {
                              if ($_POST['select1'] != $_POST['select2'] 
                              && $_POST['select1'] != $_POST['select3'] 
                              && $_POST['select1'] != $_POST['select4'] 
                              && $_POST['select1'] != $_POST['select5'] 
                              && $_POST['select2'] != $_POST['select3'] 
                              && $_POST['select2'] != $_POST['select4'] 
                              && $_POST['select2'] != $_POST['select5'] 
                              && $_POST['select3'] != $_POST['select4'] 
                              && $_POST['select3'] != $_POST['select5'] 
                              && $_POST['select4'] != $_POST['select5']) {
                                
                                $_SESSION['graph_1'] = $_POST['select1'];
                                $_SESSION['graph_2'] = $_POST['select2'];
                                $_SESSION['graph_3'] = $_POST['select3'];
                                $_SESSION['graph_4'] = $_POST['select4'];
                                $_SESSION['graph_5'] = $_POST['select5'];
                          ?>
                                <script type="text/javascript">
                                  window.location = "compare_graph.php?graph_1=<?= $_POST['select1'];?>&&graph_2=<?= $_POST['select2'];?>&&graph_3=<?= $_POST['select3'];?>&&graph_4=<?= $_POST['select4'];?>&&graph_5=<?= $_POST['select5'];?>";
                                </script>
                          <?php
                              } else {
                                $message = "กรุณาห้ามเลือกปี ซ้ำกัน";
                              }

                            } else {$message = "กรุณาเลือก 2 ปีขึ้นไป";}
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

<?php } else { Header("Location:home.php");} ?>