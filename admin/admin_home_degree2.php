<?php
include('../include/username.php');
include('../include/db.php');
$g_id = [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>หน้าแรก</title>
  <?php include('../include/head.php'); ?>
</head>

<body id="page-top">
  <div id="wrapper">
    <?php include('../admin/admin_include/admin_sidebar.php'); ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php include('../include/topbar.php'); ?>

        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="admin_home.php" class="btn btn-secondary btn-icon-split align-items-center" style="width:190px">
                <span class="text">ตัวชี้วัดทั้งหมด</span>
              </a>
            </div>
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="admin_home_degree1.php" class="btn btn-secondary btn-icon-split align-items-center" style="width:190px">
                <span class="text">ตัวชี้วัดระดับโรงพยาบาล</span>
              </a>
            </div>
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="admin_home_degree2.php" class="btn btn-secondary btn-icon-split align-items-center bg-gray-900" style="width:190px">
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
                  <a class="dropdown-item" href="admin_home_team.php?team_code=<?= $objResuut['team_code']; ?> "><?php echo $objResuut["team_code"] . " : " . $objResuut["team_name"]; ?></a>
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
                  <a class="dropdown-item" href="admin_home_team.php?team_code=<?= $objResuut['team_code']; ?> "><?php echo $objResuut["team_code"] . " : " . $objResuut["team_name"]; ?></a>
                <?php
                }
                ?>

              </div>
            </div>
          </div>
          <?php include('../include/home_degree_2.php'); ?>
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
      </div>
      <?php include('../include/footer.php'); ?>
    </div>
  </div>
  <?php include('../include/script.php'); ?>

</body>

</html>