<?php  

   
 if(isset($_POST["action_ind"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "Indicator_Project"); 
      $connect->query("set names utf8"); 

      if($_POST["action_ind"] =="บันทึก")  
      {  
           $indicator_id = mysqli_real_escape_string($connect, $_POST["ind_id"]); 
           $indicator_name = mysqli_real_escape_string($connect, $_POST["Name"]); 
           $first_name = mysqli_real_escape_string($connect, $_POST["firstName"]);  
           $last_name = mysqli_real_escape_string($connect, $_POST["lastName"]); 
           $type = mysqli_real_escape_string($connect, $_POST["type"]); 

           $sql = "SELECT * FROM indicator WHERE indicator_id='$indicator_id'";
           $result = mysqli_query($connect, $sql);

           if (mysqli_num_rows($result) > 0) {
              echo "รหัสนี้ถูกใช้งานแล้ว";
              }else{
           
                 $sql = "INSERT INTO indicator(indicator_id, indicator_name, first_name, last_name, type) 
                         VALUES ('".$indicator_id."','".$indicator_name."','".$first_name."','".$last_name."','".$type."')";

                    if (mysqli_query($connect, $sql)) {
                        echo "ข้อมูลกำลังจะถูกบันทึก";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                    }
              }

      }  
      if($_POST["action_ind"] == "บันทึกการแก้ไข")  
      {  
           $indicator_id = mysqli_real_escape_string($connect, $_POST["ind_id"]); 
           $indicator_name = mysqli_real_escape_string($connect, $_POST["Name"]); 
           $first_name = mysqli_real_escape_string($connect, $_POST["firstName"]);  
           $last_name = mysqli_real_escape_string($connect, $_POST["lastName"]); 
           $type = mysqli_real_escape_string($connect, $_POST["type"]);   

           $sql = "UPDATE indicator SET indicator_id = '".$indicator_id."', indicator_name = '".$indicator_name."', first_name = '".$first_name."', last_name = '".$last_name."', type = '".$type."' WHERE id = ".$_POST["id"];

              if (mysqli_query($connect, $sql)) {
                  echo "ข้อมูลจะถูกบันทึกการแก้ไข";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
              }

      }  
      if($_POST["action_ind"] == "ลบ")  
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

