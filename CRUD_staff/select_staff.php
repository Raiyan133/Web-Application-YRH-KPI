<?php  
 
 $output = '';  
 $connect = mysqli_connect("localhost", "root", "", "Indicator_Project"); 
 $connect->query("set names utf8"); 


 if(isset($_POST["action_staff"]))  
 {  


 	  $sql = "SELECT * FROM indicator ORDER BY indicator_id ASC";

               
           if(mysqli_query($connect, $sql))  
           {  
                
                $result = mysqli_query($connect, $sql);  
                $output .= '  
                
                     <table class="w3-table-all">  
                          <tr>  
                               <th width="10%">รหัส</th>  
                               <th width="20%">ชื่อตัวชี้วัด</th>
                               <th width="20%">ตัวตั้ง</th>  
                               <th width="20%">ตัวหาร</th> 
                               <th width="10%">ความถี่</th> 
                               <th width="5%">แก้ไข</th>  
                               <th width="5%">ลบ</th>  
                          </tr>  
                ';  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                          $output .= '  
                               <tr>  
                                    <td>'.$row["indicator_id"].'</td>  
                                    <td>'.$row["indicator_name"].'</td>
                                    <td>'.$row["first_name"].'</td>  
                                    <td>'.$row["last_name"].'</td> 
                                    <td>'.$row["type"].'</td> 
                                    <td><button type="button" name="update" id="'.$row["id"].'" class="w3-button w3-round-large w3-green update" align="center">แก้ไข</button></td>  
                                    <td><button type="button" name="delete" id="'.$row["id"].'" class="w3-button w3-round-large w3-red delete" align="center">ลบ</button></td>  
                               </tr>  
                          ';  
                     }  
                }  
                else  
                {  
                     $output .= '  
                          <tr>  
                               <td colspan="7">ไม่พบข้อมูล</td>  
                          </tr>  
                     ';  
                }  
                $output .= '</table>';  
                echo $output;  
           }  
        
 }  
 ?>