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

  <title>Admin Insert Value</title>

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
                              <input class="form-control" name="year" id="year" type="text" value="">
                            </div>
                            <div class="col-sm-1">
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="go" type="submit" value="">go</button>
                            </div>
                          </div>

                            <?php 
                              if(isset($_POST['go'])){

                                if (!empty($_POST['id']) && !empty($_POST['year'])) {
                                  
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



                                    // ร า ย เ ดื อ น

                                    if($type== "รายเดือน") { 

                                      //include('../admin/admin_insert_m.php');


                                      //header("location:admin_insert_m.php.php");

                                      $sql = "SELECT * FROM indicator WHERE indicator_id = '".$_POST['id']."'";
                                  $objQuery = mysqli_query($connect, $sql);
                                  $row = mysqli_fetch_array($objQuery);
                                  


                                      $_SESSION['ind_id'] = $row["indicator_id"];
                                    $_SESSION['ind_name'] = $row["indicator_name"];
                                    $_SESSION['first_name'] = $row["first_name"];  
                                    $_SESSION['last_name'] = $row["last_name"];
                                    $_SESSION['type'] = $row["type"];
                                    $_SESSION['year'] = $_POST['year'];

                                    session_write_close();

                            ?>

<script type="text/javascript">
	window.location="admin_insert_m.php";
</script>



                                  <?php
                                  
                              
                                  // ร า ย 3 เ ดื อ น

                                    }else if($type == "3 เดือน"){
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
                                          <td align="center"><input class="form-control" name="number1" id="number1" type="text" style="width:100px"></td>
                                          <td align="center"><input class="form-control" name="number2" id="number2" type="text" style="width:100px"></td>
                                          <td align="center"><input class="form-control" name="number3" id="number3" type="text" style="width:100px"></td>
                                          <td align="center"><input class="form-control" name="number4" id="number4" type="text" style="width:100px"></td>
                                        </tr>
                                        <tr>
                                          <th>ตัวหาร</th>
                                          <td align="center"><input class="form-control" name="divisor1" id="divisor1" type="text" style="width:100px"></td>
                                          <td align="center"><input class="form-control" name="divisor2" id="divisor2" type="text" style="width:100px"></td>
                                          <td align="center"><input class="form-control" name="divisor3" id="divisor3" type="text" style="width:100px"></td>
                                          <td align="center"><input class="form-control" name="divisor4" id="divisor4" type="text" style="width:100px"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </form>
                                <div class="form row">
                                  <div class="col-sm-2">
                                    <span class="h7 text-gray-900 mb-4 form-text"></span>
                                  </div>
                                  <div class="col-sm-8">
                                    <span class="h7 text-gray-900 mb-4 form-text"></span>
                                    <button class="btn btn-secondary btn-user btn-block bg-gray-900" type="submit" name="submit_3m" id="submit_3m" value="">แสดงกราฟ</button>
                                  </div>                          
                                </div>


                                  <?php
                                  
                                  // ร า ย 6 เ ดื อ น
                                  
                                      }else if($type == "6 เดือน"){
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
                                          <td align="center"><input class="form-control" name="number1" id="number1" type="text" style="width:130px"></td>
                                          <td align="center"><input class="form-control" name="number2" id="number2" type="text" style="width:130px"></td>
                                        </tr>
                                        <tr>
                                          <th>ตัวหาร</th>
                                          <td align="center"><input class="form-control" name="divisor1" id="divisor1" type="text" style="width:130px"></td>
                                          <td align="center"><input class="form-control" name="divisor2" id="divisor2" type="text" style="width:130px"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </form>
                                <div class="form row">
                                  <div class="col-sm-2">
                                    <span class="h7 text-gray-900 mb-4 form-text"></span>
                                  </div>
                                  <div class="col-sm-8">
                                    <span class="h7 text-gray-900 mb-4 form-text"></span>
                                    <button class="btn btn-secondary btn-user btn-block bg-gray-900" type="submit" name="submit_6m" id="submit_6m" value="">แสดงกราฟ</button>
                                  </div>                          
                                </div>

                                  <?php
                                
                                  // ร า ย ปี

                                      }else if($type == "รายปี"){
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
                                          <td align="center"><input class="form-control" name="number1" id="number1" type="text" style="width:150px"></td>
                                        </tr>
                                          <th>ตัวหาร</th>
                                          <td align="center"><input class="form-control" name="divisor1" id="divisor1" type="text" style="width:150px"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </form>
                                <div class="form row">
                                  <div class="col-sm-2">
                                    <span class="h7 text-gray-900 mb-4 form-text"></span>
                                  </div>
                                  <div class="col-sm-8">
                                    <span class="h7 text-gray-900 mb-4 form-text"></span>
                                    <button class="btn btn-secondary btn-user btn-block bg-gray-900" type="submit" name="submit_y" id="submit_y" value="">แสดงกราฟ</button>
                                  </div>                          
                                </div>

                                  <?php
                                      }

                                      } else if (empty($_POST['id']) && empty($_POST['year'])) {
                                          $message = "กรุณาป้อนข้อมูลให้ครบและถูกต้อง";
                                      } else if (empty($_POST['id']) && !empty($_POST['year'])) {
                                          $message = "กรุณาป้อนข้อมูลให้ครบและถูกต้อง";
                                      } else if (!empty($_POST['id']) && empty($_POST['year'])) {
                                          $message = "กรุณาป้อนข้อมูลให้ครบและถูกต้อง";
                                      }
                                    }
                                  ?>

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


                        <?php 
                              if(isset($_POST['submit_m'])){

                                if (!empty($_POST['number1']) && !empty($_POST['number2']) && !empty($_POST['number3']) && !empty($_POST['number4'])
                                 && !empty($_POST['number5']) && !empty($_POST['number6']) && !empty($_POST['number7']) && !empty($_POST['number8']) 
                                 && !empty($_POST['number9']) && !empty($_POST['number10']) && !empty($_POST['number11']) && !empty($_POST['number12'])
                                 && !empty($_POST['divisor1']) && !empty($_POST['divisor2']) && !empty($_POST['divisor3']) && !empty($_POST['divisor4'])
                                 && !empty($_POST['divisor5']) && !empty($_POST['divisor6']) && !empty($_POST['divisor7']) && !empty($_POST['divisor8']) 
                                 && !empty($_POST['divisor9']) && !empty($_POST['divisor10']) && !empty($_POST['divisor11']) && !empty($_POST['divisor12']) ) {

                                  echo "kjdflkasjdvck;asjnd;kasndc;kas";
                                   
                                  $number1 = $_POST['number1'];
                                  $number2 = $_POST['number2'];
                                  $number3 = $_POST['number3'];
                                  $number4 = $_POST['number4'];
                                  $number5 = $_POST['number5'];
                                  $number6 = $_POST['number6'];
                                  $number7 = $_POST['number7'];
                                  $number8 = $_POST['number8'];
                                  $number9 = $_POST['number9'];
                                  $number10 = $_POST['number10'];
                                  $number11 = $_POST['number11'];
                                  $number12 = $_POST['number12'];

                                  $divisor1 = $_POST['divisor1'];
                                  $divisor2 = $_POST['divisor2'];
                                  $divisor3 = $_POST['divisor3'];
                                  $divisor4 = $_POST['divisor4'];
                                  $divisor5 = $_POST['divisor5'];
                                  $divisor6 = $_POST['divisor6'];
                                  $divisor7 = $_POST['divisor7'];
                                  $divisor8 = $_POST['divisor8'];
                                  $divisor9 = $_POST['divisor9'];
                                  $divisor10 = $_POST['divisor10'];
                                  $divisor11 = $_POST['divisor11'];
                                  $divisor12 = $_POST['divisor12'];

                                  $result1 = $number1 * 100 / $divisor1;
                                  $result2 = $number2 * 100 / $divisor2;
                                  $result3 = $number3 * 100 / $divisor3;
                                  $result4 = $number4 * 100 / $divisor4;
                                  $result5 = $number5 * 100 / $divisor5;
                                  $result6 = $number6 * 100 / $divisor6;
                                  $result7 = $number7 * 100 / $divisor7;
                                  $result8 = $number8 * 100 / $divisor8;
                                  $result9 = $number9 * 100 / $divisor9;
                                  $result10 = $number10 * 100 / $divisor10;
                                  $result11 = $number11 * 100 / $divisor11;
                                  $result12 = $number12 * 100 / $divisor12;

                                 }
                                }
                            ?>


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
