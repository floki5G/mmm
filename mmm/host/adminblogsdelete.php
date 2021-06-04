<?php
include "conn.php";
?>
<?php
include "conn.php";
$id=$_GET['id'];
$sql="DELETE FROM blogs Where id= '{$id}'";
if(mysqli_query($conn,$sql)){
    header("location: {$hostname}\mmm\host\showblogs.php");
}

?>