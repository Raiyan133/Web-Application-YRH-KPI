<?php
include('include/db.php');
$g_id = [];
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YRH KPI - หน้าแรก</title>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        <nav class="navbar navbar-expand navbar-light bg-gray-900 topbar mb-4 static-top shadow">

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <a href="http://www.yaranghospital.com/web/index.php">
            <form class=" mr-auto ml-md-3 my-2 my-md-2 mw-100 ">
              <div class="input-group">
                <img class="img-profile rounded-circle" src="img/logo.jpg" width="45px" height="45px">
              </div>
            </form>
          </a>
          <form class=" mr-auto ml-md-1 my-2 my-md-2 mw-1 ">
            <div class="sidebar-brand-text mx-2 text-lg text-gray-100">ระบบตัวชี้วัดเพื่อวัดระดับคุณภาพโรงพยาบาลยะรัง</div>
          </form>

          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item dropdown no-arrow">
              <a href="login.php" class="btn btn-secondary align-items-center">
                <span class="text">Login</span>
              </a>
            </li>
          </ul>
        </nav>

        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="index.php" class="btn btn-secondary btn-icon-split align-items-center" style="width:190px">
                <span class="text">ตัวชี้วัดทั้งหมด</span>
              </a>
            </div>
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="index_degree_1.php" class="btn btn-secondary btn-icon-split align-items-center" style="width:190px">
                <span class="text">ตัวชี้วัดระดับโรงพยาบาล</span>
              </a>
            </div>
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="index_degree_2.php" class="btn btn-secondary btn-icon-split align-items-center bg-gray-900" style="width:190px">
                <span class="text">ตัวชี้วัดระดับหน่วยงาน</span>
              </a>
            </div>
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="#" class="btn btn-secondary btn-icon-split align-items-center" id="navbarDropdown" role="button" data-toggle="dropdown" style="width:190px">
                <span class="text">ตัวชี้วัดเลือกตามทีม</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">

                <div class="text-center"><b>ระดับโรงพยาบาล</b></div>

                <?php
                $sql = "SELECT * FROM team WHERE degree_id = '1'";
                $objQuery = mysqli_query($connect, $sql);
                while ($objResuut = mysqli_fetch_array($objQuery)) {
                ?>
                  <a class="dropdown-item" href="index_team.php?team_code=<?= $objResuut['team_code']; ?> "><?php echo $objResuut["team_code"] . " : " . $objResuut["team_name"]; ?></a>
                <?php
                }
                ?>

                <div class="dropdown-divider"></div>

                <div class="text-center"><b>ระดับหน่วยงาน</b></div>

                <?php
                $sql = "SELECT * FROM team WHERE degree_id = '2'";
                $objQuery = mysqli_query($connect, $sql);
                while ($objResuut = mysqli_fetch_array($objQuery)) {
                ?>
                  <a class="dropdown-item" href="index_team.php?team_code=<?= $objResuut['team_code']; ?> "><?php echo $objResuut["team_code"] . " : " . $objResuut["team_name"]; ?></a>
                <?php
                }
                ?>

              </div>
            </div>
          </div>

          <?php include('include/home_degree_2.php'); ?>

        </div>

        <script>
          window.onload = function() {

            <?php foreach ($g_id as $item) : ?>

              // grapht chart_<?php echo $item['id'] ?>

              var chart_<?php echo $item['id'] ?> = new CanvasJS.Chart("<?php echo $item['id'] ?>", {
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
                  dataPoints: <?php echo json_encode($item['data']); ?>
                }]
              });

              chart_<?php echo $item['id'] ?>.render();

            <?php endforeach; ?>

          }
        </script>


      </div>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Trainee Raiyan.J FTU 2019</span>
          </div>
        </div>
      </footer>

    </div>
  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/sb-admin-2.min.js"></script>

  <script src="js/canvasjs.min.js"></script>

  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

<script>
  //Filter list

  $(document).ready(function() {
    $("#listSearch").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myList li").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>