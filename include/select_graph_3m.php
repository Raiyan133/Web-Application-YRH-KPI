<?php

$sql = "SELECT graph_3m.*, indicator.* 
FROM graph_3m, indicator 
WHERE indicator.indicator_code=graph_3m.indicator 
AND graph_3m_id = '" . $id . "'";

$objQuery = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($objQuery)) {

  $graph_id = $row['graph_3m_id'];
  $indicator_code = $row['indicator_code'];
  $indicator_name = $row['indicator_name'];
  $first_name = $row["first_name"];
  $last_name = $row["last_name"];
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

  if (!empty($number1) && !empty($divisor1)) {
    $result1 = $number1 * 100 / $divisor1;
  } else if (empty($number1) && empty($divisor1)) {
    $result1 = '0';
  } else if ($number1 == 0 || $divisor1 == 0) {
    $result1 = 0;
  }

  if (!empty($number2) && !empty($divisor2)) {
    $result2 = $number2 * 100 / $divisor2;
  } else if (empty($number2) && empty($divisor2)) {
    $result2 = '0';
  } else if ($number2 == 0 || $divisor2 == 0) {
    $result2 = 0;
  }

  if (!empty($number3) && !empty($divisor3)) {
    $result3 = $number3 * 100 / $divisor3;
  } else if (empty($number3) && empty($divisor3)) {
    $result3 = '0';
  } else if ($number3 == 0 || $divisor3 == 0) {
    $result3 = 0;
  }

  if (!empty($number4) && !empty($divisor4)) {
    $result4 = $number4 * 100 / $divisor4;
  } else if (empty($number4) && empty($divisor4)) {
    $result4 = '0';
  } else if ($number4 == 0 || $divisor4 == 0) {
    $result4 = 0;
  }

  $mean = ($result1+$result2+$result3+$result4)/4;
  $min = min($result1,$result2,$result3,$result4);
  $max = max($result1,$result2,$result3,$result4);

  $dataPoints = array(
    array("label" => "ต.ค. - ธ.ค.", "y" => $result1),
    array("label" => "ม.ค. - มี.ค.", "y" => $result2),
    array("label" => "เม.ย. - มิ.ย.", "y" => $result3),
    array("label" => "ก.ค. - ก.ย.", "y" => $result4)

  );
}
