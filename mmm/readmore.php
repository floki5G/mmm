<?php
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readmore</title>
    <link rel="stylesheet" href="readmore.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="read">
<?php
 include "conn.php";
 $id = $_GET['id'];
  $sql2 = "SELECT  * FROM blogs WHERE id= {$id}";
  $result2 = mysqli_query($conn,$sql2);
  if(mysqli_num_rows($result2)>0){
  while($row2  = mysqli_fetch_assoc($result2)){
?>
<div class="read_inside">
    <div class="hading"><?php echo $row2['heading']?></div>
    <div class="info">
       <div class="date">DATE :<?php echo $row2['date']?></div>
            <div class="user">
                  <div class="name">BY : <?php echo $row2['name']?></div>
                  <div class="username">USERNAME : <?php echo $row2['username']?></div>
             </div>
    </div>
         <div class="image">
           <img src="host\uplodeimg\<?php echo $row2['image']  ?>" alt="">
         </div>
           <div class="title">
           <?php echo $row2['title']?>
           </div>
           <div class="content">
           <?php echo $row2['content']?>
           </div>
           <div class="location">
           LOCATION : <?php echo $row2['location']?>
           </div>

     </div>
    <?php    } } ?>
</div>

    </body>
</html>
