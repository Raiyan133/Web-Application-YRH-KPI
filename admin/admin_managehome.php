<?php
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

          <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-14 col-md-9">

            <?php  
 
                $output = '';  
                $connect = mysqli_connect("localhost", "root", "", "YRH_KPI"); 
                $connect->query("set names utf8"); 


                


                    $sql = "SELECT * FROM indicator ORDER BY indicator_id ASC";

                            
                        if(mysqli_query($connect, $sql))  
                        {  
                                
                                $result = mysqli_query($connect, $sql);  
                                $output .= '  
                                
                                <div class="card shadow mb-4">
                                  <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-secondary">ข้อมูลตัวชี้วัดทั้งหมด</h6>
                                  </div>
                                      <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                            
                                            <thead>  
                                            <tr>  
                                                <th width="10%">รหัส</th>  
                                                <th width="15%">ชื่อตัวชี้วัด</th>
                                                <th width="15%">ตัวตั้ง</th>  
                                                <th width="15%">ตัวหาร</th> 
                                                <th width="10%">ความถี่</th> 
                                                <th width="5%">ระดับ</th>  
                                                <th width="5%">ทีม</th> 
                                                <th width="5%">ดู</th>  
                                                <th width="5%">เลือก</th>
                                            </tr>  
                                            <thead>
                                ';  
                                if(mysqli_num_rows($result) > 0)  
                                {  
                                    while($row = mysqli_fetch_array($result))  
                                    {  
                                        $output .= '  
                                            <tbody>
                                            <tr>  
                                                    <td>'.$row["indicator_id"].'</td>  
                                                    <td>'.$row["indicator_name"].'</td>
                                                    <td>'.$row["first_name"].'</td>  
                                                    <td>'.$row["last_name"].'</td> 
                                                    <td>'.$row["type"].'</td> 
                                                    <td>'.$row["degree"].'</td> 
                                                    <td>'.$row["team_code"].'</td> 
                                                    <td><button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-user btn-block bg-gradient-warning update" align="center">ดู</button></td> 
                                                    <td><div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="a">
                                                    <label class="custom-control-label" for="a"></label></td> 
                                                  </div>
                                            </tr>  
                                            </tbody>
                                        ';  
                                    }  
                                }  
                                else  
                                {  
                                    $output .= ' 
                                        <tbody> 
                                        <tr>  
                                            <td colspan="7">ไม่พบข้อมูล</td>  
                                        </tr>  
                                        </tbody>
                                    ';  
                                }  
                                $output .= '</table></div></div></div>
                                        
                                    
                                ';  
                                echo $output;  
                        }  
                        
                
              ?>





            </div>
          </div>
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

</body>

</html>




              


              
                  
                  



