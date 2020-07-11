<?php
include('../include/db.php');
include('../include/username.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>จัดการทีม</title>
  <?php include('../include/head.php'); ?>
</head>

<body id="page-top">
  <div id="wrapper">
    <?php include('../admin/admin_include/admin_sidebar.php'); ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php include('../include/topbar.php'); ?>
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-14 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 bg-gray-500">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">เพิ่มทีมใหม่</h1>
                        </div>
                        <form class="form-group text-right">

                          <div class="form row">
                            <div class="col-sm-3">
                              <span class="h7 text-gray-900 mb-4 form-text">ระดับ :</span>
                            </div>
                            <div class="col-sm-6">
                              <select required class="form-control" name="degree" id="degree">
                                <option value="" disabled selected>โปรดเลือกระดับ</option>
                                <option value='1'>โรงพยาบาล</option>
                                <option value='2'>หน่วยงาน</option>
                              </select>
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-3">
                              <span class="h7 text-gray-900 mb-4 form-text">รหัสทีม :</span>
                            </div>
                            <div class="col-sm-6">
                              <input class="form-control" id="team_code" name="team_code" type="text">
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-3">
                              <span class="h7 text-gray-900 mb-4 form-text">ชื่อทีม :</span>
                            </div>
                            <div class="col-sm-6">
                              <input class="form-control" id="team_name" name="team_name" type="text">
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-3">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-3">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-6">
                              <input type="hidden" name="id" id="num_id" />

                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" type="button" name="admin_team_action" id="admin_team_action"></button>

                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="result" style="padding-top: 50px; width: 100%"></div>
          </div>
        </div>
      </div>
      <?php include('../include/footer.php'); ?>
    </div>
  </div>
  <?php include('../include/script.php'); ?>
</body>


<script>
  $(document).ready(function() {
    fetchTeam();

    function fetchTeam() {
      var admin_team_action = "admin_team_select";
      $.ajax({
        url: "admin_team_select.php",
        method: "POST",
        data: {
          admin_team_action: admin_team_action
        },
        success: function(data) {
          $('#degree').val('');
          $('#team_code').val('');
          $('#team_name').val('');
          $('#admin_team_action').text('บันทึก');
          $('#result').html(data);
        }
      });
    }
    $('#admin_team_action').click(function() {
      var degree = $('#degree').val();
      var team_code = $('#team_code').val();
      var team_name = $('#team_name').val();
      var id = $('#num_id').val();
      var admin_team_action = $('#admin_team_action').text();
      if (team_code != '' && team_name != '') {
        if ($('#degree').val()) {
          $.ajax({
            url: "admin_team_action.php",
            method: "POST",
            data: {
              degree: degree,
              team_code: team_code,
              team_name: team_name,
              id: id,
              admin_team_action: admin_team_action
            },
            success: function(data) {
              alert(data);
              fetchTeam();
            }
          });
        } else {
          alert("กรุณาเลือกระดับ");
        }
      } else {
        alert("กรุณาป้อนข้อมูลให้ครบทุกช่อง");
      }
    });
    $(document).on('click', '.update', function() {
      var id = $(this).attr("id");
      $.ajax({
        url: "admin_team_fetch.php",
        method: "POST",
        data: {
          id: id
        },
        dataType: "json",
        success: function(data) {
          $('#admin_team_action').text("บันทึกการแก้ไข");
          $('#num_id').val(id);
          $('#degree').val(data.degree);
          $('#team_code').val(data.team_code);
          $('#team_name').val(data.team_name);
        }
      })
    });
    $(document).on('click', '.delete', function() {
      var id = $(this).attr("id");
      if (confirm("คุณแน่ใจว่าต้องการลบหรือไม่ ?")) {
        var admin_team_action = "ลบ";
        $.ajax({
          url: "admin_team_action.php",
          method: "POST",
          data: {
            id: id,
            admin_team_action: admin_team_action
          },
          success: function(data) {
            fetchTeam();
            alert(data);
          }
        })
      } else {
        return false;
      }
    });
  });
</script>


</html>