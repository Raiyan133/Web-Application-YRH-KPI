<?php
$sql_1 = "SELECT graph_y.*, indicator.* 
FROM graph_y, indicator 
WHERE indicator.indicator_code=graph_y.indicator 
AND graph_y_id = '" . $graph_1 . "'";

$objQuery_1 = mysqli_query($connect, $sql_1);
while ($row = mysqli_fetch_array($objQuery_1)) {
  $indicator_id_1 = $row['indicator'];
  $indicator_name_1 = $row['indicator_name'];
  $year_1 = $row['year'];
  $number1_1 = $row['number1'];
  $divisor1_1 = $row['divisor1'];
  $comment_1 = $row['comment'];

  $result1_1 = $number1_1 * 100 / $divisor1_1;

  $dataPoints1 = array(
    array("label" => "ประจำปี", "y" => $result1_1)

  );
}
?>
