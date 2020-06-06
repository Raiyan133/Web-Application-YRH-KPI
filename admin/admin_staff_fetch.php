 <?php  
 
 $connect = mysqli_connect("localhost","root", "", "YRH_KPI");
 $connect->query("set names utf8");  
  
 if(isset($_POST["id"]))  
 {  
      $output = array();  
       $sql = "SELECT * FROM staff WHERE id = ".$_POST["id"];
             if(mysqli_query($connect, $sql)) 
             { 
                   $result = mysqli_query($connect, $sql);
                   while($row = mysqli_fetch_array($result))
                   {
                    $output['name'] = $row["staff_name"];
                    $output['surname'] = $row["staff_surname"];
                    $output['birthday'] = $row["staff_birthday"];  
                    $output['id_num'] = $row["staff_id_num"];
                    $output['degree'] = $row["staff_degree"]; 
                    $output['team'] = $row["staff_team"]; 
                    $output['position'] = $row["staff_position"]; 
                    $output['username'] = $row["staff_username"]; 
                    $output['password'] = $row["staff_password"]; 

                   }
                echo json_encode($output);  
              }
  }  
 ?>  

 





 
