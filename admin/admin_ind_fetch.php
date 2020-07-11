 <?php

  include('../include/db.php');

  if (isset($_POST["id"])) {
    $output = array();
    $sql = "SELECT * FROM indicator WHERE id = " . $_POST["id"];
    if (mysqli_query($connect, $sql)) {
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_array($result)) {
        $output['indicator_code'] = $row["indicator_code"];
        $output['indicator_name'] = $row["indicator_name"];
        $output['first_name'] = $row["first_name"];
        $output['last_name'] = $row["last_name"];
        $output['degree'] = $row["degree"];
        $output['team'] = $row["team_code"];
      }
      echo json_encode($output);
    }
  }
  ?>  

 





 
