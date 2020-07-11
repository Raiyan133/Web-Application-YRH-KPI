<?php
$sql_2 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_2 . "'";

$objQuery_2 = mysqli_query($connect, $sql_2);
while ($row = mysqli_fetch_array($objQuery_2)) {
  $indicator_id_2 = $row['indicator'];
  $indicator_name_2 = $row['indicator_name'];
  $year_2 = $row['year'];
  $number1_2 = $row['number1'];
  $number2_2 = $row['number2'];
  $number3_2 = $row['number3'];
  $number4_2 = $row['number4'];
  $number5_2 = $row['number5'];
  $number6_2 = $row['number6'];
  $number7_2 = $row['number7'];
  $number8_2 = $row['number8'];
  $number9_2 = $row['number9'];
  $number10_2 = $row['number10'];
  $number11_2 = $row['number11'];
  $number12_2 = $row['number12'];
  $divisor1_2 = $row['divisor1'];
  $divisor2_2 = $row['divisor2'];
  $divisor3_2 = $row['divisor3'];
  $divisor4_2 = $row['divisor4'];
  $divisor5_2 = $row['divisor5'];
  $divisor6_2 = $row['divisor6'];
  $divisor7_2 = $row['divisor7'];
  $divisor8_2 = $row['divisor8'];
  $divisor9_2 = $row['divisor9'];
  $divisor10_2 = $row['divisor10'];
  $divisor11_2 = $row['divisor11'];
  $divisor12_2 = $row['divisor12'];
  $comment_2 = $row['comment'];

  $result1_2 = $number1_2 * 100 / $divisor1_2;
  $result2_2 = $number2_2 * 100 / $divisor2_2;
  $result3_2 = $number3_2 * 100 / $divisor3_2;
  $result4_2 = $number4_2 * 100 / $divisor4_2;
  $result5_2 = $number5_2 * 100 / $divisor5_2;
  $result6_2 = $number6_2 * 100 / $divisor6_2;
  $result7_2 = $number7_2 * 100 / $divisor7_2;
  $result8_2 = $number8_2 * 100 / $divisor8_2;
  $result9_2 = $number9_2 * 100 / $divisor9_2;
  $result10_2 = $number10_2 * 100 / $divisor10_2;
  $result11_2 = $number11_2 * 100 / $divisor11_2;
  $result12_2 = $number12_2 * 100 / $divisor12_2;

  $dataPoints2 = array(
    array("label" => "ต.ค.", "y" => $result1_2),
    array("label" => "พ.ย.", "y" => $result2_2),
    array("label" => "ธ.ค.", "y" => $result3_2),
    array("label" => "ม.ค.", "y" => $result4_2),
    array("label" => "ก.พ.", "y" => $result5_2),
    array("label" => "มี.ค.", "y" => $result6_2),
    array("label" => "เม.ย.", "y" => $result7_2),
    array("label" => "พ.ค.", "y" => $result8_2),
    array("label" => "มิ.ย.", "y" => $result9_2),
    array("label" => "ก.ค.", "y" => $result10_2),
    array("label" => "ส.ค.", "y" => $result11_2),
    array("label" => "ก.ย.", "y" => $result12_2)

  );
}
?>

