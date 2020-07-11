<?php
$sql_5 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_5 . "'";

$objQuery_5 = mysqli_query($connect, $sql_5);
while ($row = mysqli_fetch_array($objQuery_5)) {
  $indicator_id_5 = $row['indicator'];
  $indicator_name_5 = $row['indicator_name'];
  $year_5 = $row['year'];
  $number1_5 = $row['number1'];
  $number2_5 = $row['number2'];
  $number3_5 = $row['number3'];
  $number4_5 = $row['number4'];
  $number5_5 = $row['number5'];
  $number6_5 = $row['number6'];
  $number7_5 = $row['number7'];
  $number8_5 = $row['number8'];
  $number9_5 = $row['number9'];
  $number10_5 = $row['number10'];
  $number11_5 = $row['number11'];
  $number12_5 = $row['number12'];
  $divisor1_5 = $row['divisor1'];
  $divisor2_5 = $row['divisor2'];
  $divisor3_5 = $row['divisor3'];
  $divisor4_5 = $row['divisor4'];
  $divisor5_5 = $row['divisor5'];
  $divisor6_5 = $row['divisor6'];
  $divisor7_5 = $row['divisor7'];
  $divisor8_5 = $row['divisor8'];
  $divisor9_5 = $row['divisor9'];
  $divisor10_5 = $row['divisor10'];
  $divisor11_5 = $row['divisor11'];
  $divisor12_5 = $row['divisor12'];
  $comment_5 = $row['comment'];

  $result1_5 = $number1_5 * 100 / $divisor1_5;
  $result2_5 = $number2_5 * 100 / $divisor2_5;
  $result3_5 = $number3_5 * 100 / $divisor3_5;
  $result4_5 = $number4_5 * 100 / $divisor4_5;
  $result5_5 = $number5_5 * 100 / $divisor5_5;
  $result6_5 = $number6_5 * 100 / $divisor6_5;
  $result7_5 = $number7_5 * 100 / $divisor7_5;
  $result8_5 = $number8_5 * 100 / $divisor8_5;
  $result9_5 = $number9_5 * 100 / $divisor9_5;
  $result10_5 = $number10_5 * 100 / $divisor10_5;
  $result11_5 = $number11_5 * 100 / $divisor11_5;
  $result12_5 = $number12_5 * 100 / $divisor12_5;

  $dataPoints5 = array(
    array("label" => "ต.ค.", "y" => $result1_5),
    array("label" => "พ.ย.", "y" => $result2_5),
    array("label" => "ธ.ค.", "y" => $result3_5),
    array("label" => "ม.ค.", "y" => $result4_5),
    array("label" => "ก.พ.", "y" => $result5_5),
    array("label" => "มี.ค.", "y" => $result6_5),
    array("label" => "เม.ย.", "y" => $result7_5),
    array("label" => "พ.ค.", "y" => $result8_5),
    array("label" => "มิ.ย.", "y" => $result9_5),
    array("label" => "ก.ค.", "y" => $result10_5),
    array("label" => "ส.ค.", "y" => $result11_5),
    array("label" => "ก.ย.", "y" => $result12_5)

  );
}
?>