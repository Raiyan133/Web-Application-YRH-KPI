<?php
include('../include/db.php');
include('../include/username.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Manage Homepage</title>

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
          <form id="form1" name="form1" method="post" action="">
            <div class="row justify-content-center">
              <div class="col-xl-12 col-lg-14 col-md-9">



                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-secondary">กราฟตัวชี้วัดทั้งหมด</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered">




                        <thead>
                          <tr>
                            <th width="1">รหัส</th>
                            <th width="1">ชื่อตัวชี้วัด</th>
                            <th width="1">ความถี่</th>
                            <th width="1">ปี</th>
                            <th width="1">ระดับ</th>
                            <th width="1">ทีม</th>
                            <th width="1">ดูกราฟ</th>
                          </tr>
                          <thead>

                            <?php

                            $sql = "SELECT graph.graph_id, graph.indicator_id, graph.year, indicator.type, graph.status, indicator.indicator_name, indicator.team_code, degree.degree_name FROM graph JOIN indicator ON indicator.indicator_id=graph.indicator_id JOIN degree ON degree.id=indicator.degree";

                            $result = mysqli_query($connect, $sql);
                            while ($row = mysqli_fetch_array($result)) {

                              $indicator_id = $row["indicator_id"];
                              $indicator_name = $row["indicator_name"];
                              $type = $row["type"];
                              $year = $row["year"];
                              $degree_name = $row["degree_name"];
                              $team_code = $row["team_code"];
                              $status = $row['status'];


                            ?>

                          <tbody>
                            <tr>
                              <td><?php echo $row["indicator_id"]; ?></td>
                              <td><?php echo $row["indicator_name"]; ?></td>
                              <td><?php echo $row["type"]; ?></td>
                              <td><?php echo $row["year"]; ?></td>
                              <td><?php echo $row["degree_name"]; ?></td>
                              <td><?php echo $row["team_code"]; ?></td>
                              <td><button type="button" class="btn btn-info btn-user btn-block bg-gradient-info" data-toggle="modal" data-target="#modalmoreinfo" data-id="<?php echo $row['graph_id']; ?>" id="moreinfo">ดู</button></td>
                             

                  </div>
                  </tr>
                <?php } ?>
                </tbody>

                </table>
                <div class="modal fade" id="modalmoreinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
                            <div class="modal-dialog modal-lg" role="document" >
                                <div class="modal-content ">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">ข้อมูลเพิ่มเติม</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body" >
                                      <div id="modal-loader" style="text-align: center; display: none;">
                                          <img src="ajax-loader.gif">
                                      </div>
                                      <div id="dynamic-content">
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                    </div>
                                </div>
                            </div>
                          </div>

                </div>
              </div>
            </div>


        </div>
      </div>
      </form>
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



  <script> 
      /* View Function*/
      $(document).ready(function(){
        $(document).on('click', '#moreinfo', function(e){
          e.preventDefault();
          var graph = $(this).data('id');   // it will get id of clicked row
          $('#dynamic-content').html(''); // leave it blank before ajax call
          $('#modal-loader').show();      // load ajax loader
          $.ajax({
            url: 'moreinfo_edit.php',
            type: 'POST',
            data: 'id='+graph,
            dataType: 'html'
          })
          .done(function(data){
            console.log(data);  
            $('#dynamic-content').html('');    
            $('#dynamic-content').html(data); // load response 
            $('#modal-loader').hide();      // hide ajax loader 
          })
          .fail(function(){
            $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
            $('#modal-loader').hide();
          });
        });
      });
    </script>

</body>

</html>

