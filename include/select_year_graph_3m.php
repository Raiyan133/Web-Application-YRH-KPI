<?php
$sql = "SELECT * FROM graph_3m WHERE indicator = '" . $ind_code . "'";
$objQuery = mysqli_query($connect, $sql);
while ($objResuut = mysqli_fetch_array($objQuery)) {
?>
    <option value="<?php echo $objResuut["graph_3m_id"]; ?>"><?php echo $objResuut["year"] ?></option>
<?php
}
?>