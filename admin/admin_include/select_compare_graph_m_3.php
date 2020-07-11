<?php
$sql_3 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_3 . "'";

$objQuery_3 = mysqli_query($connect, $sql_3);
while ($row = mysqli_fetch_array($objQuery_3)) {
  $indicator_id_3 = $row['indicator'];
  $indicator_name_3 = $row['indicator_name'];
  $year_3 = $row['year'];
  $number1_3 = $row['number1'];
  $number2_3 = $row['number2'];
  $number3_3 = $row['number3'];
  $number4_3 = $row['number4'];
  $number5_3 = $row['number5'];
  $number6_3 = $row['number6'];
  $number7_3 = $row['number7'];
  $number8_3 = $row['number8'];
  $number9_3 = $row['number9'];
  $number10_3 = $row['number10'];
  $number11_3 = $row['number11'];
  $number12_3 = $row['number12'];
  $divisor1_3 = $row['divisor1'];
  $divisor2_3 = $row['divisor2'];
  $divisor3_3 = $row['divisor3'];
  $divisor4_3 = $row['divisor4'];
  $divisor5_3 = $row['divisor5'];
  $divisor6_3 = $row['divisor6'];
  $divisor7_3 = $row['divisor7'];
  $divisor8_3 = $row['divisor8'];
  $divisor9_3 = $row['divisor9'];
  $divisor10_3 = $row['divisor10'];
  $divisor11_3 = $row['divisor11'];
  $divisor12_3 = $row['divisor12'];
  $comment_3 = $row['comment'];

  $result1_3 = $number1_3 * 100 / $divisor1_3;
  $result2_3 = $number2_3 * 100 / $divisor2_3;
  $result3_3 = $number3_3 * 100 / $divisor3_3;
  $result4_3 = $number4_3 * 100 / $divisor4_3;
  $result5_3 = $number5_3 * 100 / $divisor5_3;
  $result6_3 = $number6_3 * 100 / $divisor6_3;
  $result7_3 = $number7_3 * 100 / $divisor7_3;
  $result8_3 = $number8_3 * 100 / $divisor8_3;
  $result9_3 = $number9_3 * 100 / $divisor9_3;
  $result10_3 = $number10_3 * 100 / $divisor10_3;
  $result11_3 = $number11_3 * 100 / $divisor11_3;
  $result12_3 = $number12_3 * 100 / $divisor12_3;

  $dataPoints3 = array(
    array("label" => "ต.ค.", "y" => $result1_3),
    array("label" => "พ.ย.", "y" => $result2_3),
    array("label" => "ธ.ค.", "y" => $result3_3),
    array("label" => "ม.ค.", "y" => $result4_3),
    array("label" => "ก.พ.", "y" => $result5_3),
    array("label" => "มี.ค.", "y" => $result6_3),
    array("label" => "เม.ย.", "y" => $result7_3),
    array("label" => "พ.ค.", "y" => $result8_3),
    array("label" => "มิ.ย.", "y" => $result9_3),
    array("label" => "ก.ค.", "y" => $result10_3),
    array("label" => "ส.ค.", "y" => $result11_3),
    array("label" => "ก.ย.", "y" => $result12_3)

  );
}
?>
