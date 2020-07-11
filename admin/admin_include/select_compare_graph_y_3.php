<?php
$sql_3 = "SELECT graph_y.*, indicator.* 
FROM graph_y, indicator 
WHERE indicator.indicator_code=graph_y.indicator 
AND graph_y_id = '" . $graph_3 . "'";

$objQuery_3 = mysqli_query($connect, $sql_3);
while ($row = mysqli_fetch_array($objQuery_3)) {
  $indicator_id_3 = $row['indicator'];
  $indicator_name_3 = $row['indicator_name'];
  $year_3 = $row['year'];
  $number1_3 = $row['number1'];
  $divisor1_3 = $row['divisor1'];
  $comment_3 = $row['comment'];

  $result1_3 = $number1_3 * 100 / $divisor1_3;

  $dataPoints3 = array(
    array("label" => "ประจำปี", "y" => $result1_3)

  );
}
?>
