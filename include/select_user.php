<?php

$sql_admin = "SELECT username FROM admin where username = '$username'";
$result_admin = mysqli_query($connect, $sql_admin);
$count_admin = mysqli_num_rows($result_admin);

$sql_staff = "SELECT staff_username FROM staff where staff_username = '$username'";
$result_staff = mysqli_query($connect, $sql_staff);
$count_staff = mysqli_num_rows($result_staff);

?>