<?php
if (!empty($graph_1)) {
  $sql1 = "SELECT * FROM graph_m WHERE graph_m_id='$graph_1'";
  $result1 = mysqli_query($connect, $sql1);
  $sql2 = "SELECT * FROM graph_3m WHERE graph_3m_id='$graph_1'";
  $result2 = mysqli_query($connect, $sql2);
  $sql3 = "SELECT * FROM graph_6m WHERE graph_6m_id='$graph_1'";
  $result3 = mysqli_query($connect, $sql3);
  $sql4 = "SELECT * FROM graph_y WHERE graph_y_id='$graph_1'";
  $result4 = mysqli_query($connect, $sql4);

  if (mysqli_num_rows($result1) > 0) {

    $sql_1 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_1 . "'";

    $objQuery_1 = mysqli_query($connect, $sql_1);
    while ($row = mysqli_fetch_array($objQuery_1)) {
      $indicator_id_1 = $row['indicator'];
      $indicator_name_1 = $row['indicator_name'];
      $year_1 = $row['year'];
      $number1_1 = $row['number1'];
      $number2_1 = $row['number2'];
      $number3_1 = $row['number3'];
      $number4_1 = $row['number4'];
      $number5_1 = $row['number5'];
      $number6_1 = $row['number6'];
      $number7_1 = $row['number7'];
      $number8_1 = $row['number8'];
      $number9_1 = $row['number9'];
      $number10_1 = $row['number10'];
      $number11_1 = $row['number11'];
      $number12_1 = $row['number12'];
      $divisor1_1 = $row['divisor1'];
      $divisor2_1 = $row['divisor2'];
      $divisor3_1 = $row['divisor3'];
      $divisor4_1 = $row['divisor4'];
      $divisor5_1 = $row['divisor5'];
      $divisor6_1 = $row['divisor6'];
      $divisor7_1 = $row['divisor7'];
      $divisor8_1 = $row['divisor8'];
      $divisor9_1 = $row['divisor9'];
      $divisor10_1 = $row['divisor10'];
      $divisor11_1 = $row['divisor11'];
      $divisor12_1 = $row['divisor12'];
      $comment_1 = $row['comment'];

      if (!empty($number1_1) && !empty($divisor1_1)) {
        $result1_1 = $number1_1 * 100 / $divisor1_1;
      } else if (empty($number1_1) && empty($divisor1_1)) {
        $result1_1 = '0';
      } else if ($number1_1 == 0 || $divisor1_1 == 0) {
        $result1_1 = 0;
      }
    
      if (!empty($number2_1) && !empty($divisor2_1)) {
        $result2_1 = $number2_1 * 100 / $divisor2_1;
      } else if (empty($number2_1) && empty($divisor2_1)) {
        $result2_1 = '0';
      } else if ($number2_1 == 0 || $divisor2_1 == 0) {
        $result2_1 = 0;
      }
    
      if (!empty($number3_1) && !empty($divisor3_1)) {
        $result3_1 = $number3_1 * 100 / $divisor3_1;
      } else if (empty($number3_1) && empty($divisor3_1)) {
        $result3_1 = '0';
      } else if ($number3_1 == 0 || $divisor3_1 == 0) {
        $result3_1 = 0;
      }
    
      if (!empty($number4_1) && !empty($divisor4_1)) {
        $result4_1 = $number4_1 * 100 / $divisor4_1;
      } else if (empty($number4_1) && empty($divisor4_1)) {
        $result4_1 = '0';
      } else if ($number4_1 == 0 || $divisor4_1 == 0) {
        $result4_1 = 0;
      }
      
      if (!empty($number5_1) && !empty($divisor5_1)) {
        $result5_1 = $number5_1 * 100 / $divisor5_1;
      } else if (empty($number5_1) && empty($divisor5_1)) {
        $result5_1 = '0';
      } else if ($number5_1 == 0 || $divisor5_1 == 0) {
        $result5_1 = 0;
      }
      
      if (!empty($number6_1) && !empty($divisor6_1)) {
        $result6_1 = $number6_1 * 100 / $divisor6_1;
      } else if (empty($number6_1) && empty($divisor6_1)) {
        $result6_1 = '0';
      } else if ($number6_1 == 0 || $divisor6_1 == 0) {
        $result6_1 = 0;
      }
      
      if (!empty($number7_1) && !empty($divisor7_1)) {
        $result7_1 = $number7_1 * 100 / $divisor7_1;
      } else if (empty($number7_1) && empty($divisor7_1)) {
        $result7_1 = '0';
      } else if ($number7_1 == 0 || $divisor7_1 == 0) {
        $result7_1 = 0;
      }
      
      if (!empty($number8_1) && !empty($divisor8_1)) {
        $result8_1 = $number8_1 * 100 / $divisor8_1;
      } else if (empty($number8_1) && empty($divisor8_1)) {
        $result8_1 = '0';
      } else if ($number8_1 == 0 || $divisor8_1 == 0) {
        $result8_1 = 0;
      }
      
      if (!empty($number9_1) && !empty($divisor9_1)) {
        $result9_1 = $number9_1 * 100 / $divisor9_1;
      } else if (empty($number9_1) && empty($divisor9_1)) {
        $result9_1 = '0';
      } else if ($number9_1 == 0 || $divisor9_1 == 0) {
        $result9_1 = 0;
      }
      
      if (!empty($number10_1) && !empty($divisor10_1)) {
        $result10_1 = $number10_1 * 100 / $divisor10_1;
      } else if (empty($number10_1) && empty($divisor10_1)) {
        $result10_1 = '0';
      } else if ($number10_1 == 0 || $divisor10_1 == 0) {
        $result10_1 = 0;
      }
      
      if (!empty($number11_1) && !empty($divisor11_1)) {
        $result11_1 = $number11_1 * 100 / $divisor11_1;
      } else if (empty($number11_1) && empty($divisor11_1)) {
        $result11_1 = '0';
      } else if ($number11_1 == 0 || $divisor11_1 == 0) {
        $result11_1 = 0;
      }
      
      if (!empty($number12_1) && !empty($divisor12_1)) {
        $result12_1 = $number12_1 * 100 / $divisor12_1;
      } else if (empty($number12_1) && empty($divisor12_1)) {
        $result12_1 = '0';
      } else if ($number12_1 == 0 || $divisor12_1 == 0) {
        $result12_1 = 0;
      }

      $mean_1 = ($result1_1 + $result2_1 + $result3_1 + $result4_1 + $result5_1 + $result6_1 + $result7_1 + $result8_1 + $result9_1 + $result10_1 + $result11_1 + $result12_1) / 12;
      $min_1 = min($result1_1, $result2_1, $result3_1, $result4_1, $result5_1, $result6_1, $result7_1, $result8_1, $result9_1, $result10_1, $result11_1, $result12_1);
      $max_1 = max($result1_1, $result2_1, $result3_1, $result4_1, $result5_1, $result6_1, $result7_1, $result8_1, $result9_1, $result10_1, $result11_1, $result12_1);

      $dataPoints1 = array(
        array("label" => "ต.ค.", "y" => $result1_1),
        array("label" => "พ.ย.", "y" => $result2_1),
        array("label" => "ธ.ค.", "y" => $result3_1),
        array("label" => "ม.ค.", "y" => $result4_1),
        array("label" => "ก.พ.", "y" => $result5_1),
        array("label" => "มี.ค.", "y" => $result6_1),
        array("label" => "เม.ย.", "y" => $result7_1),
        array("label" => "พ.ค.", "y" => $result8_1),
        array("label" => "มิ.ย.", "y" => $result9_1),
        array("label" => "ก.ค.", "y" => $result10_1),
        array("label" => "ส.ค.", "y" => $result11_1),
        array("label" => "ก.ย.", "y" => $result12_1)

      );
    }
  } else if (mysqli_num_rows($result2) > 0) {

    $sql_1 = "SELECT graph_3m.*, indicator.* 
  FROM graph_3m, indicator 
  WHERE indicator.indicator_code=graph_3m.indicator 
  AND graph_3m_id = '" . $graph_1 . "'";

    $objQuery_1 = mysqli_query($connect, $sql_1);
    while ($row = mysqli_fetch_array($objQuery_1)) {
      $indicator_id_1 = $row['indicator'];
      $indicator_name_1 = $row['indicator_name'];
      $year_1 = $row['year'];
      $number1_1 = $row['number1'];
      $number2_1 = $row['number2'];
      $number3_1 = $row['number3'];
      $number4_1 = $row['number4'];
      $divisor1_1 = $row['divisor1'];
      $divisor2_1 = $row['divisor2'];
      $divisor3_1 = $row['divisor3'];
      $divisor4_1 = $row['divisor4'];
      $comment_1 = $row['comment'];

      if (!empty($number1_1) && !empty($divisor1_1)) {
        $result1_1 = $number1_1 * 100 / $divisor1_1;
      } else if (empty($number1_1) && empty($divisor1_1)) {
        $result1_1 = '0';
      } else if ($number1_1 == 0 || $divisor1_1 == 0) {
        $result1_1 = 0;
      }
    
      if (!empty($number2_1) && !empty($divisor2_1)) {
        $result2_1 = $number2_1 * 100 / $divisor2_1;
      } else if (empty($number2_1) && empty($divisor2_1)) {
        $result2_1 = '0';
      } else if ($number2_1 == 0 || $divisor2_1 == 0) {
        $result2_1 = 0;
      }
    
      if (!empty($number3_1) && !empty($divisor3_1)) {
        $result3_1 = $number3_1 * 100 / $divisor3_1;
      } else if (empty($number3_1) && empty($divisor3_1)) {
        $result3_1 = '0';
      } else if ($number3_1 == 0 || $divisor3_1 == 0) {
        $result3_1 = 0;
      }
    
      if (!empty($number4_1) && !empty($divisor4_1)) {
        $result4_1 = $number4_1 * 100 / $divisor4_1;
      } else if (empty($number4_1) && empty($divisor4_1)) {
        $result4_1 = '0';
      } else if ($number4_1 == 0 || $divisor4_1 == 0) {
        $result4_1 = 0;
      }

      $mean_1 = ($result1_1 + $result2_1 + $result3_1 + $result4_1) / 4;
      $min_1 = min($result1_1, $result2_1, $result3_1, $result4_1);
      $max_1 = max($result1_1, $result2_1, $result3_1, $result4_1);

      $dataPoints1 = array(
        array("label" => "ต.ค.", "y" => $result1_1),
        array("label" => "พ.ย.", "y" => $result1_1),
        array("label" => "ธ.ค.", "y" => $result1_1),
        array("label" => "ม.ค.", "y" => $result2_1),
        array("label" => "ก.พ.", "y" => $result2_1),
        array("label" => "มี.ค.", "y" => $result2_1),
        array("label" => "เม.ย.", "y" => $result3_1),
        array("label" => "พ.ค.", "y" => $result3_1),
        array("label" => "มิ.ย.", "y" => $result3_1),
        array("label" => "ก.ค.", "y" => $result4_1),
        array("label" => "ส.ค.", "y" => $result4_1),
        array("label" => "ก.ย.", "y" => $result4_1)
      );
    }
  } else if (mysqli_num_rows($result3) > 0) {

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

      if (!empty($number1_1) && !empty($divisor1_1)) {
        $result1_1 = $number1_1 * 100 / $divisor1_1;
      } else if (empty($number1_1) && empty($divisor1_1)) {
        $result1_1 = '0';
      } else if ($number1_1 == 0 || $divisor1_1 == 0) {
        $result1_1 = 0;
      }
    
      if (!empty($number2_1) && !empty($divisor2_1)) {
        $result2_1 = $number2_1 * 100 / $divisor2_1;
      } else if (empty($number2_1) && empty($divisor2_1)) {
        $result2_1 = '0';
      } else if ($number2_1 == 0 || $divisor2_1 == 0) {
        $result2_1 = 0;
      }

      $mean_1 = ($result1_1 + $result2_1) / 2;
      $min_1 = min($result1_1, $result2_1);
      $max_1 = max($result1_1, $result2_1);

      $dataPoints1 = array(
        array("label" => "ต.ค.", "y" => $result1_1),
        array("label" => "พ.ย.", "y" => $result1_1),
        array("label" => "ธ.ค.", "y" => $result1_1),
        array("label" => "ม.ค.", "y" => $result1_1),
        array("label" => "ก.พ.", "y" => $result1_1),
        array("label" => "มี.ค.", "y" => $result1_1),
        array("label" => "เม.ย.", "y" => $result2_1),
        array("label" => "พ.ค.", "y" => $result2_1),
        array("label" => "มิ.ย.", "y" => $result2_1),
        array("label" => "ก.ค.", "y" => $result2_1),
        array("label" => "ส.ค.", "y" => $result2_1),
        array("label" => "ก.ย.", "y" => $result2_1)
      );
    }
  } else if (mysqli_num_rows($result4) > 0) {
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

      if (!empty($number1_1) && !empty($divisor1_1)) {
        $result1_1 = $number1_1 * 100 / $divisor1_1;
      } else if (empty($number1_1) && empty($divisor1_1)) {
        $result1_1 = '0';
      } else if ($number1_1 == 0 || $divisor1_1 == 0) {
        $result1_1 = 0;
      }

      $mean_1 = ($result1_1) / 1;
      $min_1 = min($result1_1,$result1_1);
      $max_1 = max($result1_1,$result1_1);

      $dataPoints1 = array(
        array("label" => "ต.ค.", "y" => $result1_1),
        array("label" => "พ.ย.", "y" => $result1_1),
        array("label" => "ธ.ค.", "y" => $result1_1),
        array("label" => "ม.ค.", "y" => $result1_1),
        array("label" => "ก.พ.", "y" => $result1_1),
        array("label" => "มี.ค.", "y" => $result1_1),
        array("label" => "เม.ย.", "y" => $result1_1),
        array("label" => "พ.ค.", "y" => $result1_1),
        array("label" => "มิ.ย.", "y" => $result1_1),
        array("label" => "ก.ค.", "y" => $result1_1),
        array("label" => "ส.ค.", "y" => $result1_1),
        array("label" => "ก.ย.", "y" => $result1_1)

      );
    }
  }
}

