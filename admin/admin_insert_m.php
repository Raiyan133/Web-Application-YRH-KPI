<?php
include('../include/db.php');
include('../include/username.php');

$ind_id = $_SESSION["ind_id"];
$ind_name = $_SESSION["ind_name"];
$first_name = $_SESSION["first_name"];
$last_name = $_SESSION["last_name"];
$type = $_SESSION["type"];
$year = $_SESSION['year'];
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


                                                <form class="form-group text-right">
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
                                                                <th align="left">ชื่อตัวชี้วัด</th>
                                                                <td colspan="12" align="left"><?php echo $ind_name; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th align="left">ตัวตั้ง</th>
                                                                <td colspan="12" align="left"><?php echo $first_name; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th align="left">ตัวหาร</th>
                                                                <td colspan="12" align="left"><?php echo $last_name; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th align="left">ความถี่</th>
                                                                <td colspan="12" align="left">รายเดือน</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td align="center"></td>
                                                                <td colspan="12" align="center">ประจำปี พ.ศ. <?php echo $year; ?></td>
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
                                                                <td><input class="form-control" name="number1" id="number1" type="text"></td>
                                                                <td><input class="form-control" name="number2" id="number2" type="text"></td>
                                                                <td><input class="form-control" name="number3" id="number3" type="text"></td>
                                                                <td><input class="form-control" name="number4" id="number4" type="text"></td>
                                                                <td><input class="form-control" name="number5" id="number5" type="text"></td>
                                                                <td><input class="form-control" name="number6" id="number6" type="text"></td>
                                                                <td><input class="form-control" name="number7" id="number7" type="text"></td>
                                                                <td><input class="form-control" name="number8" id="number8" type="text"></td>
                                                                <td><input class="form-control" name="number9" id="number9" type="text"></td>
                                                                <td><input class="form-control" name="number10" id="number10" type="text"></td>
                                                                <td><input class="form-control" name="number11" id="number11" type="text"></td>
                                                                <td><input class="form-control" name="number12" id="number12" type="text"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>ตัวหาร</th>
                                                                <td><input class="form-control" name="divisor1" id="divisor1" type="text"></td>
                                                                <td><input class="form-control" name="divisor2" id="divisor2" type="text"></td>
                                                                <td><input class="form-control" name="divisor3" id="divisor3" type="text"></td>
                                                                <td><input class="form-control" name="divisor4" id="divisor4" type="text"></td>
                                                                <td><input class="form-control" name="divisor5" id="divisor5" type="text"></td>
                                                                <td><input class="form-control" name="divisor6" id="divisor6" type="text"></td>
                                                                <td><input class="form-control" name="divisor7" id="divisor7" type="text"></td>
                                                                <td><input class="form-control" name="divisor8" id="divisor8" type="text"></td>
                                                                <td><input class="form-control" name="divisor9" id="divisor9" type="text"></td>
                                                                <td><input class="form-control" name="divisor10" id="divisor10" type="text"></td>
                                                                <td><input class="form-control" name="divisor11" id="divisor11" type="text"></td>
                                                                <td><input class="form-control" name="divisor12" id="divisor12" type="text"></td>
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
                                                        <input type="hidden" name="id" id="num_id" />
                                                        <input type="text" name="indicator_id" id="indicator_id" value="<?php echo $ind_id; ?>" />
                                                        <input type="text" name="indicator_name" id="indicator_name" value="<?php echo $ind_name; ?>" />
                                                        <input type="text" name="year" id="year" value="<?php echo $year; ?>" />
                                                        <button class="btn btn-secondary btn-user btn-block bg-gray-900" type="button" name="admin_insert_m_action" id="admin_insert_m_action"></button>
                                                        <div id="result" style="padding-top: 50px; width: 100%" align="center"></div>

                                                    </div>
                                                </div>





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










