<?php
$sql_1 = "SELECT graph_6m.*, indicator.* 
FROM graph_6m, indicator 
WHERE indicator.indicator_code=graph_6m.indicator 
AND graph_6m_id = '" . $graph_1 . "'";

$objQuery_1 = mysqli_query($connect, $sql_1);
while ($row = mysqli_fetch_array($objQuery_1)) {
  $indicator_id_1 = $row['indicator'];
  $indicator_name_1 = $row['indicator_name'];
  $year_1 = $row['year'];
  $number1_1 = $row['number1'];
  $number2_1 = $row['number2'];
  $divisor1_1 = $row['divisor1'];
  $divisor2_1 = $row['divisor2'];
  $comment_1 = $row['comment'];

  $result1_1 = $number1_1 * 100 / $divisor1_1;
  $result2_1 = $number2_1 * 100 / $divisor2_1;


  $dataPoints1 = array(
    array("label" => "ต.ค.", "y" => $result1_1),
    array("label" => "พ.ย.", "y" => $result2_1)

  );
}
?>