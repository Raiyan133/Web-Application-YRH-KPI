<?php
  include('../include/username.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Manage Member</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

  <!-- Date Picker -->
  <link rel="stylesheet" type="text/css" href="../vendor/jquery-datepicker/jquery.datetimepicker.css">
  <script type="text/javascript" src="../vendor/jquery-datepicker/jquery.js"></script>
  <script type="text/javascript" src="../vendor/jquery-datepicker/jquery.datetimepicker.js"></script>


  <script>
  function getTeam(val) {
  	$.ajax({
  	type: "POST",
  	url: "admin_get_team.php",
  	data:'degreeid='+val,
  	success: function(data){
  		$("#team").html(data);
  	}
  	});
  }
  </script>

</head>

<?php include "connectdb.php"; ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      //session_start();
      include('../admin/admin_include/admin_sidebar.php');
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
        //session_start();
        include('../include/topbar.php');
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
                          <h1 class="h4 text-gray-900 mb-4">เพิ่มสมาชิกใหม่</h1>
                        </div>
                        <form class="form-group text-right">
                       
                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">ชื่อ :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="staff_name" name="staff_name" type="text">
                            </div>
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">นามสกุล :</span>
                            </div>
                            <div class="col-sm-4">
                            <input class="form-control" id="staff_surname" name="staff_surname" type="text">
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">วันเกิด :</span>
                            </div>
                            <div class="col-sm-4">
                            <input class="form-control" id="staff_birthday" name="staff_birthday" type="text">
                              <script type="text/javascript">
                                jQuery('#staff_birthday').datetimepicker({
                                lang:'th',
                                timepicker:false,
                                format:'d/m/Y'
                                });
                              </script>
                            </div>
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">เลขปชช. :</span>
                            </div>
                            <div class="col-sm-4">
                            <input class="form-control" id="staff_id_num" name="staff_id_num" type="text">
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">ระดับ :</span>
                            </div>
                            <div class="col-sm-4">
                              <select class="form-control" type="text" name="degree" id="degree" onChange="getTeam(this.value);">
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
                              <select class="form-control" type="text" id="team" name="team">
                                <option value="">โปรดเลือกระดับก่อน</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">ตำแหน่ง :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="staff_position" name="staff_position" type="text">
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">Username :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="staff_username" name="staff_username" type="text">
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">Password :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="staff_password" name="staff_password" type="text">
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-10">
                            <input type="hidden" name="id" id="num_id" />
                                  
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" type="button" name="admin_staff_action" id="admin_staff_action"></button>
                              
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
      include('../include/footer.php');
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

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>


<script>  
 $(document).ready(function(){  
      fetchStaff();  
      function fetchStaff()  
      {  
           var admin_staff_action = "admin_staff_select";  
           $.ajax({  
                url : "admin_staff_select.php",  
                method:"POST",  
                data:{admin_staff_action:admin_staff_action},  
                success:function(data){  
                     $('#staff_name').val('');
                     $('#staff_surname').val('');
                     $('#staff_birthday').val('');
                     $('#staff_id_num').val('');
                     $('#degree').val('');
                     $('#team').val('');
                     $('#staff_position').val('');
                     $('#staff_username').val('');
                     $('#staff_password').val('');
                     $('#admin_staff_action').text('บันทึก');
                     $('#result').html(data);  
                }  
           });  
      }  
      $('#admin_staff_action').click(function(){ 
           var name = $('#staff_name').val();
           var surname = $('#staff_surname').val();
           var birthday = $('#staff_birthday').val();
           var id_num = $('#staff_id_num').val();
           var degree = $('#degree').val();
           var team = $('#team').val();
           var position = $('#staff_position').val();
           var username = $('#staff_username').val();
           var password =  $('#staff_password').val();
           var id = $('#num_id').val();
           var admin_staff_action = $('#admin_staff_action').text(); 
           if(name != '' && surname != ''  && birthday != '' && id_num != '' && team != '' && position != '' && username != '' && password != '')  
           {  
           	  if ($('#degree').val()) {
                $.ajax({  
                     url : "admin_staff_action.php",  
                     method:"POST",  
                     data:{name:name, surname:surname, birthday:birthday, id_num:id_num, degree:degree, team:team, position:position, username:username, password:password, id:id, admin_staff_action:admin_staff_action},  
                     success:function(data){  
                          alert(data);  
                          fetchStaff();  
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
                alert("กรุณาป้อนข้อมูลให้ครบทุกช่อง");  
           }  
      });  
      $(document).on('click', '.update', function(){  
           var id = $(this).attr("id");  
           $.ajax({  
                url:"admin_staff_fetch.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
                  getTeam1(id, data);  
                }  
           })  
      });  
      $(document).on('click', '.delete', function(){  
           var id = $(this).attr("id");  
           if(confirm("คุณแน่ใจว่าต้องการลบหรือไม่ ?"))  
           {  
                var admin_staff_action = "ลบ";  
                $.ajax({  
                     url:"admin_staff_action.php",  
                     method:"POST",  
                     data:{id:id, admin_staff_action:admin_staff_action},  
                     success:function(data)  
                     {  
                          fetchStaff();  
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

 function getTeam1(id, data1) {
  	$.ajax({
  	type: "POST",
  	url: "admin_get_team.php",
  	data:'degreeid='+data1.degree,
  	success: function(data){
  		$("#team").html(data);
      setData(id, data1);
  	}
  	});
  }
 function setData(id, data)
 {
 
  $('#admin_staff_action').text("บันทึกการแก้ไข");  
                     $('#num_id').val(id); 
                     $('#staff_name').val(data.name);
                     $('#staff_surname').val(data.surname);
                     $('#staff_birthday').val(data.birthday);
                     $('#staff_id_num').val(data.id_num);
                     $('#degree').val(data.degree);
                     $('#team').val(data.team);
                     $('#staff_position').val(data.position);
                     $('#staff_username').val(data.username);
                     $('#staff_password').val(data.password); 
 }

 </script> 






</html>





