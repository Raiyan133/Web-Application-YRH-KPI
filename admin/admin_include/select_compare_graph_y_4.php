<?php
$sql_4 = "SELECT graph_y.*, indicator.* 
FROM graph_y, indicator 
WHERE indicator.indicator_code=graph_y.indicator 
AND graph_y_id = '" . $graph_4 . "'";

$objQuery_4 = mysqli_query($connect, $sql_4);
while ($row = mysqli_fetch_array($objQuery_4)) {
  $indicator_id_4 = $row['indicator'];
  $indicator_name_4 = $row['indicator_name'];
  $year_4 = $row['year'];
  $number1_4 = $row['number1'];
  $divisor1_4 = $row['divisor1'];
  $comment_4 = $row['comment'];

  $result1_4 = $number1_4 * 100 / $divisor1_4;

  $dataPoints4 = array(
    array("label" => "ประจำปี", "y" => $result1_4)

  );
}
?>