if (!empty($graph_2)) {
  $sql1 = "SELECT * FROM graph_m WHERE graph_m_id='$graph_2'";
  $result1 = mysqli_query($connect, $sql1);
  $sql2 = "SELECT * FROM graph_3m WHERE graph_3m_id='$graph_2'";
  $result2 = mysqli_query($connect, $sql2);
  $sql3 = "SELECT * FROM graph_6m WHERE graph_6m_id='$graph_2'";
  $result3 = mysqli_query($connect, $sql3);
  $sql4 = "SELECT * FROM graph_y WHERE graph_y_id='$graph_2'";
  $result4 = mysqli_query($connect, $sql4);

  if (mysqli_num_rows($result1) > 0) {

    $sql_2 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_2 . "'";

    $objQuery_2 = mysqli_query($connect, $sql_2);
    while ($row = mysqli_fetch_array($objQuery_2)) {
      $indicator_id_2 = $row['indicator'];
      $indicator_name_2 = $row['indicator_name'];
      $year_2 = $row['year'];
      $number1_2 = $row['number1'];
      $number2_2 = $row['number2'];
      $number3_2 = $row['number3'];
      $number4_2 = $row['number4'];
      $number5_2 = $row['number5'];
      $number6_2 = $row['number6'];
      $number7_2 = $row['number7'];
      $number8_2 = $row['number8'];
      $number9_2 = $row['number9'];
      $number10_2 = $row['number10'];
      $number11_2 = $row['number11'];
      $number12_2 = $row['number12'];
      $divisor1_2 = $row['divisor1'];
      $divisor2_2 = $row['divisor2'];
      $divisor3_2 = $row['divisor3'];
      $divisor4_2 = $row['divisor4'];
      $divisor5_2 = $row['divisor5'];
      $divisor6_2 = $row['divisor6'];
      $divisor7_2 = $row['divisor7'];
      $divisor8_2 = $row['divisor8'];
      $divisor9_2 = $row['divisor9'];
      $divisor10_2 = $row['divisor10'];
      $divisor11_2 = $row['divisor11'];
      $divisor12_2 = $row['divisor12'];
      $comment_2 = $row['comment'];

      if (!empty($number1_2) && !empty($divisor1_2)) {
        $result1_2 = $number1_2 * 100 / $divisor1_2;
      } else if (empty($number1_2) && empty($divisor1_2)) {
        $result1_2 = '0';
      } else if ($number1_2 == 0 || $divisor1_2 == 0) {
        $result1_2 = 0;
      }
    
      if (!empty($number2_2) && !empty($divisor2_2)) {
        $result2_2 = $number2_2 * 100 / $divisor2_2;
      } else if (empty($number2_2) && empty($divisor2_2)) {
        $result2_2 = '0';
      } else if ($number2_2 == 0 || $divisor2_2 == 0) {
        $result2_2 = 0;
      }
    
      if (!empty($number3_2) && !empty($divisor3_2)) {
        $result3_2 = $number3_2 * 100 / $divisor3_2;
      } else if (empty($number3_2) && empty($divisor3_2)) {
        $result3_2 = '0';
      } else if ($number3_2 == 0 || $divisor3_2 == 0) {
        $result3_2 = 0;
      }
    
      if (!empty($number4_2) && !empty($divisor4_2)) {
        $result4_2 = $number4_2 * 100 / $divisor4_2;
      } else if (empty($number4_2) && empty($divisor4_2)) {
        $result4_2 = '0';
      } else if ($number4_2 == 0 || $divisor4_2 == 0) {
        $result4_2 = 0;
      }
      
      if (!empty($number5_2) && !empty($divisor5_2)) {
        $result5_2 = $number5_2 * 100 / $divisor5_2;
      } else if (empty($number5_2) && empty($divisor5_2)) {
        $result5_2 = '0';
      } else if ($number5_2 == 0 || $divisor5_2 == 0) {
        $result5_2 = 0;
      }
      
      if (!empty($number6_2) && !empty($divisor6_2)) {
        $result6_2 = $number6_2 * 100 / $divisor6_2;
      } else if (empty($number6_2) && empty($divisor6_2)) {
        $result6_2 = '0';
      } else if ($number6_2 == 0 || $divisor6_2 == 0) {
        $result6_2 = 0;
      }
      
      if (!empty($number7_2) && !empty($divisor7_2)) {
        $result7_2 = $number7_2 * 100 / $divisor7_2;
      } else if (empty($number7_2) && empty($divisor7_2)) {
        $result7_2 = '0';
      } else if ($number7_2 == 0 || $divisor7_2 == 0) {
        $result7_2 = 0;
      }
      
      if (!empty($number8_2) && !empty($divisor8_2)) {
        $result8_2 = $number8_2 * 100 / $divisor8_2;
      } else if (empty($number8_2) && empty($divisor8_2)) {
        $result8_2 = '0';
      } else if ($number8_2 == 0 || $divisor8_2 == 0) {
        $result8_2 = 0;
      }
      
      if (!empty($number9_2) && !empty($divisor9_2)) {
        $result9_2 = $number9_2 * 100 / $divisor9_2;
      } else if (empty($number9_2) && empty($divisor9_2)) {
        $result9_2 = '0';
      } else if ($number9_2 == 0 || $divisor9_2 == 0) {
        $result9_2 = 0;
      }
      
      if (!empty($number10_2) && !empty($divisor10_2)) {
        $result10_2 = $number10_2 * 100 / $divisor10_2;
      } else if (empty($number10_2) && empty($divisor10_2)) {
        $result10_2 = '0';
      } else if ($number10_2 == 0 || $divisor10_2 == 0) {
        $result10_2 = 0;
      }
      
      if (!empty($number11_2) && !empty($divisor11_2)) {
        $result11_2 = $number11_2 * 100 / $divisor11_2;
      } else if (empty($number11_2) && empty($divisor11_2)) {
        $result11_2 = '0';
      } else if ($number11_2 == 0 || $divisor11_2 == 0) {
        $result11_2 = 0;
      }
      
      if (!empty($number12_2) && !empty($divisor12_2)) {
        $result12_2 = $number12_2 * 100 / $divisor12_2;
      } else if (empty($number12_2) && empty($divisor12_2)) {
        $result12_2 = '0';
      } else if ($number12_2 == 0 || $divisor12_2 == 0) {
        $result12_2 = 0;
      }

      $mean_2 = ($result1_2 + $result2_2 + $result3_2 + $result4_2 + $result5_2 + $result6_2 + $result7_2 + $result8_2 + $result9_2 + $result10_2 + $result11_2 + $result12_2) / 12;
      $min_2 = min($result1_2, $result2_2, $result3_2, $result4_2, $result5_2, $result6_2, $result7_2, $result8_2, $result9_2, $result10_2, $result11_2, $result12_2);
      $max_2 = max($result1_2, $result2_2, $result3_2, $result4_2, $result5_2, $result6_2, $result7_2, $result8_2, $result9_2, $result10_2, $result11_2, $result12_2);

      $dataPoints2 = array(
        array("label" => "ต.ค.", "y" => $result1_2),
        array("label" => "พ.ย.", "y" => $result2_2),
        array("label" => "ธ.ค.", "y" => $result3_2),
        array("label" => "ม.ค.", "y" => $result4_2),
        array("label" => "ก.พ.", "y" => $result5_2),
        array("label" => "มี.ค.", "y" => $result6_2),
        array("label" => "เม.ย.", "y" => $result7_2),
        array("label" => "พ.ค.", "y" => $result8_2),
        array("label" => "มิ.ย.", "y" => $result9_2),
        array("label" => "ก.ค.", "y" => $result10_2),
        array("label" => "ส.ค.", "y" => $result11_2),
        array("label" => "ก.ย.", "y" => $result12_2)

      );
    }
  } else if (mysqli_num_rows($result2) > 0) {

    $sql_2 = "SELECT graph_3m.*, indicator.* 
  FROM graph_3m, indicator 
  WHERE indicator.indicator_code=graph_3m.indicator 
  AND graph_3m_id = '" . $graph_2 . "'";

    $objQuery_2 = mysqli_query($connect, $sql_2);
    while ($row = mysqli_fetch_array($objQuery_2)) {
      $indicator_id_2 = $row['indicator'];
      $indicator_name_2 = $row['indicator_name'];
      $year_2 = $row['year'];
      $number1_2 = $row['number1'];
      $number2_2 = $row['number2'];
      $number3_2 = $row['number3'];
      $number4_2 = $row['number4'];
      $divisor1_2 = $row['divisor1'];
      $divisor2_2 = $row['divisor2'];
      $divisor3_2 = $row['divisor3'];
      $divisor4_2 = $row['divisor4'];
      $comment_2 = $row['comment'];

      if (!empty($number1_2) && !empty($divisor1_2)) {
        $result1_2 = $number1_2 * 100 / $divisor1_2;
      } else if (empty($number1_2) && empty($divisor1_2)) {
        $result1_2 = '0';
      } else if ($number1_2 == 0 || $divisor1_2 == 0) {
        $result1_2 = 0;
      }
    
      if (!empty($number2_2) && !empty($divisor2_2)) {
        $result2_2 = $number2_2 * 100 / $divisor2_2;
      } else if (empty($number2_2) && empty($divisor2_2)) {
        $result2_2 = '0';
      } else if ($number2_2 == 0 || $divisor2_2 == 0) {
        $result2_2 = 0;
      }
    
      if (!empty($number3_2) && !empty($divisor3_2)) {
        $result3_2 = $number3_2 * 100 / $divisor3_2;
      } else if (empty($number3_2) && empty($divisor3_2)) {
        $result3_2 = '0';
      } else if ($number3_2 == 0 || $divisor3_2 == 0) {
        $result3_2 = 0;
      }
    
      if (!empty($number4_2) && !empty($divisor4_2)) {
        $result4_2 = $number4_2 * 100 / $divisor4_2;
      } else if (empty($number4_2) && empty($divisor4_2)) {
        $result4_2 = '0';
      } else if ($number4_2 == 0 || $divisor4_2 == 0) {
        $result4_2 = 0;
      }

      $mean_2 = ($result1_2 + $result2_2 + $result3_2 + $result4_2) / 4;
      $min_2 = min($result1_2, $result2_2, $result3_2, $result4_2);
      $max_2 = max($result1_2, $result2_2, $result3_2, $result4_2);

      $dataPoints2 = array(
        array("label" => "ต.ค.", "y" => $result1_2),
        array("label" => "พ.ย.", "y" => $result1_2),
        array("label" => "ธ.ค.", "y" => $result1_2),
        array("label" => "ม.ค.", "y" => $result2_2),
        array("label" => "ก.พ.", "y" => $result2_2),
        array("label" => "มี.ค.", "y" => $result2_2),
        array("label" => "เม.ย.", "y" => $result3_2),
        array("label" => "พ.ค.", "y" => $result3_2),
        array("label" => "มิ.ย.", "y" => $result3_2),
        array("label" => "ก.ค.", "y" => $result4_2),
        array("label" => "ส.ค.", "y" => $result4_2),
        array("label" => "ก.ย.", "y" => $result4_2)
      );
    }
  } else if (mysqli_num_rows($result3) > 0) {

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

      if (!empty($number1_2) && !empty($divisor1_2)) {
        $result1_2 = $number1_2 * 100 / $divisor1_2;
      } else if (empty($number1_2) && empty($divisor1_2)) {
        $result1_2 = '0';
      } else if ($number1_2 == 0 || $divisor1_2 == 0) {
        $result1_2 = 0;
      }
    
      if (!empty($number2_2) && !empty($divisor2_2)) {
        $result2_2 = $number2_2 * 100 / $divisor2_2;
      } else if (empty($number2_2) && empty($divisor2_2)) {
        $result2_2 = '0';
      } else if ($number2_2 == 0 || $divisor2_2 == 0) {
        $result2_2 = 0;
      }

      $mean_2 = ($result1_2 + $result2_2) / 2;
      $min_2 = min($result1_2, $result2_2);
      $max_2 = max($result1_2, $result2_2);

      $dataPoints2 = array(
        array("label" => "ต.ค.", "y" => $result1_2),
        array("label" => "พ.ย.", "y" => $result1_2),
        array("label" => "ธ.ค.", "y" => $result1_2),
        array("label" => "ม.ค.", "y" => $result1_2),
        array("label" => "ก.พ.", "y" => $result1_2),
        array("label" => "มี.ค.", "y" => $result1_2),
        array("label" => "เม.ย.", "y" => $result2_2),
        array("label" => "พ.ค.", "y" => $result2_2),
        array("label" => "มิ.ย.", "y" => $result2_2),
        array("label" => "ก.ค.", "y" => $result2_2),
        array("label" => "ส.ค.", "y" => $result2_2),
        array("label" => "ก.ย.", "y" => $result2_2)
      );
    }
  } else if (mysqli_num_rows($result4) > 0) {
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

      if (!empty($number1_2) && !empty($divisor1_2)) {
        $result1_2 = $number1_2 * 100 / $divisor1_2;
      } else if (empty($number1_2) && empty($divisor1_2)) {
        $result1_2 = '0';
      } else if ($number1_2 == 0 || $divisor1_2 == 0) {
        $result1_2 = 0;
      }

      $mean_2 = ($result1_2) / 1;
      $min_2 = min($result1_2,$result1_2);
      $max_2 = max($result1_2,$result1_2);

      $dataPoints2 = array(
        array("label" => "ต.ค.", "y" => $result1_2),
        array("label" => "พ.ย.", "y" => $result1_2),
        array("label" => "ธ.ค.", "y" => $result1_2),
        array("label" => "ม.ค.", "y" => $result1_2),
        array("label" => "ก.พ.", "y" => $result1_2),
        array("label" => "มี.ค.", "y" => $result1_2),
        array("label" => "เม.ย.", "y" => $result1_2),
        array("label" => "พ.ค.", "y" => $result1_2),
        array("label" => "มิ.ย.", "y" => $result1_2),
        array("label" => "ก.ค.", "y" => $result1_2),
        array("label" => "ส.ค.", "y" => $result1_2),
        array("label" => "ก.ย.", "y" => $result1_2)

      );
    }
  }
}

if (!empty($graph_3)) {
  $sql1 = "SELECT * FROM graph_m WHERE graph_m_id='$graph_3'";
  $result1 = mysqli_query($connect, $sql1);
  $sql2 = "SELECT * FROM graph_3m WHERE graph_3m_id='$graph_3'";
  $result2 = mysqli_query($connect, $sql2);
  $sql3 = "SELECT * FROM graph_6m WHERE graph_6m_id='$graph_3'";
  $result3 = mysqli_query($connect, $sql3);
  $sql4 = "SELECT * FROM graph_y WHERE graph_y_id='$graph_3'";
  $result4 = mysqli_query($connect, $sql4);

  if (mysqli_num_rows($result1) > 0) {

    $sql_3 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_3 . "'";

    $objQuery_3 = mysqli_query($connect, $sql_3);
    while ($row = mysqli_fetch_array($objQuery_3)) {
      $indicator_id_3 = $row['indicator'];
      $indicator_name_3 = $row['indicator_name'];
      $year_3 = $row['year'];
      $number1_3 = $row['number1'];
      $number2_3 = $row['number2'];
      $number3_3 = $row['number3'];
      $number4_3 = $row['number4'];
      $number5_3 = $row['number5'];
      $number6_3 = $row['number6'];
      $number7_3 = $row['number7'];
      $number8_3 = $row['number8'];
      $number9_3 = $row['number9'];
      $number10_3 = $row['number10'];
      $number11_3 = $row['number11'];
      $number12_3 = $row['number12'];
      $divisor1_3 = $row['divisor1'];
      $divisor2_3 = $row['divisor2'];
      $divisor3_3 = $row['divisor3'];
      $divisor4_3 = $row['divisor4'];
      $divisor5_3 = $row['divisor5'];
      $divisor6_3 = $row['divisor6'];
      $divisor7_3 = $row['divisor7'];
      $divisor8_3 = $row['divisor8'];
      $divisor9_3 = $row['divisor9'];
      $divisor10_3 = $row['divisor10'];
      $divisor11_3 = $row['divisor11'];
      $divisor12_3 = $row['divisor12'];
      $comment_3 = $row['comment'];

      if (!empty($number1_3) && !empty($divisor1_3)) {
        $result1_3 = $number1_3 * 100 / $divisor1_3;
      } else if (empty($number1_3) && empty($divisor1_3)) {
        $result1_3 = '0';
      } else if ($number1_3 == 0 || $divisor1_3 == 0) {
        $result1_3 = 0;
      }
    
      if (!empty($number2_3) && !empty($divisor2_3)) {
        $result2_3 = $number2_3 * 100 / $divisor2_3;
      } else if (empty($number2_3) && empty($divisor2_3)) {
        $result2_3 = '0';
      } else if ($number2_3 == 0 || $divisor2_3 == 0) {
        $result2_3 = 0;
      }
    
      if (!empty($number3_3) && !empty($divisor3_3)) {
        $result3_3 = $number3_3 * 100 / $divisor3_3;
      } else if (empty($number3_3) && empty($divisor3_3)) {
        $result3_3 = '0';
      } else if ($number3_3 == 0 || $divisor3_3 == 0) {
        $result3_3 = 0;
      }
    
      if (!empty($number4_3) && !empty($divisor4_3)) {
        $result4_3 = $number4_3 * 100 / $divisor4_3;
      } else if (empty($number4_3) && empty($divisor4_3)) {
        $result4_3 = '0';
      } else if ($number4_3 == 0 || $divisor4_3 == 0) {
        $result4_3 = 0;
      }
      
      if (!empty($number5_3) && !empty($divisor5_3)) {
        $result5_3 = $number5_3 * 100 / $divisor5_3;
      } else if (empty($number5_3) && empty($divisor5_3)) {
        $result5_3 = '0';
      } else if ($number5_3 == 0 || $divisor5_3 == 0) {
        $result5_3 = 0;
      }
      
      if (!empty($number6_3) && !empty($divisor6_3)) {
        $result6_3 = $number6_3 * 100 / $divisor6_3;
      } else if (empty($number6_3) && empty($divisor6_3)) {
        $result6_3 = '0';
      } else if ($number6_3 == 0 || $divisor6_3 == 0) {
        $result6_3 = 0;
      }
      
      if (!empty($number7_3) && !empty($divisor7_3)) {
        $result7_3 = $number7_3 * 100 / $divisor7_3;
      } else if (empty($number7_3) && empty($divisor7_3)) {
        $result7_3 = '0';
      } else if ($number7_3 == 0 || $divisor7_3 == 0) {
        $result7_3 = 0;
      }
      
      if (!empty($number8_3) && !empty($divisor8_3)) {
        $result8_3 = $number8_3 * 100 / $divisor8_3;
      } else if (empty($number8_3) && empty($divisor8_3)) {
        $result8_3 = '0';
      } else if ($number8_3 == 0 || $divisor8_3 == 0) {
        $result8_3 = 0;
      }
      
      if (!empty($number9_3) && !empty($divisor9_3)) {
        $result9_3 = $number9_3 * 100 / $divisor9_3;
      } else if (empty($number9_3) && empty($divisor9_3)) {
        $result9_3 = '0';
      } else if ($number9_3 == 0 || $divisor9_3 == 0) {
        $result9_3 = 0;
      }
      
      if (!empty($number10_3) && !empty($divisor10_3)) {
        $result10_3 = $number10_3 * 100 / $divisor10_3;
      } else if (empty($number10_3) && empty($divisor10_3)) {
        $result10_3 = '0';
      } else if ($number10_3 == 0 || $divisor10_3 == 0) {
        $result10_3 = 0;
      }
      
      if (!empty($number11_3) && !empty($divisor11_3)) {
        $result11_3 = $number11_3 * 100 / $divisor11_3;
      } else if (empty($number11_3) && empty($divisor11_3)) {
        $result11_3 = '0';
      } else if ($number11_3 == 0 || $divisor11_3 == 0) {
        $result11_3 = 0;
      }
      
      if (!empty($number12_3) && !empty($divisor12_3)) {
        $result12_3 = $number12_3 * 100 / $divisor12_3;
      } else if (empty($number12_3) && empty($divisor12_3)) {
        $result12_3 = '0';
      } else if ($number12_3 == 0 || $divisor12_3 == 0) {
        $result12_3 = 0;
      }

      $mean_3 = ($result1_3 + $result2_3 + $result3_3 + $result4_3 + $result5_3 + $result6_3 + $result7_3 + $result8_3 + $result9_3 + $result10_3 + $result11_3 + $result12_3) / 12;
      $min_3 = min($result1_3, $result2_3, $result3_3, $result4_3, $result5_3, $result6_3, $result7_3, $result8_3, $result9_3, $result10_3, $result11_3, $result12_3);
      $max_3 = max($result1_3, $result2_3, $result3_3, $result4_3, $result5_3, $result6_3, $result7_3, $result8_3, $result9_3, $result10_3, $result11_3, $result12_3);

      $dataPoints3 = array(
        array("label" => "ต.ค.", "y" => $result1_3),
        array("label" => "พ.ย.", "y" => $result2_3),
        array("label" => "ธ.ค.", "y" => $result3_3),
        array("label" => "ม.ค.", "y" => $result4_3),
        array("label" => "ก.พ.", "y" => $result5_3),
        array("label" => "มี.ค.", "y" => $result6_3),
        array("label" => "เม.ย.", "y" => $result7_3),
        array("label" => "พ.ค.", "y" => $result8_3),
        array("label" => "มิ.ย.", "y" => $result9_3),
        array("label" => "ก.ค.", "y" => $result10_3),
        array("label" => "ส.ค.", "y" => $result11_3),
        array("label" => "ก.ย.", "y" => $result12_3)

      );
    }
  } else if (mysqli_num_rows($result2) > 0) {

    $sql_3 = "SELECT graph_3m.*, indicator.* 
  FROM graph_3m, indicator 
  WHERE indicator.indicator_code=graph_3m.indicator 
  AND graph_3m_id = '" . $graph_3 . "'";

    $objQuery_3 = mysqli_query($connect, $sql_3);
    while ($row = mysqli_fetch_array($objQuery_3)) {
      $indicator_id_3 = $row['indicator'];
      $indicator_name_3 = $row['indicator_name'];
      $year_3 = $row['year'];
      $number1_3 = $row['number1'];
      $number2_3 = $row['number2'];
      $number3_3 = $row['number3'];
      $number4_3 = $row['number4'];
      $divisor1_3 = $row['divisor1'];
      $divisor2_3 = $row['divisor2'];
      $divisor3_3 = $row['divisor3'];
      $divisor4_3 = $row['divisor4'];
      $comment_3 = $row['comment'];

      if (!empty($number1_3) && !empty($divisor1_3)) {
        $result1_3 = $number1_3 * 100 / $divisor1_3;
      } else if (empty($number1_3) && empty($divisor1_3)) {
        $result1_3 = '0';
      } else if ($number1_3 == 0 || $divisor1_3 == 0) {
        $result1_3 = 0;
      }
    
      if (!empty($number2_3) && !empty($divisor2_3)) {
        $result2_3 = $number2_3 * 100 / $divisor2_3;
      } else if (empty($number2_3) && empty($divisor2_3)) {
        $result2_3 = '0';
      } else if ($number2_3 == 0 || $divisor2_3 == 0) {
        $result2_3 = 0;
      }
    
      if (!empty($number3_3) && !empty($divisor3_3)) {
        $result3_3 = $number3_3 * 100 / $divisor3_3;
      } else if (empty($number3_3) && empty($divisor3_3)) {
        $result3_3 = '0';
      } else if ($number3_3 == 0 || $divisor3_3 == 0) {
        $result3_3 = 0;
      }
    
      if (!empty($number4_3) && !empty($divisor4_3)) {
        $result4_3 = $number4_3 * 100 / $divisor4_3;
      } else if (empty($number4_3) && empty($divisor4_3)) {
        $result4_3 = '0';
      } else if ($number4_3 == 0 || $divisor4_3 == 0) {
        $result4_3 = 0;
      }

      $mean_3 = ($result1_3 + $result2_3 + $result3_3 + $result4_3) / 4;
      $min_3 = min($result1_3, $result2_3, $result3_3, $result4_3);
      $max_3 = max($result1_3, $result2_3, $result3_3, $result4_3);

      $dataPoints3 = array(
        array("label" => "ต.ค.", "y" => $result1_3),
        array("label" => "พ.ย.", "y" => $result1_3),
        array("label" => "ธ.ค.", "y" => $result1_3),
        array("label" => "ม.ค.", "y" => $result2_3),
        array("label" => "ก.พ.", "y" => $result2_3),
        array("label" => "มี.ค.", "y" => $result2_3),
        array("label" => "เม.ย.", "y" => $result3_3),
        array("label" => "พ.ค.", "y" => $result3_3),
        array("label" => "มิ.ย.", "y" => $result3_3),
        array("label" => "ก.ค.", "y" => $result4_3),
        array("label" => "ส.ค.", "y" => $result4_3),
        array("label" => "ก.ย.", "y" => $result4_3)
      );
    }
  } else if (mysqli_num_rows($result3) > 0) {

    $sql_3 = "SELECT graph_6m.*, indicator.* 
FROM graph_6m, indicator 
WHERE indicator.indicator_code=graph_6m.indicator 
AND graph_6m_id = '" . $graph_3 . "'";

    $objQuery_3 = mysqli_query($connect, $sql_3);
    while ($row = mysqli_fetch_array($objQuery_3)) {
      $indicator_id_3 = $row['indicator'];
      $indicator_name_3 = $row['indicator_name'];
      $year_3 = $row['year'];
      $number1_3 = $row['number1'];
      $number2_3 = $row['number2'];
      $divisor1_3 = $row['divisor1'];
      $divisor2_3 = $row['divisor2'];
      $comment_3 = $row['comment'];

      if (!empty($number1_3) && !empty($divisor1_3)) {
        $result1_3 = $number1_3 * 100 / $divisor1_3;
      } else if (empty($number1_3) && empty($divisor1_3)) {
        $result1_3 = '0';
      } else if ($number1_3 == 0 || $divisor1_3 == 0) {
        $result1_3 = 0;
      }
    
      if (!empty($number2_3) && !empty($divisor2_3)) {
        $result2_3 = $number2_3 * 100 / $divisor2_3;
      } else if (empty($number2_3) && empty($divisor2_3)) {
        $result2_3 = '0';
      } else if ($number2_3 == 0 || $divisor2_3 == 0) {
        $result2_3 = 0;
      }

      $mean_3 = ($result1_3 + $result2_3) / 2;
      $min_3 = min($result1_3, $result2_3);
      $max_3 = max($result1_3, $result2_3);

      $dataPoints3 = array(
        array("label" => "ต.ค.", "y" => $result1_3),
        array("label" => "พ.ย.", "y" => $result1_3),
        array("label" => "ธ.ค.", "y" => $result1_3),
        array("label" => "ม.ค.", "y" => $result1_3),
        array("label" => "ก.พ.", "y" => $result1_3),
        array("label" => "มี.ค.", "y" => $result1_3),
        array("label" => "เม.ย.", "y" => $result2_3),
        array("label" => "พ.ค.", "y" => $result2_3),
        array("label" => "มิ.ย.", "y" => $result2_3),
        array("label" => "ก.ค.", "y" => $result2_3),
        array("label" => "ส.ค.", "y" => $result2_3),
        array("label" => "ก.ย.", "y" => $result2_3)
      );
    }
  } else if (mysqli_num_rows($result4) > 0) {
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

      if (!empty($number1_3) && !empty($divisor1_3)) {
        $result1_3 = $number1_3 * 100 / $divisor1_3;
      } else if (empty($number1_3) && empty($divisor1_3)) {
        $result1_3 = '0';
      } else if ($number1_3 == 0 || $divisor1_3 == 0) {
        $result1_3 = 0;
      }

      $mean_3 = ($result1_3) / 1;
      $min_3 = min($result1_3,$result1_3);
      $max_3 = max($result1_3,$result1_3);

      $dataPoints3 = array(
        array("label" => "ต.ค.", "y" => $result1_3),
        array("label" => "พ.ย.", "y" => $result1_3),
        array("label" => "ธ.ค.", "y" => $result1_3),
        array("label" => "ม.ค.", "y" => $result1_3),
        array("label" => "ก.พ.", "y" => $result1_3),
        array("label" => "มี.ค.", "y" => $result1_3),
        array("label" => "เม.ย.", "y" => $result1_3),
        array("label" => "พ.ค.", "y" => $result1_3),
        array("label" => "มิ.ย.", "y" => $result1_3),
        array("label" => "ก.ค.", "y" => $result1_3),
        array("label" => "ส.ค.", "y" => $result1_3),
        array("label" => "ก.ย.", "y" => $result1_3)

      );
    }
  }
}