<script>

    var ind_id = "<?php echo $ind_id ?>"
    var ind_name = "<?php echo $ind_name ?>"
    var year = <?php echo $year ?>;

    $(document).ready(function() {
        fetch_m();

        function fetch_m() {
            var admin_insert_m_action = "admin_insert_m_select";
            $.ajax({
                url: "admin_insert_m_select.php", 
                method: "POST",
                data: {
                    admin_insert_m_action: admin_insert_m_action
                    
                },
                success: function(data) {
                    $('#indicator_id').val('');
                    $('#indicator_name').val('');
                    $('#year').val('');
                    $('#number1').val('');
                    $('#number2').val('');
                    $('#number3').val('');
                    $('#number4').val('');
                    $('#number5').val('');
                    $('#number6').val('');
                    $('#number7').val('');
                    $('#number8').val('');
                    $('#number9').val('');
                    $('#number10').val('');
                    $('#number11').val('');
                    $('#number12').val('');
                    $('#divisor1').val('');
                    $('#divisor2').val('');
                    $('#divisor3').val('');
                    $('#divisor4').val('');
                    $('#divisor5').val('');
                    $('#divisor6').val('');
                    $('#divisor7').val('');
                    $('#divisor8').val('');
                    $('#divisor9').val('');
                    $('#divisor10').val('');
                    $('#divisor11').val('');
                    $('#divisor12').val('');
                    $('#admin_insert_m_action').text('บันทึก');
                    $('#result').html(data);
                }
            });
        }
        $('#admin_insert_m_action').click(function() {
            var ind_id = $('#indicator_id').val();
            var Name = $('#indicator_name').val();
            var year = $('#year').val();
            var number1 = $('#number1').val();
            var number2 = $('#number2').val();
            var number3 = $('#number3').val();
            var number4 = $('#number4').val();
            var number5 = $('#number5').val();
            var number6 = $('#number6').val();
            var number7 = $('#number7').val();
            var number8 = $('#number8').val();
            var number9 = $('#number9').val();
            var number10 = $('#number10').val();
            var number11 = $('#number11').val();
            var number12 = $('#number12').val();
            var divisor1 = $('#divisor1').val();
            var divisor2 = $('#divisor2').val();
            var divisor3 = $('#divisor3').val();
            var divisor4 = $('#divisor4').val();
            var divisor5 = $('#divisor5').val();
            var divisor6 = $('#divisor6').val();
            var divisor7 = $('#divisor7').val();
            var divisor8 = $('#divisor8').val();
            var divisor9 = $('#divisor9').val();
            var divisor10 = $('#divisor10').val();
            var divisor11 = $('#divisor11').val();
            var divisor12 = $('#divisor12').val();
            var id = $('#num_id').val();
            var admin_insert_m_action = $('#admin_insert_m_action').text();
            if (ind_id != '' && Name != '' && year != '' &&
                number1 != '' && number2 != '' && number3 != '' && number4 != '' && number5 != '' && number6 != '' &&
                number7 != '' && number8 != '' && number9 != '' && number10 != '' && number11 != '' && number12 != '' &&
                divisor1 != '' && divisor2 != '' && divisor3 != '' && divisor4 != '' && divisor5 != '' && divisor6 != '' &&
                divisor7 != '' && divisor8 != '' && divisor9 != '' && divisor10 != '' && divisor11 != '' && divisor12 != '') {
                $.ajax({
                    url: "admin_insert_m_action.php",
                    method: "POST",
                    data: {
                        ind_id: ind_id,
                        Name: Name,
                        year: year,
                        number1: number1,
                        number2: number2,
                        number3: number3,
                        number4: number4,
                        number5: number5,
                        number6: number6,
                        number7: number7,
                        number8: number8, 
                        number9: number9,
                        number10: number10,
                        number11: number11,
                        number12: number12,
                        divisor1: divisor1,
                        divisor2: divisor2,
                        divisor3: divisor3,
                        divisor4: divisor4,
                        divisor5: divisor5,
                        divisor6: divisor6,
                        divisor7: divisor7,
                        divisor8: divisor8,
                        divisor9: divisor9,
                        divisor10: divisor10,
                        divisor11: divisor11,
                        divisor12: divisor12,
                        id: id,
                        admin_insert_m_action: admin_insert_m_action
                    },
                    success: function(data) {
                        alert(data);
                        fetch_m();
                    }
                });

            } else {
                alert("กรุณาป้อนข้อมูลให้ครบทุกช่อง");
            }
        });
        $(document).on('click', '.update', function() {
            var id = $(this).attr("id");
            $.ajax({
                url: "admin_insert_m_fetch.php",
                method: "POST",
                data: {
                    id: id
                },
                dataType: "json",
                success: function(data) {
                    $('#admin_insert_m_action').text("บันทึกการแก้ไข");
                    $('#num_id').val(id);
                    $('#indicator_id').val(data.indicator_id);
                    $('#indicator_name').val(data.indicator_name);
                    $('#year').val(data.year);
                    $('#number1').val(data.number1);
                    $('#number2').val(data.number2);
                    $('#number3').val(data.number3);
                    $('#number4').val(data.number4);
                    $('#number5').val(data.number5);
                    $('#number6').val(data.number6);
                    $('#number7').val(data.number7);
                    $('#number8').val(data.number8);
                    $('#number9').val(data.number9);
                    $('#number10').val(data.number10);
                    $('#number11').val(data.number11);
                    $('#number12').val(data.number12);
                    $('#divisor1').val(data.divisor1);
                    $('#divisor2').val(data.divisor2);
                    $('#divisor3').val(data.divisor3);
                    $('#divisor4').val(data.divisor4);
                    $('#divisor5').val(data.divisor5);
                    $('#divisor6').val(data.divisor6);
                    $('#divisor7').val(data.divisor7);
                    $('#divisor8').val(data.divisor8);
                    $('#divisor9').val(data.divisor9);
                    $('#divisor10').val(data.divisor10);
                    $('#divisor11').val(data.divisor11);
                    $('#divisor12').val(data.divisor12);
                }
            })
        });
        $(document).on('click', '.delete', function() {
            var id = $(this).attr("id");
            if (confirm("คุณแน่ใจว่าต้องการลบหรือไม่ ?")) {
                var admin_insert_m_action = "ลบ";
                $.ajax({
                    url: "admin_insert_m_action.php",
                    method: "POST",
                    data: {
                        id: id,
                        admin_insert_m_action: admin_insert_m_action
                    },
                    success: function(data) {
                        fetch_m();
                        alert(data);
                    }
                })
            } else {
                return false;
            }
        });
    });
</script>


</html>