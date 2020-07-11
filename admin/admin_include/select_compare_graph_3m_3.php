<?php
$sql_3 = "SELECT graph_3m.*, indicator.* 
FROM graph_3m, indicator 
WHERE indicator.indicator_code=graph_3m.indicator 
AND graph_3m_id = '" . $graph_3 . "'";

$objQuery_3 = mysqli_query($connect, $sql_3);
while ($row = mysqli_fetch_array($objQuery_3)) {
  $indicator_id_3 = $row['indicator'];
  $indicator_name_3 = $row['indicator_name'];
  $year_3 = $row['year'];
  $number1_3 = $row['number1'];
  $number2_3 = $row['number2'];
  $number3_3 = $row['number3'];
  $number4_3 = $row['number4'];
  $divisor1_3 = $row['divisor1'];
  $divisor2_3 = $row['divisor2'];
  $divisor3_3 = $row['divisor3'];
  $divisor4_3 = $row['divisor4'];
  $comment_3 = $row['comment'];

  $result1_3 = $number1_3 * 100 / $divisor1_3;
  $result2_3 = $number2_3 * 100 / $divisor2_3;
  $result3_3 = $number3_3 * 100 / $divisor3_3;
  $result4_3 = $number4_3 * 100 / $divisor4_3;

  $dataPoints3 = array(
    array("label" => "ต.ค.", "y" => $result1_3),
    array("label" => "พ.ย.", "y" => $result2_3),
    array("label" => "ธ.ค.", "y" => $result3_3),
    array("label" => "ม.ค.", "y" => $result4_3)
  );
}
?>

