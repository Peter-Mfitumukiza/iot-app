<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="sidebars.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet"> 
    <script
      src="https://code.jquery.com/jquery-3.6.1.min.js"
      integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
        <p class="loader" style="display: none; text-align: center">
          Loading data...
        </p>
        <p class="error" style="display: none; text-align: center">
          Something went wrong
        </p>
        <div class="chart__container">
          <div id="chartContainer" style="height: 100%; width: 100%;"></div>
        </div>
      </div>
    </main>

    <script>
      setTimeout(() => {
        window.location.reload();
      }, 300000);
      const canvas = document.getElementById("chart_data");
      $(".chart__container").hide();
      $(".loader").show();
      $(".error").hide();

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          let data = JSON.parse(this.responseText);
          $(".error").hide();
          $(".loader").hide();
          $(".chart__container").show();
          $(".title").show();
          displayChart(data);
        } else {
          $(".loader").hide();
          $(".error").show();
          console.log("Failed to fetch");
        }
      };
      xmlhttp.open("GET", "../controllers/read.php", true);
      xmlhttp.send();
      
      const displayChart = (data) =>{
        var chart = new CanvasJS.Chart("chartContainer", {
	      animationEnabled: true,
	      theme: "light2", // "light1", "light2", "dark1", "dark2"
	      title: {
		      text: "Live Sensor Readings"
	      },
	      axisY: {
		      title: "Temperature"
	      },
	      data: [{
		      type: "column",
		      dataPoints: data
	      }]
      });
      chart.render();
    }
  </script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </body>
</html>