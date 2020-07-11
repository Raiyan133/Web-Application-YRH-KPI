<?php
$sql_2 = "SELECT graph_y.*, indicator.* 
FROM graph_y, indicator 
WHERE indicator.indicator_code=graph_y.indicator 
AND graph_y_id = '" . $graph_2 . "'";

$objQuery_2 = mysqli_query($connect, $sql_2);
while ($row = mysqli_fetch_array($objQuery_2)) {
  $indicator_id_2 = $row['indicator'];
  $indicator_name_2 = $row['indicator_name'];
  $year_2 = $row['year'];
  $number1_2 = $row['number1'];
  $divisor1_2 = $row['divisor1'];
  $comment_2 = $row['comment'];

  $result1_2 = $number1_2 * 100 / $divisor1_2;

  $dataPoints2 = array(
    array("label" => "ประจำปี", "y" => $result1_2)

  );
}
?>
