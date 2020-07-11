 <?php

  include('../include/db.php');


  if (isset($_POST["id"])) {
    $output = array();
    $sql = "SELECT * FROM team WHERE id = " . $_POST["id"];
    if (mysqli_query($connect, $sql)) {
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_array($result)) {
        $output['id_num'] = $row["id"];
        $output['degree'] = $row["degree_id"];
        $output['team_code'] = $row["team_code"];
        $output['team_name'] = $row["team_name"];
      }
      echo json_encode($output);
    }
  }
  ?>  

 





 
