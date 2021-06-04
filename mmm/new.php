<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="new.css">
</head>
<body>
   
    <?php
    include "conn.php";

    ?>
    <?php
   
  if(isset($_POST['submit'])){
    include "conn.php";
$fname =$_POST["name"];
$fusername =$_POST["username"];
$femail  =$_POST["email"];
$fpass  =$_POST["pass"];
$fcon_pass  =$_POST["con_pass"];

if(empty($fname) || empty($fusername) || empty($femail) || empty($fpass) || empty($fcon_pass)){
    echo "all files are mendatory";
}
else{

$sql2= "SELECT * FROM data WHERE username = '{$fusername}' AND email = '{$femail}'";
$result2 = mysqli_query($conn,$sql2) or die("fick");
if(mysqli_num_rows($result2)>0){
    echo"user name or email alrady exixt";
}else{
$sql1= "INSERT INTO data (name,username,email,pass,con_pass)
        VALUE('{$fname}','{$fusername}','{$femail}','{$fpass}','{$fcon_pass}')";
        if(mysqli_query($conn,$sql1)){
            echo "succ2";
            header("location: {$hostname}\mmm\login.php");
        }
  }
}
  }


     
    ?>
     <div class="new">
         <form action="<?php $_SERVER['PHP_SELF']?>"  method="POST">
             <div class="new_inside">
                  <div class="new_name">
                      <div>name:</div>
                   <input type="text" name="name">
                  </div>
                  <div class="new_unmae">
                  <div> username:</div>
                  <input type="text" name="username">
                  </div>
                  <div class="new_email">
                  <div>email: </div>
                  <input type="text" name="email">
                  </div>
                  <div class="new_pass">
                  <div> pass:</div>
                   <input type="text" name="pass">
                  </div>
                  <div class="new_con_pss">
                  <div>con_pass:</div>
                    <input type="text" name="con_pass">
                    </div>
                    <div class="done">
                             <input type="submit" name="submit" value="login">
                    </div>
                
             </div>
        

         </form>
    </div>

</body>
</html>