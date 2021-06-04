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
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

</head>
<body>
<!-- nav-bar  -->

<div>
  <?php
  include "conn.php";
      $sql = "SELECT  title_name,titlename2 FROM title ORDER BY t_id DESC LIMIT 1";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
      while($row  = mysqli_fetch_assoc($result)){
  ?>

    <nav class="nav-start">
       <div class="nav-inside">
          <ul class="nav-one">
              <li><?php echo $row['title_name']  ?> </li>
              <!-- -->
         </ul>   
          <ul class="nav-one" id="nav-t">
              <li><a href="host\adminlogin.php"><i class="fa fa-search"></a></i></li>
              <li><a href="new.php"><i class="fa fa-sign-in"></i></a></li>
              <li id="first-two-three"><i class="fa fa-bars"></i></li>
         </ul>
       </div>
    </nav>
    </div>
<div>
<!-- nav-bar-ends  -->
    <!-- second block start  -->
    <div class="second-block">
        <div class="second-block-inside">
            <div>
                <a href="">ABOUT</a>
            </div>
            <div>
                <a href="">BLOG</a>
            </div>
            <div>
                <a href="">HOME</a>
            </div>
            <div>
                <a href="">EVENTS</a>
            </div>
        </div>
    </div>
    <!-- second block ends -->
<!-- login start  -->
<div class="login">
             <a href="addblogs.php">ADDPOST</a>
             <a href="login.php">login</a>
             <a href="logout.php">logout</a>
</div>
<!-- login start  -->

 <!-- nav-insta start  -->
<div class="icon-nav">
        <div class="icon-nav-inside">
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-twitter-square"></i></a>
            <a href=""><i class="fa fa-facebook-square"></i></a>
            <a href=""><i class="fa fa-reddit"></i></a>
        </div>
    </div>
 <!-- nav-insta ends  -->

<!-- titl-image-start  -->
<div>
<?php
    include "conn.php";
    $sql1 = "SELECT  img FROM title_img ORDER BY id DESC LIMIT 1";
    $result1 = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1)>0){
    while($row1  = mysqli_fetch_assoc($result1)){
?>
          <div class="img-nav">
              <img src="host\uplodeimg\<?php echo $row1['img']  ?> " alt="">
               <?php    } } ?>
         </div>
</div>
 <!-- titl-image-ends  -->

<div class="head">
  <p><?php echo $row['titlename2']  ?></p>
<!--  -->
</div>


 <!-- BLOGS-image-ends  -->
<div class="blogs">
   <?php
      include "conn.php";
      $sql2 = "SELECT  * FROM blogs ";
      $result2 = mysqli_query($conn,$sql2);
      if(mysqli_num_rows($result2)>0){
      while($row2  = mysqli_fetch_assoc($result2)){
   ?>
     <div class="blogs-inside">
            <div class="blogs-inside-heading"><?php echo $row2['heading']  ?></div>
             <div class="user">
                        <div class="blogs-inside-date">DATE:<?php echo $row2['date']  ?></div>
                                  <div class="user_info">
                                  <div class="blogs-inside-name">BY:<?php echo $row2['name']  ?></div>
                                  <div class="blogs-inside-uname">USERNAME:<?php echo $row2['username']  ?></div>
                        </div>
             </div>
            <div class="blogs-inside-img"><img src="host\uplodeimg\<?php echo $row2['image']  ?> " alt=""> </div>
            <div class="blogs-inside-title"><?php echo $row2['title']  ?></div>
            <div class="blogs-inside-content"><?php echo $row2['content']  ?></div>
            <div class="blogs-inside-more"><a href="readmore.php?id=<?php echo $row2['id'];?>">READ MORE</a> </div>
            <div class="blogs-inside-location">LOCATION:<?php echo $row2['location']  ?></div>

     </div>
            <?php    } } ?> 
  
</div>
    <!-- BLOGS-image-ends  -->

<!-- footer start -->
<footer class="footer">
  
            <div class="footer_title">
                <h1><a href="nev.php"><?php echo $row['title_name']  ?></a> </h1>
            </div>
            <div class="footer_info">
                    <h5>INFO</h5>
                    <h5>HOME</h5>   
                    <h5>ABOUT US</h5>
            </div>
            <div class="footer_info">
                <div class="footer_three_one">
                    <h5>REACH-US</h5>

                </div>

                <div class="reach_us_contect">
                    <i class="fa fa-phone-square"></i>
                    <p>6267064847</p>

                    <i class="fa fa-envelope"></i>
                    <p> sv629688@gmail.com</p>

                    <a target="_blank" href="">
                        <h5>HELP</h5>
                    </a>

                </div>
            </div>

            <div class="footer_comm">
              
                <div>
                    <a href="">
                        <h5>COMMUNITY</h5>
                    </a>

                    <a href="">
                        <h5>REFER A FRIEND</h5>refer a friend
                    </a>
                </div>
            </div>
    <?php    } } ?>
</footer>
<script>
  // top menu bar start 
var a = document.querySelector('.second-block')
var b = document.getElementById('first-two-three');
b.addEventListener('click', () => {
    if (a.style.display === "") {
        a.style.display = "block"
    } else {
        a.style.display = ""
    }
})
</script>
<!-- footer ends -->
</body>
</html>

