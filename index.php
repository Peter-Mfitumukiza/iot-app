<html>
  <head>
    <title>PHP Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="sidebars.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
  </head>
  <body>
    <main>
      <nav>
        <div>
          <h1>EFARM</h1>
          <a>Real Time</a>
          <a>Monthly Analysis</a>
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
        <div classs="chart__container">
          
        </div>
      </div>
    </main>
  
    <?php
      include "./db_connection.php";
    ?> 

  </body>
</html>