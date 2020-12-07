<?php
include('../include/db.php');

extract($_GET);
$id = isset($_GET['id']) ? $_GET['id'] : "";

if (!empty($id)) {

  $sql = "DELETE FROM graph_m WHERE graph_m_id = '" . $id . "'";
  if ($connect->query($sql) === TRUE) {
?>
    <script type="text/javascript">
      window.location = "managegraph.php";
    </script>
  <?php
  }

  $sql1 = "DELETE FROM graph_3m WHERE graph_3m_id = '" . $id . "'";
  if ($connect->query($sql1) === TRUE) {
  ?>
    <script type="text/javascript">
      window.location = "managegraph.php";
    </script>
  <?php
  }

  $sql2 = "DELETE FROM graph_6m WHERE graph_6m_id = '" . $id . "'";
  if ($connect->query($sql2) === TRUE) {
  ?>
    <script type="text/javascript">
      window.location = "managegraph.php";
    </script>
  <?php
  }

  $sql3 = "DELETE FROM graph_y WHERE graph_y_id = '" . $id . "'";
  if ($connect->query($sql3) === TRUE) {
  ?>
    <script type="text/javascript">
      window.location = "managegraph.php";
    </script>
<?php
  }
}
?>