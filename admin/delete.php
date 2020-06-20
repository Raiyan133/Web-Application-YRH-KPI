<?php 

$id = $_GET['id'];
include('../include/db.php');

// sql to delete a record
$sql = "DELETE FROM graph WHERE graph_id = $id"; 

if (mysqli_query($connect, $sql)) {
    mysqli_close($connect);
    header('Location:admin_edit.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}

?>