if (!empty($graph_4)) {
  $sql1 = "SELECT * FROM graph_m WHERE graph_m_id='$graph_4'";
  $result1 = mysqli_query($connect, $sql1);
  $sql2 = "SELECT * FROM graph_3m WHERE graph_3m_id='$graph_4'";
  $result2 = mysqli_query($connect, $sql2);
  $sql3 = "SELECT * FROM graph_6m WHERE graph_6m_id='$graph_4'";
  $result3 = mysqli_query($connect, $sql3);
  $sql4 = "SELECT * FROM graph_y WHERE graph_y_id='$graph_4'";
  $result4 = mysqli_query($connect, $sql4);

  if (mysqli_num_rows($result1) > 0) {

    $sql_4 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_4 . "'";

    $objQuery_4 = mysqli_query($connect, $sql_4);
    while ($row = mysqli_fetch_array($objQuery_4)) {
      $indicator_id_4 = $row['indicator'];
      $indicator_name_4 = $row['indicator_name'];
      $year_4 = $row['year'];
      $number1_4 = $row['number1'];
      $number2_4 = $row['number2'];
      $number3_4 = $row['number3'];
      $number4_4 = $row['number4'];
      $number5_4 = $row['number5'];
      $number6_4 = $row['number6'];
      $number7_4 = $row['number7'];
      $number8_4 = $row['number8'];
      $number9_4 = $row['number9'];
      $number10_4 = $row['number10'];
      $number11_4 = $row['number11'];
      $number12_4 = $row['number12'];
      $divisor1_4 = $row['divisor1'];
      $divisor2_4 = $row['divisor2'];
      $divisor3_4 = $row['divisor3'];
      $divisor4_4 = $row['divisor4'];
      $divisor5_4 = $row['divisor5'];
      $divisor6_4 = $row['divisor6'];
      $divisor7_4 = $row['divisor7'];
      $divisor8_4 = $row['divisor8'];
      $divisor9_4 = $row['divisor9'];
      $divisor10_4 = $row['divisor10'];
      $divisor11_4 = $row['divisor11'];
      $divisor12_4 = $row['divisor12'];
      $comment_4 = $row['comment'];

      if (!empty($number1_4) && !empty($divisor1_4)) {
        $result1_4 = $number1_4 * 100 / $divisor1_4;
      } else if (empty($number1_4) && empty($divisor1_4)) {
        $result1_4 = '0';
      } else if ($number1_4 == 0 || $divisor1_4 == 0) {
        $result1_4 = 0;
      }
    
      if (!empty($number2_4) && !empty($divisor2_4)) {
        $result2_4 = $number2_4 * 100 / $divisor2_4;
      } else if (empty($number2_4) && empty($divisor2_4)) {
        $result2_4 = '0';
      } else if ($number2_4 == 0 || $divisor2_4 == 0) {
        $result2_4 = 0;
      }
    
      if (!empty($number3_4) && !empty($divisor3_4)) {
        $result3_4 = $number3_4 * 100 / $divisor3_4;
      } else if (empty($number3_4) && empty($divisor3_4)) {
        $result3_4 = '0';
      } else if ($number3_4 == 0 || $divisor3_4 == 0) {
        $result3_4 = 0;
      }
    
      if (!empty($number4_4) && !empty($divisor4_4)) {
        $result4_4 = $number4_4 * 100 / $divisor4_4;
      } else if (empty($number4_4) && empty($divisor4_4)) {
        $result4_4 = '0';
      } else if ($number4_4 == 0 || $divisor4_4 == 0) {
        $result4_4 = 0;
      }
      
      if (!empty($number5_4) && !empty($divisor5_4)) {
        $result5_4 = $number5_4 * 100 / $divisor5_4;
      } else if (empty($number5_4) && empty($divisor5_4)) {
        $result5_4 = '0';
      } else if ($number5_4 == 0 || $divisor5_4 == 0) {
        $result5_4 = 0;
      }
      
      if (!empty($number6_4) && !empty($divisor6_4)) {
        $result6_4 = $number6_4 * 100 / $divisor6_4;
      } else if (empty($number6_4) && empty($divisor6_4)) {
        $result6_4 = '0';
      } else if ($number6_4 == 0 || $divisor6_4 == 0) {
        $result6_4 = 0;
      }
      
      if (!empty($number7_4) && !empty($divisor7_4)) {
        $result7_4 = $number7_4 * 100 / $divisor7_4;
      } else if (empty($number7_4) && empty($divisor7_4)) {
        $result7_4 = '0';
      } else if ($number7_4 == 0 || $divisor7_4 == 0) {
        $result7_4 = 0;
      }
      
      if (!empty($number8_4) && !empty($divisor8_4)) {
        $result8_4 = $number8_4 * 100 / $divisor8_4;
      } else if (empty($number8_4) && empty($divisor8_4)) {
        $result8_4 = '0';
      } else if ($number8_4 == 0 || $divisor8_4 == 0) {
        $result8_4 = 0;
      }
      
      if (!empty($number9_4) && !empty($divisor9_4)) {
        $result9_4 = $number9_4 * 100 / $divisor9_4;
      } else if (empty($number9_4) && empty($divisor9_4)) {
        $result9_4 = '0';
      } else if ($number9_4 == 0 || $divisor9_4 == 0) {
        $result9_4 = 0;
      }
      
      if (!empty($number10_4) && !empty($divisor10_4)) {
        $result10_4 = $number10_4 * 100 / $divisor10_4;
      } else if (empty($number10_4) && empty($divisor10_4)) {
        $result10_4 = '0';
      } else if ($number10_4 == 0 || $divisor10_4 == 0) {
        $result10_4 = 0;
      }
      
      if (!empty($number11_4) && !empty($divisor11_4)) {
        $result11_4 = $number11_4 * 100 / $divisor11_4;
      } else if (empty($number11_4) && empty($divisor11_4)) {
        $result11_4 = '0';
      } else if ($number11_4 == 0 || $divisor11_4 == 0) {
        $result11_4 = 0;
      }
      
      if (!empty($number12_4) && !empty($divisor12_4)) {
        $result12_4 = $number12_4 * 100 / $divisor12_4;
      } else if (empty($number12_4) && empty($divisor12_4)) {
        $result12_4 = '0';
      } else if ($number12_4 == 0 || $divisor12_4 == 0) {
        $result12_4 = 0;
      }

      $mean_4 = ($result1_4 + $result2_4 + $result3_4 + $result4_4 + $result5_4 + $result6_4 + $result7_4 + $result8_4 + $result9_4 + $result10_4 + $result11_4 + $result12_4) / 12;
      $min_4 = min($result1_4, $result2_4, $result3_4, $result4_4, $result5_4, $result6_4, $result7_4, $result8_4, $result9_4, $result10_4, $result11_4, $result12_4);
      $max_4 = max($result1_4, $result2_4, $result3_4, $result4_4, $result5_4, $result6_4, $result7_4, $result8_4, $result9_4, $result10_4, $result11_4, $result12_4);

      $dataPoints4 = array(
        array("label" => "ต.ค.", "y" => $result1_4),
        array("label" => "พ.ย.", "y" => $result2_4),
        array("label" => "ธ.ค.", "y" => $result3_4),
        array("label" => "ม.ค.", "y" => $result4_4),
        array("label" => "ก.พ.", "y" => $result5_4),
        array("label" => "มี.ค.", "y" => $result6_4),
        array("label" => "เม.ย.", "y" => $result7_4),
        array("label" => "พ.ค.", "y" => $result8_4),
        array("label" => "มิ.ย.", "y" => $result9_4),
        array("label" => "ก.ค.", "y" => $result10_4),
        array("label" => "ส.ค.", "y" => $result11_4),
        array("label" => "ก.ย.", "y" => $result12_4)

      );
    }
  } else if (mysqli_num_rows($result2) > 0) {

    $sql_4 = "SELECT graph_3m.*, indicator.* 
  FROM graph_3m, indicator 
  WHERE indicator.indicator_code=graph_3m.indicator 
  AND graph_3m_id = '" . $graph_4 . "'";

    $objQuery_4 = mysqli_query($connect, $sql_4);
    while ($row = mysqli_fetch_array($objQuery_4)) {
      $indicator_id_4 = $row['indicator'];
      $indicator_name_4 = $row['indicator_name'];
      $year_4 = $row['year'];
      $number1_4 = $row['number1'];
      $number2_4 = $row['number2'];
      $number3_4 = $row['number3'];
      $number4_4 = $row['number4'];
      $divisor1_4 = $row['divisor1'];
      $divisor2_4 = $row['divisor2'];
      $divisor3_4 = $row['divisor3'];
      $divisor4_4 = $row['divisor4'];
      $comment_4 = $row['comment'];

      if (!empty($number1_4) && !empty($divisor1_4)) {
        $result1_4 = $number1_4 * 100 / $divisor1_4;
      } else if (empty($number1_4) && empty($divisor1_4)) {
        $result1_4 = '0';
      } else if ($number1_4 == 0 || $divisor1_4 == 0) {
        $result1_4 = 0;
      }
    
      if (!empty($number2_4) && !empty($divisor2_4)) {
        $result2_4 = $number2_4 * 100 / $divisor2_4;
      } else if (empty($number2_4) && empty($divisor2_4)) {
        $result2_4 = '0';
      } else if ($number2_4 == 0 || $divisor2_4 == 0) {
        $result2_4 = 0;
      }
    
      if (!empty($number3_4) && !empty($divisor3_4)) {
        $result3_4 = $number3_4 * 100 / $divisor3_4;
      } else if (empty($number3_4) && empty($divisor3_4)) {
        $result3_4 = '0';
      } else if ($number3_4 == 0 || $divisor3_4 == 0) {
        $result3_4 = 0;
      }
    
      if (!empty($number4_4) && !empty($divisor4_4)) {
        $result4_4 = $number4_4 * 100 / $divisor4_4;
      } else if (empty($number4_4) && empty($divisor4_4)) {
        $result4_4 = '0';
      } else if ($number4_4 == 0 || $divisor4_4 == 0) {
        $result4_4 = 0;
      }

      $mean_4 = ($result1_4 + $result2_4 + $result3_4 + $result4_4) / 4;
      $min_4 = min($result1_4, $result2_4, $result3_4, $result4_4);
      $max_4 = max($result1_4, $result2_4, $result3_4, $result4_4);

      $dataPoints4 = array(
        array("label" => "ต.ค.", "y" => $result1_4),
        array("label" => "พ.ย.", "y" => $result1_4),
        array("label" => "ธ.ค.", "y" => $result1_4),
        array("label" => "ม.ค.", "y" => $result2_4),
        array("label" => "ก.พ.", "y" => $result2_4),
        array("label" => "มี.ค.", "y" => $result2_4),
        array("label" => "เม.ย.", "y" => $result3_4),
        array("label" => "พ.ค.", "y" => $result3_4),
        array("label" => "มิ.ย.", "y" => $result3_4),
        array("label" => "ก.ค.", "y" => $result4_4),
        array("label" => "ส.ค.", "y" => $result4_4),
        array("label" => "ก.ย.", "y" => $result4_4)
      );
    }
  } else if (mysqli_num_rows($result3) > 0) {

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

      if (!empty($number1_4) && !empty($divisor1_4)) {
        $result1_4 = $number1_4 * 100 / $divisor1_4;
      } else if (empty($number1_4) && empty($divisor1_4)) {
        $result1_4 = '0';
      } else if ($number1_4 == 0 || $divisor1_4 == 0) {
        $result1_4 = 0;
      }
    
      if (!empty($number2_4) && !empty($divisor2_4)) {
        $result2_4 = $number2_4 * 100 / $divisor2_4;
      } else if (empty($number2_4) && empty($divisor2_4)) {
        $result2_4 = '0';
      } else if ($number2_4 == 0 || $divisor2_4 == 0) {
        $result2_4 = 0;
      }

      $mean_4 = ($result1_4 + $result2_4) / 2;
      $min_4 = min($result1_4, $result2_4);
      $max_4 = max($result1_4, $result2_4);

      $dataPoints4 = array(
        array("label" => "ต.ค.", "y" => $result1_4),
        array("label" => "พ.ย.", "y" => $result1_4),
        array("label" => "ธ.ค.", "y" => $result1_4),
        array("label" => "ม.ค.", "y" => $result1_4),
        array("label" => "ก.พ.", "y" => $result1_4),
        array("label" => "มี.ค.", "y" => $result1_4),
        array("label" => "เม.ย.", "y" => $result2_4),
        array("label" => "พ.ค.", "y" => $result2_4),
        array("label" => "มิ.ย.", "y" => $result2_4),
        array("label" => "ก.ค.", "y" => $result2_4),
        array("label" => "ส.ค.", "y" => $result2_4),
        array("label" => "ก.ย.", "y" => $result2_4)
      );
    }
  } else if (mysqli_num_rows($result4) > 0) {
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

      if (!empty($number1_4) && !empty($divisor1_4)) {
        $result1_4 = $number1_4 * 100 / $divisor1_4;
      } else if (empty($number1_4) && empty($divisor1_4)) {
        $result1_4 = '0';
      } else if ($number1_4 == 0 || $divisor1_4 == 0) {
        $result1_4 = 0;
      }

      $mean_4 = ($result1_4) / 1;
      $min_4 = min($result1_4,$result1_4);
      $max_4 = max($result1_4,$result1_4);

      $dataPoints4 = array(
        array("label" => "ต.ค.", "y" => $result1_4),
        array("label" => "พ.ย.", "y" => $result1_4),
        array("label" => "ธ.ค.", "y" => $result1_4),
        array("label" => "ม.ค.", "y" => $result1_4),
        array("label" => "ก.พ.", "y" => $result1_4),
        array("label" => "มี.ค.", "y" => $result1_4),
        array("label" => "เม.ย.", "y" => $result1_4),
        array("label" => "พ.ค.", "y" => $result1_4),
        array("label" => "มิ.ย.", "y" => $result1_4),
        array("label" => "ก.ค.", "y" => $result1_4),
        array("label" => "ส.ค.", "y" => $result1_4),
        array("label" => "ก.ย.", "y" => $result1_4)

      );
    }
  }
}


