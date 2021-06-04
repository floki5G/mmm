<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<?php
include "conn.php";
?>
<?php
if(isset($_POST['login'])){
    include "conn.php";
                $fuser  =$_POST["username"];
                $pass = $_POST["pass"];

$sql = "SELECT * FROM data WHERE username='{$fuser}' AND pass='{$pass}'";
$result= mysqli_query($conn,$sql) or die("eeeeeeerror");
if(mysqli_num_rows($result)>0){
   
 while($row= mysqli_fetch_assoc($result)){
    session_start();
     $_SESSION['sesuser'] = $row['username'];
     $_SESSION['sesid'] = $row['id'];
     $_SESSION['sesname'] = $row['name'];
     $_SESSION['sesemail'] = $row['email'];

     header("location: {$hostname}/mmm/index.php");

 }
 
}
else{
    echo "username or password is wrong .....";
}
}

?>

    <form class="login" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
           <div class="login_inside">
                     <p>welcome back</p>
                     <div class="login_user">
                         <div>username:</div>
                      <input type="text" name="username">
                      
                     </div>
                     <div class="login_pass">
                         <div>pass:</div>
                      <input type="password" name="pass">
                     </div>
                     <div class="login_login">

                             <input type="submit" name="login" value="login">

                             <a href="new.php">dont have account</a>

                    </div>
                 
           </div>
    




    </form>

    </body>
</html>