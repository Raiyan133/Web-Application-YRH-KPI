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
        include('../admin/admin_include/admin_sidebar.php');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
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
                                                        <div class="col-sm-3">
                                                            <span class="h7 text-gray-900 mb-4 form-text">ตัวชี้วัด :</span>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select class="form-control" name="ind_code" id="ind_code">
                                                                <option value="" disabled selected>โปรดเลือกตัวชี้วัด</option>
                                                                <?php
                                                                $sql = "SELECT * FROM indicator";
                                                                $objQuery = mysqli_query($connect, $sql);
                                                                while ($objResuut = mysqli_fetch_array($objQuery)) {
                                                                ?>
                                                                    <option value="<?php echo $objResuut["indicator_code"]; ?>"><?php echo $objResuut["indicator_code"] . " : " . $objResuut["indicator_name"]; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form row">
                                                        <div class="col-sm-3">
                                                            <span class="h7 text-gray-900 mb-4 form-text">ความถี่ :</span>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select class="form-control" name="type" id="type">
                                                                <option value="" disabled selected>โปรดเลือกความถี่</option>
                                                                <option value="รายเดือน">รายเดือน</option>
                                                                <option value="3 เดือน">3 เดือน</option>
                                                                <option value="6 เดือน">6 เดือน</option>
                                                                <option value="รายปี">รายปี</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <button class="btn btn-secondary btn-user btn-block bg-gray-900" name="submit" type="submit" value="">เลือกปี</button>
                                                        </div>
                                                    </div>

                                                    <?php
                                                    if (isset($_POST['submit'])) {
                                                        if (!empty($_POST['ind_code']) && !empty($_POST['type'])) {

                                                            $ind_code = $_POST['ind_code'];
                                                            $type = $_POST['type'];

                                                            if ($type == "รายเดือน") {

                                                                $sql = "SELECT * FROM graph_m WHERE indicator='$ind_code'";
                                                                $result = mysqli_query($connect, $sql);

                                                                if (mysqli_num_rows($result) <= 1) {
                                                                    $message = "รหัสตัวชี้วัด" . " " . $_POST['ind_code'] . " " . "ไม่สามารถเปรียบเทียบได้ เนื่องจากมีเพียงกราฟเดียวเท่านั้น";
                                                                } else {

                                                                    $sql = "SELECT graph_m.indicator, indicator.indicator_name FROM graph_m, indicator WHERE indicator.indicator_code=graph_m.indicator AND indicator = '$ind_code'";
                                                                    $objQuery = mysqli_query($connect, $sql);
                                                                    $row = mysqli_fetch_array($objQuery);

                                                                    $_SESSION['ind_code'] = $ind_code;
                                                                    $_SESSION['ind_name'] = $row["indicator_name"];

                                                                    session_write_close();
                                                    ?>
                                                                    <script type="text/javascript">
                                                                        window.location = "admin_compare_m_2.php";
                                                                    </script>
                                                                <?php
                                                                }
                                                            } else if ($type == "3 เดือน") {

                                                                $sql = "SELECT * FROM graph_3m WHERE indicator='$ind_code'";
                                                                $result = mysqli_query($connect, $sql);

                                                                if (mysqli_num_rows($result) <= 1) {
                                                                    $message = "รหัสตัวชี้วัด" . " " . $_POST['ind_code'] . " " . "ไม่สามารถเปรียบเทียบได้ เนื่องจากมีเพียงกราฟเดียวเท่านั้น";
                                                                } else {
                                                                    $sql = "SELECT graph_3m.indicator, indicator.indicator_name FROM graph_3m, indicator WHERE indicator.indicator_code=graph_3m.indicator AND indicator = '$ind_code'";
                                                                    $objQuery = mysqli_query($connect, $sql);
                                                                    $row = mysqli_fetch_array($objQuery);

                                                                    $_SESSION['ind_code'] = $ind_code;
                                                                    $_SESSION['ind_name'] = $row["indicator_name"];

                                                                    session_write_close();
                                                                ?>
                                                                    <script type="text/javascript">
                                                                        window.location = "admin_compare_3m_2.php";
                                                                    </script>
                                                                <?php
                                                                }
                                                            } else if ($type == "6 เดือน") {

                                                                $sql = "SELECT * FROM graph_6m WHERE indicator='$ind_code'";
                                                                $result = mysqli_query($connect, $sql);

                                                                if (mysqli_num_rows($result) <= 1) {
                                                                    $message = "รหัสตัวชี้วัด" . " " . $_POST['ind_code'] . " " . "ไม่สามารถเปรียบเทียบได้ เนื่องจากมีเพียงกราฟเดียวเท่านั้น";
                                                                } else {
                                                                    $sql = "SELECT graph_6m.indicator, indicator.indicator_name FROM graph_6m, indicator WHERE indicator.indicator_code=graph_6m.indicator AND indicator = '$ind_code'";
                                                                    $objQuery = mysqli_query($connect, $sql);
                                                                    $row = mysqli_fetch_array($objQuery);

                                                                    $_SESSION['ind_code'] = $ind_code;
                                                                    $_SESSION['ind_name'] = $row["indicator_name"];

                                                                    session_write_close();
                                                                ?>
                                                                    <script type="text/javascript">
                                                                        window.location = "admin_compare_6m_2.php";
                                                                    </script>
                                                                <?php
                                                                }
                                                            } else if ($type == "รายปี") {

                                                                $sql = "SELECT * FROM graph_y WHERE indicator='$ind_code'";
                                                                $result = mysqli_query($connect, $sql);

                                                                if (mysqli_num_rows($result) <= 1) {
                                                                    $message = "รหัสตัวชี้วัด" . " " . $_POST['ind_code'] . " " . "ไม่สามารถเปรียบเทียบได้ เนื่องจากมีเพียงกราฟเดียวเท่านั้น";
                                                                } else {
                                                                    $sql = "SELECT graph_y.indicator, indicator.indicator_name FROM graph_y, indicator WHERE indicator.indicator_code=graph_y.indicator AND indicator = '$ind_code'";
                                                                    $objQuery = mysqli_query($connect, $sql);
                                                                    $row = mysqli_fetch_array($objQuery);

                                                                    $_SESSION['ind_code'] = $ind_code;
                                                                    $_SESSION['ind_name'] = $row["indicator_name"];

                                                                    session_write_close();
                                                                ?>
                                                                    <script type="text/javascript">
                                                                        window.location = "admin_compare_y_2.php";
                                                                    </script>
                                                    <?php
                                                                }
                                                            }
                                                        } else {
                                                            $message = "กรุณาเลือกข้อมูลให้ครบ";
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