<?php
$sql = "SELECT * FROM graph_m WHERE indicator = '" . $ind_code . "'";
$objQuery = mysqli_query($connect, $sql);
while ($objResuut = mysqli_fetch_array($objQuery)) {
?>
    <option value="<?php echo $objResuut["graph_m_id"]; ?>"><?php echo $objResuut["year"] ?></option>
<?php
}
?>