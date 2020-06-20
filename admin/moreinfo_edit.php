<?php

include('../include/db.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT graph.*, indicator.* FROM graph, indicator WHERE indicator.indicator_id=graph.indicator_id AND graph_id = '" . $id . "'";
    $objQuery = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($objQuery)) {
        $indicator_id = $row['indicator_id'];
        $indicator_name = $row['indicator_name'];
        $number1 = $row['number1'];
        $number2 = $row['number2'];
        $number3 = $row['number3'];
        $number4 = $row['number4'];
        $divisor1 = $row['divisor1'];
        $divisor2 = $row['divisor2'];
        $divisor3 = $row['divisor3'];
        $divisor4 = $row['divisor4'];
        $comment = $row['comment'];
        $year = $row['year'];
        $date = $row['date'];
        $username_post = $row['username_post'];


        $result1 = $number1 * 100 / $divisor1;
        $result2 = $number2 * 100 / $divisor2;
        $result3 = $number3 * 100 / $divisor3;
        $result4 = $number4 * 100 / $divisor4;

        $dataPoints = array(
            array("label" => "ต.ค. - ธ.ค.", "y" => $result1),
            array("label" => "ม.ค. - มี.ค.", "y" => $result2),
            array("label" => "เม.ย. - มิ.ย.", "y" => $result3),
            array("label" => "ก.ค. - ก.ย.", "y" => $result4)

        );
    }
}
?>
<!DOCTYPE HTML>
<html>

<head>

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

<body>






    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-secondery"><?php echo $indicator_id; ?> : <?php echo $indicator_name; ?> ปี <?php echo $year; ?></h6>

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

    <form class="form-group text-right" method="post" name="form1" action="admin_insert_3m_edit.php">



        <div class="row justify-content-center">

            <div class="col-xl-3 col-md-6 mb-2">
                <a href="#" class="btn btn-warning btn-user btn-block bg-gradient-warning" style="width:100%;">
                    <span class="text">แก้ไขกราฟ</span>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 mb-2">
            <button class="btn btn-danger btn-user btn-block bg-gradient-danger" name="go" type="submit" value="">ลบกราฟ</button>
                
            </div>
        </div>





        <?php
                          if (isset($_POST['go'])) {

                            header("location:std_profile.php");
                              
                                // if ($type == "รายเดือน") {

                                // } else if ($type == "3 เดือน") {
                                    
                                // } else if ($type == "6 เดือน") {
                                    
                                // } else if ($type == "รายปี") {
                                    
                                // }
                            }
                                  
                              
?>



    </form>



</body>

</html>