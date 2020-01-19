<?php  
 
 $output = '';  
 $connect = mysqli_connect("localhost", "root", "", "Indicator_Project"); 
 $connect->query("set names utf8"); 


 if(isset($_POST["admin_ind_action"]))  
 {  


 	  $sql = "SELECT * FROM indicator ORDER BY indicator_id ASC";

               
           if(mysqli_query($connect, $sql))  
           {  
                
                $result = mysqli_query($connect, $sql);  
                $output .= '  
                
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-secondary">ข้อมูลตัวชี้วัดทั้งหมด</h6>
                    </div>
                      <div class="card-body">
                        <div class="table-responsive">
                         <table class="table table-bordered">
                         
                         <thead>  
                          <tr>  
                               <th width="10%">รหัส</th>  
                               <th width="10%">ชื่อตัวชี้วัด</th>
                               <th width="15%">ตัวตั้ง</th>  
                               <th width="15%">ตัวหาร</th> 
                               <th width="10%">ความถี่</th> 
                               <th width="10%">ระดับ</th>  
                               <th width="10%">ทีม</th> 
                               <th width="5%">แก้ไข</th>  
                               <th width="5%">ลบ</th>  
                          </tr>  
                         <thead>
                ';  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                          $output .= '  
                              <tbody>
                               <tr>  
                                    <td>'.$row["indicator_id"].'</td>  
                                    <td>'.$row["indicator_name"].'</td>
                                    <td>'.$row["first_name"].'</td>  
                                    <td>'.$row["last_name"].'</td> 
                                    <td>'.$row["type"].'</td> 
                                    <td>'.$row["degree"].'</td> 
                                    <td>'.$row["team_code"].'</td> 
                                    <td><button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-user btn-block bg-gradient-warning update" align="center">แก้ไข</button></td>  
                                    <td><button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-user btn-block bg-gradient-danger delete" align="center">ลบ</button></td>  
                               </tr>  
                              </tbody>
                          ';  
                     }  
                }  
                else  
                {  
                     $output .= ' 
                         <tbody> 
                          <tr>  
                               <td colspan="7">ไม่พบข้อมูล</td>  
                          </tr>  
                         </tbody>
                     ';  
                }  
                $output .= '</table>
                        
                    
                ';  
                echo $output;  
           }  
        
 }  
 ?>