<?php
$sql_2 = "SELECT graph_6m.*, indicator.* 
FROM graph_6m, indicator 
WHERE indicator.indicator_code=graph_6m.indicator 
AND graph_6m_id = '" . $graph_2 . "'";

$objQuery_2 = mysqli_query($connect, $sql_2);
while ($row = mysqli_fetch_array($objQuery_2)) {
  $indicator_id_2 = $row['indicator'];
  $indicator_name_2 = $row['indicator_name'];
  $year_2 = $row['year'];
  $number1_2 = $row['number1'];
  $number2_2 = $row['number2'];
  $divisor1_2 = $row['divisor1'];
  $divisor2_2 = $row['divisor2'];
  $comment_2 = $row['comment'];

  $result1_2 = $number1_2 * 100 / $divisor1_2;
  $result2_2 = $number2_2 * 100 / $divisor2_2;


  $dataPoints2 = array(
    array("label" => "ต.ค.", "y" => $result1_2),
    array("label" => "พ.ย.", "y" => $result2_2)

  );
}
?>

