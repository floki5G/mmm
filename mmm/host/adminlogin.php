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
    <link rel="stylesheet" href="adminlogin.css">
</head>
<body>
    

    <?php
           if(isset($_POST['submit'])){
            include "conn.php";

             $uname =  $_POST['uname'];
             $pass = $_POST['password'];
       
       $sql = "SELECT * from hostuser WHERE username = '{$uname}' AND pass = '{$pass}'";
       $result = mysqli_query($conn,$sql) or die("fuctttk");
       if(mysqli_num_rows($result)>0){
           while($row=mysqli_fetch_assoc($result)){
               session_start();
             $_SESSION['sname']= $row['username'];
             $_SESSION['spass']= $row['pass'];
             header("location: {$hostname}adminin.php");

           }
       }

           }
       ?>

    
         <form class="logine" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

                    <div class="login_inside">
                       <p>ADMIN LOGIN</p>
                         <div class="login_user">
                         <div>username:</div>
                         <input type="text" name="uname">
                      
                     </div>

                     <div class="login_pass">
                         <div>pass:</div>
                         <input type="password" name="password">
                     </div>
                     <div class="login_login">
        <input type="submit" name="submit"value="login">
                     
                     </div>

              </div>
       

        </form>
   
        </body>
</html>
