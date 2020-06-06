<?php  
 
 $connect = mysqli_connect("localhost","root", "", "YRH_KPI");
 $connect->query("set names utf8");  
  
 if(isset($_POST["id"]))  
 {  
      $output = array();  
       $sql = "SELECT * FROM graph_m WHERE id = ".$_POST["id"];
             if(mysqli_query($connect, $sql)) 
             { 
                   $result = mysqli_query($connect, $sql);
                   while($row = mysqli_fetch_array($result))
                   {
                    $output['indicator_id'] = $row["indicator_id"];
                    $output['indicator_name'] = $row["indicator_name"];
                    $output['year'] = $row["year"];  

                    $output['number1'] = $row["number1"];
                    $output['number2'] = $row["number2"];
                    $output['number3'] = $row["number3"];
                    $output['number4'] = $row["number4"];
                    $output['number5'] = $row["number5"];
                    $output['number6'] = $row["number6"];
                    $output['number7'] = $row["number7"];
                    $output['number8'] = $row["number8"];
                    $output['number9'] = $row["number9"];
                    $output['number10'] = $row["number10"];
                    $output['number11'] = $row["number11"];
                    $output['number12'] = $row["number12"];

                    $output['divisor1'] = $row["divisor1"];
                    $output['divisor2'] = $row["divisor2"];
                    $output['divisor3'] = $row["divisor3"];
                    $output['divisor4'] = $row["divisor4"];
                    $output['divisor5'] = $row["divisor5"];
                    $output['divisor6'] = $row["divisor6"];
                    $output['divisor7'] = $row["divisor7"];
                    $output['divisor8'] = $row["divisor8"];
                    $output['divisor9'] = $row["divisor9"];
                    $output['divisor10'] = $row["divisor10"];
                    $output['divisor11'] = $row["divisor11"];
                    $output['divisor12'] = $row["divisor12"];


                   }
                echo json_encode($output);  
              }
  }  
 ?>  

 





 
