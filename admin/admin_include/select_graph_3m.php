<?php

$sql = "SELECT graph_3m.*, indicator.* 
FROM graph_3m, indicator 
WHERE indicator.indicator_code=graph_3m.indicator 
AND graph_3m_id = '" . $id . "'";

$objQuery = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($objQuery)) {

  $graph_id = $row['graph_3m_id'];
  $indicator_code = $row['indicator_code'];
  $indicator_name = $row['indicator_name'];
  $first_name = $row["first_name"];
  $last_name = $row["last_name"];
  $comment = $row['comment'];
  $user_post = $row['user_post'];
  $date = $row['date'];
  $year = $row['year'];
  $status = $row['status'];

  $number1 = $row['number1'];
  $number2 = $row['number2'];
  $number3 = $row['number3'];
  $number4 = $row['number4'];
  $divisor1 = $row['divisor1'];
  $divisor2 = $row['divisor2'];
  $divisor3 = $row['divisor3'];
  $divisor4 = $row['divisor4'];

  $result1 = $number1 * 100 / $divisor1;
  $result2 = $number2 * 100 / $divisor2;
  $result3 = $number3 * 100 / $divisor3;
  $result4 = $number4 * 100 / $divisor4;

  $dataPoints = array(
    array("label" => "ต.ค. - ธ.ค.", "y" => $result1),
    array("label" => "ม.ค. - มี.ค.", "y" => $result2),
    array("label" => "เม.ย. - มิ.ย.", "y" => $result3),
    array("label" => "ก.ค. - ก.ย.", "y" => $result4)

  );
}
