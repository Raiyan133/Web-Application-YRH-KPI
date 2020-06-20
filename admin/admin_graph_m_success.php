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
    $number5 = $row['number5'];
    $number6 = $row['number6'];
    $number7 = $row['number7'];
    $number8 = $row['number8'];
    $number9 = $row['number9'];
    $number10 = $row['number10'];
    $number11 = $row['number11'];
    $number12 = $row['number12'];
    $divisor1 = $row['divisor1'];
    $divisor2 = $row['divisor2'];
    $divisor3 = $row['divisor3'];
    $divisor4 = $row['divisor4'];
    $divisor5 = $row['divisor5'];
    $divisor6 = $row['divisor6'];
    $divisor7 = $row['divisor7'];
    $divisor8 = $row['divisor8'];
    $divisor9 = $row['divisor9'];
    $divisor10 = $row['divisor10'];
    $divisor11 = $row['divisor11'];
    $divisor12 = $row['divisor12'];
    $comment = $row['comment'];
    $username_post = $row['username_post'];
    $date = $row['date'];

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

    $dataPoints = array(
        array("label" => "ต.ค.", "y" => $result1),
        array("label" => "พ.ย.", "y" => $result2),
        array("label" => "ธ.ค.", "y" => $result3),
        array("label" => "ม.ค.", "y" => $result4),
        array("label" => "ก.พ.", "y" => $result5),
        array("label" => "มี.ค.", "y" => $result6),
        array("label" => "เม.ย.", "y" => $result7),
        array("label" => "พ.ค.", "y" => $result8),
        array("label" => "มิ.ย.", "y" => $result9),
        array("label" => "ก.ค.", "y" => $result10),
        array("label" => "ส.ค.", "y" => $result11),
        array("label" => "ก.ย.", "y" => $result12)

    );
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
                                                    <h1 class="h4 text-gray-900 mb-4">" บันทึกข้อมูลสำเร็จ "</h1>
                                                </div>

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








                                                <form class="form-group text-right" method="post" name="form1" action="">


                                                    <div class="row justify-content-center">
                                                        <div class="col-xl-3 col-md-6 mb-2">
                                                            <a href="../admin/admin_insert.php" class="btn btn-secondary btn-user btn-block bg-gray-900" style="width:100%">
                                                                <span class="text">สร้างกราฟตัวชี้วัดเพิ่ม</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6 mb-2">
                                                            <a href="#" class="btn btn-secondary btn-user btn-block bg-gray-900" style="width:100%;">
                                                                <span class="text">แก้ไขกราฟตัวชี้วัด</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6 mb-2">
                                                            <a href="../admin/admin_home.php" class="btn btn-secondary btn-user btn-block bg-gray-900" style="width:100%">
                                                                <span class="text">หน้าแรก</span>
                                                            </a>
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

    <script src="../js/canvasjs.min.js"></script>

</body>