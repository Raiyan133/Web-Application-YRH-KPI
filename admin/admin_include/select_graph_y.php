<?php
$sql = "SELECT graph_y.*, indicator.* 
FROM graph_y, indicator 
WHERE indicator.indicator_code=graph_y.indicator 
AND graph_y_id = '" . $id . "'";

$objQuery = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($objQuery)) {

	$graph_id = $row['graph_y_id'];
	$indicator_code = $row['indicator_code'];
	$indicator_name = $row['indicator_name'];
	$first_name = $row["first_name"];
	$last_name = $row["last_name"];
	$comment = $row['comment'];
	$user_post = $row['user_post'];
	$date = $row['date'];
	$year = $row['year'];
	$status = $row['status'];

	$number1 = $row['number1'];
	$divisor1 = $row['divisor1'];

	$result1 = $number1 * 100 / $divisor1;

	$dataPoints = array(
		array("label" => $year, "y" => $result1)
	);
}
