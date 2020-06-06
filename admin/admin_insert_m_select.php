<?php  
 
 $output = '';  
 $connect = mysqli_connect("localhost", "root", "", "YRH_KPI"); 
 $connect->query("set names utf8"); 


 if(isset($_POST["staff_ind_action"]))  
 {  


 	  $sql = "SELECT * FROM graph_m ORDER BY indicator_id ASC";

               
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
                               <th width="1%">รหัส</th>  
                               <th width="1%">ชื่อตัวชี้วัด</th>
                               <th width="1%">ตัวตั้ง</th>  
                               <th width="1%">ตัวหาร</th> 
                               <th width="1%">ความถี่</th> 
                               <th width="1%">ระดับ</th>  
                               <th width="1%">ทีม</th> 
                               <th width="1%">ลบ</th>  
                               <th width="1%">แก้ไข</th>  
                               <th width="1%">ลบ</th>  
                               <th width="1%">รหัส</th>  
                               <th width="1%">ชื่อตัวชี้วัด</th>
                               <th width="1%">ตัวตั้ง</th>  
                               <th width="1%">ตัวหาร</th> 
                               <th width="1%">ความถี่</th> 
                               <th width="1%">ระดับ</th>  
                               <th width="1%">ทีม</th> 
                               <th width="1%">ลบ</th>  
                               <th width="1%">แก้ไข</th>  
                               <th width="1%">ลบ</th>  
                               <th width="1%">รหัส</th>  
                               <th width="1%">ชื่อตัวชี้วัด</th>
                               <th width="1%">ตัวตั้ง</th>  
                               <th width="1%">ตัวหาร</th> 
                               <th width="1%">ความถี่</th> 
                               <th width="1%">ระดับ</th>  
                               <th width="1%">ทีม</th> 

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
                                    <td>'.$row["year"].'</td> 

                                    <td>'.$row["number1"].'</td> 
                                    <td>'.$row["number2"].'</td> 
                                    <td>'.$row["number3"].'</td> 
                                    <td>'.$row["number4"].'</td> 
                                    <td>'.$row["number5"].'</td> 
                                    <td>'.$row["number6"].'</td> 
                                    <td>'.$row["number7"].'</td> 
                                    <td>'.$row["number8"].'</td> 
                                    <td>'.$row["number9"].'</td> 
                                    <td>'.$row["number10"].'</td> 
                                    <td>'.$row["number11"].'</td> 
                                    <td>'.$row["number12"].'</td> 

                                    <td>'.$row["divisor1"].'</td> 
                                    <td>'.$row["divisor2"].'</td> 
                                    <td>'.$row["divisor3"].'</td> 
                                    <td>'.$row["divisor4"].'</td> 
                                    <td>'.$row["divisor5"].'</td> 
                                    <td>'.$row["divisor6"].'</td> 
                                    <td>'.$row["divisor7"].'</td> 
                                    <td>'.$row["divisor8"].'</td> 
                                    <td>'.$row["divisor9"].'</td> 
                                    <td>'.$row["divisor10"].'</td> 
                                    <td>'.$row["divisor11"].'</td> 
                                    <td>'.$row["divisor12"].'</td> 





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