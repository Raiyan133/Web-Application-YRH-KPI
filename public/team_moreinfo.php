<?php
include('../include/db.php');

if (isset($_POST['id'])) {
  $id = $_POST['id'];
  $sql = "SELECT team.*, degree.* FROM team, degree WHERE degree.degree_id=team.degree_id AND id = $id";
  $objQuery = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($objQuery);

  $degree_name = $row["degree_name"];
  $team_code = $row["team_code"];
  $team_name = $row["team_name"];
}
?>

<div class="row">
  <div class="col-lg-12">
    <div class="p-5">

      <form class="form-group text-right">

        <div class="form row">
          <div class="col-sm-3">
            <span class="h7 text-gray-900 mb-4 form-text">ระดับ :</span>
          </div>
          <div class="col-sm-6">
            <input class="form-control" id="degree" name="degree" type="text" value="<?php echo $degree_name; ?>" readonly>
          </div>
        </div>

        <div class="form row">
          <div class="col-sm-3">
            <span class="h7 text-gray-900 mb-4 form-text">รหัสทีม :</span>
          </div>
          <div class="col-sm-6">
            <input class="form-control" id="team_code" name="team_code" type="text" value="<?php echo $team_code; ?>" readonly>
          </div>
        </div>

        <div class="form row">
          <div class="col-sm-3">
            <span class="h7 text-gray-900 mb-4 form-text">ชื่อทีม :</span>
          </div>
          <div class="col-sm-6">
            <input class="form-control" id="team_name" name="team_name" type="text" value="<?php echo $team_name; ?>" readonly>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>