<!DOCTYPE html>
<html lang="en">
<head>
  <title>Class Routine Adaption</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 50%; /* Set width to 100% */
      margin: auto;
      height: 30%; 
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/home') }}">Home</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>

        <a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        </li>
        <li>
        <a href="{{ url('/register') }}"><span class="glyphicon glyphicon-log-in"></span> Register</a>

        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
<div class="container text-center"> 
    <h2>Class Routine Adaption</h2>
    </div>
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    
      <div class="item active">
        <img src="img1.jpg" alt="Image">    
      </div>

      <div class="item">
        <img src="img2.jpg" alt="Image">     
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Supervisor</h3><br>
      <img src="masum_sir.jpg" class="img-circle" width="200" height="200"  alt="Image">
      <p>Md Masum<br>Associate Profesor<br>Dept. of CSE<br>Shahjalal University of Science and Technology</p>   
    </div><br>


<div class="container text-center">    
  <h3>Developers</h3><br>
    <div class="row">
      <p>Nishikanto Sarkar Simul<br>Session 2012-13<br>Reg. 2012331071<br>Dept. of CSE<br>Shahjalal University of Science and Technology</p> 
      <br>  
      <p>Nusrat Mubin Ara<br>Session 2012-13<br>Reg. 2012331024<br>Dept. of CSE<br>Shahjalal University of Science and Technology</p>
      </div>
    </div><br>


</body>
</html>