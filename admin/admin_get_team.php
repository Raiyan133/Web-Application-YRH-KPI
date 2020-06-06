
<?php
require_once("connectdb.php");
//$db_handle = new DBController();


	$query ="SELECT * FROM team WHERE degree_id = '" . $_POST["degreeid"] . "'";
	$results = $dbhandle->query($query);
?>
	<option value="">โปรดเลือกทีม</option>
<?php
	while($rs=$results->fetch_assoc()) {
?>
	<option value="<?php echo $rs["team_code"]; ?>"><?php echo $rs["team_code"]; ?> - <?php echo $rs["team_name"]; ?></option>
<?php

}
?>