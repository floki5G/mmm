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
   session_start();
  $name = $_SESSION['sname'];
  $pass = $_SESSION['spass'];
  if(empty($name)||empty($pass)){
      echo" and fill all data dont leave empty please enter your admin userid and pass";
       header("location: {$hostname}adminlogin.php");
   }
   else{
    if(isset($_GET['submit'])){
    include "conn.php";
    $tname = $_GET['title'];
    $tname2 = $_GET['title2'];
    $set = "INSERT INTO title(title_name,titlename2)
               VALUE ('{$tname}','{$tname2}')";
    if(mysqli_query($conn,$set)){
        header("location: {$hostname}/mmm/index.php");
    }
} } 

?>

    <form class="logine" action="<?php $_SERVER['PHP_SELF']?>"  method="GET">


    <div class="login_inside">
                       <p>HEADING & SECOND</p>
                         <div class="login_user">
                         <div>heading:</div>
                          <input type="text" name="title">
                      
                     </div>

                     <div class="login_pass">
                         <div> second heading:</div>
                        <input type="text" name="title2">
                     </div>
                     <div class="login_login">
                     <input type="submit" name="submit" value="done"> 
                     </div>

              </div>

    </form>




    </body>
</html>

