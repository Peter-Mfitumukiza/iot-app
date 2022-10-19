<?php
 
$dataPoints = array(
	array("label"=> "Bihogo", "y"=> 38),
	array("label"=> "Ngweba", "y"=> 37.5),
	array("label"=> "Sine", "y"=> 38),
	array("label"=> "Rwiza", "y"=> 39),
	array("label"=> "Nyambo", "y"=> 39.1),
	array("label"=> "Cyamatare", "y"=> 38.4),
	array("label"=> "Rwiza", "y"=> 38.4),
	array("label"=> "Gaju", "y"=> 37.9),
	array("label"=> "Rubogobogo", "y"=> 39),
	array("label"=> "Sine", "y"=> 37.5)
);
	
?>

<html>
  <head>
    <title>PHP Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="sidebars.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <script>
      window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Live Cow Temperatures"
	},
	axisY: {
		title: "Temperature"
	},
	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
  </head>
  <body>
    <main>
      <nav>
        <div>
          <h1>EFARM</h1>
          <a>Real Time</a>
<!--           <a>Monthly Analysis</a> -->
          <a>Cow Management </a>
          <a>Help and Support</a>
          <a>Logout</a>
        </div>  
      </nav>  
      <div class="main__ground"> 
        <div class="heading__container">
          <h1>Dashboard</h1>
          <div class="icon__profile">
            <i class="fa-solid fa-bell"></i>
            <img src="https://picsum.photos/40" >
          </div>
        </div>
        <div class="small__info">
          <div class="info">
            <p>Number of cows</p>
            <span> 10 </span>
          </div>
          <div class="info">
            <p>Average cow temperature</p>
            <span> 38 </span>
          </div>
          <div class="info">
            <p>Cows with critical temperature</p>
            <span> 10 </span>
          </div>
        </div>
        <div class="chart__container">
          <div id="chartContainer" style="height: 100%; width: 100%;"></div>
        </div>
      </div>
    </main>
  
    <?php
      include "./db_connection.php";
    ?> 
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  </body>
</html>