<?php

if (isset($_POST["admin_ind_action"])) {
  $output = '';
  include('../include/db.php');

  if ($_POST["admin_ind_action"] == "บันทึก") {
    $indicator_code = mysqli_real_escape_string($connect, $_POST["ind_code"]);
    $indicator_name = mysqli_real_escape_string($connect, $_POST["Name"]);
    $first_name = mysqli_real_escape_string($connect, $_POST["firstName"]);
    $last_name = mysqli_real_escape_string($connect, $_POST["lastName"]);
    $degree = mysqli_real_escape_string($connect, $_POST["degree"]);
    $team = mysqli_real_escape_string($connect, $_POST["team"]);

    $sql = "SELECT * FROM indicator WHERE indicator_code='$indicator_code'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
      echo "รหัสตัวชี้วัด $indicator_code ถูกบันทึกเรียบร้อยแล้ว";
    } else {

      $sql = "INSERT INTO indicator(indicator_code, indicator_name, first_name, last_name, degree, team_code) 
                         VALUES ('" . $indicator_code . "','" . $indicator_name . "','" . $first_name . "','" . $last_name . "','" . $degree . "','" . $team . "')";

      if (mysqli_query($connect, $sql)) {
        echo "ข้อมูลกำลังจะถูกบันทึก";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      }
    }
  }
  if ($_POST["admin_ind_action"] == "บันทึกการแก้ไข") {
    $indicator_code = mysqli_real_escape_string($connect, $_POST["ind_code"]);
    $indicator_name = mysqli_real_escape_string($connect, $_POST["Name"]);
    $first_name = mysqli_real_escape_string($connect, $_POST["firstName"]);
    $last_name = mysqli_real_escape_string($connect, $_POST["lastName"]);
    $degree = mysqli_real_escape_string($connect, $_POST["degree"]);
    $team = mysqli_real_escape_string($connect, $_POST["team"]);

    $sql = "UPDATE indicator SET indicator_code = '" . $indicator_code . "', indicator_name = '" . $indicator_name . "', first_name = '" . $first_name . "', last_name = '" . $last_name . "', degree = '" . $degree . "', team_code = '" . $team . "' WHERE id = " . $_POST["id"];

    if (mysqli_query($connect, $sql)) {
      echo "ข้อมูลจะถูกบันทึกการแก้ไข";
    } else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      echo "รหัสตัวชี้วัดไม่สามารถแก้ไขได้ เนื่องจากข้อมูลถูกนำไปใช้งานแล้ว";
    }
  }
  if ($_POST["admin_ind_action"] == "ลบ") {

    $sql = "DELETE FROM indicator WHERE id = " . $_POST["id"] . "";

    if (mysqli_query($connect, $sql)) {
      echo "ข้อมูลกำลังจะถูกลบ";
    } else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      echo "ข้อมูลไม่สามารถลบได้";
    }
  }
}
