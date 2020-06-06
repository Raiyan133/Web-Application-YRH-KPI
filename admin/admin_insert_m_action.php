<?php  

   
 if(isset($_POST["admin_insert_m_action"]))  
 {  
      $output = '';  
    //   include('../admin/include/db.php');
      $connect = mysqli_connect("localhost", "root", "", "YRH_KPI"); 
      $connect->query("set names utf8"); 

      if($_POST["admin_insert_m_action"] =="บันทึก")  
      {  
           $indicator_id = mysqli_real_escape_string($connect, $_POST["ind_id"]); 
           $indicator_name = mysqli_real_escape_string($connect, $_POST["Name"]); 
           $year = mysqli_real_escape_string($connect, $_POST["year"]); 
           $number1 = mysqli_real_escape_string($connect, $_POST["number1"]);  
           $number2 = mysqli_real_escape_string($connect, $_POST["number2"]);  
           $number3 = mysqli_real_escape_string($connect, $_POST["number3"]);  
           $number4 = mysqli_real_escape_string($connect, $_POST["number4"]);  
           $number5 = mysqli_real_escape_string($connect, $_POST["number5"]);  
           $number6 = mysqli_real_escape_string($connect, $_POST["number6"]);  
           $number7 = mysqli_real_escape_string($connect, $_POST["number7"]);  
           $number8 = mysqli_real_escape_string($connect, $_POST["number8"]);  
           $number9 = mysqli_real_escape_string($connect, $_POST["number9"]);  
           $number10 = mysqli_real_escape_string($connect, $_POST["number10"]);  
           $number11 = mysqli_real_escape_string($connect, $_POST["number11"]);  
           $number12 = mysqli_real_escape_string($connect, $_POST["number12"]);  
           $divisor1 = mysqli_real_escape_string($connect, $_POST["divisor1"]);  
           $divisor2 = mysqli_real_escape_string($connect, $_POST["divisor2"]);  
           $divisor3 = mysqli_real_escape_string($connect, $_POST["divisor3"]);  
           $divisor4 = mysqli_real_escape_string($connect, $_POST["divisor4"]);  
           $divisor5 = mysqli_real_escape_string($connect, $_POST["divisor5"]);  
           $divisor6 = mysqli_real_escape_string($connect, $_POST["divisor6"]);  
           $divisor7 = mysqli_real_escape_string($connect, $_POST["divisor7"]);  
           $divisor8 = mysqli_real_escape_string($connect, $_POST["divisor8"]);  
           $divisor9 = mysqli_real_escape_string($connect, $_POST["divisor9"]);  
           $divisor10 = mysqli_real_escape_string($connect, $_POST["divisor10"]);  
           $divisor11 = mysqli_real_escape_string($connect, $_POST["divisor11"]);  
           $divisor12 = mysqli_real_escape_string($connect, $_POST["divisor12"]);  

           $sql = "INSERT INTO graph_m(indicator_id, indicator_name, year, number1, number2, number3, number4, number5, number6, 
                               number7, number8, number9, number10, number11, number12, divisor1, divisor2, divisor3, divisor4, 
                               divisor5, divisor6, divisor7, divisor8, divisor9, divisor10, divisor11, divisor12,) 
                         VALUES ('".$indicator_id."','".$indicator_name."','".$year."','".$number1."','".$number2."','".$number3."','".$number4."',
                         '".$number5."','".$number6."','".$number7."','".$number8."','".$number9."','".$number10."','".$number11."'
                         '".$number12."','".$divisor1."','".$divisor2."','".$divisor3."','".$divisor4."','".$divisor5."','".$divisor6."',
                         '".$divisor7."','".$divisor8."','".$divisor9."','".$divisor10."','".$divisor11."','".$divisor12."')";

                    if (mysqli_query($connect, $sql)) {
                        echo "ข้อมูลกำลังจะถูกบันทึก";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                    }

      }  
      if($_POST["admin_insert_m_action"] == "บันทึกการแก้ไข")  
      {  
           $indicator_id = mysqli_real_escape_string($connect, $_POST["ind_id"]); 
           $indicator_name = mysqli_real_escape_string($connect, $_POST["Name"]); 
           $year = mysqli_real_escape_string($connect, $_POST["year"]); 
           $number1 = mysqli_real_escape_string($connect, $_POST["number1"]);  
           $number2 = mysqli_real_escape_string($connect, $_POST["number2"]);  
           $number3 = mysqli_real_escape_string($connect, $_POST["number3"]);  
           $number4 = mysqli_real_escape_string($connect, $_POST["number4"]);  
           $number5 = mysqli_real_escape_string($connect, $_POST["number5"]);  
           $number6 = mysqli_real_escape_string($connect, $_POST["number6"]);  
           $number7 = mysqli_real_escape_string($connect, $_POST["number7"]);  
           $number8 = mysqli_real_escape_string($connect, $_POST["number8"]);  
           $number9 = mysqli_real_escape_string($connect, $_POST["number9"]);  
           $number10 = mysqli_real_escape_string($connect, $_POST["number10"]);  
           $number11 = mysqli_real_escape_string($connect, $_POST["number11"]);  
           $number12 = mysqli_real_escape_string($connect, $_POST["number12"]);  
           $divisor1 = mysqli_real_escape_string($connect, $_POST["divisor1"]);  
           $divisor2 = mysqli_real_escape_string($connect, $_POST["divisor2"]);  
           $divisor3 = mysqli_real_escape_string($connect, $_POST["divisor3"]);  
           $divisor4 = mysqli_real_escape_string($connect, $_POST["divisor4"]);  
           $divisor5 = mysqli_real_escape_string($connect, $_POST["divisor5"]);  
           $divisor6 = mysqli_real_escape_string($connect, $_POST["divisor6"]);  
           $divisor7 = mysqli_real_escape_string($connect, $_POST["divisor7"]);  
           $divisor8 = mysqli_real_escape_string($connect, $_POST["divisor8"]);  
           $divisor9 = mysqli_real_escape_string($connect, $_POST["divisor9"]);  
           $divisor10 = mysqli_real_escape_string($connect, $_POST["divisor10"]);  
           $divisor11 = mysqli_real_escape_string($connect, $_POST["divisor11"]);  
           $divisor12 = mysqli_real_escape_string($connect, $_POST["divisor12"]);  

           $sql = "UPDATE graph_m SET indicator_id = '".$indicator_id."', 
                                      indicator_name = '".$indicator_name."', 
                                      year = '".$year."', 
                                      number1 = '".$number1."', 
                                      number2 = '".$number2."', 
                                      number3 = '".$number3."', 
                                      number4 = '".$number4."', 
                                      number5 = '".$number5."',
                                      number6 = '".$number6."',
                                      number7 = '".$number7."',
                                      number8 = '".$number8."',
                                      number9 = '".$number9."',
                                      number10 = '".$number10."', 
                                      number11 = '".$number11."', 
                                      number12 = '".$number12."', 
                                      divisor1 = '".$divisor1."', 
                                      divisor2 = '".$divisor2."', 
                                      divisor3 = '".$divisor3."', 
                                      divisor4 = '".$divisor4."', 
                                      divisor5 = '".$divisor5."',
                                      divisor6 = '".$divisor6."',
                                      divisor7 = '".$divisor7."',
                                      divisor8 = '".$divisor8."',
                                      divisor9 = '".$divisor9."',
                                      divisor10 = '".$divisor10."', 
                                      divisor11 = '".$divisor11."', 
                                      divisor12 = '".$divisor12."' 
                                  WHERE g_month_id = ".$_POST["id"];

              if (mysqli_query($connect, $sql)) {
                  echo "ข้อมูลจะถูกบันทึกการแก้ไข";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
              }

      }  
      if($_POST["admin_insert_m_action"] == "ลบ")  
      {  

            $sql = "DELETE FROM indicator WHERE id = ".$_POST["id"]."";

              if (mysqli_query($connect, $sql)) {
                  echo "ข้อมูลกำลังจะถูกลบ";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
              }


           
      }  
 }  
 ?>  

