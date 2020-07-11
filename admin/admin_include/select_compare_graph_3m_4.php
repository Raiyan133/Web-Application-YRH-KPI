<?php
$sql_4 = "SELECT graph_3m.*, indicator.* 
FROM graph_3m, indicator 
WHERE indicator.indicator_code=graph_3m.indicator 
AND graph_3m_id = '" . $graph_4 . "'";

$objQuery_4 = mysqli_query($connect, $sql_4);
while ($row = mysqli_fetch_array($objQuery_4)) {
  $indicator_id_4 = $row['indicator'];
  $indicator_name_4 = $row['indicator_name'];
  $year_4 = $row['year'];
  $number1_4 = $row['number1'];
  $number2_4 = $row['number2'];
  $number3_4 = $row['number3'];
  $number4_4 = $row['number4'];
  $divisor1_4 = $row['divisor1'];
  $divisor2_4 = $row['divisor2'];
  $divisor3_4 = $row['divisor3'];
  $divisor4_4 = $row['divisor4'];
  $comment_4 = $row['comment'];

  $result1_4 = $number1_4 * 100 / $divisor1_4;
  $result2_4 = $number2_4 * 100 / $divisor2_4;
  $result3_4 = $number3_4 * 100 / $divisor3_4;
  $result4_4 = $number4_4 * 100 / $divisor4_4;

  $dataPoints4 = array(
    array("label" => "ต.ค.", "y" => $result1_4),
    array("label" => "พ.ย.", "y" => $result2_4),
    array("label" => "ธ.ค.", "y" => $result3_4),
    array("label" => "ม.ค.", "y" => $result4_4)
  );
}
?>
