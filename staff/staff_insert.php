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

  <title>Staff Insert Value</title>

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
      include('../staff/staff_include/staff_sidebar.php');
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
            <div class="col-xl-12 col-lg-14 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 bg-gray-500">
                  <!-- Nested Row within Card Body -->
                  <div class="row">                   
                    <div class="col-lg-12">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">ป้อนข้อมูลตัวชี้วัด เพื่อแสดงผลกราฟ</h1>
                        </div>

                        <form class="form-group text-right" method="post" name="form1" action="" onSubmit="JavaScript:return fncSubmit();">
                       
                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">รหัสตัวชี้วัด :</span>
                            </div>
                            <div class="col-sm-5">
                              <select class="form-control" name="id" id="id">
                                <option value="" disabled selected>โปรดเลือก</option>
                                  <?php
                                    $sql = "SELECT * FROM indicator ORDER BY indicator_id ASC";
                                    $objQuery = mysqli_query($connect, $sql);
                                      while($objResuut = mysqli_fetch_array($objQuery))
                                      {
                                  ?>
                                <option value="<?php echo $objResuut["indicator_id"];?>"><?php echo $objResuut["indicator_id"]." - ".$objResuut["indicator_name"];?></option>
                                  <?php
                                      }
                                  ?>
                              </select>
                            </div>
                            <div class="col-sm-1">
                              <span class="h7 text-gray-900 mb-4 form-text">ปี พ.ศ. </span>
                            </div>
                            <div class="col-sm-2">
                              <input class="form-control" name="year" id="year" type="text" value="2562">
                            </div>
                            <div class="col-sm-1">
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit" type="submit" value="submit">go</button>
                            </div>
                          </div>









                            <?php 
                              if (isset($_POST['submit'])) {
                                  
                                  $sql = "SELECT * FROM indicator WHERE indicator_id = '".$_POST['id']."'";
                                  $objQuery = mysqli_query($connect, $sql);
                                while($row = mysqli_fetch_array($objQuery))
                                {
                                    $ind_id = $row["indicator_id"];
                                    $ind_name = $row["indicator_name"];
                                    $first_name = $row["first_name"];  
                                    $last_name = $row["last_name"];
                                    $type = $row["type"];
                                  }
                                    $year = $_POST['year'];

                                    if($type== "รายเดือน") { 
                            ?>
                                  <form>
                                    <table class="table table-borderless text-gray-800">
                                      <thead>
                                        <tr>
                                          <th></th>
                                        </tr>                                        <tr>
                                          <th style="width: 100px" align="left">รหัส</th>
                                          <td colspan="12" align="left"><?php echo $ind_id;?></td>
                                        </tr>
                                        <tr>
                                          <th align="left">ชื่อตัวชี้วัด</th>
                                          <td colspan="12" align="left"><?php echo $ind_name;?></td>
                                        </tr>
                                        <tr>
                                          <th align="left">ตัวตั้ง</th>
                                          <td colspan="12" align="left"><?php echo $first_name;?></td>
                                        </tr>
                                        <tr>
                                          <th align="left">ตัวหาร</th>
                                          <td colspan="12" align="left"><?php echo $last_name;?></td>
                                        </tr>
                                        <tr>
                                          <th align="left">ความถี่</th>
                                          <td colspan="12" align="left">รายเดือน</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td align="center"></td>
                                          <td colspan="12" align="center">ประจำปี พ.ศ. <?php echo $year;?></td>
                                        </tr>
                                        <tr>
                                          <td></td>
                                          <td align="center">ต.ค.</td>
                                          <td align="center">พ.ย.</td>
                                          <td align="center">ธ.ค.</td>
                                          <td align="center">ม.ค.</td>
                                          <td align="center">ก.พ.</td>
                                          <td align="center">มี.ค.</td>
                                          <td align="center">เม.ย.</td>
                                          <td align="center">พ.ค.</td>
                                          <td align="center">มิ.ย.</td>
                                          <td align="center">ก.ค.</td>
                                          <td align="center">ส.ค.</td>
                                          <td align="center">ก.ย.</td>
                                        </tr>
                                        <tr>
                                          <th>ตัวตั้ง</th>
                                          <td><input class="form-control" name="1first" id="1first" type="text"></td>
                                          <td><input class="form-control" name="2first" id="2first" type="text"></td>
                                          <td><input class="form-control" name="3first" id="3first" type="text"></td>
                                          <td><input class="form-control" name="4first" id="4first" type="text"></td>
                                          <td><input class="form-control" name="5first" id="5first" type="text"></td>
                                          <td><input class="form-control" name="6first" id="6first" type="text"></td>
                                          <td><input class="form-control" name="7first" id="7first" type="text"></td>
                                          <td><input class="form-control" name="8first" id="8first" type="text"></td>
                                          <td><input class="form-control" name="9first" id="9first" type="text"></td>
                                          <td><input class="form-control" name="10first" id="10first" type="text"></td>
                                          <td><input class="form-control" name="11first" id="11first" type="text"></td>
                                          <td><input class="form-control" name="12first" id="12first" type="text"></td>
                                        </tr>
                                        <tr>
                                          <th>ตัวหาร</th>
                                          <td><input class="form-control" name="1last" id="1last" type="text"></td>
                                          <td><input class="form-control" name="2last" id="2last" type="text"></td>
                                          <td><input class="form-control" name="3last" id="3last" type="text"></td>
                                          <td><input class="form-control" name="4last" id="4last" type="text"></td>
                                          <td><input class="form-control" name="5last" id="5last" type="text"></td>
                                          <td><input class="form-control" name="6last" id="6last" type="text"></td>
                                          <td><input class="form-control" name="7last" id="7last" type="text"></td>
                                          <td><input class="form-control" name="8last" id="8last" type="text"></td>
                                          <td><input class="form-control" name="9last" id="9last" type="text"></td>
                                          <td><input class="form-control" name="10last" id="10last" type="text"></td>
                                          <td><input class="form-control" name="11last" id="11last" type="text"></td>
                                          <td><input class="form-control" name="12last" id="12last" type="text"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </form> 

                                  <?php
                                    }if ($type == "3 เดือน"){
                                  ?>

                                  <form>
                                    <table class="table table-borderless text-gray-800">
                                      <thead>
                                        <tr>
                                          <th></th>
                                        </tr>                                        <tr>
                                          <th style="width: 100px" align="left">รหัส</th>
                                          <td colspan="12" align="left"><?php echo $ind_id;?></td>
                                        </tr>
                                        <tr>
                                          <th>ชื่อตัวชี้วัด</th>
                                          <td colspan="12" align="left"><?php echo $ind_name;?></td>
                                        </tr>
                                        <tr>
                                          <th>ตัวตั้ง</th>
                                          <td colspan="12" align="left"><?php echo $first_name;?></td>
                                        </tr>
                                        <tr>
                                          <th>ตัวหาร</th>
                                          <td colspan="12" align="left"><?php echo $last_name;?></td>
                                        </tr>
                                        <tr>
                                          <th>ความถี่</th>
                                          <td colspan="12" align="left">3 เดือน</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td align="center"></td>
                                          <td colspan="12" align="center">ประจำปี พ.ศ. <?php echo $year;?></td>
                                        </tr>
                                        <tr>
                                          <th></th>
                                          <td align="center">ต.ค. - ธ.ค.</td>
                                          <td align="center">ม.ค. - มี.ค.</td>
                                          <td align="center">เม.ย. - มิ.ย.</td>
                                          <td align="center">ก.ค. - ก.ย.</td>
                                        </tr>
                                        <tr>
                                          <th>ตัวตั้ง</th>
                                          <td align="center"><input class="form-control" name="1first" id="1first" type="text" style="width:100px"></td>
                                          <td align="center"><input class="form-control" name="2first" id="2first" type="text" style="width:100px"></td>
                                          <td align="center"><input class="form-control" name="3first" id="3first" type="text" style="width:100px"></td>
                                          <td align="center"><input class="form-control" name="4first" id="4first" type="text" style="width:100px"></td>
                                        </tr>
                                        <tr>
                                          <th>ตัวหาร</th>
                                          <td align="center"><input class="form-control" name="1last" id="1last" type="text" style="width:100px"></td>
                                          <td align="center"><input class="form-control" name="2last" id="2last" type="text" style="width:100px"></td>
                                          <td align="center"><input class="form-control" name="3last" id="3last" type="text" style="width:100px"></td>
                                          <td align="center"><input class="form-control" name="4last" id="4last" type="text" style="width:100px"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </form>

                                  <?php
                                      }if ($type == "6 เดือน"){
                                  ?>

                                  <form>
                                    <table class="table table-borderless text-gray-800">
                                      <thead>
                                        <tr>
                                          <th></th>
                                        </tr>                                        <tr>
                                          <th style="width: 100px" align="left">รหัส</th>
                                          <td colspan="12" align="left"><?php echo $ind_id;?></td>
                                        </tr>
                                        <tr>
                                          <th>ชื่อตัวชี้วัด</th>
                                          <td colspan="12" align="left"><?php echo $ind_name;?></td>
                                        </tr>
                                        <tr>
                                          <th>ตัวตั้ง</th>
                                          <td colspan="12" align="left"><?php echo $first_name;?></td>
                                        </tr>
                                        <tr>
                                          <th>ตัวหาร</th>
                                          <td colspan="12" align="left"><?php echo $last_name;?></td>
                                        </tr>
                                        <tr>
                                          <th>ความถี่</th>
                                          <td colspan="12" align="left">6 เดือน</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td align="center"></td>
                                          <td colspan="12" align="center">ประจำปี พ.ศ. <?php echo $year;?></td>
                                        </tr>
                                        <tr>
                                          <th></th>
                                          <td align="center">ตุลาคม - มีนาคม</td>
                                          <td align="center">เมษายน - กันยายน</td>
                                        </tr>
                                        <tr>
                                          <th>ตัวตั้ง</th>
                                          <td align="center"><input class="form-control" name="1first" id="1first" type="text" style="width:130px"></td>
                                          <td align="center"><input class="form-control" name="2first" id="2first" type="text" style="width:130px"></td>
                                        </tr>
                                        <tr>
                                          <th>ตัวหาร</th>
                                          <td align="center"><input class="form-control" name="1last" id="1last" type="text" style="width:130px"></td>
                                          <td align="center"><input class="form-control" name="2last" id="2last" type="text" style="width:130px"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </form>

                                  <?php
                                      }if ($type == "รายปี"){
                                  ?>

                                  <form>
                                    <table class="table table-borderless text-gray-800">
                                      <thead>
                                        <tr>
                                          <th></th>
                                        </tr>
                                        <tr>
                                          <th style="width: 100px" align="left">รหัส</th>
                                          <td colspan="12" align="left"><?php echo $ind_id;?></td>
                                        </tr>
                                        <tr>
                                          <th>ชื่อตัวชี้วัด</th>
                                          <td colspan="12" align="left"><?php echo $ind_name;?></td>
                                        </tr>
                                        <tr>
                                          <th>ตัวตั้ง</th>
                                          <td colspan="12" align="left"><?php echo $first_name;?></td>
                                        </tr>
                                        <tr>
                                          <th>ตัวหาร</th>
                                          <td colspan="12" align="left"><?php echo $last_name;?></td>
                                        </tr>
                                        <tr>
                                          <th>ความถี่</th>
                                          <td colspan="12" align="left">รายปี</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td align="center"></td>
                                          <td colspan="12" align="center">ประจำปี พ.ศ. <?php echo $year;?></td>
                                        </tr>
                                        <tr>
                                          <th>ตัวตั้ง</th>
                                          <td align="center"><input class="form-control" name="1first" id="1first" type="text" style="width:150px"></td>
                                        </tr>
                                          <th>ตัวหาร</th>
                                          <td align="center"><input class="form-control" name="1last" id="1last" type="text" style="width:150px"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </form>

                                  <?php
                                      }
                                    }
                                  ?>









                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-8">
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" type="button" name="" id="" value="แสดงกราฟ"></button>
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