if (!empty($graph_5)) {
  $sql1 = "SELECT * FROM graph_m WHERE graph_m_id='$graph_5'";
  $result1 = mysqli_query($connect, $sql1);
  $sql2 = "SELECT * FROM graph_3m WHERE graph_3m_id='$graph_5'";
  $result2 = mysqli_query($connect, $sql2);
  $sql3 = "SELECT * FROM graph_6m WHERE graph_6m_id='$graph_5'";
  $result3 = mysqli_query($connect, $sql3);
  $sql4 = "SELECT * FROM graph_y WHERE graph_y_id='$graph_5'";
  $result4 = mysqli_query($connect, $sql4);

  if (mysqli_num_rows($result1) > 0) {

    $sql_5 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_5 . "'";

    $objQuery_5 = mysqli_query($connect, $sql_5);
    while ($row = mysqli_fetch_array($objQuery_5)) {
      $indicator_id_5 = $row['indicator'];
      $indicator_name_5 = $row['indicator_name'];
      $year_5 = $row['year'];
      $number1_5 = $row['number1'];
      $number2_5 = $row['number2'];
      $number3_5 = $row['number3'];
      $number4_5 = $row['number4'];
      $number5_5 = $row['number5'];
      $number6_5 = $row['number6'];
      $number7_5 = $row['number7'];
      $number8_5 = $row['number8'];
      $number9_5 = $row['number9'];
      $number10_5 = $row['number10'];
      $number11_5 = $row['number11'];
      $number12_5 = $row['number12'];
      $divisor1_5 = $row['divisor1'];
      $divisor2_5 = $row['divisor2'];
      $divisor3_5 = $row['divisor3'];
      $divisor4_5 = $row['divisor4'];
      $divisor5_5 = $row['divisor5'];
      $divisor6_5 = $row['divisor6'];
      $divisor7_5 = $row['divisor7'];
      $divisor8_5 = $row['divisor8'];
      $divisor9_5 = $row['divisor9'];
      $divisor10_5 = $row['divisor10'];
      $divisor11_5 = $row['divisor11'];
      $divisor12_5 = $row['divisor12'];
      $comment_5 = $row['comment'];

      if (!empty($number1_5) && !empty($divisor1_5)) {
        $result1_5 = $number1_5 * 100 / $divisor1_5;
      } else if (empty($number1_5) && empty($divisor1_5)) {
        $result1_5 = '0';
      } else if ($number1_5 == 0 || $divisor1_5 == 0) {
        $result1_5 = 0;
      }
    
      if (!empty($number2_5) && !empty($divisor2_5)) {
        $result2_5 = $number2_5 * 100 / $divisor2_5;
      } else if (empty($number2_5) && empty($divisor2_5)) {
        $result2_5 = '0';
      } else if ($number2_5 == 0 || $divisor2_5 == 0) {
        $result2_5 = 0;
      }
    
      if (!empty($number3_5) && !empty($divisor3_5)) {
        $result3_5 = $number3_5 * 100 / $divisor3_5;
      } else if (empty($number3_5) && empty($divisor3_5)) {
        $result3_5 = '0';
      } else if ($number3_5 == 0 || $divisor3_5 == 0) {
        $result3_5 = 0;
      }
    
      if (!empty($number4_5) && !empty($divisor4_5)) {
        $result4_5 = $number4_5 * 100 / $divisor4_5;
      } else if (empty($number4_5) && empty($divisor4_5)) {
        $result4_5 = '0';
      } else if ($number4_5 == 0 || $divisor4_5 == 0) {
        $result4_5 = 0;
      }
      
      if (!empty($number5_5) && !empty($divisor5_5)) {
        $result5_5 = $number5_5 * 100 / $divisor5_5;
      } else if (empty($number5_5) && empty($divisor5_5)) {
        $result5_5 = '0';
      } else if ($number5_5 == 0 || $divisor5_5 == 0) {
        $result5_5 = 0;
      }
      
      if (!empty($number6_5) && !empty($divisor6_5)) {
        $result6_5 = $number6_5 * 100 / $divisor6_5;
      } else if (empty($number6_5) && empty($divisor6_5)) {
        $result6_5 = '0';
      } else if ($number6_5 == 0 || $divisor6_5 == 0) {
        $result6_5 = 0;
      }
      
      if (!empty($number7_5) && !empty($divisor7_5)) {
        $result7_5 = $number7_5 * 100 / $divisor7_5;
      } else if (empty($number7_5) && empty($divisor7_5)) {
        $result7_5 = '0';
      } else if ($number7_5 == 0 || $divisor7_5 == 0) {
        $result7_5 = 0;
      }
      
      if (!empty($number8_5) && !empty($divisor8_5)) {
        $result8_5 = $number8_5 * 100 / $divisor8_5;
      } else if (empty($number8_5) && empty($divisor8_5)) {
        $result8_5 = '0';
      } else if ($number8_5 == 0 || $divisor8_5 == 0) {
        $result8_5 = 0;
      }
      
      if (!empty($number9_5) && !empty($divisor9_5)) {
        $result9_5 = $number9_5 * 100 / $divisor9_5;
      } else if (empty($number9_5) && empty($divisor9_5)) {
        $result9_5 = '0';
      } else if ($number9_5 == 0 || $divisor9_5 == 0) {
        $result9_5 = 0;
      }
      
      if (!empty($number10_5) && !empty($divisor10_5)) {
        $result10_5 = $number10_5 * 100 / $divisor10_5;
      } else if (empty($number10_5) && empty($divisor10_5)) {
        $result10_5 = '0';
      } else if ($number10_5 == 0 || $divisor10_5 == 0) {
        $result10_5 = 0;
      }
      
      if (!empty($number11_5) && !empty($divisor11_5)) {
        $result11_5 = $number11_5 * 100 / $divisor11_5;
      } else if (empty($number11_5) && empty($divisor11_5)) {
        $result11_5 = '0';
      } else if ($number11_5 == 0 || $divisor11_5 == 0) {
        $result11_5 = 0;
      }
      
      if (!empty($number12_5) && !empty($divisor12_5)) {
        $result12_5 = $number12_5 * 100 / $divisor12_5;
      } else if (empty($number12_5) && empty($divisor12_5)) {
        $result12_5 = '0';
      } else if ($number12_5 == 0 || $divisor12_5 == 0) {
        $result12_5 = 0;
      }

      $mean_5 = ($result1_5 + $result2_5 + $result3_5 + $result4_5 + $result5_5 + $result6_5 + $result7_5 + $result8_5 + $result9_5 + $result10_5 + $result11_5 + $result12_5) / 12;
      $min_5 = min($result1_5, $result2_5, $result3_5, $result4_5, $result5_5, $result6_5, $result7_5, $result8_5, $result9_5, $result10_5, $result11_5, $result12_5);
      $max_5 = max($result1_5, $result2_5, $result3_5, $result4_5, $result5_5, $result6_5, $result7_5, $result8_5, $result9_5, $result10_5, $result11_5, $result12_5);

      $dataPoints5 = array(
        array("label" => "ต.ค.", "y" => $result1_5),
        array("label" => "พ.ย.", "y" => $result2_5),
        array("label" => "ธ.ค.", "y" => $result3_5),
        array("label" => "ม.ค.", "y" => $result4_5),
        array("label" => "ก.พ.", "y" => $result5_5),
        array("label" => "มี.ค.", "y" => $result6_5),
        array("label" => "เม.ย.", "y" => $result7_5),
        array("label" => "พ.ค.", "y" => $result8_5),
        array("label" => "มิ.ย.", "y" => $result9_5),
        array("label" => "ก.ค.", "y" => $result10_5),
        array("label" => "ส.ค.", "y" => $result11_5),
        array("label" => "ก.ย.", "y" => $result12_5)

      );
    }
  } else if (mysqli_num_rows($result2) > 0) {

    $sql_5 = "SELECT graph_3m.*, indicator.* 
  FROM graph_3m, indicator 
  WHERE indicator.indicator_code=graph_3m.indicator 
  AND graph_3m_id = '" . $graph_5 . "'";

    $objQuery_5 = mysqli_query($connect, $sql_5);
    while ($row = mysqli_fetch_array($objQuery_5)) {
      $indicator_id_5 = $row['indicator'];
      $indicator_name_5 = $row['indicator_name'];
      $year_5 = $row['year'];
      $number1_5 = $row['number1'];
      $number2_5 = $row['number2'];
      $number3_5 = $row['number3'];
      $number4_5 = $row['number4'];
      $divisor1_5 = $row['divisor1'];
      $divisor2_5 = $row['divisor2'];
      $divisor3_5 = $row['divisor3'];
      $divisor4_5 = $row['divisor4'];
      $comment_5 = $row['comment'];

      if (!empty($number1_5) && !empty($divisor1_5)) {
        $result1_5 = $number1_5 * 100 / $divisor1_5;
      } else if (empty($number1_5) && empty($divisor1_5)) {
        $result1_5 = '0';
      } else if ($number1_5 == 0 || $divisor1_5 == 0) {
        $result1_5 = 0;
      }
    
      if (!empty($number2_5) && !empty($divisor2_5)) {
        $result2_5 = $number2_5 * 100 / $divisor2_5;
      } else if (empty($number2_5) && empty($divisor2_5)) {
        $result2_5 = '0';
      } else if ($number2_5 == 0 || $divisor2_5 == 0) {
        $result2_5 = 0;
      }
    
      if (!empty($number3_5) && !empty($divisor3_5)) {
        $result3_5 = $number3_5 * 100 / $divisor3_5;
      } else if (empty($number3_5) && empty($divisor3_5)) {
        $result3_5 = '0';
      } else if ($number3_5 == 0 || $divisor3_5 == 0) {
        $result3_5 = 0;
      }
    
      if (!empty($number4_5) && !empty($divisor4_5)) {
        $result4_5 = $number4_5 * 100 / $divisor4_5;
      } else if (empty($number4_5) && empty($divisor4_5)) {
        $result4_5 = '0';
      } else if ($number4_5 == 0 || $divisor4_5 == 0) {
        $result4_5 = 0;
      }

      $mean_5 = ($result1_5 + $result2_5 + $result3_5 + $result4_5) / 4;
      $min_5 = min($result1_5, $result2_5, $result3_5, $result4_5);
      $max_5 = max($result1_5, $result2_5, $result3_5, $result4_5);

      $dataPoints5 = array(
        array("label" => "ต.ค.", "y" => $result1_5),
        array("label" => "พ.ย.", "y" => $result1_5),
        array("label" => "ธ.ค.", "y" => $result1_5),
        array("label" => "ม.ค.", "y" => $result2_5),
        array("label" => "ก.พ.", "y" => $result2_5),
        array("label" => "มี.ค.", "y" => $result2_5),
        array("label" => "เม.ย.", "y" => $result3_5),
        array("label" => "พ.ค.", "y" => $result3_5),
        array("label" => "มิ.ย.", "y" => $result3_5),
        array("label" => "ก.ค.", "y" => $result4_5),
        array("label" => "ส.ค.", "y" => $result4_5),
        array("label" => "ก.ย.", "y" => $result4_5)
      );
    }
  } else if (mysqli_num_rows($result3) > 0) {

    $sql_5 = "SELECT graph_6m.*, indicator.* 
FROM graph_6m, indicator 
WHERE indicator.indicator_code=graph_6m.indicator 
AND graph_6m_id = '" . $graph_5 . "'";

    $objQuery_5 = mysqli_query($connect, $sql_5);
    while ($row = mysqli_fetch_array($objQuery_5)) {
      $indicator_id_5 = $row['indicator'];
      $indicator_name_5 = $row['indicator_name'];
      $year_5 = $row['year'];
      $number1_5 = $row['number1'];
      $number2_5 = $row['number2'];
      $divisor1_5 = $row['divisor1'];
      $divisor2_5 = $row['divisor2'];
      $comment_5 = $row['comment'];

      if (!empty($number1_5) && !empty($divisor1_5)) {
        $result1_5 = $number1_5 * 100 / $divisor1_5;
      } else if (empty($number1_5) && empty($divisor1_5)) {
        $result1_5 = '0';
      } else if ($number1_5 == 0 || $divisor1_5 == 0) {
        $result1_5 = 0;
      }
    
      if (!empty($number2_5) && !empty($divisor2_5)) {
        $result2_5 = $number2_5 * 100 / $divisor2_5;
      } else if (empty($number2_5) && empty($divisor2_5)) {
        $result2_5 = '0';
      } else if ($number2_5 == 0 || $divisor2_5 == 0) {
        $result2_5 = 0;
      }

      $mean_5 = ($result1_5 + $result2_5) / 2;
      $min_5 = min($result1_5, $result2_5);
      $max_5 = max($result1_5, $result2_5);

      $dataPoints5 = array(
        array("label" => "ต.ค.", "y" => $result1_5),
        array("label" => "พ.ย.", "y" => $result1_5),
        array("label" => "ธ.ค.", "y" => $result1_5),
        array("label" => "ม.ค.", "y" => $result1_5),
        array("label" => "ก.พ.", "y" => $result1_5),
        array("label" => "มี.ค.", "y" => $result1_5),
        array("label" => "เม.ย.", "y" => $result2_5),
        array("label" => "พ.ค.", "y" => $result2_5),
        array("label" => "มิ.ย.", "y" => $result2_5),
        array("label" => "ก.ค.", "y" => $result2_5),
        array("label" => "ส.ค.", "y" => $result2_5),
        array("label" => "ก.ย.", "y" => $result2_5)
      );
    }
  } else if (mysqli_num_rows($result4) > 0) {
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

      if (!empty($number1_5) && !empty($divisor1_5)) {
        $result1_5 = $number1_5 * 100 / $divisor1_5;
      } else if (empty($number1_5) && empty($divisor1_5)) {
        $result1_5 = '0';
      } else if ($number1_5 == 0 || $divisor1_5 == 0) {
        $result1_5 = 0;
      }

      $mean_5 = ($result1_5) / 1;
      $min_5 = min($result1_5,$result1_5);
      $max_5 = max($result1_5,$result1_5);

      $dataPoints5 = array(
        array("label" => "ต.ค.", "y" => $result1_5),
        array("label" => "พ.ย.", "y" => $result1_5),
        array("label" => "ธ.ค.", "y" => $result1_5),
        array("label" => "ม.ค.", "y" => $result1_5),
        array("label" => "ก.พ.", "y" => $result1_5),
        array("label" => "มี.ค.", "y" => $result1_5),
        array("label" => "เม.ย.", "y" => $result1_5),
        array("label" => "พ.ค.", "y" => $result1_5),
        array("label" => "มิ.ย.", "y" => $result1_5),
        array("label" => "ก.ค.", "y" => $result1_5),
        array("label" => "ส.ค.", "y" => $result1_5),
        array("label" => "ก.ย.", "y" => $result1_5)

      );
    }
  }
}

