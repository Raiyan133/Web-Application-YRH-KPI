<?php
$sql_1 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_1 . "'";

$objQuery_1 = mysqli_query($connect, $sql_1);
while ($row = mysqli_fetch_array($objQuery_1)) {
  $indicator_id_1 = $row['indicator'];
  $indicator_name_1 = $row['indicator_name'];
  $year_1 = $row['year'];
  $number1_1 = $row['number1'];
  $number2_1 = $row['number2'];
  $number3_1 = $row['number3'];
  $number4_1 = $row['number4'];
  $number5_1 = $row['number5'];
  $number6_1 = $row['number6'];
  $number7_1 = $row['number7'];
  $number8_1 = $row['number8'];
  $number9_1 = $row['number9'];
  $number10_1 = $row['number10'];
  $number11_1 = $row['number11'];
  $number12_1 = $row['number12'];
  $divisor1_1 = $row['divisor1'];
  $divisor2_1 = $row['divisor2'];
  $divisor3_1 = $row['divisor3'];
  $divisor4_1 = $row['divisor4'];
  $divisor5_1 = $row['divisor5'];
  $divisor6_1 = $row['divisor6'];
  $divisor7_1 = $row['divisor7'];
  $divisor8_1 = $row['divisor8'];
  $divisor9_1 = $row['divisor9'];
  $divisor10_1 = $row['divisor10'];
  $divisor11_1 = $row['divisor11'];
  $divisor12_1 = $row['divisor12'];
  $comment_1 = $row['comment'];

  $result1_1 = $number1_1 * 100 / $divisor1_1;
  $result2_1 = $number2_1 * 100 / $divisor2_1;
  $result3_1 = $number3_1 * 100 / $divisor3_1;
  $result4_1 = $number4_1 * 100 / $divisor4_1;
  $result5_1 = $number5_1 * 100 / $divisor5_1;
  $result6_1 = $number6_1 * 100 / $divisor6_1;
  $result7_1 = $number7_1 * 100 / $divisor7_1;
  $result8_1 = $number8_1 * 100 / $divisor8_1;
  $result9_1 = $number9_1 * 100 / $divisor9_1;
  $result10_1 = $number10_1 * 100 / $divisor10_1;
  $result11_1 = $number11_1 * 100 / $divisor11_1;
  $result12_1 = $number12_1 * 100 / $divisor12_1;

  $dataPoints1 = array(
    array("label" => "ต.ค.", "y" => $result1_1),
    array("label" => "พ.ย.", "y" => $result2_1),
    array("label" => "ธ.ค.", "y" => $result3_1),
    array("label" => "ม.ค.", "y" => $result4_1),
    array("label" => "ก.พ.", "y" => $result5_1),
    array("label" => "มี.ค.", "y" => $result6_1),
    array("label" => "เม.ย.", "y" => $result7_1),
    array("label" => "พ.ค.", "y" => $result8_1),
    array("label" => "มิ.ย.", "y" => $result9_1),
    array("label" => "ก.ค.", "y" => $result10_1),
    array("label" => "ส.ค.", "y" => $result11_1),
    array("label" => "ก.ย.", "y" => $result12_1)

  );
}
?>

