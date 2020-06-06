<?php  

   
 if(isset($_POST["staff_ind_action"]))  
 {  
      $output = '';  
    //   include('../staff/include/db.php');
      $connect = mysqli_connect("localhost", "root", "", "YRH_KPI"); 
      $connect->query("set names utf8"); 

      if($_POST["staff_ind_action"] =="บันทึก")  
      {  
           $indicator_id = mysqli_real_escape_string($connect, $_POST["ind_id"]); 
           $indicator_name = mysqli_real_escape_string($connect, $_POST["Name"]); 
           $first_name = mysqli_real_escape_string($connect, $_POST["firstName"]);  
           $last_name = mysqli_real_escape_string($connect, $_POST["lastName"]); 
           $type = mysqli_real_escape_string($connect, $_POST["type"]); 
           $degree = mysqli_real_escape_string($connect, $_POST["degree"]); 
           $team = mysqli_real_escape_string($connect, $_POST["team"]); 

           $sql = "SELECT * FROM indicator WHERE indicator_id='$indicator_id'";
           $result = mysqli_query($connect, $sql);

           if (mysqli_num_rows($result) > 0) {
              echo "รหัสนี้ถูกใช้งานแล้ว";
              }else{
           
                 $sql = "INSERT INTO indicator(indicator_id, indicator_name, first_name, last_name, type, degree, team_code) 
                         VALUES ('".$indicator_id."','".$indicator_name."','".$first_name."','".$last_name."','".$type."','".$degree."','".$team."')";

                    if (mysqli_query($connect, $sql)) {
                        echo "ข้อมูลกำลังจะถูกบันทึก";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                    }
              }

      }  
      if($_POST["staff_ind_action"] == "บันทึกการแก้ไข")  
      {  
           $indicator_id = mysqli_real_escape_string($connect, $_POST["ind_id"]); 
           $indicator_name = mysqli_real_escape_string($connect, $_POST["Name"]); 
           $first_name = mysqli_real_escape_string($connect, $_POST["firstName"]);  
           $last_name = mysqli_real_escape_string($connect, $_POST["lastName"]); 
           $type = mysqli_real_escape_string($connect, $_POST["type"]);   
           $degree = mysqli_real_escape_string($connect, $_POST["degree"]); 
           $team = mysqli_real_escape_string($connect, $_POST["team"]); 

           $sql = "UPDATE indicator SET indicator_id = '".$indicator_id."', indicator_name = '".$indicator_name."', first_name = '".$first_name."', last_name = '".$last_name."', type = '".$type."', degree = '".$degree."', team_code = '".$team."' WHERE id = ".$_POST["id"];

              if (mysqli_query($connect, $sql)) {
                  echo "ข้อมูลจะถูกบันทึกการแก้ไข";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
              }

      }  
      if($_POST["staff_ind_action"] == "ลบ")  
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

