<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <title>เพิ่มตัวชี้วัดใหม่</title>
</head>

 

<h3 align="center">กราฟแสดงตัวชี้วัด โรงพยาบาลยะรัง</h3>
<h3 align="center" style="padding-bottom: 25px">( เพิ่มตัวชี้วัดใหม่ )</h3>

<div align="center">
<form class="w3-container w3-card-4 w3-light-grey" style="padding-top: 30px; padding-bottom: 30px">
  <table class="table table-bordered" style="padding-bottom: 20px">
    <tr>
      <th scope="col" align="right">รหัส :</th>
      <td ><input class="w3-input w3-border w3-round" id="indicator_id" name="indicator_id" type="text" style="width: 600px"></td>
    </tr>
    <tr>
      <th scope="col" align="right">ชื่อตัวชี้วัด :</th>
      <td ><input class="w3-input w3-border w3-round" id="indicator_name" name="indicator_name" type="text"></td>
    </tr>
    <tr>
      <th scope="col" align="right">ตัวตั้ง :</th>
      <td ><input class="w3-input w3-border w3-round" id="first_name" name="first_name" type="text"></td>
    </tr>
    <tr>
      <th scope="col" align="right">ตัวหาร :</th>
      <td ><input class="w3-input w3-border w3-round" id="last_name" name="last_name" type="text"></td>
    </tr>
    <tr>
      <th scope="col" align="right">ความถี่ :</th>
      <td ><select required class="w3-select w3-border" name="type" id="type">
		    <option value="" disabled selected>โปรดเลือก</option>
		    <option value="รายเดือน">รายเดือน</option>
		    <option value="3 เดือน">3 เดือน</option>
		    <option value="6 เดือน">6 เดือน</option>
		    <option value="รายปี">รายปี</option>
		  </select></td>
    </tr>
  </table>
<input type="hidden" name="id" id="num_id" />
<button class="w3-button w3-round-large w3-dark-gray" align="center" type="button" name="action_staff" id="action_staff"></button>
<div id="result" style="padding-top: 50px; max-width: 1200px" align="center"></div>
</form>
</div>







<script>  
 $(document).ready(function(){  
      fetchIndicator();  
      function fetchIndicator()  
      {  
           var action_staff = "select_staff";  
           $.ajax({  
                url : "select_staff.php",  
                method:"POST",  
                data:{action_staff:action_staff},  
                success:function(data){  
                     $('#indicator_id').val('');
                     $('#indicator_name').val('');
                     $('#first_name').val('');
                     $('#last_name').val('');
                     $('#type').val('');
                     $('#action_staff').text('บันทึก');
                     $('#result').html(data);  
                }  
           });  
      }  
      $('#action_staff').click(function(){ 
           var ind_id = $('#indicator_id').val();  
           var Name = $('#indicator_name').val();
           var firstName = $('#first_name').val();  
           var lastName = $('#last_name').val();
           var type = $('#type').val();  
           var id = $('#num_id').val();  
           var action_staff = $('#action_staff').text(); 
           if(ind_id != '' && Name != ''  && firstName != '' && lastName != '')  
           {  
           	  if ($('#type').val()) {
                $.ajax({  
                     url : "action_staff.php",  
                     method:"POST",  
                     data:{ind_id:ind_id, Name:Name, firstName:firstName, lastName:lastName, type:type, id:id, action_staff:action_staff},  
                     success:function(data){  
                          alert(data);  
                          fetchIndicator();  
                     }  
                });  
              }  
              else  
              {  
                alert("กรุณาเลือกความถี่");  
              }
           }  
           else  
           {  
                alert("กรุณาป้อนข้อมูลให้ครบ");  
           }  
      });  
      $(document).on('click', '.update', function(){  
           var id = $(this).attr("id");  
           $.ajax({  
                url:"fetch_staff.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
                     $('#action_staff').text("บันทึกการแก้ไข");  
                     $('#num_id').val(id);  
                     $('#indicator_id').val(data.indicator_id);  
                     $('#indicator_name').val(data.indicator_name);  
                     $('#first_name').val(data.first_name);  
                     $('#last_name').val(data.last_name); 
                     $('#type').val(data.type);  
                }  
           })  
      });  
      $(document).on('click', '.delete', function(){  
           var id = $(this).attr("id");  
           if(confirm("คุณแน่ใจว่าต้องการลบหรือไม่ ?"))  
           {  
                var action_staff = "ลบ";  
                $.ajax({  
                     url:"action_staff.php",  
                     method:"POST",  
                     data:{id:id, action_staff:action_staff},  
                     success:function(data)  
                     {  
                          fetchIndicator();  
                          alert(data);  
                     }  
                })  
           }  
           else  
           {  
                return false;  
           }  
      });  
 });  
 </script> 









</html> 

