<?php
  include('../include/username.php');
  include('../include/db.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YRH KPI - Admin Home</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      //session_start();
      include('../admin/admin_include/admin_sidebar.php');
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
        //session_start();
        include('../include/topbar.php');
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row justify-content-center">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="#" class="btn btn-secondary btn-icon-split align-items-center" style="width:190px">
                <span class="text">ตัวชี้วัดทั้งหมด</span>
              </a>
            </div>
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="#" class="btn btn-secondary btn-icon-split align-items-center" style="width:190px">
                <span class="text">ตัวชี้วัดระดับโรงพยาบาล</span>
              </a>
            </div>
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="#" class="btn btn-secondary btn-icon-split align-items-center" style="width:190px">
                <span class="text">ตัวชี้วัดระดับหน่วยงาน</span>
              </a>
            </div>
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="#" class="btn btn-secondary btn-icon-split align-items-center" id="navbarDropdown" role="button" data-toggle="dropdown" style="width:190px">
                <span class="text">ตัวชี้วัดเลือกตามรหัส</span>
              </a>
                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
          </div>
<?php

$sql = "SELECT graph.*, indicator.* FROM graph, indicator WHERE indicator.indicator_id=graph.indicator_id AND status='1' AND type='3 เดือน' ";
$objQuery = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($objQuery)) {
  $ind_id = $row['indicator_id'];
    $ind_name = $row['indicator_name'];
    $number1 = $row['number1'];
    $number2 = $row['number2'];
    $number3 = $row['number3'];
    $number4 = $row['number4'];
    $divisor1 = $row['divisor1'];
    $divisor2 = $row['divisor2'];
    $divisor3 = $row['divisor3'];
    $divisor4 = $row['divisor4'];
    $comment = $row['comment'];
    $date = $row['date'];
    $year = $row['year'];
    $username_post = $row['username_post'];


    $result1 = $number1 * 100 / $divisor1;
    $result2 = $number2 * 100 / $divisor2;
    $result3 = $number3 * 100 / $divisor3;
    $result4 = $number4 * 100 / $divisor4;

    $dataPoints = array(
        array("label" => "ต.ค. - ธ.ค.", "y" => $result1),
        array("label" => "ม.ค. - มี.ค.", "y" => $result2),
        array("label" => "เม.ย. - มิ.ย.", "y" => $result3),
        array("label" => "ก.ค. - ก.ย.", "y" => $result4)

    );


?>
<script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light1",
                title: {
                    text: ""
                },
                axisX: {
                    valueFormatString: ""
                },
                axisY: {
                    title: "",
                    includeZero: false,  
                },
                data: [{
                    type: "stackedArea",
                    color: "#D8BFD8",
                    xValueType: "dateTime",
                    xValueFormatString: "",
                    yValueFormatString: "#,##0 ",
                    dataPoints: <?php echo json_encode($dataPoints); ?>
                }]
            });

            chart.render();

        }
    </script>

          

          <div class="row justify-content-center">
                                                    <div class="col-xl-9 col-lg-7">
                                                        <div class="card shadow mb-4">
                                                            <!-- Card Header - Dropdown -->
                                                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                                <h6 class="m-0 font-weight-bold text-secondery"><?php echo $ind_id; ?> : <?php echo $ind_name; ?> ปี <?php echo $year; ?></h6>
                                                                <div class="dropdown no-arrow">
                                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                                        <div class="dropdown-header">Dropdown Header:</div>
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </div>
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
                                                                    <span>บันทึกข้อมูล : <?php echo $date; ?> โดย <?php echo $username_post; ?></span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


  <?php } ?>


  <?php

$sql = "SELECT graph.*, indicator.* FROM graph, indicator WHERE indicator.indicator_id=graph.indicator_id AND status='1' AND type='6 เดือน' ";
$objQuery = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($objQuery)) {
  $ind_id = $row['indicator_id'];
    $ind_name = $row['indicator_name'];
    $number1 = $row['number1'];
    $number2 = $row['number2'];
    $divisor1 = $row['divisor1'];
    $divisor2 = $row['divisor2'];
    $comment = $row['comment'];
    $date = $row['date'];
    $year = $row['year'];
    $username_post = $row['username_post'];


    $result1 = $number1 * 100 / $divisor1;
    $result2 = $number2 * 100 / $divisor2;

    $dataPoints = array(
        array("label" => "ต.ค. - ธ.ค.", "y" => $result1),
        array("label" => "ม.ค. - มี.ค.", "y" => $result2)

    );


?>
<script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light1",
                title: {
                    text: ""
                },
                axisX: {
                    valueFormatString: ""
                },
                axisY: {
                    title: "",
                    includeZero: false,  
                },
                data: [{
                    type: "stackedArea",
                    color: "#D8BFD8",
                    xValueType: "dateTime",
                    xValueFormatString: "",
                    yValueFormatString: "#,##0 ",
                    dataPoints: <?php echo json_encode($dataPoints); ?>
                }]
            });

            chart.render();

        }
    </script>

          

          <div class="row justify-content-center">
                                                    <div class="col-xl-9 col-lg-7">
                                                        <div class="card shadow mb-4">
                                                            <!-- Card Header - Dropdown -->
                                                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                                <h6 class="m-0 font-weight-bold text-secondery"><?php echo $ind_id; ?> : <?php echo $ind_name; ?> ปี <?php echo $year; ?></h6>
                                                                <div class="dropdown no-arrow">
                                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                                        <div class="dropdown-header">Dropdown Header:</div>
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </div>
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
                                                                    <span>บันทึกข้อมูล : <?php echo $date; ?> โดย <?php echo $username_post; ?></span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


  <?php } ?>















        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php
      //session_start();
      include('../include/footer.php');
      ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <script src="../js/canvasjs.min.js"></script>

</body>

</html>