if (!empty($graph_6)) {
  $sql1 = "SELECT * FROM graph_m WHERE graph_m_id='$graph_6'";
  $result1 = mysqli_query($connect, $sql1);
  $sql2 = "SELECT * FROM graph_3m WHERE graph_3m_id='$graph_6'";
  $result2 = mysqli_query($connect, $sql2);
  $sql3 = "SELECT * FROM graph_6m WHERE graph_6m_id='$graph_6'";
  $result3 = mysqli_query($connect, $sql3);
  $sql4 = "SELECT * FROM graph_y WHERE graph_y_id='$graph_6'";
  $result4 = mysqli_query($connect, $sql4);

  if (mysqli_num_rows($result1) > 0) {

    $sql_6 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_6 . "'";

    $objQuery_6 = mysqli_query($connect, $sql_6);
    while ($row = mysqli_fetch_array($objQuery_6)) {
      $indicator_id_6 = $row['indicator'];
      $indicator_name_6 = $row['indicator_name'];
      $year_6 = $row['year'];
      $number1_6 = $row['number1'];
      $number2_6 = $row['number2'];
      $number3_6 = $row['number3'];
      $number4_6 = $row['number4'];
      $number5_6 = $row['number5'];
      $number6_6 = $row['number6'];
      $number7_6 = $row['number7'];
      $number8_6 = $row['number8'];
      $number9_6 = $row['number9'];
      $number10_6 = $row['number10'];
      $number11_6 = $row['number11'];
      $number12_6 = $row['number12'];
      $divisor1_6 = $row['divisor1'];
      $divisor2_6 = $row['divisor2'];
      $divisor3_6 = $row['divisor3'];
      $divisor4_6 = $row['divisor4'];
      $divisor5_6 = $row['divisor5'];
      $divisor6_6 = $row['divisor6'];
      $divisor7_6 = $row['divisor7'];
      $divisor8_6 = $row['divisor8'];
      $divisor9_6 = $row['divisor9'];
      $divisor10_6 = $row['divisor10'];
      $divisor11_6 = $row['divisor11'];
      $divisor12_6 = $row['divisor12'];
      $comment_6 = $row['comment'];

      if (!empty($number1_6) && !empty($divisor1_6)) {
        $result1_6 = $number1_6 * 100 / $divisor1_6;
      } else if (empty($number1_6) && empty($divisor1_6)) {
        $result1_6 = '0';
      } else if ($number1_6 == 0 || $divisor1_6 == 0) {
        $result1_6 = 0;
      }
    
      if (!empty($number2_6) && !empty($divisor2_6)) {
        $result2_6 = $number2_6 * 100 / $divisor2_6;
      } else if (empty($number2_6) && empty($divisor2_6)) {
        $result2_6 = '0';
      } else if ($number2_6 == 0 || $divisor2_6 == 0) {
        $result2_6 = 0;
      }
    
      if (!empty($number3_6) && !empty($divisor3_6)) {
        $result3_6 = $number3_6 * 100 / $divisor3_6;
      } else if (empty($number3_6) && empty($divisor3_6)) {
        $result3_6 = '0';
      } else if ($number3_6 == 0 || $divisor3_6 == 0) {
        $result3_6 = 0;
      }
    
      if (!empty($number4_6) && !empty($divisor4_6)) {
        $result4_6 = $number4_6 * 100 / $divisor4_6;
      } else if (empty($number4_6) && empty($divisor4_6)) {
        $result4_6 = '0';
      } else if ($number4_6 == 0 || $divisor4_6 == 0) {
        $result4_6 = 0;
      }
      
      if (!empty($number5_6) && !empty($divisor5_6)) {
        $result5_6 = $number5_6 * 100 / $divisor5_6;
      } else if (empty($number5_6) && empty($divisor5_6)) {
        $result5_6 = '0';
      } else if ($number5_6 == 0 || $divisor5_6 == 0) {
        $result5_6 = 0;
      }
      
      if (!empty($number6_6) && !empty($divisor6_6)) {
        $result6_6 = $number6_6 * 100 / $divisor6_6;
      } else if (empty($number6_6) && empty($divisor6_6)) {
        $result6_6 = '0';
      } else if ($number6_6 == 0 || $divisor6_6 == 0) {
        $result6_6 = 0;
      }
      
      if (!empty($number7_6) && !empty($divisor7_6)) {
        $result7_6 = $number7_6 * 100 / $divisor7_6;
      } else if (empty($number7_6) && empty($divisor7_6)) {
        $result7_6 = '0';
      } else if ($number7_6 == 0 || $divisor7_6 == 0) {
        $result7_6 = 0;
      }
      
      if (!empty($number8_6) && !empty($divisor8_6)) {
        $result8_6 = $number8_6 * 100 / $divisor8_6;
      } else if (empty($number8_6) && empty($divisor8_6)) {
        $result8_6 = '0';
      } else if ($number8_6 == 0 || $divisor8_6 == 0) {
        $result8_6 = 0;
      }
      
      if (!empty($number9_6) && !empty($divisor9_6)) {
        $result9_6 = $number9_6 * 100 / $divisor9_6;
      } else if (empty($number9_6) && empty($divisor9_6)) {
        $result9_6 = '0';
      } else if ($number9_6 == 0 || $divisor9_6 == 0) {
        $result9_6 = 0;
      }
      
      if (!empty($number10_6) && !empty($divisor10_6)) {
        $result10_6 = $number10_6 * 100 / $divisor10_6;
      } else if (empty($number10_6) && empty($divisor10_6)) {
        $result10_6 = '0';
      } else if ($number10_6 == 0 || $divisor10_6 == 0) {
        $result10_6 = 0;
      }
      
      if (!empty($number11_6) && !empty($divisor11_6)) {
        $result11_6 = $number11_6 * 100 / $divisor11_6;
      } else if (empty($number11_6) && empty($divisor11_6)) {
        $result11_6 = '0';
      } else if ($number11_6 == 0 || $divisor11_6 == 0) {
        $result11_6 = 0;
      }
      
      if (!empty($number12_6) && !empty($divisor12_6)) {
        $result12_6 = $number12_6 * 100 / $divisor12_6;
      } else if (empty($number12_6) && empty($divisor12_6)) {
        $result12_6 = '0';
      } else if ($number12_6 == 0 || $divisor12_6 == 0) {
        $result12_6 = 0;
      }

      $mean_6 = ($result1_6 + $result2_6 + $result3_6 + $result4_6 + $result5_6 + $result6_6 + $result7_6 + $result8_6 + $result9_6 + $result10_6 + $result11_6 + $result12_6) / 12;
      $min_6 = min($result1_6, $result2_6, $result3_6, $result4_6, $result5_6, $result6_6, $result7_6, $result8_6, $result9_6, $result10_6, $result11_6, $result12_6);
      $max_6 = max($result1_6, $result2_6, $result3_6, $result4_6, $result5_6, $result6_6, $result7_6, $result8_6, $result9_6, $result10_6, $result11_6, $result12_6);

      $dataPoints6 = array(
        array("label" => "ต.ค.", "y" => $result1_6),
        array("label" => "พ.ย.", "y" => $result2_6),
        array("label" => "ธ.ค.", "y" => $result3_6),
        array("label" => "ม.ค.", "y" => $result4_6),
        array("label" => "ก.พ.", "y" => $result5_6),
        array("label" => "มี.ค.", "y" => $result6_6),
        array("label" => "เม.ย.", "y" => $result7_6),
        array("label" => "พ.ค.", "y" => $result8_6),
        array("label" => "มิ.ย.", "y" => $result9_6),
        array("label" => "ก.ค.", "y" => $result10_6),
        array("label" => "ส.ค.", "y" => $result11_6),
        array("label" => "ก.ย.", "y" => $result12_6)

      );
    }
  } else if (mysqli_num_rows($result2) > 0) {

    $sql_6 = "SELECT graph_3m.*, indicator.* 
  FROM graph_3m, indicator 
  WHERE indicator.indicator_code=graph_3m.indicator 
  AND graph_3m_id = '" . $graph_6 . "'";

    $objQuery_6 = mysqli_query($connect, $sql_6);
    while ($row = mysqli_fetch_array($objQuery_6)) {
      $indicator_id_6 = $row['indicator'];
      $indicator_name_6 = $row['indicator_name'];
      $year_6 = $row['year'];
      $number1_6 = $row['number1'];
      $number2_6 = $row['number2'];
      $number3_6 = $row['number3'];
      $number4_6 = $row['number4'];
      $divisor1_6 = $row['divisor1'];
      $divisor2_6 = $row['divisor2'];
      $divisor3_6 = $row['divisor3'];
      $divisor4_6 = $row['divisor4'];
      $comment_6 = $row['comment'];

      if (!empty($number1_6) && !empty($divisor1_6)) {
        $result1_6 = $number1_6 * 100 / $divisor1_6;
      } else if (empty($number1_6) && empty($divisor1_6)) {
        $result1_6 = '0';
      } else if ($number1_6 == 0 || $divisor1_6 == 0) {
        $result1_6 = 0;
      }
    
      if (!empty($number2_6) && !empty($divisor2_6)) {
        $result2_6 = $number2_6 * 100 / $divisor2_6;
      } else if (empty($number2_6) && empty($divisor2_6)) {
        $result2_6 = '0';
      } else if ($number2_6 == 0 || $divisor2_6 == 0) {
        $result2_6 = 0;
      }
    
      if (!empty($number3_6) && !empty($divisor3_6)) {
        $result3_6 = $number3_6 * 100 / $divisor3_6;
      } else if (empty($number3_6) && empty($divisor3_6)) {
        $result3_6 = '0';
      } else if ($number3_6 == 0 || $divisor3_6 == 0) {
        $result3_6 = 0;
      }
    
      if (!empty($number4_6) && !empty($divisor4_6)) {
        $result4_6 = $number4_6 * 100 / $divisor4_6;
      } else if (empty($number4_6) && empty($divisor4_6)) {
        $result4_6 = '0';
      } else if ($number4_6 == 0 || $divisor4_6 == 0) {
        $result4_6 = 0;
      }

      $mean_6 = ($result1_6 + $result2_6 + $result3_6 + $result4_6) / 4;
      $min_6 = min($result1_6, $result2_6, $result3_6, $result4_6);
      $max_6 = max($result1_6, $result2_6, $result3_6, $result4_6);

      $dataPoints6 = array(
        array("label" => "ต.ค.", "y" => $result1_6),
        array("label" => "พ.ย.", "y" => $result1_6),
        array("label" => "ธ.ค.", "y" => $result1_6),
        array("label" => "ม.ค.", "y" => $result2_6),
        array("label" => "ก.พ.", "y" => $result2_6),
        array("label" => "มี.ค.", "y" => $result2_6),
        array("label" => "เม.ย.", "y" => $result3_6),
        array("label" => "พ.ค.", "y" => $result3_6),
        array("label" => "มิ.ย.", "y" => $result3_6),
        array("label" => "ก.ค.", "y" => $result4_6),
        array("label" => "ส.ค.", "y" => $result4_6),
        array("label" => "ก.ย.", "y" => $result4_6)
      );
    }
  } else if (mysqli_num_rows($result3) > 0) {

    $sql_6 = "SELECT graph_6m.*, indicator.* 
FROM graph_6m, indicator 
WHERE indicator.indicator_code=graph_6m.indicator 
AND graph_6m_id = '" . $graph_6 . "'";

    $objQuery_6 = mysqli_query($connect, $sql_6);
    while ($row = mysqli_fetch_array($objQuery_6)) {
      $indicator_id_6 = $row['indicator'];
      $indicator_name_6 = $row['indicator_name'];
      $year_6 = $row['year'];
      $number1_6 = $row['number1'];
      $number2_6 = $row['number2'];
      $divisor1_6 = $row['divisor1'];
      $divisor2_6 = $row['divisor2'];
      $comment_6 = $row['comment'];

      if (!empty($number1_6) && !empty($divisor1_6)) {
        $result1_6 = $number1_6 * 100 / $divisor1_6;
      } else if (empty($number1_6) && empty($divisor1_6)) {
        $result1_6 = '0';
      } else if ($number1_6 == 0 || $divisor1_6 == 0) {
        $result1_6 = 0;
      }
    
      if (!empty($number2_6) && !empty($divisor2_6)) {
        $result2_6 = $number2_6 * 100 / $divisor2_6;
      } else if (empty($number2_6) && empty($divisor2_6)) {
        $result2_6 = '0';
      } else if ($number2_6 == 0 || $divisor2_6 == 0) {
        $result2_6 = 0;
      }

      $mean_6 = ($result1_6 + $result2_6) / 2;
      $min_6 = min($result1_6, $result2_6);
      $max_6 = max($result1_6, $result2_6);

      $dataPoints6 = array(
        array("label" => "ต.ค.", "y" => $result1_6),
        array("label" => "พ.ย.", "y" => $result1_6),
        array("label" => "ธ.ค.", "y" => $result1_6),
        array("label" => "ม.ค.", "y" => $result1_6),
        array("label" => "ก.พ.", "y" => $result1_6),
        array("label" => "มี.ค.", "y" => $result1_6),
        array("label" => "เม.ย.", "y" => $result2_6),
        array("label" => "พ.ค.", "y" => $result2_6),
        array("label" => "มิ.ย.", "y" => $result2_6),
        array("label" => "ก.ค.", "y" => $result2_6),
        array("label" => "ส.ค.", "y" => $result2_6),
        array("label" => "ก.ย.", "y" => $result2_6)
      );
    }
  } else if (mysqli_num_rows($result4) > 0) {
    $sql_6 = "SELECT graph_y.*, indicator.* 
FROM graph_y, indicator 
WHERE indicator.indicator_code=graph_y.indicator 
AND graph_y_id = '" . $graph_6 . "'";

    $objQuery_6 = mysqli_query($connect, $sql_6);
    while ($row = mysqli_fetch_array($objQuery_6)) {
      $indicator_id_6 = $row['indicator'];
      $indicator_name_6 = $row['indicator_name'];
      $year_6 = $row['year'];
      $number1_6 = $row['number1'];
      $divisor1_6 = $row['divisor1'];
      $comment_6 = $row['comment'];

      if (!empty($number1_6) && !empty($divisor1_6)) {
        $result1_6 = $number1_6 * 100 / $divisor1_6;
      } else if (empty($number1_6) && empty($divisor1_6)) {
        $result1_6 = '0';
      } else if ($number1_6 == 0 || $divisor1_6 == 0) {
        $result1_6 = 0;
      }

      $mean_6 = ($result1_6) / 1;
      $min_6 = min($result1_6,$result1_6);
      $max_6 = max($result1_6,$result1_6);

      $dataPoints6 = array(
        array("label" => "ต.ค.", "y" => $result1_6),
        array("label" => "พ.ย.", "y" => $result1_6),
        array("label" => "ธ.ค.", "y" => $result1_6),
        array("label" => "ม.ค.", "y" => $result1_6),
        array("label" => "ก.พ.", "y" => $result1_6),
        array("label" => "มี.ค.", "y" => $result1_6),
        array("label" => "เม.ย.", "y" => $result1_6),
        array("label" => "พ.ค.", "y" => $result1_6),
        array("label" => "มิ.ย.", "y" => $result1_6),
        array("label" => "ก.ค.", "y" => $result1_6),
        array("label" => "ส.ค.", "y" => $result1_6),
        array("label" => "ก.ย.", "y" => $result1_6)

      );
    }
  }
}


