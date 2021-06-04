

<?php

include "conn.php";
?>
<?php
$id = $_GET['id'];
include "conn.php";

$sql = "DELETE FROM data WHERE id = {$id}";

if(mysqli_query($conn,$sql)){
  header("location: {$hostname}/mmm/show.php");
}

?>
