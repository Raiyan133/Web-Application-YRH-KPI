<?php
include('../include/db.php');
include('../include/username.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>จัดการสมาชิก</title>
  <?php include('../include/head.php'); ?>

  <script>
    function getTeam(val) {
      $.ajax({
        type: "POST",
        url: "admin_get_team.php",
        data: 'degreeid=' + val,
        success: function(data) {
          $("#team").html(data);
        }
      });
    }
  </script>

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
                                  lang: 'th',
                                  timepicker: false,
                                  format: 'd/m/Y'
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
                                $sql1 = "SELECT * FROM degree";
                                $results = $connect->query($sql1);
                                while ($rs = $results->fetch_assoc()) {
                                ?>
                                  <option value="<?php echo $rs["degree_id"]; ?>"><?php echo $rs["degree_name"]; ?></option>
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
    fetchStaff();

    function fetchStaff() {
      var admin_staff_action = "admin_staff_select";
      $.ajax({
        url: "admin_staff_select.php",
        method: "POST",
        data: {
          admin_staff_action: admin_staff_action
        },
        success: function(data) {
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
    $('#admin_staff_action').click(function() {
      var name = $('#staff_name').val();
      var surname = $('#staff_surname').val();
      var birthday = $('#staff_birthday').val();
      var id_num = $('#staff_id_num').val();
      var degree = $('#degree').val();
      var team = $('#team').val();
      var position = $('#staff_position').val();
      var username = $('#staff_username').val();
      var password = $('#staff_password').val();
      var id = $('#num_id').val();
      var admin_staff_action = $('#admin_staff_action').text();
      if (name != '' && surname != '' && birthday != '' && id_num != '' && team != '' && position != '' && username != '' && password != '') {
        if ($('#degree').val()) {
          $.ajax({
            url: "admin_staff_action.php",
            method: "POST",
            data: {
              name: name,
              surname: surname,
              birthday: birthday,
              id_num: id_num,
              degree: degree,
              team: team,
              position: position,
              username: username,
              password: password,
              id: id,
              admin_staff_action: admin_staff_action
            },
            success: function(data) {
              alert(data);
              fetchStaff();
            }
          });
        } else {
          alert("กรุณาเลือกความถี่");
        }
      } else {
        alert("กรุณาป้อนข้อมูลให้ครบทุกช่อง");
      }
    });
    $(document).on('click', '.update', function() {
      var id = $(this).attr("id");
      $.ajax({
        url: "admin_staff_fetch.php",
        method: "POST",
        data: {
          id: id
        },
        dataType: "json",
        success: function(data) {
          getTeam1(id, data);
        }
      })
    });
    $(document).on('click', '.delete', function() {
      var id = $(this).attr("id");
      if (confirm("คุณแน่ใจว่าต้องการลบหรือไม่ ?")) {
        var admin_staff_action = "ลบ";
        $.ajax({
          url: "admin_staff_action.php",
          method: "POST",
          data: {
            id: id,
            admin_staff_action: admin_staff_action
          },
          success: function(data) {
            fetchStaff();
            alert(data);
          }
        })
      } else {
        return false;
      }
    });
  });

  function getTeam1(id, data1) {
    $.ajax({
      type: "POST",
      url: "admin_get_team.php",
      data: 'degreeid=' + data1.degree,
      success: function(data) {
        $("#team").html(data);
        setData(id, data1);
      }
    });
  }

  function setData(id, data) {

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