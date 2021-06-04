<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addblogs.css">
</head>
    




<?php
include "conn.php";
?>



<?php 
 session_start();
if(isset($_POST['submit'])){
    include "conn.php";
    $post_id =  $_SESSION['sesid'];

    if(isset($_FILES['image'])){
 
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
      
        move_uploaded_file($file_tmp,"host/uplodeimg/". $file_name);
        
    $text = $_POST['title'];
    $content = $_POST['content'];
    $location = $_POST['location'];
    $heading = $_POST['heading'];
    $date =  date("d/m/y");
    $name =  $_SESSION['sesname'];
    $uname = $_SESSION['sesuser'];
    
    print_r($post_id);
    if(empty($text) || empty($content) || empty($location) ||empty($date) ||empty($name) ||empty($uname)||empty($heading)){

        echo "please login befour adding post and make sure fill all the data";
  
}
else{
  
    $sql = "INSERT INTO blogs (	post_id,image,title,content,location,date,name,username,heading )
    VALUE ('{$post_id}','{$file_name}','{$text}','{$content}','{$location}','{$date}','{$name}','{$uname}','{$heading}')";
    $result = mysqli_query($conn,$sql) or die("fuck");
    header("location: {$hostname}/mmm/index.php");
}
}
}

?>

<body>
 <form class="add"  action="" method="POST" enctype="multipart/form-data" >
   <div class="add_inside">
       <div>ADDBLOGS</div>
       <div  id="add_data1">
           <div>
           image:
           </div>
           <input type="file" name="image"> <br>

       </div>
       <div class="add_data">
           <div>
           title:
           </div>
            <input type="text" name="title"><br>
           
       </div>
       <div class="add_data">
           <div>
             content:
             </div>
             <input type="text" name="content"><br>
       </div>
       <div class="add_data">
           <div>
           location:
           </div>
             <input type="text" name="location"><br>
       </div>
       <div id="add_data2">
           <div>
           heading:
           </div>
           <input type="text" name="heading"><br>
       </div>
       <div id="sub">
           <input type="submit" name="submit" value="done">
       </div>
   </div>
 </form>  
 </body>
</html>
