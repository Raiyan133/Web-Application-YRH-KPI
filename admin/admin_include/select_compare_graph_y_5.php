<?php
$sql_5 = "SELECT graph_y.*, indicator.* 
FROM graph_y, indicator 
WHERE indicator.indicator_code=graph_y.indicator 
AND graph_y_id = '" . $graph_5 . "'";

$objQuery_5 = mysqli_query($connect, $sql_5);
while ($row = mysqli_fetch_array($objQuery_5)) {
  $indicator_id_5 = $row['indicator'];
  $indicator_name_5 = $row['indicator_name'];
  $year_5 = $row['year'];
  $number1_5 = $row['number1'];
  $divisor1_5 = $row['divisor1'];
  $comment_5 = $row['comment'];

  $result1_5 = $number1_5 * 100 / $divisor1_5;

  $dataPoints5 = array(
    array("label" => "ประจำปี", "y" => $result1_5)

  );
}
?>