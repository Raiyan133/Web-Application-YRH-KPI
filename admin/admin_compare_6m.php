<?php
include('../include/db.php');
include('../include/username.php');

$graph_id_1 = $_SESSION['graph_id_1'];
$indicator_id_1 = $_SESSION['indicator_id_1'];
$indicator_name_1 = $_SESSION['indicator_name_1'];
$year_1 = $_SESSION['year_1'];
$type_1 = $_SESSION['type_1'];

$graph_id_2 = $_SESSION['graph_id_2'];
$indicator_id_2 = $_SESSION['indicator_id_2'];
$indicator_name_2 = $_SESSION['indicator_name_2'];
$year_2 = $_SESSION['year_2'];
$type_2 = $_SESSION['type_2'];

$sql = "SELECT * FROM graph WHERE graph_id = '" . $graph_id_1 . "'";
$objQuery = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($objQuery)) {
    $number1 = $row['number1'];
    $number2 = $row['number2'];
    $divisor1 = $row['divisor1'];
    $divisor2 = $row['divisor2'];
    $comment = $row['comment'];

    $result1 = $number1 * 100 / $divisor1;
    $result2 = $number2 * 100 / $divisor2;


    $dataPoints1 = array(
        array("label" => "ต.ค.", "y" => $result1),
        array("label" => "พ.ย.", "y" => $result2)

    );
}

$sql1 = "SELECT * FROM graph WHERE graph_id = '" . $graph_id_2 . "'";
$objQuery1 = mysqli_query($connect, $sql1);
while ($row = mysqli_fetch_array($objQuery1)) {
    $number1_1 = $row['number1'];
    $number2_1 = $row['number2'];
    $divisor1_1 = $row['divisor1'];
    $divisor2_1 = $row['divisor2'];
    $comment_1 = $row['comment'];

    $result1_1 = $number1_1 * 100 / $divisor1_1;
    $result2_1 = $number2_1 * 100 / $divisor2_1;


    $dataPoints2 = array(
        array("label" => "ต.ค.", "y" => $result1_1),
        array("label" => "พ.ย.", "y" => $result2_1)

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
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: ""
	},
	axisY: {
		includeZero: false,
	},
	legend:{
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	toolTip: {
		shared: true
	},
	data: [
	{
		type: "area",
		name: "กราฟที่ 1",
		showInLegend: "true",
		xValueType: "dateTime",
		xValueFormatString: "MMM YYYY",
		yValueFormatString: "#,##0.##",
		dataPoints: <?php echo json_encode($dataPoints1); ?>
	},
	{
		type: "area",
		name: "กราฟที่ 2",
		showInLegend: "true",
		xValueType: "dateTime",
		xValueFormatString: "MMM YYYY",
		yValueFormatString: "#,##0.##",
		dataPoints: <?php echo json_encode($dataPoints2); ?>
	}
	]
});
 
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
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
                                                    <h1 class="h4 text-gray-900 mb-4">เปรียบเทียบกราฟ</h1>
                                                </div>

                                                <form class="form-group text-right" method="post" name="form1" action="" onSubmit="JavaScript:return fncSubmit();">
                                                    <div class="form row">
                                                        <div class="col-sm-2">
                                                            <span class="h7 text-gray-900 mb-4 form-text"></span>

                                                        </div>
                                                    </div>
                                                    <div class="form row">
                                                        <div class="col-sm-2">
                                                            <span class="h7 text-gray-900 mb-4 form-text">กราฟที่ 1 :</span>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input class="form-control" type="text" value="<?php echo $indicator_id_1 . " : " . $indicator_name_1 . " ปี " . $year_1; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form row">
                                                        <div class="col-sm-2">
                                                            <span class="h7 text-gray-900 mb-4 form-text"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form row">
                                                        <div class="col-sm-2">
                                                            <span class="h7 text-gray-900 mb-4 form-text">กราฟที่ 2 :</span>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input class="form-control" type="text" value="<?php echo $indicator_id_2 . " : " . $indicator_name_2 . " ปี " . $year_2; ?>" readonly>
                                                        </div>

                                                    </div>
                                                    


                                                    <div class="form row">
                                                        <div class="col-sm-2">
                                                            <span class="h7 text-gray-900 mb-4 form-text"></span>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <span class="h7 text-gray-900 mb-4 form-text"></span>
                                                            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="form row">
                                  <div class="col-sm-2">
                                    <span class="h7 text-gray-900 mb-4 form-text"></span>
                                  </div>
                                </div>

                                <div class="card-body">
                                                                
                                                                <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟที่ 1</span></b>


                                                                <div class="card shadow mb-4">

                                                                    <div class="card-body text-left">

                                                                        <?php echo $comment; ?>
                                                                    </div>
                                                                </div>
                                                                <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟที่ 2</span></b>


                                                                <div class="card shadow mb-4">

                                                                    <div class="card-body text-left">

                                                                        <?php echo $comment_1; ?>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>

                                





                                <div class="form row">
                                  <div class="col-sm-2">
                                    <span class="h7 text-gray-900 mb-4 form-text"></span>
                                  </div>
                                </div>

                                                    <form class="form-group text-right" method="post" name="form1" action="">



                                                    <div class="row justify-content-center">
                                                        <div class="col-xl-3 col-md-6 mb-2">
                                                            <a href="../admin/admin_compare.php" class="btn btn-secondary btn-user btn-block bg-gray-900" style="width:100%">
                                                                <span class="text">เปรียบเทียบกราฟใหม่</span>
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

</html>