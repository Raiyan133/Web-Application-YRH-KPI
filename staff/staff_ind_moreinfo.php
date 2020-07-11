<?php
include('../include/db.php');

if (isset($_POST['id'])) {
  $id = $_POST['id'];
  $sql = "SELECT indicator.*, degree.* FROM indicator,degree WHERE degree.degree_id=indicator.degree AND id = $id";
  $objQuery = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($objQuery);

  $indicator_code = $row["indicator_code"];
  $indicator_name = $row["indicator_name"];
  $first_name = $row["first_name"];
  $last_name = $row["last_name"];
  $degree = $row["degree_name"];
  $team = $row["team_code"];
}
?>

<div class="row">
  <div class="col-lg-12">
    <div class="p-5">

      <form class="form-group text-right">

        <div class="form row">
          <div class="col-sm-2">
            <span class="h7 text-gray-900 mb-4 form-text">รหัสตัวชี้วัด :</span>
          </div>
          <div class="col-sm-10">
            <input class="form-control" id="indicator_code" name="indicator_code" type="text" value="<?php echo $indicator_code; ?>" readonly>
          </div>
        </div>

        <div class="form row">
          <div class="col-sm-2">
            <span class="h7 text-gray-900 mb-4 form-text">ชื่อตัวชี้วัด : </span>
          </div>
          <div class="col-sm-10">
            <div class="card shadow mb-4">
              <div class="card-body text-left">
                <?php echo $indicator_name; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="form row">
          <div class="col-sm-2">
            <span class="h7 text-gray-900 mb-4 form-text">ตัวตั้ง : </span>
          </div>
          <div class="col-sm-10">
            <div class="card shadow mb-4">
              <div class="card-body text-left">
                <?php echo $first_name; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="form row">
          <div class="col-sm-2">
            <span class="h7 text-gray-900 mb-4 form-text">ตัวหาร : </span>
          </div>
          <div class="col-sm-10">
            <div class="card shadow mb-4">
              <div class="card-body text-left">
                <?php echo $last_name; ?>
              </div>
            </div>
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


      </form>

    </div>
  </div>
</div>