<?php
include("../include/db.php");
include('../include/username.php');
include('../include/select_user.php');
if ($count_admin == 1) {
	$query = "SELECT * FROM team WHERE degree_id = '" . $_POST["degreeid"] . "'";
	$results = $connect->query($query);
?>
	<option value="">โปรดเลือกทีม</option>
	<?php
	while ($rs = $results->fetch_assoc()) {
	?>
		<option value="<?php echo $rs["team_code"]; ?>"><?php echo $rs["team_code"]; ?> - <?php echo $rs["team_name"]; ?></option>
	<?php
	}
} else if ($count_staff == 1) {
	$query = "SELECT * FROM team WHERE degree_id = '" . $_POST["degreeid"] . "' AND team_code = '$username'";
	$results = $connect->query($query);

	?>
	<option value="">โปรดเลือกทีม</option>
	<?php
	while ($rs = $results->fetch_assoc()) {
	?>
		<option value="<?php echo $rs["team_code"]; ?>"><?php echo $rs["team_code"]; ?> - <?php echo $rs["team_name"]; ?></option>
<?php
	}
}
?>