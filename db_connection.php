<?php 
    $host ="localhost";
    $pass = "";
    $user = "";
    $db = 'stk_management';

    $connection = mysqli_connect($host,$user,$pass,$db);
    if(!$connection){
        echo "Error: Cannot connect to database. ".mysqli_connect_error();
    }
?>