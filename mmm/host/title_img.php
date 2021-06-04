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
    <link rel="stylesheet" href="title_image.css">
</head>
<body>
<?php
include "conn.php";
session_start();
$name = $_SESSION['sname'];
$pass = $_SESSION['spass'];
if(empty($name)||empty($pass)){
   echo" please enter your admin userid and pass";
    header("location: {$hostname}adminlogin.php");
}
else{
if(isset($_FILES['image'])){
    echo"<Pre>";
    print_r($_FILES);
    echo"</Pre>";
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];

  move_uploaded_file($file_tmp,"uplodeimg/". $file_name);


    $set = "INSERT INTO title_img(img)
               VALUE ('{$file_name}')";
    $result = mysqli_query($conn,$set) or  die("error"); 
} }
?>

<form action=""  method="POST" enctype="multipart/form-data">
       <div class="image">
                 <div class="imag">
                               <input type="file" name="image" >
                  </div>
                 <div  class="imagee">
                               <input type="submit" name="submit" >
                     </div>
       </div> 
    </form>
    </body>
</html>