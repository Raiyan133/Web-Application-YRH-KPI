<?php
$sql = "SELECT graph_6m.*, indicator.* 
FROM graph_6m, indicator 
WHERE indicator.indicator_code=graph_6m.indicator 
AND graph_6m_id = '" . $id . "'";

$objQuery = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($objQuery)) {

  $graph_id = $row['graph_6m_id'];
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
  $divisor1 = $row['divisor1'];
  $divisor2 = $row['divisor2'];

  if (!empty($number1) && !empty($divisor1)) {
    $result1 = $number1 * 100 / $divisor1;
  } else if (empty($number1) && empty($divisor1)) {
    $result1 = '0';
  } else if ($number1 == 0 || $divisor1 == 0) {
    $result1 = 0;
  }

  if (!empty($number2) && !empty($divisor2)) {
    $result2 = $number2 * 100 / $divisor2;
  } else if (empty($number2) && empty($divisor2)) {
    $result2 = '0';
  } else if ($number2 == 0 || $divisor2 == 0) {
    $result2 = 0;
  }

  $mean = ($result1+$result2)/2;
  $min = min($result1,$result2);
  $max = max($result1,$result2);

  $dataPoints = array(
    array("label" => "ต.ค. - มี.ค.", "y" => $result1),
    array("label" => "เม.ย. - ก.ย.", "y" => $result2)
  );

  
}

