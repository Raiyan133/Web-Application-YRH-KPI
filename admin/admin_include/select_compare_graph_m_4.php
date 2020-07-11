<?php
$sql_4 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_4 . "'";

$objQuery_4 = mysqli_query($connect, $sql_4);
while ($row = mysqli_fetch_array($objQuery_4)) {
  $indicator_id_4 = $row['indicator'];
  $indicator_name_4 = $row['indicator_name'];
  $year_4 = $row['year'];
  $number1_4 = $row['number1'];
  $number2_4 = $row['number2'];
  $number3_4 = $row['number3'];
  $number4_4 = $row['number4'];
  $number5_4 = $row['number5'];
  $number6_4 = $row['number6'];
  $number7_4 = $row['number7'];
  $number8_4 = $row['number8'];
  $number9_4 = $row['number9'];
  $number10_4 = $row['number10'];
  $number11_4 = $row['number11'];
  $number12_4 = $row['number12'];
  $divisor1_4 = $row['divisor1'];
  $divisor2_4 = $row['divisor2'];
  $divisor3_4 = $row['divisor3'];
  $divisor4_4 = $row['divisor4'];
  $divisor5_4 = $row['divisor5'];
  $divisor6_4 = $row['divisor6'];
  $divisor7_4 = $row['divisor7'];
  $divisor8_4 = $row['divisor8'];
  $divisor9_4 = $row['divisor9'];
  $divisor10_4 = $row['divisor10'];
  $divisor11_4 = $row['divisor11'];
  $divisor12_4 = $row['divisor12'];
  $comment_4 = $row['comment'];

  $result1_4 = $number1_4 * 100 / $divisor1_4;
  $result2_4 = $number2_4 * 100 / $divisor2_4;
  $result3_4 = $number3_4 * 100 / $divisor3_4;
  $result4_4 = $number4_4 * 100 / $divisor4_4;
  $result5_4 = $number5_4 * 100 / $divisor5_4;
  $result6_4 = $number6_4 * 100 / $divisor6_4;
  $result7_4 = $number7_4 * 100 / $divisor7_4;
  $result8_4 = $number8_4 * 100 / $divisor8_4;
  $result9_4 = $number9_4 * 100 / $divisor9_4;
  $result10_4 = $number10_4 * 100 / $divisor10_4;
  $result11_4 = $number11_4 * 100 / $divisor11_4;
  $result12_4 = $number12_4 * 100 / $divisor12_4;

  $dataPoints4 = array(
    array("label" => "ต.ค.", "y" => $result1_4),
    array("label" => "พ.ย.", "y" => $result2_4),
    array("label" => "ธ.ค.", "y" => $result3_4),
    array("label" => "ม.ค.", "y" => $result4_4),
    array("label" => "ก.พ.", "y" => $result5_4),
    array("label" => "มี.ค.", "y" => $result6_4),
    array("label" => "เม.ย.", "y" => $result7_4),
    array("label" => "พ.ค.", "y" => $result8_4),
    array("label" => "มิ.ย.", "y" => $result9_4),
    array("label" => "ก.ค.", "y" => $result10_4),
    array("label" => "ส.ค.", "y" => $result11_4),
    array("label" => "ก.ย.", "y" => $result12_4)

  );
}
?>