if (!empty($graph_7)) {
  $sql1 = "SELECT * FROM graph_m WHERE graph_m_id='$graph_7'";
  $result1 = mysqli_query($connect, $sql1);
  $sql2 = "SELECT * FROM graph_3m WHERE graph_3m_id='$graph_7'";
  $result2 = mysqli_query($connect, $sql2);
  $sql3 = "SELECT * FROM graph_6m WHERE graph_6m_id='$graph_7'";
  $result3 = mysqli_query($connect, $sql3);
  $sql4 = "SELECT * FROM graph_y WHERE graph_y_id='$graph_7'";
  $result4 = mysqli_query($connect, $sql4);

  if (mysqli_num_rows($result1) > 0) {

    $sql_7 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_7 . "'";

    $objQuery_7 = mysqli_query($connect, $sql_7);
    while ($row = mysqli_fetch_array($objQuery_7)) {
      $indicator_id_7 = $row['indicator'];
      $indicator_name_7 = $row['indicator_name'];
      $year_7 = $row['year'];
      $number1_7 = $row['number1'];
      $number2_7 = $row['number2'];
      $number3_7 = $row['number3'];
      $number4_7 = $row['number4'];
      $number5_7 = $row['number5'];
      $number6_7 = $row['number6'];
      $number7_7 = $row['number7'];
      $number8_7 = $row['number8'];
      $number9_7 = $row['number9'];
      $number10_7 = $row['number10'];
      $number11_7 = $row['number11'];
      $number12_7 = $row['number12'];
      $divisor1_7 = $row['divisor1'];
      $divisor2_7 = $row['divisor2'];
      $divisor3_7 = $row['divisor3'];
      $divisor4_7 = $row['divisor4'];
      $divisor5_7 = $row['divisor5'];
      $divisor6_7 = $row['divisor6'];
      $divisor7_7 = $row['divisor7'];
      $divisor8_7 = $row['divisor8'];
      $divisor9_7 = $row['divisor9'];
      $divisor10_7 = $row['divisor10'];
      $divisor11_7 = $row['divisor11'];
      $divisor12_7 = $row['divisor12'];
      $comment_7 = $row['comment'];

      if (!empty($number1_7) && !empty($divisor1_7)) {
        $result1_7 = $number1_7 * 100 / $divisor1_7;
      } else if (empty($number1_7) && empty($divisor1_7)) {
        $result1_7 = '0';
      } else if ($number1_7 == 0 || $divisor1_7 == 0) {
        $result1_7 = 0;
      }
    
      if (!empty($number2_7) && !empty($divisor2_7)) {
        $result2_7 = $number2_7 * 100 / $divisor2_7;
      } else if (empty($number2_7) && empty($divisor2_7)) {
        $result2_7 = '0';
      } else if ($number2_7 == 0 || $divisor2_7 == 0) {
        $result2_7 = 0;
      }
    
      if (!empty($number3_7) && !empty($divisor3_7)) {
        $result3_7 = $number3_7 * 100 / $divisor3_7;
      } else if (empty($number3_7) && empty($divisor3_7)) {
        $result3_7 = '0';
      } else if ($number3_7 == 0 || $divisor3_7 == 0) {
        $result3_7 = 0;
      }
    
      if (!empty($number4_7) && !empty($divisor4_7)) {
        $result4_7 = $number4_7 * 100 / $divisor4_7;
      } else if (empty($number4_7) && empty($divisor4_7)) {
        $result4_7 = '0';
      } else if ($number4_7 == 0 || $divisor4_7 == 0) {
        $result4_7 = 0;
      }
      
      if (!empty($number5_7) && !empty($divisor5_7)) {
        $result5_7 = $number5_7 * 100 / $divisor5_7;
      } else if (empty($number5_7) && empty($divisor5_7)) {
        $result5_7 = '0';
      } else if ($number5_7 == 0 || $divisor5_7 == 0) {
        $result5_7 = 0;
      }
      
      if (!empty($number6_7) && !empty($divisor6_7)) {
        $result6_7 = $number6_7 * 100 / $divisor6_7;
      } else if (empty($number6_7) && empty($divisor6_7)) {
        $result6_7 = '0';
      } else if ($number6_7 == 0 || $divisor6_7 == 0) {
        $result6_7 = 0;
      }
      
      if (!empty($number7_7) && !empty($divisor7_7)) {
        $result7_7 = $number7_7 * 100 / $divisor7_7;
      } else if (empty($number7_7) && empty($divisor7_7)) {
        $result7_7 = '0';
      } else if ($number7_7 == 0 || $divisor7_7 == 0) {
        $result7_7 = 0;
      }
      
      if (!empty($number8_7) && !empty($divisor8_7)) {
        $result8_7 = $number8_7 * 100 / $divisor8_7;
      } else if (empty($number8_7) && empty($divisor8_7)) {
        $result8_7 = '0';
      } else if ($number8_7 == 0 || $divisor8_7 == 0) {
        $result8_7 = 0;
      }
      
      if (!empty($number9_7) && !empty($divisor9_7)) {
        $result9_7 = $number9_7 * 100 / $divisor9_7;
      } else if (empty($number9_7) && empty($divisor9_7)) {
        $result9_7 = '0';
      } else if ($number9_7 == 0 || $divisor9_7 == 0) {
        $result9_7 = 0;
      }
      
      if (!empty($number10_7) && !empty($divisor10_7)) {
        $result10_7 = $number10_7 * 100 / $divisor10_7;
      } else if (empty($number10_7) && empty($divisor10_7)) {
        $result10_7 = '0';
      } else if ($number10_7 == 0 || $divisor10_7 == 0) {
        $result10_7 = 0;
      }
      
      if (!empty($number11_7) && !empty($divisor11_7)) {
        $result11_7 = $number11_7 * 100 / $divisor11_7;
      } else if (empty($number11_7) && empty($divisor11_7)) {
        $result11_7 = '0';
      } else if ($number11_7 == 0 || $divisor11_7 == 0) {
        $result11_7 = 0;
      }
      
      if (!empty($number12_7) && !empty($divisor12_7)) {
        $result12_7 = $number12_7 * 100 / $divisor12_7;
      } else if (empty($number12_7) && empty($divisor12_7)) {
        $result12_7 = '0';
      } else if ($number12_7 == 0 || $divisor12_7 == 0) {
        $result12_7 = 0;
      }

      $mean_7 = ($result1_7 + $result2_7 + $result3_7 + $result4_7 + $result5_7 + $result6_7 + $result7_7 + $result8_7 + $result9_7 + $result10_7 + $result11_7 + $result12_7) / 12;
      $min_7 = min($result1_7, $result2_7, $result3_7, $result4_7, $result5_7, $result6_7, $result7_7, $result8_7, $result9_7, $result10_7, $result11_7, $result12_7);
      $max_7 = max($result1_7, $result2_7, $result3_7, $result4_7, $result5_7, $result6_7, $result7_7, $result8_7, $result9_7, $result10_7, $result11_7, $result12_7);

      $dataPoints7 = array(
        array("label" => "ต.ค.", "y" => $result1_7),
        array("label" => "พ.ย.", "y" => $result2_7),
        array("label" => "ธ.ค.", "y" => $result3_7),
        array("label" => "ม.ค.", "y" => $result4_7),
        array("label" => "ก.พ.", "y" => $result5_7),
        array("label" => "มี.ค.", "y" => $result6_7),
        array("label" => "เม.ย.", "y" => $result7_7),
        array("label" => "พ.ค.", "y" => $result8_7),
        array("label" => "มิ.ย.", "y" => $result9_7),
        array("label" => "ก.ค.", "y" => $result10_7),
        array("label" => "ส.ค.", "y" => $result11_7),
        array("label" => "ก.ย.", "y" => $result12_7)

      );
    }
  } else if (mysqli_num_rows($result2) > 0) {

    $sql_7 = "SELECT graph_3m.*, indicator.* 
  FROM graph_3m, indicator 
  WHERE indicator.indicator_code=graph_3m.indicator 
  AND graph_3m_id = '" . $graph_7 . "'";

    $objQuery_7 = mysqli_query($connect, $sql_7);
    while ($row = mysqli_fetch_array($objQuery_7)) {
      $indicator_id_7 = $row['indicator'];
      $indicator_name_7 = $row['indicator_name'];
      $year_7 = $row['year'];
      $number1_7 = $row['number1'];
      $number2_7 = $row['number2'];
      $number3_7 = $row['number3'];
      $number4_7 = $row['number4'];
      $divisor1_7 = $row['divisor1'];
      $divisor2_7 = $row['divisor2'];
      $divisor3_7 = $row['divisor3'];
      $divisor4_7 = $row['divisor4'];
      $comment_7 = $row['comment'];

      if (!empty($number1_7) && !empty($divisor1_7)) {
        $result1_7 = $number1_7 * 100 / $divisor1_7;
      } else if (empty($number1_7) && empty($divisor1_7)) {
        $result1_7 = '0';
      } else if ($number1_7 == 0 || $divisor1_7 == 0) {
        $result1_7 = 0;
      }
    
      if (!empty($number2_7) && !empty($divisor2_7)) {
        $result2_7 = $number2_7 * 100 / $divisor2_7;
      } else if (empty($number2_7) && empty($divisor2_7)) {
        $result2_7 = '0';
      } else if ($number2_7 == 0 || $divisor2_7 == 0) {
        $result2_7 = 0;
      }
    
      if (!empty($number3_7) && !empty($divisor3_7)) {
        $result3_7 = $number3_7 * 100 / $divisor3_7;
      } else if (empty($number3_7) && empty($divisor3_7)) {
        $result3_7 = '0';
      } else if ($number3_7 == 0 || $divisor3_7 == 0) {
        $result3_7 = 0;
      }
    
      if (!empty($number4_7) && !empty($divisor4_7)) {
        $result4_7 = $number4_7 * 100 / $divisor4_7;
      } else if (empty($number4_7) && empty($divisor4_7)) {
        $result4_7 = '0';
      } else if ($number4_7 == 0 || $divisor4_7 == 0) {
        $result4_7 = 0;
      }

      $mean_7 = ($result1_7 + $result2_7 + $result3_7 + $result4_7) / 4;
      $min_7 = min($result1_7, $result2_7, $result3_7, $result4_7);
      $max_7 = max($result1_7, $result2_7, $result3_7, $result4_7);

      $dataPoints7 = array(
        array("label" => "ต.ค.", "y" => $result1_7),
        array("label" => "พ.ย.", "y" => $result1_7),
        array("label" => "ธ.ค.", "y" => $result1_7),
        array("label" => "ม.ค.", "y" => $result2_7),
        array("label" => "ก.พ.", "y" => $result2_7),
        array("label" => "มี.ค.", "y" => $result2_7),
        array("label" => "เม.ย.", "y" => $result3_7),
        array("label" => "พ.ค.", "y" => $result3_7),
        array("label" => "มิ.ย.", "y" => $result3_7),
        array("label" => "ก.ค.", "y" => $result4_7),
        array("label" => "ส.ค.", "y" => $result4_7),
        array("label" => "ก.ย.", "y" => $result4_7)
      );
    }
  } else if (mysqli_num_rows($result3) > 0) {

    $sql_7 = "SELECT graph_6m.*, indicator.* 
FROM graph_6m, indicator 
WHERE indicator.indicator_code=graph_6m.indicator 
AND graph_6m_id = '" . $graph_7 . "'";

    $objQuery_7 = mysqli_query($connect, $sql_7);
    while ($row = mysqli_fetch_array($objQuery_7)) {
      $indicator_id_7 = $row['indicator'];
      $indicator_name_7 = $row['indicator_name'];
      $year_7 = $row['year'];
      $number1_7 = $row['number1'];
      $number2_7 = $row['number2'];
      $divisor1_7 = $row['divisor1'];
      $divisor2_7 = $row['divisor2'];
      $comment_7 = $row['comment'];

      if (!empty($number1_7) && !empty($divisor1_7)) {
        $result1_7 = $number1_7 * 100 / $divisor1_7;
      } else if (empty($number1_7) && empty($divisor1_7)) {
        $result1_7 = '0';
      } else if ($number1_7 == 0 || $divisor1_7 == 0) {
        $result1_7 = 0;
      }
    
      if (!empty($number2_7) && !empty($divisor2_7)) {
        $result2_7 = $number2_7 * 100 / $divisor2_7;
      } else if (empty($number2_7) && empty($divisor2_7)) {
        $result2_7 = '0';
      } else if ($number2_7 == 0 || $divisor2_7 == 0) {
        $result2_7 = 0;
      }

      $mean_7 = ($result1_7 + $result2_7) / 2;
      $min_7 = min($result1_7, $result2_7);
      $max_7 = max($result1_7, $result2_7);

      $dataPoints7 = array(
        array("label" => "ต.ค.", "y" => $result1_7),
        array("label" => "พ.ย.", "y" => $result1_7),
        array("label" => "ธ.ค.", "y" => $result1_7),
        array("label" => "ม.ค.", "y" => $result1_7),
        array("label" => "ก.พ.", "y" => $result1_7),
        array("label" => "มี.ค.", "y" => $result1_7),
        array("label" => "เม.ย.", "y" => $result2_7),
        array("label" => "พ.ค.", "y" => $result2_7),
        array("label" => "มิ.ย.", "y" => $result2_7),
        array("label" => "ก.ค.", "y" => $result2_7),
        array("label" => "ส.ค.", "y" => $result2_7),
        array("label" => "ก.ย.", "y" => $result2_7)
      );
    }
  } else if (mysqli_num_rows($result4) > 0) {
    $sql_7 = "SELECT graph_y.*, indicator.* 
FROM graph_y, indicator 
WHERE indicator.indicator_code=graph_y.indicator 
AND graph_y_id = '" . $graph_7 . "'";

    $objQuery_7 = mysqli_query($connect, $sql_7);
    while ($row = mysqli_fetch_array($objQuery_7)) {
      $indicator_id_7 = $row['indicator'];
      $indicator_name_7 = $row['indicator_name'];
      $year_7 = $row['year'];
      $number1_7 = $row['number1'];
      $divisor1_7 = $row['divisor1'];
      $comment_7 = $row['comment'];

      if (!empty($number1_7) && !empty($divisor1_7)) {
        $result1_7 = $number1_7 * 100 / $divisor1_7;
      } else if (empty($number1_7) && empty($divisor1_7)) {
        $result1_7 = '0';
      } else if ($number1_7 == 0 || $divisor1_7 == 0) {
        $result1_7 = 0;
      }

      $mean_7 = ($result1_7) / 1;
      $min_7 = min($result1_7,$result1_7);
      $max_7 = max($result1_7,$result1_7);

      $dataPoints7 = array(
        array("label" => "ต.ค.", "y" => $result1_7),
        array("label" => "พ.ย.", "y" => $result1_7),
        array("label" => "ธ.ค.", "y" => $result1_7),
        array("label" => "ม.ค.", "y" => $result1_7),
        array("label" => "ก.พ.", "y" => $result1_7),
        array("label" => "มี.ค.", "y" => $result1_7),
        array("label" => "เม.ย.", "y" => $result1_7),
        array("label" => "พ.ค.", "y" => $result1_7),
        array("label" => "มิ.ย.", "y" => $result1_7),
        array("label" => "ก.ค.", "y" => $result1_7),
        array("label" => "ส.ค.", "y" => $result1_7),
        array("label" => "ก.ย.", "y" => $result1_7)

      );
    }
  }
}


if (!empty($graph_8)) {
  $sql1 = "SELECT * FROM graph_m WHERE graph_m_id='$graph_8'";
  $result1 = mysqli_query($connect, $sql1);
  $sql2 = "SELECT * FROM graph_3m WHERE graph_3m_id='$graph_8'";
  $result2 = mysqli_query($connect, $sql2);
  $sql3 = "SELECT * FROM graph_6m WHERE graph_6m_id='$graph_8'";
  $result3 = mysqli_query($connect, $sql3);
  $sql4 = "SELECT * FROM graph_y WHERE graph_y_id='$graph_8'";
  $result4 = mysqli_query($connect, $sql4);

  if (mysqli_num_rows($result1) > 0) {

    $sql_8 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_8 . "'";

    $objQuery_8 = mysqli_query($connect, $sql_8);
    while ($row = mysqli_fetch_array($objQuery_8)) {
      $indicator_id_8 = $row['indicator'];
      $indicator_name_8 = $row['indicator_name'];
      $year_8 = $row['year'];
      $number1_8 = $row['number1'];
      $number2_8 = $row['number2'];
      $number3_8 = $row['number3'];
      $number4_8 = $row['number4'];
      $number5_8 = $row['number5'];
      $number6_8 = $row['number6'];
      $number7_8 = $row['number7'];
      $number8_8 = $row['number8'];
      $number9_8 = $row['number9'];
      $number10_8 = $row['number10'];
      $number11_8 = $row['number11'];
      $number12_8 = $row['number12'];
      $divisor1_8 = $row['divisor1'];
      $divisor2_8 = $row['divisor2'];
      $divisor3_8 = $row['divisor3'];
      $divisor4_8 = $row['divisor4'];
      $divisor5_8 = $row['divisor5'];
      $divisor6_8 = $row['divisor6'];
      $divisor7_8 = $row['divisor7'];
      $divisor8_8 = $row['divisor8'];
      $divisor9_8 = $row['divisor9'];
      $divisor10_8 = $row['divisor10'];
      $divisor11_8 = $row['divisor11'];
      $divisor12_8 = $row['divisor12'];
      $comment_8 = $row['comment'];

      if (!empty($number1_8) && !empty($divisor1_8)) {
        $result1_8 = $number1_8 * 100 / $divisor1_8;
      } else if (empty($number1_8) && empty($divisor1_8)) {
        $result1_8 = '0';
      } else if ($number1_8 == 0 || $divisor1_8 == 0) {
        $result1_8 = 0;
      }
    
      if (!empty($number2_8) && !empty($divisor2_8)) {
        $result2_8 = $number2_8 * 100 / $divisor2_8;
      } else if (empty($number2_8) && empty($divisor2_8)) {
        $result2_8 = '0';
      } else if ($number2_8 == 0 || $divisor2_8 == 0) {
        $result2_8 = 0;
      }
    
      if (!empty($number3_8) && !empty($divisor3_8)) {
        $result3_8 = $number3_8 * 100 / $divisor3_8;
      } else if (empty($number3_8) && empty($divisor3_8)) {
        $result3_8 = '0';
      } else if ($number3_8 == 0 || $divisor3_8 == 0) {
        $result3_8 = 0;
      }
    
      if (!empty($number4_8) && !empty($divisor4_8)) {
        $result4_8 = $number4_8 * 100 / $divisor4_8;
      } else if (empty($number4_8) && empty($divisor4_8)) {
        $result4_8 = '0';
      } else if ($number4_8 == 0 || $divisor4_8 == 0) {
        $result4_8 = 0;
      }
      
      if (!empty($number5_8) && !empty($divisor5_8)) {
        $result5_8 = $number5_8 * 100 / $divisor5_8;
      } else if (empty($number5_8) && empty($divisor5_8)) {
        $result5_8 = '0';
      } else if ($number5_8 == 0 || $divisor5_8 == 0) {
        $result5_8 = 0;
      }
      
      if (!empty($number6_8) && !empty($divisor6_8)) {
        $result6_8 = $number6_8 * 100 / $divisor6_8;
      } else if (empty($number6_8) && empty($divisor6_8)) {
        $result6_8 = '0';
      } else if ($number6_8 == 0 || $divisor6_8 == 0) {
        $result6_8 = 0;
      }
      
      if (!empty($number7_8) && !empty($divisor7_8)) {
        $result7_8 = $number7_8 * 100 / $divisor7_8;
      } else if (empty($number7_8) && empty($divisor7_8)) {
        $result7_8 = '0';
      } else if ($number7_8 == 0 || $divisor7_8 == 0) {
        $result7_8 = 0;
      }
      
      if (!empty($number8_8) && !empty($divisor8_8)) {
        $result8_8 = $number8_8 * 100 / $divisor8_8;
      } else if (empty($number8_8) && empty($divisor8_8)) {
        $result8_8 = '0';
      } else if ($number8_8 == 0 || $divisor8_8 == 0) {
        $result8_8 = 0;
      }
      
      if (!empty($number9_8) && !empty($divisor9_8)) {
        $result9_8 = $number9_8 * 100 / $divisor9_8;
      } else if (empty($number9_8) && empty($divisor9_8)) {
        $result9_8 = '0';
      } else if ($number9_8 == 0 || $divisor9_8 == 0) {
        $result9_8 = 0;
      }
      
      if (!empty($number10_8) && !empty($divisor10_8)) {
        $result10_8 = $number10_8 * 100 / $divisor10_8;
      } else if (empty($number10_8) && empty($divisor10_8)) {
        $result10_8 = '0';
      } else if ($number10_8 == 0 || $divisor10_8 == 0) {
        $result10_8 = 0;
      }
      
      if (!empty($number11_8) && !empty($divisor11_8)) {
        $result11_8 = $number11_8 * 100 / $divisor11_8;
      } else if (empty($number11_8) && empty($divisor11_8)) {
        $result11_8 = '0';
      } else if ($number11_8 == 0 || $divisor11_8 == 0) {
        $result11_8 = 0;
      }
      
      if (!empty($number12_8) && !empty($divisor12_8)) {
        $result12_8 = $number12_8 * 100 / $divisor12_8;
      } else if (empty($number12_8) && empty($divisor12_8)) {
        $result12_8 = '0';
      } else if ($number12_8 == 0 || $divisor12_8 == 0) {
        $result12_8 = 0;
      }

      $mean_8 = ($result1_8 + $result2_8 + $result3_8 + $result4_8 + $result5_8 + $result6_8 + $result7_8 + $result8_8 + $result9_8 + $result10_8 + $result11_8 + $result12_8) / 12;
      $min_8 = min($result1_8, $result2_8, $result3_8, $result4_8, $result5_8, $result6_8, $result7_8, $result8_8, $result9_8, $result10_8, $result11_8, $result12_8);
      $max_8 = max($result1_8, $result2_8, $result3_8, $result4_8, $result5_8, $result6_8, $result7_8, $result8_8, $result9_8, $result10_8, $result11_8, $result12_8);

      $dataPoints8 = array(
        array("label" => "ต.ค.", "y" => $result1_8),
        array("label" => "พ.ย.", "y" => $result2_8),
        array("label" => "ธ.ค.", "y" => $result3_8),
        array("label" => "ม.ค.", "y" => $result4_8),
        array("label" => "ก.พ.", "y" => $result5_8),
        array("label" => "มี.ค.", "y" => $result6_8),
        array("label" => "เม.ย.", "y" => $result7_8),
        array("label" => "พ.ค.", "y" => $result8_8),
        array("label" => "มิ.ย.", "y" => $result9_8),
        array("label" => "ก.ค.", "y" => $result10_8),
        array("label" => "ส.ค.", "y" => $result11_8),
        array("label" => "ก.ย.", "y" => $result12_8)

      );
    }
  } else if (mysqli_num_rows($result2) > 0) {

    $sql_8 = "SELECT graph_3m.*, indicator.* 
  FROM graph_3m, indicator 
  WHERE indicator.indicator_code=graph_3m.indicator 
  AND graph_3m_id = '" . $graph_8 . "'";

    $objQuery_8 = mysqli_query($connect, $sql_8);
    while ($row = mysqli_fetch_array($objQuery_8)) {
      $indicator_id_8 = $row['indicator'];
      $indicator_name_8 = $row['indicator_name'];
      $year_8 = $row['year'];
      $number1_8 = $row['number1'];
      $number2_8 = $row['number2'];
      $number3_8 = $row['number3'];
      $number4_8 = $row['number4'];
      $divisor1_8 = $row['divisor1'];
      $divisor2_8 = $row['divisor2'];
      $divisor3_8 = $row['divisor3'];
      $divisor4_8 = $row['divisor4'];
      $comment_8 = $row['comment'];

      if (!empty($number1_8) && !empty($divisor1_8)) {
        $result1_8 = $number1_8 * 100 / $divisor1_8;
      } else if (empty($number1_8) && empty($divisor1_8)) {
        $result1_8 = '0';
      } else if ($number1_8 == 0 || $divisor1_8 == 0) {
        $result1_8 = 0;
      }
    
      if (!empty($number2_8) && !empty($divisor2_8)) {
        $result2_8 = $number2_8 * 100 / $divisor2_8;
      } else if (empty($number2_8) && empty($divisor2_8)) {
        $result2_8 = '0';
      } else if ($number2_8 == 0 || $divisor2_8 == 0) {
        $result2_8 = 0;
      }
    
      if (!empty($number3_8) && !empty($divisor3_8)) {
        $result3_8 = $number3_8 * 100 / $divisor3_8;
      } else if (empty($number3_8) && empty($divisor3_8)) {
        $result3_8 = '0';
      } else if ($number3_8 == 0 || $divisor3_8 == 0) {
        $result3_8 = 0;
      }
    
      if (!empty($number4_8) && !empty($divisor4_8)) {
        $result4_8 = $number4_8 * 100 / $divisor4_8;
      } else if (empty($number4_8) && empty($divisor4_8)) {
        $result4_8 = '0';
      } else if ($number4_8 == 0 || $divisor4_8 == 0) {
        $result4_8 = 0;
      }

      $mean_8 = ($result1_8 + $result2_8 + $result3_8 + $result4_8) / 4;
      $min_8 = min($result1_8, $result2_8, $result3_8, $result4_8);
      $max_8 = max($result1_8, $result2_8, $result3_8, $result4_8);

      $dataPoints8 = array(
        array("label" => "ต.ค.", "y" => $result1_8),
        array("label" => "พ.ย.", "y" => $result1_8),
        array("label" => "ธ.ค.", "y" => $result1_8),
        array("label" => "ม.ค.", "y" => $result2_8),
        array("label" => "ก.พ.", "y" => $result2_8),
        array("label" => "มี.ค.", "y" => $result2_8),
        array("label" => "เม.ย.", "y" => $result3_8),
        array("label" => "พ.ค.", "y" => $result3_8),
        array("label" => "มิ.ย.", "y" => $result3_8),
        array("label" => "ก.ค.", "y" => $result4_8),
        array("label" => "ส.ค.", "y" => $result4_8),
        array("label" => "ก.ย.", "y" => $result4_8)
      );
    }
  } else if (mysqli_num_rows($result3) > 0) {

    $sql_8 = "SELECT graph_6m.*, indicator.* 
FROM graph_6m, indicator 
WHERE indicator.indicator_code=graph_6m.indicator 
AND graph_6m_id = '" . $graph_8 . "'";

    $objQuery_8 = mysqli_query($connect, $sql_8);
    while ($row = mysqli_fetch_array($objQuery_8)) {
      $indicator_id_8 = $row['indicator'];
      $indicator_name_8 = $row['indicator_name'];
      $year_8 = $row['year'];
      $number1_8 = $row['number1'];
      $number2_8 = $row['number2'];
      $divisor1_8 = $row['divisor1'];
      $divisor2_8 = $row['divisor2'];
      $comment_8 = $row['comment'];

      if (!empty($number1_8) && !empty($divisor1_8)) {
        $result1_8 = $number1_8 * 100 / $divisor1_8;
      } else if (empty($number1_8) && empty($divisor1_8)) {
        $result1_8 = '0';
      } else if ($number1_8 == 0 || $divisor1_8 == 0) {
        $result1_8 = 0;
      }
    
      if (!empty($number2_8) && !empty($divisor2_8)) {
        $result2_8 = $number2_8 * 100 / $divisor2_8;
      } else if (empty($number2_8) && empty($divisor2_8)) {
        $result2_8 = '0';
      } else if ($number2_8 == 0 || $divisor2_8 == 0) {
        $result2_8 = 0;
      }

      $mean_8 = ($result1_8 + $result2_8) / 2;
      $min_8 = min($result1_8, $result2_8);
      $max_8 = max($result1_8, $result2_8);

      $dataPoints8 = array(
        array("label" => "ต.ค.", "y" => $result1_8),
        array("label" => "พ.ย.", "y" => $result1_8),
        array("label" => "ธ.ค.", "y" => $result1_8),
        array("label" => "ม.ค.", "y" => $result1_8),
        array("label" => "ก.พ.", "y" => $result1_8),
        array("label" => "มี.ค.", "y" => $result1_8),
        array("label" => "เม.ย.", "y" => $result2_8),
        array("label" => "พ.ค.", "y" => $result2_8),
        array("label" => "มิ.ย.", "y" => $result2_8),
        array("label" => "ก.ค.", "y" => $result2_8),
        array("label" => "ส.ค.", "y" => $result2_8),
        array("label" => "ก.ย.", "y" => $result2_8)
      );
    }
  } else if (mysqli_num_rows($result4) > 0) {
    $sql_8 = "SELECT graph_y.*, indicator.* 
FROM graph_y, indicator 
WHERE indicator.indicator_code=graph_y.indicator 
AND graph_y_id = '" . $graph_8 . "'";

    $objQuery_8 = mysqli_query($connect, $sql_8);
    while ($row = mysqli_fetch_array($objQuery_8)) {
      $indicator_id_8 = $row['indicator'];
      $indicator_name_8 = $row['indicator_name'];
      $year_8 = $row['year'];
      $number1_8 = $row['number1'];
      $divisor1_8 = $row['divisor1'];
      $comment_8 = $row['comment'];

      if (!empty($number1_8) && !empty($divisor1_8)) {
        $result1_8 = $number1_8 * 100 / $divisor1_8;
      } else if (empty($number1_8) && empty($divisor1_8)) {
        $result1_8 = '0';
      } else if ($number1_8 == 0 || $divisor1_8 == 0) {
        $result1_8 = 0;
      }

      $mean_8 = ($result1_8) / 1;
      $min_8 = min($result1_8,$result1_8);
      $max_8 = max($result1_8,$result1_8);

      $dataPoints8 = array(
        array("label" => "ต.ค.", "y" => $result1_8),
        array("label" => "พ.ย.", "y" => $result1_8),
        array("label" => "ธ.ค.", "y" => $result1_8),
        array("label" => "ม.ค.", "y" => $result1_8),
        array("label" => "ก.พ.", "y" => $result1_8),
        array("label" => "มี.ค.", "y" => $result1_8),
        array("label" => "เม.ย.", "y" => $result1_8),
        array("label" => "พ.ค.", "y" => $result1_8),
        array("label" => "มิ.ย.", "y" => $result1_8),
        array("label" => "ก.ค.", "y" => $result1_8),
        array("label" => "ส.ค.", "y" => $result1_8),
        array("label" => "ก.ย.", "y" => $result1_8)

      );
    }
  }
}


