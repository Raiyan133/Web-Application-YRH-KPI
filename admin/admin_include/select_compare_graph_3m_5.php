<?php
$sql_5 = "SELECT graph_3m.*, indicator.* 
FROM graph_3m, indicator 
WHERE indicator.indicator_code=graph_3m.indicator 
AND graph_3m_id = '" . $graph_5 . "'";

$objQuery_5 = mysqli_query($connect, $sql_5);
while ($row = mysqli_fetch_array($objQuery_5)) {
  $indicator_id_5 = $row['indicator'];
  $indicator_name_5 = $row['indicator_name'];
  $year_5 = $row['year'];
  $number1_5 = $row['number1'];
  $number2_5 = $row['number2'];
  $number3_5 = $row['number3'];
  $number4_5 = $row['number4'];
  $divisor1_5 = $row['divisor1'];
  $divisor2_5 = $row['divisor2'];
  $divisor3_5 = $row['divisor3'];
  $divisor4_5 = $row['divisor4'];
  $comment_5 = $row['comment'];

  $result1_5 = $number1_5 * 100 / $divisor1_5;
  $result2_5 = $number2_5 * 100 / $divisor2_5;
  $result3_5 = $number3_5 * 100 / $divisor3_5;
  $result4_5 = $number4_5 * 100 / $divisor4_5;

  $dataPoints5 = array(
    array("label" => "ต.ค.", "y" => $result1_5),
    array("label" => "พ.ย.", "y" => $result2_5),
    array("label" => "ธ.ค.", "y" => $result3_5),
    array("label" => "ม.ค.", "y" => $result4_5)
  );
}
?>