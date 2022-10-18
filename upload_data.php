<?php
  include "./db_connection.php";

  if(isset($_POST['submit'])){
      $cow_id = $_POST['cow_id'];
      $temperature = $_POST['temperature'];
      $time = $_POST['time'];  
  }
  $sqlInsert = "INSERT INTO cow_temperature(cow_id, temperature, time)                       
  VALUES('$cow_id','$temperature','$time')";
  $postCowTemperature = mysqli_query($connection,$sqlInsert) or die("Failed to record cow temperature");
  if($postCowTemperature){
            //echo "User saved successfully";
  }
?>