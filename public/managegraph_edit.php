<?php
include('../include/db.php');

extract($_GET);
$id = isset($_GET['id']) ? $_GET['id'] : "";

if (!empty($id)) {

  $sql = "SELECT graph_m.*, indicator.* 
    FROM graph_m, indicator 
    WHERE indicator.indicator_code=graph_m.indicator 
    AND graph_m_id = '" . $id . "'";

  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) > 0) {
?>
    <script type="text/javascript">
      window.location = "insert_m_edit.php?id=<?= $id ?>";
    </script>
  <?php
  }

  $sql = "SELECT graph_3m.*, indicator.* 
    FROM graph_3m, indicator 
    WHERE indicator.indicator_code=graph_3m.indicator 
    AND graph_3m_id = '" . $id . "'";

  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) > 0) {

  ?>
    <script type="text/javascript">
      window.location = "insert_3m_edit.php?id=<?= $id ?>";
    </script>
  <?php
  }

  $sql = "SELECT graph_6m.*, indicator.* 
    FROM graph_6m, indicator 
    WHERE indicator.indicator_code=graph_6m.indicator 
    AND graph_6m_id = '" . $id . "'";

  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) > 0) {

  ?>
    <script type="text/javascript">
      window.location = "insert_6m_edit.php?id=<?= $id ?>";
    </script>
  <?php
  }

  $sql = "SELECT graph_y.*, indicator.* 
    FROM graph_y, indicator 
    WHERE indicator.indicator_code=graph_y.indicator 
    AND graph_y_id = '" . $id . "'";

  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) > 0) {

  ?>
    <script type="text/javascript">
      window.location = "insert_y_edit.php?id=<?= $id ?>";
    </script>
<?php
  }
}
?>