if (!empty($graph_9)) {
  $sql1 = "SELECT * FROM graph_m WHERE graph_m_id='$graph_9'";
  $result1 = mysqli_query($connect, $sql1);
  $sql2 = "SELECT * FROM graph_3m WHERE graph_3m_id='$graph_9'";
  $result2 = mysqli_query($connect, $sql2);
  $sql3 = "SELECT * FROM graph_6m WHERE graph_6m_id='$graph_9'";
  $result3 = mysqli_query($connect, $sql3);
  $sql4 = "SELECT * FROM graph_y WHERE graph_y_id='$graph_9'";
  $result4 = mysqli_query($connect, $sql4);

  if (mysqli_num_rows($result1) > 0) {

    $sql_9 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_9 . "'";

    $objQuery_9 = mysqli_query($connect, $sql_9);
    while ($row = mysqli_fetch_array($objQuery_9)) {
      $indicator_id_9 = $row['indicator'];
      $indicator_name_9 = $row['indicator_name'];
      $year_9 = $row['year'];
      $number1_9 = $row['number1'];
      $number2_9 = $row['number2'];
      $number3_9 = $row['number3'];
      $number4_9 = $row['number4'];
      $number5_9 = $row['number5'];
      $number6_9 = $row['number6'];
      $number7_9 = $row['number7'];
      $number8_9 = $row['number8'];
      $number9_9 = $row['number9'];
      $number10_9 = $row['number10'];
      $number11_9 = $row['number11'];
      $number12_9 = $row['number12'];
      $divisor1_9 = $row['divisor1'];
      $divisor2_9 = $row['divisor2'];
      $divisor3_9 = $row['divisor3'];
      $divisor4_9 = $row['divisor4'];
      $divisor5_9 = $row['divisor5'];
      $divisor6_9 = $row['divisor6'];
      $divisor7_9 = $row['divisor7'];
      $divisor8_9 = $row['divisor8'];
      $divisor9_9 = $row['divisor9'];
      $divisor10_9 = $row['divisor10'];
      $divisor11_9 = $row['divisor11'];
      $divisor12_9 = $row['divisor12'];
      $comment_9 = $row['comment'];

      if (!empty($number1_9) && !empty($divisor1_9)) {
        $result1_9 = $number1_9 * 100 / $divisor1_9;
      } else if (empty($number1_9) && empty($divisor1_9)) {
        $result1_9 = '0';
      } else if ($number1_9 == 0 || $divisor1_9 == 0) {
        $result1_9 = 0;
      }
    
      if (!empty($number2_9) && !empty($divisor2_9)) {
        $result2_9 = $number2_9 * 100 / $divisor2_9;
      } else if (empty($number2_9) && empty($divisor2_9)) {
        $result2_9 = '0';
      } else if ($number2_9 == 0 || $divisor2_9 == 0) {
        $result2_9 = 0;
      }
    
      if (!empty($number3_9) && !empty($divisor3_9)) {
        $result3_9 = $number3_9 * 100 / $divisor3_9;
      } else if (empty($number3_9) && empty($divisor3_9)) {
        $result3_9 = '0';
      } else if ($number3_9 == 0 || $divisor3_9 == 0) {
        $result3_9 = 0;
      }
    
      if (!empty($number4_9) && !empty($divisor4_9)) {
        $result4_9 = $number4_9 * 100 / $divisor4_9;
      } else if (empty($number4_9) && empty($divisor4_9)) {
        $result4_9 = '0';
      } else if ($number4_9 == 0 || $divisor4_9 == 0) {
        $result4_9 = 0;
      }
      
      if (!empty($number5_9) && !empty($divisor5_9)) {
        $result5_9 = $number5_9 * 100 / $divisor5_9;
      } else if (empty($number5_9) && empty($divisor5_9)) {
        $result5_9 = '0';
      } else if ($number5_9 == 0 || $divisor5_9 == 0) {
        $result5_9 = 0;
      }
      
      if (!empty($number6_9) && !empty($divisor6_9)) {
        $result6_9 = $number6_9 * 100 / $divisor6_9;
      } else if (empty($number6_9) && empty($divisor6_9)) {
        $result6_9 = '0';
      } else if ($number6_9 == 0 || $divisor6_9 == 0) {
        $result6_9 = 0;
      }
      
      if (!empty($number7_9) && !empty($divisor7_9)) {
        $result7_9 = $number7_9 * 100 / $divisor7_9;
      } else if (empty($number7_9) && empty($divisor7_9)) {
        $result7_9 = '0';
      } else if ($number7_9 == 0 || $divisor7_9 == 0) {
        $result7_9 = 0;
      }
      
      if (!empty($number8_9) && !empty($divisor8_9)) {
        $result8_9 = $number8_9 * 100 / $divisor8_9;
      } else if (empty($number8_9) && empty($divisor8_9)) {
        $result8_9 = '0';
      } else if ($number8_9 == 0 || $divisor8_9 == 0) {
        $result8_9 = 0;
      }
      
      if (!empty($number9_9) && !empty($divisor9_9)) {
        $result9_9 = $number9_9 * 100 / $divisor9_9;
      } else if (empty($number9_9) && empty($divisor9_9)) {
        $result9_9 = '0';
      } else if ($number9_9 == 0 || $divisor9_9 == 0) {
        $result9_9 = 0;
      }
      
      if (!empty($number10_9) && !empty($divisor10_9)) {
        $result10_9 = $number10_9 * 100 / $divisor10_9;
      } else if (empty($number10_9) && empty($divisor10_9)) {
        $result10_9 = '0';
      } else if ($number10_9 == 0 || $divisor10_9 == 0) {
        $result10_9 = 0;
      }
      
      if (!empty($number11_9) && !empty($divisor11_9)) {
        $result11_9 = $number11_9 * 100 / $divisor11_9;
      } else if (empty($number11_9) && empty($divisor11_9)) {
        $result11_9 = '0';
      } else if ($number11_9 == 0 || $divisor11_9 == 0) {
        $result11_9 = 0;
      }
      
      if (!empty($number12_9) && !empty($divisor12_9)) {
        $result12_9 = $number12_9 * 100 / $divisor12_9;
      } else if (empty($number12_9) && empty($divisor12_9)) {
        $result12_9 = '0';
      } else if ($number12_9 == 0 || $divisor12_9 == 0) {
        $result12_9 = 0;
      }

      $mean_9 = ($result1_9 + $result2_9 + $result3_9 + $result4_9 + $result5_9 + $result6_9 + $result7_9 + $result8_9 + $result9_9 + $result10_9 + $result11_9 + $result12_9) / 12;
      $min_9 = min($result1_9, $result2_9, $result3_9, $result4_9, $result5_9, $result6_9, $result7_9, $result8_9, $result9_9, $result10_9, $result11_9, $result12_9);
      $max_9 = max($result1_9, $result2_9, $result3_9, $result4_9, $result5_9, $result6_9, $result7_9, $result8_9, $result9_9, $result10_9, $result11_9, $result12_9);

      $dataPoints9 = array(
        array("label" => "ต.ค.", "y" => $result1_9),
        array("label" => "พ.ย.", "y" => $result2_9),
        array("label" => "ธ.ค.", "y" => $result3_9),
        array("label" => "ม.ค.", "y" => $result4_9),
        array("label" => "ก.พ.", "y" => $result5_9),
        array("label" => "มี.ค.", "y" => $result6_9),
        array("label" => "เม.ย.", "y" => $result7_9),
        array("label" => "พ.ค.", "y" => $result8_9),
        array("label" => "มิ.ย.", "y" => $result9_9),
        array("label" => "ก.ค.", "y" => $result10_9),
        array("label" => "ส.ค.", "y" => $result11_9),
        array("label" => "ก.ย.", "y" => $result12_9)

      );
    }
  } else if (mysqli_num_rows($result2) > 0) {

    $sql_9 = "SELECT graph_3m.*, indicator.* 
  FROM graph_3m, indicator 
  WHERE indicator.indicator_code=graph_3m.indicator 
  AND graph_3m_id = '" . $graph_9 . "'";

    $objQuery_9 = mysqli_query($connect, $sql_9);
    while ($row = mysqli_fetch_array($objQuery_9)) {
      $indicator_id_9 = $row['indicator'];
      $indicator_name_9 = $row['indicator_name'];
      $year_9 = $row['year'];
      $number1_9 = $row['number1'];
      $number2_9 = $row['number2'];
      $number3_9 = $row['number3'];
      $number4_9 = $row['number4'];
      $divisor1_9 = $row['divisor1'];
      $divisor2_9 = $row['divisor2'];
      $divisor3_9 = $row['divisor3'];
      $divisor4_9 = $row['divisor4'];
      $comment_9 = $row['comment'];

      if (!empty($number1_9) && !empty($divisor1_9)) {
        $result1_9 = $number1_9 * 100 / $divisor1_9;
      } else if (empty($number1_9) && empty($divisor1_9)) {
        $result1_9 = '0';
      } else if ($number1_9 == 0 || $divisor1_9 == 0) {
        $result1_9 = 0;
      }
    
      if (!empty($number2_9) && !empty($divisor2_9)) {
        $result2_9 = $number2_9 * 100 / $divisor2_9;
      } else if (empty($number2_9) && empty($divisor2_9)) {
        $result2_9 = '0';
      } else if ($number2_9 == 0 || $divisor2_9 == 0) {
        $result2_9 = 0;
      }
    
      if (!empty($number3_9) && !empty($divisor3_9)) {
        $result3_9 = $number3_9 * 100 / $divisor3_9;
      } else if (empty($number3_9) && empty($divisor3_9)) {
        $result3_9 = '0';
      } else if ($number3_9 == 0 || $divisor3_9 == 0) {
        $result3_9 = 0;
      }
    
      if (!empty($number4_9) && !empty($divisor4_9)) {
        $result4_9 = $number4_9 * 100 / $divisor4_9;
      } else if (empty($number4_9) && empty($divisor4_9)) {
        $result4_9 = '0';
      } else if ($number4_9 == 0 || $divisor4_9 == 0) {
        $result4_9 = 0;
      }

      $mean_9 = ($result1_9 + $result2_9 + $result3_9 + $result4_9) / 4;
      $min_9 = min($result1_9, $result2_9, $result3_9, $result4_9);
      $max_9 = max($result1_9, $result2_9, $result3_9, $result4_9);

      $dataPoints9 = array(
        array("label" => "ต.ค.", "y" => $result1_9),
        array("label" => "พ.ย.", "y" => $result1_9),
        array("label" => "ธ.ค.", "y" => $result1_9),
        array("label" => "ม.ค.", "y" => $result2_9),
        array("label" => "ก.พ.", "y" => $result2_9),
        array("label" => "มี.ค.", "y" => $result2_9),
        array("label" => "เม.ย.", "y" => $result3_9),
        array("label" => "พ.ค.", "y" => $result3_9),
        array("label" => "มิ.ย.", "y" => $result3_9),
        array("label" => "ก.ค.", "y" => $result4_9),
        array("label" => "ส.ค.", "y" => $result4_9),
        array("label" => "ก.ย.", "y" => $result4_9)
      );
    }
  } else if (mysqli_num_rows($result3) > 0) {

    $sql_9 = "SELECT graph_6m.*, indicator.* 
FROM graph_6m, indicator 
WHERE indicator.indicator_code=graph_6m.indicator 
AND graph_6m_id = '" . $graph_9 . "'";

    $objQuery_9 = mysqli_query($connect, $sql_9);
    while ($row = mysqli_fetch_array($objQuery_9)) {
      $indicator_id_9 = $row['indicator'];
      $indicator_name_9 = $row['indicator_name'];
      $year_9 = $row['year'];
      $number1_9 = $row['number1'];
      $number2_9 = $row['number2'];
      $divisor1_9 = $row['divisor1'];
      $divisor2_9 = $row['divisor2'];
      $comment_9 = $row['comment'];

      if (!empty($number1_9) && !empty($divisor1_9)) {
        $result1_9 = $number1_9 * 100 / $divisor1_9;
      } else if (empty($number1_9) && empty($divisor1_9)) {
        $result1_9 = '0';
      } else if ($number1_9 == 0 || $divisor1_9 == 0) {
        $result1_9 = 0;
      }
    
      if (!empty($number2_9) && !empty($divisor2_9)) {
        $result2_9 = $number2_9 * 100 / $divisor2_9;
      } else if (empty($number2_9) && empty($divisor2_9)) {
        $result2_9 = '0';
      } else if ($number2_9 == 0 || $divisor2_9 == 0) {
        $result2_9 = 0;
      }
      
      $mean_9 = ($result1_9 + $result2_9) / 2;
      $min_9 = min($result1_9, $result2_9);
      $max_9 = max($result1_9, $result2_9);

      $dataPoints9 = array(
        array("label" => "ต.ค.", "y" => $result1_9),
        array("label" => "พ.ย.", "y" => $result1_9),
        array("label" => "ธ.ค.", "y" => $result1_9),
        array("label" => "ม.ค.", "y" => $result1_9),
        array("label" => "ก.พ.", "y" => $result1_9),
        array("label" => "มี.ค.", "y" => $result1_9),
        array("label" => "เม.ย.", "y" => $result2_9),
        array("label" => "พ.ค.", "y" => $result2_9),
        array("label" => "มิ.ย.", "y" => $result2_9),
        array("label" => "ก.ค.", "y" => $result2_9),
        array("label" => "ส.ค.", "y" => $result2_9),
        array("label" => "ก.ย.", "y" => $result2_9)
      );
    }
  } else if (mysqli_num_rows($result4) > 0) {
    $sql_9 = "SELECT graph_y.*, indicator.* 
FROM graph_y, indicator 
WHERE indicator.indicator_code=graph_y.indicator 
AND graph_y_id = '" . $graph_9 . "'";

    $objQuery_9 = mysqli_query($connect, $sql_9);
    while ($row = mysqli_fetch_array($objQuery_9)) {
      $indicator_id_9 = $row['indicator'];
      $indicator_name_9 = $row['indicator_name'];
      $year_9 = $row['year'];
      $number1_9 = $row['number1'];
      $divisor1_9 = $row['divisor1'];
      $comment_9 = $row['comment'];

      if (!empty($number1_9) && !empty($divisor1_9)) {
        $result1_9 = $number1_9 * 100 / $divisor1_9;
      } else if (empty($number1_9) && empty($divisor1_9)) {
        $result1_9 = '0';
      } else if ($number1_9 == 0 || $divisor1_9 == 0) {
        $result1_9 = 0;
      }

      $mean_9 = ($result1_9) / 1;
      $min_9 = min($result1_9,$result1_9);
      $max_9 = max($result1_9,$result1_9);

      $dataPoints9 = array(
        array("label" => "ต.ค.", "y" => $result1_9),
        array("label" => "พ.ย.", "y" => $result1_9),
        array("label" => "ธ.ค.", "y" => $result1_9),
        array("label" => "ม.ค.", "y" => $result1_9),
        array("label" => "ก.พ.", "y" => $result1_9),
        array("label" => "มี.ค.", "y" => $result1_9),
        array("label" => "เม.ย.", "y" => $result1_9),
        array("label" => "พ.ค.", "y" => $result1_9),
        array("label" => "มิ.ย.", "y" => $result1_9),
        array("label" => "ก.ค.", "y" => $result1_9),
        array("label" => "ส.ค.", "y" => $result1_9),
        array("label" => "ก.ย.", "y" => $result1_9)

      );
    }
  }
}


