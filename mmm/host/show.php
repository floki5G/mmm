<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="show.css">

</head>
<body>
 

<?php
include "conn.php";
?>
<?php
session_start();
include "conn.php";
$name = $_SESSION['sname'];
$pass = $_SESSION['spass'];
if(empty($name)||empty($pass)){
   echo" please enter your admin userid and pass";
    header("location: {$hostname}adminlogin.php");
}
else{
 $sql = "SELECT * FROM data";
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
     
?>
    <div>
    <table>
  
        <tr>
                  <td>name</td>
                  <td>username</td>
                  <td>email</td>
                  <td>pass</td>
                  <td>remove</td>
        </tr>
             <?Php  while($tdata =  mysqli_fetch_assoc($result)){ ?>
        <tr>
                  <th><?Php  echo $tdata['name'] ; ?></th>
                  <th><?Php   echo $tdata['username'] ;?></th>
                  <th><?Php   echo $tdata['email'] ;?></th>
                  <th><?Php   echo $tdata['pass'] ; ?></th>
                  <th> <a href="delete.php?id= <?php echo $tdata['id'];?>"> delete </a></th>

        </tr>
    <?Php  }  ?>
    
    </table>
    </div>
<?php
} }
?>

</body>
</html>