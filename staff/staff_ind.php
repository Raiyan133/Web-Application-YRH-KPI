<?php
include('../include/db.php');
include('../include/username.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>จัดการตัวชี้วัด</title>
  <?php include('../include/head.php'); ?>

  <script>
    function getTeam(val) {
      $.ajax({
        type: "POST",
        url: "staff_get_team.php",
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
    <?php include('../staff/staff_include/staff_sidebar.php'); ?>
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
                          <h1 class="h4 text-gray-900 mb-4">เพิ่มตัวชี้วัดใหม่</h1>
                        </div>

                        <form class="form-group text-right">
                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">รหัสตัวชี้วัด :</span>
                            </div>
                            <div class="col-sm-10">
                              <input class="form-control" id="indicator_code" name="indicator_code" type="text">
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
                              <input class="form-control" id="last_name" name="last_name" type="text">
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

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text"></span>
                            </div>
                            <div class="col-sm-10">
                              <input type="hidden" name="id" id="num_id" />
                              <button class="btn btn-secondary btn-user btn-block bg-gray-900" type="button" name="staff_ind_action" id="staff_ind_action"></button>
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
    fetchIndicator();

    function fetchIndicator() {
      var staff_ind_action = "staff_ind_select";
      $.ajax({
        url: "staff_ind_select.php",
        method: "POST",
        data: {
          staff_ind_action: staff_ind_action
        },
        success: function(data) {
          $('#indicator_code').val('');
          $('#indicator_name').val('');
          $('#first_name').val('');
          $('#last_name').val('');
          $('#degree').val('');
          $('#team').val('');
          $('#staff_ind_action').text('บันทึก');
          $('#result').html(data);
        }
      });
    }
    $('#staff_ind_action').click(function() {
      var ind_code = $('#indicator_code').val();
      var Name = $('#indicator_name').val();
      var firstName = $('#first_name').val();
      var lastName = $('#last_name').val();
      var degree = $('#degree').val();
      var team = $('#team').val();
      var id = $('#num_id').val();
      var staff_ind_action = $('#staff_ind_action').text();
      if (ind_code != '' && Name != '' && firstName != '' && lastName != '' && team != '') {
        if ($('#degree').val()) {
          $.ajax({
            url: "staff_ind_action.php",
            method: "POST",
            data: {
              ind_code: ind_code,
              Name: Name,
              firstName: firstName,
              lastName: lastName,
              degree: degree,
              team: team,
              id: id,
              staff_ind_action: staff_ind_action
            },
            success: function(data) {
              alert(data);
              fetchIndicator();
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
        url: "staff_ind_fetch.php",
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
        var staff_ind_action = "ลบ";
        $.ajax({
          url: "staff_ind_action.php",
          method: "POST",
          data: {
            id: id,
            staff_ind_action: staff_ind_action
          },
          success: function(data) {
            fetchIndicator();
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
      url: "staff_get_team.php",
      data: 'degreeid=' + data1.degree,
      success: function(data) {
        $("#team").html(data);
        setData(id, data1);
      }
    });
  }

  function setData(id, data) {
    $('#staff_ind_action').text("บันทึกการแก้ไข");
    $('#num_id').val(id);
    $('#indicator_code').val(data.indicator_code);
    $('#indicator_name').val(data.indicator_name);
    $('#first_name').val(data.first_name);
    $('#last_name').val(data.last_name);
    $('#degree').val(data.degree);
    $('#team').val(data.team);
  }
</script>


</html>