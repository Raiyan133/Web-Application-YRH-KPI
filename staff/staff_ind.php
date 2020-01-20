<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Manage Indicator</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

</head><?php include "connectdb.php"; ?>

<script>
function getTeam(val) {
	$.ajax({
	type: "POST",
	url: "admin_ind_get_team.php",
	data:'degreeid='+val,
	success: function(data){
		$("#team").html(data);
	}
	});
}

</script>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      //session_start();
      include('../admin/include/sidebar.php');
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
        //session_start();
        include('../admin/include/topbar.php');
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-14 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 bg-gray-500">
                  <!-- Nested Row within Card Body -->
                  <div class="row">                   
                    <div class="col-lg-12">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">เพิ่มตัวชี้วัดใหม่</h1>
                        </div>
                        <form class="form-group text-right">
                       
                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">รหัสตัวชี้วัด :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="indicator_id" name="indicator_id" type="text">
                            </div>
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">ความถี่ :</span>
                            </div>
                            <div class="col-sm-4">
                            <select required class="form-control" name="type" id="type">
                                <option value="" disabled selected>โปรดเลือกความถี่</option>
                                <option value="รายเดือน">รายเดือน</option>
                                <option value="3 เดือน">3 เดือน</option>
                                <option value="6 เดือน">6 เดือน</option>
                                <option value="รายปี">รายปี</option>
                              </select>
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">ชื่อตัวชี้วัด : </span>
                            </div>
                            <div class="col-sm-10">
                              <input class="form-control" id="indicator_name" name="indicator_name" type="text">
                            </div>                          
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">ตัวตั้ง : </span>
                            </div>
                            <div class="col-sm-10">
                              <input class="form-control" id="first_name" name="first_name" type="text">
                            </div>                          
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">ตัวหาร : </span>
                            </div>
                            <div class="col-sm-10">
                              <input class="form-control" id="last_name" name="last_name" type="text"></td>
                            </div>                          
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">ระดับ :</span>
                            </div>
                            <div class="col-sm-4">
                              <select class="form-control" name="degree" id="degree" onChange="getTeam(this.value);">
                                <option value="">โปรดเลือกระดับ</option>
                                  <?php
                                  $sql1="SELECT * FROM degree";
                                      $results=$dbhandle->query($sql1); 
                                  while($rs=$results->fetch_assoc()) { 
                                  ?>
                                <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["degree_name"]; ?></option>
                                  <?php
                                  }
                                  ?>
                              </select>
                            </div>
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">ทีม :</span>
                            </div>
                            <div class="col-sm-4">
                              <select class="form-control"  id="team" name="team">
                                <option value="">โปรดเลือกระดับก่อน</option>
                              </select>
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-10">
                            <input type="hidden" name="id" id="num_id" />
                                  
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" type="button" name="admin_ind_action" id="admin_ind_action"></button>
                              
                            </div>                          
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div id="result" style="padding-top: 50px; width: 100%" align="center"></div>
          </div>

          
        </div>
        <!-- /.container-fluid -->


      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php
      //session_start();
      include('../admin/include/footer.php');
      ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>


<script>  
 $(document).ready(function(){  
      fetchIndicator();  
      function fetchIndicator()  
      {  
           var admin_ind_action = "admin_ind_select";  
           $.ajax({  
                url : "admin_ind_select.php",  
                method:"POST",  
                data:{admin_ind_action:admin_ind_action},  
                success:function(data){  
                     $('#indicator_id').val('');
                     $('#indicator_name').val('');
                     $('#first_name').val('');
                     $('#last_name').val('');
                     $('#type').val('');
                     $('#degree').val('');
                     $('#team').val('');
                     $('#admin_ind_action').text('บันทึก');
                     $('#result').html(data);  
                }  
           });  
      }  
      $('#admin_ind_action').click(function(){ 
           var ind_id = $('#indicator_id').val();  
           var Name = $('#indicator_name').val();
           var firstName = $('#first_name').val();  
           var lastName = $('#last_name').val();
           var type = $('#type').val();  
           var degree = $('#degree').val();  
           var team = $('#team').val();  
           var id = $('#num_id').val();  
           var admin_ind_action = $('#admin_ind_action').text(); 
           if(ind_id != '' && Name != ''  && firstName != '' && lastName != '' && degree != '' && team != '')  
           {  
           	  if ($('#type').val()) {
                $.ajax({  
                     url : "admin_ind_action.php",  
                     method:"POST",  
                     data:{ind_id:ind_id, Name:Name, firstName:firstName, lastName:lastName, type:type, degree:degree, team:team, id:id, admin_ind_action:admin_ind_action},  
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
                url:"admin_ind_fetch.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
                     $('#admin_ind_action').text("บันทึกการแก้ไข");  
                     $('#num_id').val(id);  
                     $('#indicator_id').val(data.indicator_id);  
                     $('#indicator_name').val(data.indicator_name);  
                     $('#first_name').val(data.first_name);  
                     $('#last_name').val(data.last_name); 
                     $('#type').val(data.type); 
                     $('#degree').val(data.degree); 
                     $('#team').val(data.team);  
                }  
           })  
      });  
      $(document).on('click', '.delete', function(){  
           var id = $(this).attr("id");  
           if(confirm("คุณแน่ใจว่าต้องการลบหรือไม่ ?"))  
           {  
                var admin_ind_action = "ลบ";  
                $.ajax({  
                     url:"admin_ind_action.php",  
                     method:"POST",  
                     data:{id:id, admin_ind_action:admin_ind_action},  
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
