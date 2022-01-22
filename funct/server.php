<?php
    $servername= "localhost";
    $username="root";
    $password="";
    $dbname = "register_db";

    $con = mysqli_connect($servername,$username,$password,$dbname);
    if (!$con){
        die("Connection Failed การเชื่อมต่อล้มเหลว". mysqli_connect_error());
    }

?>