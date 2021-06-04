<?php
    $conn = mysqli_connect('localhost','root','','info');
    // $conn = mysqli_connect('sql112.epizy.com','epiz_28656266','fQF19eigV7oj','epiz_28656266_copypen');
    if($conn->connect_error){
        die($conn->connect_error);
    }
    // else{
    //     echo "done ";
    // } 
    ?>