<?php  
 
 $output = '';  
 $connect = mysqli_connect("localhost", "root", "", "YRH_KPI"); 
 $connect->query("set names utf8"); 


 if(isset($_POST["admin_staff_action"]))  
 {  


 	  $sql = "SELECT Staff.id, Staff.staff_name, Staff.staff_surname, Staff.staff_birthday, Staff.staff_id_num, Staff.staff_degree, Staff.staff_team, Staff.staff_position, Staff.staff_username, Staff.staff_password, degree.degree_name FROM Staff,degree WHERE degree.id=Staff.staff_degree ORDER BY staff_degree ASC";

               
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
                               <th width="10%">ระดับ</th>  
                               <th width="10%">ทีม</th>
                               <th width="10%">ชื่อ</th>  
                               <th width="10%">นามสกุล</th> 
                               <th width="10%">ตำแหน่ง</th>
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
                                    <td>'.$row["degree_name"].'</td>  
                                    <td>'.$row["staff_team"].'</td>
                                    <td>'.$row["staff_name"].'</td>  
                                    <td>'.$row["staff_surname"].'</td> 
                                    <td>'.$row["staff_position"].'</td>
                                    <td><button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-user btn-block bg-gradient-warning update" onclick="topFunction()" align="center">แก้ไข</button></td>  
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
                $output .= '</table></div></div></div>
                        
                    
                ';  
                echo $output;  
           }  
        
 }  
 ?>

<script>
  function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>