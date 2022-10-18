<?php 
    $host ="sql.freedb.tech";
    $pass = "eHnh9%hwHVtznP$";
    $user = "freedb_peter";
    $db = 'freedb_iot-app';

    $connection = mysqli_connect($host,$user,$pass,$db);
    if(!$connection){
        echo "Error: Cannot connect to database.       ".mysqli_connect_error();
    }
?>