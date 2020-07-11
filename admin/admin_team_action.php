<?php

if (isset($_POST["admin_team_action"])) {
  $output = '';
  include('../include/db.php');

  if ($_POST["admin_team_action"] == "บันทึก") {
    $degree = mysqli_real_escape_string($connect, $_POST["degree"]);
    $team_code = mysqli_real_escape_string($connect, $_POST["team_code"]);
    $team_name = mysqli_real_escape_string($connect, $_POST["team_name"]);

    $sql = "SELECT * FROM team WHERE team_code='$team_code'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
      echo "ทีมนี้ถูกใช้งานแล้ว";
    } else {

      $sql = "INSERT INTO team(team_code, team_name, degree_id) VALUES ('" . $team_code . "','" . $team_name . "','" . $degree . "')";

      if (mysqli_query($connect, $sql)) {
        echo "ข้อมูลกำลังจะถูกบันทึก";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      }
    }
  }
  if ($_POST["admin_team_action"] == "บันทึกการแก้ไข") {
    $degree = mysqli_real_escape_string($connect, $_POST["degree"]);
    $team_code = mysqli_real_escape_string($connect, $_POST["team_code"]);
    $team_name = mysqli_real_escape_string($connect, $_POST["team_name"]);

    $sql = "UPDATE team SET team_code = '" . $team_code . "', team_name = '" . $team_name . "', degree_id = '" . $degree . "' WHERE id = " . $_POST["id"];

    if (mysqli_query($connect, $sql)) {
      echo "ข้อมูลจะถูกบันทึกการแก้ไข";
    } else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      echo "ข้อมูลไม่สามารถแก้ไขได้";
    }
  }
  if ($_POST["admin_team_action"] == "ลบ") {

    $sql = "DELETE FROM team WHERE id = " . $_POST["id"] . "";

    if (mysqli_query($connect, $sql)) {
      echo "ข้อมูลกำลังจะถูกลบ";
    } else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      echo "ข้อมูลไม่สามารถลบได้";
    }
  }
}
