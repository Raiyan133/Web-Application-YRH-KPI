<?php
include('../include/db.php');

if (isset($_POST['id'])) {
  $id = $_POST['id'];
  $sql = "SELECT staff.*, degree.* FROM staff, degree WHERE degree.degree_id=Staff.staff_degree AND id = '$id'";
  $objQuery = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($objQuery);

  $staff_name = $row["staff_name"];
  $staff_surname = $row["staff_surname"];
  $staff_birthday = $row["staff_birthday"];
  $staff_id_num = $row["staff_id_num"];
  $degree = $row["degree_name"];
  $team = $row["staff_team"];
  $staff_position = $row["staff_position"];
  $staff_username = $row["staff_username"];
  $staff_password = $row["staff_password"];
}
?>

<div class="row">
  <div class="col-lg-12">
    <div class="p-5">

      <form class="form-group text-right">

        <div class="form row">
          <div class="col-sm-2">
            <span class="h7 text-gray-900 mb-4 form-text">ชื่อ :</span>
          </div>
          <div class="col-sm-4">
            <input class="form-control" id="staff_name" name="staff_name" type="text" value="<?php echo $staff_name; ?>" readonly>
          </div>
          <div class="col-sm-2">
            <span class="h7 text-gray-900 mb-4 form-text">นามสกุล :</span>
          </div>
          <div class="col-sm-4">
            <input class="form-control" id="staff_surname" name="staff_surname" type="text" value="<?php echo $staff_surname; ?>" readonly>
          </div>
        </div>

        <div class="form row">
          <div class="col-sm-2">
            <span class="h7 text-gray-900 mb-4 form-text">วันเกิด :</span>
          </div>
          <div class="col-sm-4">
            <input class="form-control" id="staff_birthday" name="staff_birthday" type="text" value="<?php echo $staff_birthday; ?>" readonly>
          </div>
          <div class="col-sm-2">
            <span class="h7 text-gray-900 mb-4 form-text">เลขปชช. :</span>
          </div>
          <div class="col-sm-4">
            <input class="form-control" id="staff_id_num" name="staff_id_num" type="text" value="<?php echo $staff_id_num; ?>" readonly>
          </div>
        </div>

        <div class="form row">
          <div class="col-sm-2">
            <span class="h7 text-gray-900 mb-4 form-text">ระดับ :</span>
          </div>
          <div class="col-sm-4">
            <input class="form-control" id="degree" name="degree" type="text" value="<?php echo $degree; ?>" readonly>
          </div>
          <div class="col-sm-2">
            <span class="h7 text-gray-900 mb-4 form-text">ทีม :</span>
          </div>
          <div class="col-sm-4">
            <input class="form-control" id="team" name="team" type="text" value="<?php echo $team; ?>" readonly>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-2">
            <span class="h7 text-gray-900 mb-4 form-text">ตำแหน่ง :</span>
          </div>
          <div class="col-sm-4">
            <input class="form-control" id="staff_position" name="staff_position" type="text" value="<?php echo $staff_position; ?>" readonly>
          </div>
        </div>

        <div class="form row">
          <div class="col-sm-2">
            <span class="h7 text-gray-900 mb-4 form-text">Username :</span>
          </div>
          <div class="col-sm-4">
            <input class="form-control" id="staff_username" name="staff_username" type="text" value="<?php echo $staff_username; ?>" readonly>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-2">
            <span class="h7 text-gray-900 mb-4 form-text">Password :</span>
          </div>
          <div class="col-sm-4">
            <input class="form-control" id="staff_password" name="staff_password" type="text" value="<?php echo $staff_password; ?>" readonly>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>