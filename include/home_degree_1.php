<div class="row justify-content-center">
  <div class="col-xl-8 col-md-6 mb-4">
    <input class="form-control" id="listSearch" type="text" placeholder="ค้นหา...">
  </div>
</div>

<ul class="list-group" id="myList">

  <?php
  $sql = "SELECT graph_m.*, indicator.* 
          FROM graph_m, indicator 
          WHERE indicator.indicator_code=graph_m.indicator 
          AND degree = '1'
          AND status = '1'";

  $objQuery = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($objQuery)) {

    $graph_id = $row['graph_m_id'];
    $ind_id = $row['indicator_code'];
    $ind_name = $row['indicator_name'];
    $comment = $row['comment'];
    $user_post = $row['user_post'];
    $date = $row['date'];
    $year = $row['year'];
    $status = $row['status'];

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

    array_push($g_id, [
      'id' => $graph_id,
      'data' => $dataPoints
    ]);
  ?>
    <li class="list-group">
      <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-secondery"><?php echo $ind_id; ?> : <?php echo $ind_name; ?> ปี <?php echo $year; ?></h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <div id="<?php echo $graph_id ?>" style="height: 300px; width: 100%;"></div>
              </div>
              <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟ</span></b>
              <div class="card shadow mb-4">
                <div class="card-body">
                  <?php echo $comment; ?>
                </div>
              </div>
              <div class="small text-center">
                <span>บันทึกข้อมูล : <?php echo $date; ?> โดย <?php echo $user_post; ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  <?php } ?>

  <?php
  $sql = "SELECT graph_3m.*, indicator.* 
          FROM graph_3m, indicator 
          WHERE indicator.indicator_code=graph_3m.indicator 
          AND degree = '1'
          AND status = '1'";

  $objQuery = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($objQuery)) {

    $graph_id = $row['graph_3m_id'];
    $ind_id = $row['indicator_code'];
    $ind_name = $row['indicator_name'];
    $comment = $row['comment'];
    $user_post = $row['user_post'];
    $date = $row['date'];
    $year = $row['year'];
    $status = $row['status'];

    $number1 = $row['number1'];
    $number2 = $row['number2'];
    $number3 = $row['number3'];
    $number4 = $row['number4'];
    $divisor1 = $row['divisor1'];
    $divisor2 = $row['divisor2'];
    $divisor3 = $row['divisor3'];
    $divisor4 = $row['divisor4'];

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

    array_push($g_id, [
      'id' => $graph_id,
      'data' => $dataPoints
    ]);
  ?>
    <li class="list-group">
      <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-secondery"><?php echo $ind_id; ?> : <?php echo $ind_name; ?> ปี <?php echo $year; ?></h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <div id="<?php echo $graph_id ?>" style="height: 300px; width: 100%;"></div>
              </div>
              <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟ</span></b>
              <div class="card shadow mb-4">
                <div class="card-body">
                  <?php echo $comment; ?>
                </div>
              </div>
              <div class="small text-center">
                <span>บันทึกข้อมูล : <?php echo $date; ?> โดย <?php echo $user_post; ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  <?php } ?>

  <?php
  $sql = "SELECT graph_6m.*, indicator.* 
          FROM graph_6m, indicator 
          WHERE indicator.indicator_code=graph_6m.indicator 
          AND degree = '1'
          AND status = '1'";

  $objQuery = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($objQuery)) {

    $graph_id = $row['graph_6m_id'];
    $ind_id = $row['indicator_code'];
    $ind_name = $row['indicator_name'];
    $comment = $row['comment'];
    $user_post = $row['user_post'];
    $date = $row['date'];
    $year = $row['year'];
    $status = $row['status'];

    $number1 = $row['number1'];
    $number2 = $row['number2'];
    $divisor1 = $row['divisor1'];
    $divisor2 = $row['divisor2'];

    $result1 = $number1 * 100 / $divisor1;
    $result2 = $number2 * 100 / $divisor2;

    $dataPoints = array(
      array("label" => "ต.ค. - มี.ค.", "y" => $result1),
      array("label" => "เม.ย. - ก.ย.", "y" => $result2)
    );

    array_push($g_id, [
      'id' => $graph_id,
      'data' => $dataPoints
    ]);
  ?>
    <li class="list-group">
      <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-secondery"><?php echo $ind_id; ?> : <?php echo $ind_name; ?> ปี <?php echo $year; ?></h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <div id="<?php echo $graph_id ?>" style="height: 300px; width: 100%;"></div>
              </div>
              <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟ</span></b>
              <div class="card shadow mb-4">
                <div class="card-body">
                  <?php echo $comment; ?>
                </div>
              </div>
              <div class="small text-center">
                <span>บันทึกข้อมูล : <?php echo $date; ?> โดย <?php echo $user_post; ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  <?php } ?>

  <?php
  $sql = "SELECT graph_y.*, indicator.* 
          FROM graph_y, indicator 
          WHERE indicator.indicator_code=graph_y.indicator 
          AND degree = '1'
          AND status = '1'";

  $objQuery = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($objQuery)) {

    $graph_id = $row['graph_y_id'];
    $ind_id = $row['indicator_code'];
    $ind_name = $row['indicator_name'];
    $comment = $row['comment'];
    $user_post = $row['user_post'];
    $date = $row['date'];
    $year = $row['year'];
    $status = $row['status'];

    $number1 = $row['number1'];
    $divisor1 = $row['divisor1'];

    $result1 = $number1 * 100 / $divisor1;

    $dataPoints = array(
      array("label" => $year, "y" => $result1)
    );

    array_push($g_id, [
      'id' => $graph_id,
      'data' => $dataPoints
    ]);
  ?>
    <li class="list-group">
      <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-secondery"><?php echo $ind_id; ?> : <?php echo $ind_name; ?> ปี <?php echo $year; ?></h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <div id="<?php echo $graph_id ?>" style="height: 300px; width: 100%;"></div>
              </div>
              <b><span class="text-gray-900 form-text text-left">วิเคราห์กราฟ</span></b>
              <div class="card shadow mb-4">
                <div class="card-body">
                  <?php echo $comment; ?>
                </div>
              </div>
              <div class="small text-center">
                <span>บันทึกข้อมูล : <?php echo $date; ?> โดย <?php echo $user_post; ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>

  <?php } ?>

</ul>