if (!empty($graph_10)) {
  $sql1 = "SELECT * FROM graph_m WHERE graph_m_id='$graph_10'";
  $result1 = mysqli_query($connect, $sql1);
  $sql2 = "SELECT * FROM graph_3m WHERE graph_3m_id='$graph_10'";
  $result2 = mysqli_query($connect, $sql2);
  $sql3 = "SELECT * FROM graph_6m WHERE graph_6m_id='$graph_10'";
  $result3 = mysqli_query($connect, $sql3);
  $sql4 = "SELECT * FROM graph_y WHERE graph_y_id='$graph_10'";
  $result4 = mysqli_query($connect, $sql4);

  if (mysqli_num_rows($result1) > 0) {

    $sql_10 = "SELECT graph_m.*, indicator.* 
FROM graph_m, indicator 
WHERE indicator.indicator_code=graph_m.indicator 
AND graph_m_id = '" . $graph_10 . "'";

    $objQuery_10 = mysqli_query($connect, $sql_10);
    while ($row = mysqli_fetch_array($objQuery_10)) {
      $indicator_id_10 = $row['indicator'];
      $indicator_name_10 = $row['indicator_name'];
      $year_10 = $row['year'];
      $number1_10 = $row['number1'];
      $number2_10 = $row['number2'];
      $number3_10 = $row['number3'];
      $number4_10 = $row['number4'];
      $number5_10 = $row['number5'];
      $number6_10 = $row['number6'];
      $number7_10 = $row['number7'];
      $number8_10 = $row['number8'];
      $number9_10 = $row['number9'];
      $number10_10 = $row['number10'];
      $number11_10 = $row['number11'];
      $number12_10 = $row['number12'];
      $divisor1_10 = $row['divisor1'];
      $divisor2_10 = $row['divisor2'];
      $divisor3_10 = $row['divisor3'];
      $divisor4_10 = $row['divisor4'];
      $divisor5_10 = $row['divisor5'];
      $divisor6_10 = $row['divisor6'];
      $divisor7_10 = $row['divisor7'];
      $divisor8_10 = $row['divisor8'];
      $divisor9_10 = $row['divisor9'];
      $divisor10_10 = $row['divisor10'];
      $divisor11_10 = $row['divisor11'];
      $divisor12_10 = $row['divisor12'];
      $comment_10 = $row['comment'];

      if (!empty($number1_10) && !empty($divisor1_10)) {
        $result1_10 = $number1_10 * 100 / $divisor1_10;
      } else if (empty($number1_10) && empty($divisor1_10)) {
        $result1_10 = '0';
      } else if ($number1_10 == 0 || $divisor1_10 == 0) {
        $result1_10 = 0;
      }
    
      if (!empty($number2_10) && !empty($divisor2_10)) {
        $result2_10 = $number2_10 * 100 / $divisor2_10;
      } else if (empty($number2_10) && empty($divisor2_10)) {
        $result2_10 = '0';
      } else if ($number2_10 == 0 || $divisor2_10 == 0) {
        $result2_10 = 0;
      }
    
      if (!empty($number3_10) && !empty($divisor3_10)) {
        $result3_10 = $number3_10 * 100 / $divisor3_10;
      } else if (empty($number3_10) && empty($divisor3_10)) {
        $result3_10 = '0';
      } else if ($number3_10 == 0 || $divisor3_10 == 0) {
        $result3_10 = 0;
      }
    
      if (!empty($number4_10) && !empty($divisor4_10)) {
        $result4_10 = $number4_10 * 100 / $divisor4_10;
      } else if (empty($number4_10) && empty($divisor4_10)) {
        $result4_10 = '0';
      } else if ($number4_10 == 0 || $divisor4_10 == 0) {
        $result4_10 = 0;
      }
      
      if (!empty($number5_10) && !empty($divisor5_10)) {
        $result5_10 = $number5_10 * 100 / $divisor5_10;
      } else if (empty($number5_10) && empty($divisor5_10)) {
        $result5_10 = '0';
      } else if ($number5_10 == 0 || $divisor5_10 == 0) {
        $result5_10 = 0;
      }
      
      if (!empty($number6_10) && !empty($divisor6_10)) {
        $result6_10 = $number6_10 * 100 / $divisor6_10;
      } else if (empty($number6_10) && empty($divisor6_10)) {
        $result6_10 = '0';
      } else if ($number6_10 == 0 || $divisor6_10 == 0) {
        $result6_10 = 0;
      }
      
      if (!empty($number7_10) && !empty($divisor7_10)) {
        $result7_10 = $number7_10 * 100 / $divisor7_10;
      } else if (empty($number7_10) && empty($divisor7_10)) {
        $result7_10 = '0';
      } else if ($number7_10 == 0 || $divisor7_10 == 0) {
        $result7_10 = 0;
      }
      
      if (!empty($number8_10) && !empty($divisor8_10)) {
        $result8_10 = $number8_10 * 100 / $divisor8_10;
      } else if (empty($number8_10) && empty($divisor8_10)) {
        $result8_10 = '0';
      } else if ($number8_10 == 0 || $divisor8_10 == 0) {
        $result8_10 = 0;
      }
      
      if (!empty($number9_10) && !empty($divisor9_10)) {
        $result9_10 = $number9_10 * 100 / $divisor9_10;
      } else if (empty($number9_10) && empty($divisor9_10)) {
        $result9_10 = '0';
      } else if ($number9_10 == 0 || $divisor9_10 == 0) {
        $result9_10 = 0;
      }
      
      if (!empty($number10_10) && !empty($divisor10_10)) {
        $result10_10 = $number10_10 * 100 / $divisor10_10;
      } else if (empty($number10_10) && empty($divisor10_10)) {
        $result10_10 = '0';
      } else if ($number10_10 == 0 || $divisor10_10 == 0) {
        $result10_10 = 0;
      }
      
      if (!empty($number11_10) && !empty($divisor11_10)) {
        $result11_10 = $number11_10 * 100 / $divisor11_10;
      } else if (empty($number11_10) && empty($divisor11_10)) {
        $result11_10 = '0';
      } else if ($number11_10 == 0 || $divisor11_10 == 0) {
        $result11_10 = 0;
      }
      
      if (!empty($number12_10) && !empty($divisor12_10)) {
        $result12_10 = $number12_10 * 100 / $divisor12_10;
      } else if (empty($number12_10) && empty($divisor12_10)) {
        $result12_10 = '0';
      } else if ($number12_10 == 0 || $divisor12_10 == 0) {
        $result12_10 = 0;
      }

      $mean_10 = ($result1_10 + $result2_10 + $result3_10 + $result4_10 + $result5_10 + $result6_10 + $result7_10 + $result8_10 + $result9_10 + $result10_10 + $result11_10 + $result12_10) / 12;
      $min_10 = min($result1_10, $result2_10, $result3_10, $result4_10, $result5_10, $result6_10, $result7_10, $result8_10, $result9_10, $result10_10, $result11_10, $result12_10);
      $max_10 = max($result1_10, $result2_10, $result3_10, $result4_10, $result5_10, $result6_10, $result7_10, $result8_10, $result9_10, $result10_10, $result11_10, $result12_10);

      $dataPoints10 = array(
        array("label" => "ต.ค.", "y" => $result1_10),
        array("label" => "พ.ย.", "y" => $result2_10),
        array("label" => "ธ.ค.", "y" => $result3_10),
        array("label" => "ม.ค.", "y" => $result4_10),
        array("label" => "ก.พ.", "y" => $result5_10),
        array("label" => "มี.ค.", "y" => $result6_10),
        array("label" => "เม.ย.", "y" => $result7_10),
        array("label" => "พ.ค.", "y" => $result8_10),
        array("label" => "มิ.ย.", "y" => $result9_10),
        array("label" => "ก.ค.", "y" => $result10_10),
        array("label" => "ส.ค.", "y" => $result11_10),
        array("label" => "ก.ย.", "y" => $result12_10)

      );
    }
  } else if (mysqli_num_rows($result2) > 0) {

    $sql_10 = "SELECT graph_3m.*, indicator.* 
  FROM graph_3m, indicator 
  WHERE indicator.indicator_code=graph_3m.indicator 
  AND graph_3m_id = '" . $graph_10 . "'";

    $objQuery_10 = mysqli_query($connect, $sql_10);
    while ($row = mysqli_fetch_array($objQuery_10)) {
      $indicator_id_10 = $row['indicator'];
      $indicator_name_10 = $row['indicator_name'];
      $year_10 = $row['year'];
      $number1_10 = $row['number1'];
      $number2_10 = $row['number2'];
      $number3_10 = $row['number3'];
      $number4_10 = $row['number4'];
      $divisor1_10 = $row['divisor1'];
      $divisor2_10 = $row['divisor2'];
      $divisor3_10 = $row['divisor3'];
      $divisor4_10 = $row['divisor4'];
      $comment_10 = $row['comment'];

      if (!empty($number1_10) && !empty($divisor1_10)) {
        $result1_10 = $number1_10 * 100 / $divisor1_10;
      } else if (empty($number1_10) && empty($divisor1_10)) {
        $result1_10 = '0';
      } else if ($number1_10 == 0 || $divisor1_10 == 0) {
        $result1_10 = 0;
      }
    
      if (!empty($number2_10) && !empty($divisor2_10)) {
        $result2_10 = $number2_10 * 100 / $divisor2_10;
      } else if (empty($number2_10) && empty($divisor2_10)) {
        $result2_10 = '0';
      } else if ($number2_10 == 0 || $divisor2_10 == 0) {
        $result2_10 = 0;
      }
    
      if (!empty($number3_10) && !empty($divisor3_10)) {
        $result3_10 = $number3_10 * 100 / $divisor3_10;
      } else if (empty($number3_10) && empty($divisor3_10)) {
        $result3_10 = '0';
      } else if ($number3_10 == 0 || $divisor3_10 == 0) {
        $result3_10 = 0;
      }
    
      if (!empty($number4_10) && !empty($divisor4_10)) {
        $result4_10 = $number4_10 * 100 / $divisor4_10;
      } else if (empty($number4_10) && empty($divisor4_10)) {
        $result4_10 = '0';
      } else if ($number4_10 == 0 || $divisor4_10 == 0) {
        $result4_10 = 0;
      }

      $mean_10 = ($result1_10 + $result2_10 + $result3_10 + $result4_10) / 4;
      $min_10 = min($result1_10, $result2_10, $result3_10, $result4_10);
      $max_10 = max($result1_10, $result2_10, $result3_10, $result4_10);

      $dataPoints10 = array(
        array("label" => "ต.ค.", "y" => $result1_10),
        array("label" => "พ.ย.", "y" => $result1_10),
        array("label" => "ธ.ค.", "y" => $result1_10),
        array("label" => "ม.ค.", "y" => $result2_10),
        array("label" => "ก.พ.", "y" => $result2_10),
        array("label" => "มี.ค.", "y" => $result2_10),
        array("label" => "เม.ย.", "y" => $result3_10),
        array("label" => "พ.ค.", "y" => $result3_10),
        array("label" => "มิ.ย.", "y" => $result3_10),
        array("label" => "ก.ค.", "y" => $result4_10),
        array("label" => "ส.ค.", "y" => $result4_10),
        array("label" => "ก.ย.", "y" => $result4_10)
      );
    }
  } else if (mysqli_num_rows($result3) > 0) {

    $sql_10 = "SELECT graph_6m.*, indicator.* 
FROM graph_6m, indicator 
WHERE indicator.indicator_code=graph_6m.indicator 
AND graph_6m_id = '" . $graph_10 . "'";

    $objQuery_10 = mysqli_query($connect, $sql_10);
    while ($row = mysqli_fetch_array($objQuery_10)) {
      $indicator_id_10 = $row['indicator'];
      $indicator_name_10 = $row['indicator_name'];
      $year_10 = $row['year'];
      $number1_10 = $row['number1'];
      $number2_10 = $row['number2'];
      $divisor1_10 = $row['divisor1'];
      $divisor2_10 = $row['divisor2'];
      $comment_10 = $row['comment'];

      if (!empty($number1_10) && !empty($divisor1_10)) {
        $result1_10 = $number1_10 * 100 / $divisor1_10;
      } else if (empty($number1_10) && empty($divisor1_10)) {
        $result1_10 = '0';
      } else if ($number1_10 == 0 || $divisor1_10 == 0) {
        $result1_10 = 0;
      }
    
      if (!empty($number2_10) && !empty($divisor2_10)) {
        $result2_10 = $number2_10 * 100 / $divisor2_10;
      } else if (empty($number2_10) && empty($divisor2_10)) {
        $result2_10 = '0';
      } else if ($number2_10 == 0 || $divisor2_10 == 0) {
        $result2_10 = 0;
      }
    
      $mean_10 = ($result1_10 + $result2_10) / 2;
      $min_10 = min($result1_10, $result2_10);
      $max_10 = max($result1_10, $result2_10);

      $dataPoints10 = array(
        array("label" => "ต.ค.", "y" => $result1_10),
        array("label" => "พ.ย.", "y" => $result1_10),
        array("label" => "ธ.ค.", "y" => $result1_10),
        array("label" => "ม.ค.", "y" => $result1_10),
        array("label" => "ก.พ.", "y" => $result1_10),
        array("label" => "มี.ค.", "y" => $result1_10),
        array("label" => "เม.ย.", "y" => $result2_10),
        array("label" => "พ.ค.", "y" => $result2_10),
        array("label" => "มิ.ย.", "y" => $result2_10),
        array("label" => "ก.ค.", "y" => $result2_10),
        array("label" => "ส.ค.", "y" => $result2_10),
        array("label" => "ก.ย.", "y" => $result2_10)
      );
    }
  } else if (mysqli_num_rows($result4) > 0) {
    $sql_10 = "SELECT graph_y.*, indicator.* 
FROM graph_y, indicator 
WHERE indicator.indicator_code=graph_y.indicator 
AND graph_y_id = '" . $graph_10 . "'";

    $objQuery_10 = mysqli_query($connect, $sql_10);
    while ($row = mysqli_fetch_array($objQuery_10)) {
      $indicator_id_10 = $row['indicator'];
      $indicator_name_10 = $row['indicator_name'];
      $year_10 = $row['year'];
      $number1_10 = $row['number1'];
      $divisor1_10 = $row['divisor1'];
      $comment_10 = $row['comment'];

      if (!empty($number1_10) && !empty($divisor1_10)) {
        $result1_10 = $number1_10 * 100 / $divisor1_10;
      } else if (empty($number1_10) && empty($divisor1_10)) {
        $result1_10 = '0';
      } else if ($number1_10 == 0 || $divisor1_10 == 0) {
        $result1_10 = 0;
      }

      $mean_10 = ($result1_10) / 1;
      $min_10 = min($result1_10,$result1_10);
      $max_10 = max($result1_10,$result1_10);

      $dataPoints10 = array(
        array("label" => "ต.ค.", "y" => $result1_10),
        array("label" => "พ.ย.", "y" => $result1_10),
        array("label" => "ธ.ค.", "y" => $result1_10),
        array("label" => "ม.ค.", "y" => $result1_10),
        array("label" => "ก.พ.", "y" => $result1_10),
        array("label" => "มี.ค.", "y" => $result1_10),
        array("label" => "เม.ย.", "y" => $result1_10),
        array("label" => "พ.ค.", "y" => $result1_10),
        array("label" => "มิ.ย.", "y" => $result1_10),
        array("label" => "ก.ค.", "y" => $result1_10),
        array("label" => "ส.ค.", "y" => $result1_10),
        array("label" => "ก.ย.", "y" => $result1_10)

      );
    }
  }
}




?>