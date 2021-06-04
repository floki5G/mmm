<?php
include "conn.php";
?>
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
    session_start();
    include "conn.php";
    $name = $_SESSION['sname'];
    $pass = $_SESSION['spass'];
    if(empty($name)||empty($pass)){
        echo" please enter your admin userid and pass";
         header("location: {$hostname}adminlogin.php");
     }
     else{
     $sql = "SELECT * FROM blogs";
     $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      
    ?>
    <table>
       <tr>
           <td>date</td>
           <td>name</td>
           <td>username</td>
           <td>heading</td>
           <td>post_id</td>
           <td>image</td>
           <td>delete</td>
       </tr>
       <?php   while($row=mysqli_fetch_assoc($result)){ ?>
       <tr>
           <th><?php echo $row['date'];?></th>
           <th><?php echo $row['name'];?></th>
           <th><?php echo $row['username'];?></th>
           <th><?php echo $row['heading'];?></th>
           <th><?php echo $row['post_id'];?></th>
           <th><?php echo $row['image'];?></th>
           <th><a href="adminblogsdelete.php?id= <?php echo $row['id'];?>">remove</a></th>
       </tr>
<?php } }  }?>
</table>
</body>
</html>