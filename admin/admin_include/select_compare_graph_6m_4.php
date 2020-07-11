<?php
$sql_4 = "SELECT graph_6m.*, indicator.* 
FROM graph_6m, indicator 
WHERE indicator.indicator_code=graph_6m.indicator 
AND graph_6m_id = '" . $graph_4 . "'";

$objQuery_4 = mysqli_query($connect, $sql_4);
while ($row = mysqli_fetch_array($objQuery_4)) {
  $indicator_id_4 = $row['indicator'];
  $indicator_name_4 = $row['indicator_name'];
  $year_4 = $row['year'];
  $number1_4 = $row['number1'];
  $number2_4 = $row['number2'];
  $divisor1_4 = $row['divisor1'];
  $divisor2_4 = $row['divisor2'];
  $comment_4 = $row['comment'];

  $result1_4 = $number1_4 * 100 / $divisor1_4;
  $result2_4 = $number2_4 * 100 / $divisor2_4;


  $dataPoints4 = array(
    array("label" => "ต.ค.", "y" => $result1_4),
    array("label" => "พ.ย.", "y" => $result2_4)

  );
}
?>

