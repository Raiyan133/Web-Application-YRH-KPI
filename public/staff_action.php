<?php

if (isset($_POST["staff_action"])) {
  $output = '';
  include('../include/db.php');

  if ($_POST["staff_action"] == "บันทึก") {
    $name = mysqli_real_escape_string($connect, $_POST["name"]);
    $surname = mysqli_real_escape_string($connect, $_POST["surname"]);
    $birthday = mysqli_real_escape_string($connect, $_POST["birthday"]);
    $id_num = mysqli_real_escape_string($connect, $_POST["id_num"]);
    $degree = mysqli_real_escape_string($connect, $_POST["degree"]);
    $team = mysqli_real_escape_string($connect, $_POST["team"]);
    $position = mysqli_real_escape_string($connect, $_POST["position"]);
    $username = mysqli_real_escape_string($connect, $_POST["username"]);
    $password =  mysqli_real_escape_string($connect, $_POST["password"]);

    $sql = "SELECT * FROM staff WHERE staff_team='$team'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
      echo "ทีมนี้ถูกใช้งานแล้ว";
    } else {

      $sql = "INSERT INTO staff(staff_name, staff_surname, staff_birthday, staff_id_num, staff_degree, staff_team, staff_position, staff_username, staff_password) 
                         VALUES ('" . $name . "','" . $surname . "','" . $birthday . "','" . $id_num . "','" . $degree . "','" . $team . "','" . $position . "','" . $username . "','" . $password . "')";

      if (mysqli_query($connect, $sql)) {
        echo "ข้อมูลกำลังจะถูกบันทึก";
      } else {
        // echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        echo "ข้อมูลไม่สามารถแก้ไขได้";
      }
    }
  }
  if ($_POST["staff_action"] == "บันทึกการแก้ไข") {
    $name = mysqli_real_escape_string($connect, $_POST["name"]);
    $surname = mysqli_real_escape_string($connect, $_POST["surname"]);
    $birthday = mysqli_real_escape_string($connect, $_POST["birthday"]);
    $id_num = mysqli_real_escape_string($connect, $_POST["id_num"]);
    $degree = mysqli_real_escape_string($connect, $_POST["degree"]);
    $team = mysqli_real_escape_string($connect, $_POST["team"]);
    $position = mysqli_real_escape_string($connect, $_POST["position"]);
    $username = mysqli_real_escape_string($connect, $_POST["username"]);
    $password =  mysqli_real_escape_string($connect, $_POST["password"]);

    $sql = "UPDATE staff SET staff_name = '" . $name . "', staff_surname = '" . $surname . "', staff_birthday = '" . $birthday . "', staff_id_num = '" . $id_num . "', staff_degree = '" . $degree . "', staff_team = '" . $team . "', staff_position = '" . $position . "', staff_username = '" . $username . "', staff_password = '" . $password . "'WHERE id = " . $_POST["id"];

    if (mysqli_query($connect, $sql)) {
      echo "ข้อมูลจะถูกบันทึกการแก้ไข";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
  }
  if ($_POST["staff_action"] == "ลบ") {

    $sql = "DELETE FROM staff WHERE id = " . $_POST["id"] . "";

    if (mysqli_query($connect, $sql)) {
      echo "ข้อมูลกำลังจะถูกลบ";
    } else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      echo "ข้อมูลไม่สามารถลบได้";
    }
  }
}
