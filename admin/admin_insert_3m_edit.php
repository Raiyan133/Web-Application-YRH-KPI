<?php
include('../include/db.php');
include('../include/username.php');

$id = $_SESSION["id"];
$ind_id = $_SESSION["ind_id"];
$ind_name = $_SESSION["ind_name"];
$first_name = $_SESSION["first_name"];
$last_name = $_SESSION["last_name"];
$type = $_SESSION["type"];
$year = $_SESSION['year'];


$sql = "SELECT * FROM graph WHERE graph_id = '" . $id . "'";
$objQuery = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($objQuery)) {
    $number1 = $row['number1'];
    $number2 = $row['number2'];
    $number3 = $row['number3'];
    $number4 = $row['number4'];
    $divisor1 = $row['divisor1'];
    $divisor2 = $row['divisor2'];
    $divisor3 = $row['divisor3'];
    $divisor4 = $row['divisor4'];
}
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

                                                <form class="form-group text-right" method="post" name="form1" action="">


                                                    <?php

                                                    if (isset($_POST['submit'])) {

                                                        $id = $_POST['id'];
                                                        $ind_id = $_SESSION["ind_id"];
                                                        $year = $_SESSION['year'];
                                                        $number1 = $_POST['number1'];
                                                        $number2 = $_POST['number2'];
                                                        $number3 = $_POST['number3'];
                                                        $number4 = $_POST['number4'];
                                                        $divisor1 = $_POST['divisor1'];
                                                        $divisor2 = $_POST['divisor2'];
                                                        $divisor3 = $_POST['divisor3'];
                                                        $divisor4 = $_POST['divisor4'];


                                                        if (
                                                            $number1 != '' && $number2 != '' && $number3 != '' && $number4 != ''
                                                            && $divisor1 != '' && $divisor2 != '' && $divisor3 != '' && $divisor4 != ''
                                                        ) {

                                                            if (
                                                                is_numeric($number1) && is_numeric($number2) && is_numeric($number3) && is_numeric($number4)
                                                                && is_numeric($divisor1) && is_numeric($divisor2) && is_numeric($divisor3) && is_numeric($divisor4)
                                                            ) {



                                                                if ($divisor1 == '0' || $divisor2 == '0' || $divisor3 == '0' || $divisor4 == '0') {
                                                                    $message = "ตัวหารต้องไม่เท่ากับ 0";
                                                                } else {

                                                                    $sql = "UPDATE graph SET number1='$number1', number2='$number2', number3='$number3', number4='$number4', 
                                                                                            divisor1='$divisor1', divisor2='$divisor2', divisor3='$divisor3', divisor4='$divisor4'  
                                                                        WHERE graph_id='$id'";

                                                                    if ($connect->query($sql) === TRUE) {
                                                                        // echo "New record created successfully";
                                                                        // header("Location:admin_graph_3m.php");
                                                                        $_SESSION['id'] = $id;


                                                    ?>

                                                                        <script type="text/javascript">
                                                                            window.location = "admin_graph_3m.php";
                                                                        </script>



                                                    <?php
                                                                    } else {
                                                                        echo "Error: " . $sql . "<br>" . $connect->error;
                                                                    }

                                                                    $connect->close();
                                                                }
                                                            } else if (
                                                                !is_numeric($number1) || !is_numeric($number2) || !is_numeric($number3) || !is_numeric($number4)
                                                                || !is_numeric($divisor1) || !is_numeric($divisor2) || !is_numeric($divisor3) || !is_numeric($divisor4)
                                                            ) {
                                                                $message = "กรุณาป้อนข้อมูลตัวเลขเท่านั้น";
                                                            }
                                                        } else if (
                                                            empty($number1) || empty($number2) || empty($number3) || empty($number4)
                                                            || empty($divisor1) || empty($divisor2) || empty($divisor3) || empty($divisor4)
                                                        ) {
                                                            $message = "กรุณาป้อนข้อมูลให้ครบทุกช่อง";
                                                        }
                                                    }

                                                    ?>



                                                    <div class="form row">
                                                        <div class="col-sm-2">
                                                            <span class="h7 text-gray-900 mb-4 form-text"></span>
                                                        </div>
                                                        <div class="col-sm-8" align="center">
                                                            <?php
                                                            if (!empty($message)) {
                                                                echo "<span style=\"color:red\">$message</span>";
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>



                                                    <table class="table table-borderless text-gray-800">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="width: 100px" align="left">รหัส</th>
                                                                <td colspan="12" align="left"><?php echo $ind_id; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>ชื่อตัวชี้วัด</th>
                                                                <td colspan="12" align="left"><?php echo $ind_name; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>ตัวตั้ง</th>
                                                                <td colspan="12" align="left"><?php echo $first_name; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>ตัวหาร</th>
                                                                <td colspan="12" align="left"><?php echo $last_name; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>ความถี่</th>
                                                                <td colspan="12" align="left">3 เดือน</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td align="center"></td>
                                                                <td colspan="12" align="center">ประจำปี พ.ศ. <?php echo $year; ?></td>
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
                                                                <td align="center"><input class="form-control" name="number1" id="number1" type="text" value="<?php echo $number1; ?>" style="width:100px"></td>
                                                                <td align="center"><input class="form-control" name="number2" id="number2" type="text" value="<?php echo $number2; ?>" style="width:100px"></td>
                                                                <td align="center"><input class="form-control" name="number3" id="number3" type="text" value="<?php echo $number3; ?>" style="width:100px"></td>
                                                                <td align="center"><input class="form-control" name="number4" id="number4" type="text" value="<?php echo $number4; ?>" style="width:100px"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>ตัวหาร</th>
                                                                <td align="center"><input class="form-control" name="divisor1" id="divisor1" type="text" value="<?php echo $divisor1; ?>" style="width:100px"></td>
                                                                <td align="center"><input class="form-control" name="divisor2" id="divisor2" type="text" value="<?php echo $divisor2; ?>" style="width:100px"></td>
                                                                <td align="center"><input class="form-control" name="divisor3" id="divisor3" type="text" value="<?php echo $divisor3; ?>" style="width:100px"></td>
                                                                <td align="center"><input class="form-control" name="divisor4" id="divisor4" type="text" value="<?php echo $divisor4; ?>" style="width:100px"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="form row">
                                                        <div class="col-sm-2">
                                                            <span class="h7 text-gray-900 mb-4 form-text"></span>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <span class="h7 text-gray-900 mb-4 form-text"></span>
                                                            <input type="hidden" name="id" id="id" value="<?php echo $ind_id . $year; ?>" />
                                                            <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit" type="submit" value="">แสดงกราฟ</button>
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