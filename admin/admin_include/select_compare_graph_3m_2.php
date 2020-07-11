<?php
$sql_2 = "SELECT graph_3m.*, indicator.* 
FROM graph_3m, indicator 
WHERE indicator.indicator_code=graph_3m.indicator 
AND graph_3m_id = '" . $graph_2 . "'";

$objQuery_2 = mysqli_query($connect, $sql_2);
while ($row = mysqli_fetch_array($objQuery_2)) {
  $indicator_id_2 = $row['indicator'];
  $indicator_name_2 = $row['indicator_name'];
  $year_2 = $row['year'];
  $number1_2 = $row['number1'];
  $number2_2 = $row['number2'];
  $number3_2 = $row['number3'];
  $number4_2 = $row['number4'];
  $divisor1_2 = $row['divisor1'];
  $divisor2_2 = $row['divisor2'];
  $divisor3_2 = $row['divisor3'];
  $divisor4_2 = $row['divisor4'];
  $comment_2 = $row['comment'];

  $result1_2 = $number1_2 * 100 / $divisor1_2;
  $result2_2 = $number2_2 * 100 / $divisor2_2;
  $result3_2 = $number3_2 * 100 / $divisor3_2;
  $result4_2 = $number4_2 * 100 / $divisor4_2;

  $dataPoints2 = array(
    array("label" => "ต.ค.", "y" => $result1_2),
    array("label" => "พ.ย.", "y" => $result2_2),
    array("label" => "ธ.ค.", "y" => $result3_2),
    array("label" => "ม.ค.", "y" => $result4_2)
  );
}
?>
