<?php
include('../include/db.php');
include('../include/username.php');

$graph_id_1 = $_SESSION['graph_id_1'];
$indicator_id_1 = $_SESSION['indicator_id_1'];
$indicator_name_1 = $_SESSION['indicator_name_1'];
$year_1 = $_SESSION['year_1'];
$type_1 = $_SESSION['type_1'];
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
                                                        <input class="form-control" name="select1" id="select1" type="hidden" value="<?php echo $graph_id_1; ?>">

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
                                                            <span class="h7 text-gray-900 mb-4 form-text">เลือกกราฟที่ 2 :</span>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" name="select" id="select">
                                                                <option value="" disabled selected>โปรดเลือก</option>
                                                                <?php
                                                                $sql = "SELECT graph.*, indicator.* FROM graph, indicator WHERE indicator.indicator_id=graph.indicator_id AND type = '" . $type_1 . "'";
                                                                $objQuery = mysqli_query($connect, $sql);
                                                                $objQuery = mysqli_query($connect, $sql);
                                                                while ($objResuut = mysqli_fetch_array($objQuery)) {
                                                                    $graph_id_2 = $objResuut["graph_id"];
                                                                    $indicator_id_2 = $objResuut["indicator_id"];
                                                                    $indicator_name_2 = $objResuut["indicator_name"];
                                                                    $year_2 = $objResuut["year"];
                                                                    $type_2 = $objResuut["type"];

                                                                ?>
                                                                    <option value="<?php echo $graph_id_2 ?>"><?php echo $indicator_id_2 . " : " . $indicator_name_2 . " ปี " . $year_2 ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="form row">
                                                        <div class="col-sm-2">
                                                            <span class="h7 text-gray-900 mb-4 form-text"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form row">
                                                        <div class="col-sm-2">
                                                            <span class="h7 text-gray-900 mb-4 form-text"></span>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <span class="h7 text-gray-900 mb-4 form-text"></span>
                                                            <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit" type="submit" value="">เปรียบเทียบกราฟ</button>


                                                        </div>
                                                    </div>










                                                    <?php
                                                    if (isset($_POST['submit'])) {
                                                        if (!empty($_POST['select'])) {
                                                            if ($_POST['select'] != $graph_id_1) {
                                                                $sql = "SELECT graph.*, indicator.* FROM graph, indicator WHERE indicator.indicator_id=graph.indicator_id AND graph_id = '" . $_POST['select'] . "'";
                                                                $objQuery = mysqli_query($connect, $sql);
                                                                while ($row = mysqli_fetch_array($objQuery)) {
                                                                    $_SESSION['graph_id_2'] = $row["graph_id"];
                                                                    $_SESSION['indicator_id_2'] = $row["indicator_id"];
                                                                    $_SESSION['indicator_name_2'] = $row["indicator_name"];
                                                                    $_SESSION['year_2'] = $row["year"];
                                                                    $_SESSION['type_2'] = $row["type"];
                                                                }

                                                                $type = $type_1;

                                                                
                                                                if ($type == "รายเดือน") {

                                                                    ?>

                                                                        <script type="text/javascript">
                                                                            window.location = "admin_compare_m.php";
                                                                        </script>



                                                    <?php

                                                                    



                                                                } else if ($type == "3 เดือน") {

                                                                    ?>

                                                                        <script type="text/javascript">
                                                                            window.location = "admin_compare_3m.php";
                                                                        </script>



                                                    <?php

                                                                    



                                                                } else if ($type == "6 เดือน") {

                                                                    ?>

                                                                        <script type="text/javascript">
                                                                            window.location = "admin_compare_6m.php";
                                                                        </script>



                                                    <?php

                                                                    



                                                                } else if ($type == "รายปี") {

                                                                    ?>

                                                                        <script type="text/javascript">
                                                                            window.location = "admin_compare_y.php";
                                                                        </script>



                                                    <?php

                                                                    



                                                                }

                                                    


















                                                            } else {
                                                                $message = "กราฟที่ 2 ซ้ำกับกราฟที่ 1";
                                                            }
                                                        } else {
                                                            $message = "กรุณาเลือกกราฟที่ 2";
                                                        }
                                                    }




                                                    ?>
                                                    <div class="form row">
                                                        <div class="col-sm-2">
                                                            <span class="h7 text-gray-900 mb-4 form-text"></span>
                                                        </div>
                                                    </div>

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