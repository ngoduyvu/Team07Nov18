<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Movie Review</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

	<!-- Loading main css file -->
	<link rel="stylesheet" href="style/style.css">

	</head>

<body>
    <div class ="site-container">
    	<!------------------- Header Part ------------------->
    	<?php include("include/header.inc") ?>
        
        <!------------------- Contain Part ------------------->
        <main class="main-content">
        	<div class="container">

                
                <div id="demo" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>
              
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <a href="movie_detail.php?id=1"><img src="img/movie/Alita_poster.jpg" width="900" height="500"></a>
                </div>
                <div class="carousel-item">
                  <a href="movie_detail.php?id=3"><img src="img/movie/Aquaman_poster.jpg" width="900" height="500"></a>
                </div>
                <div class="carousel-item">
                  <a href="movie_detail.php?id=5"><img src="img/movie/Bohemian-Rhapsody_poster.jpg" width="900" height="500"></a>
                </div>
              </div>
              
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
              
              
              <!-- Display Movies -->
              <dev style="display: inline-block;">
              	  <h2>Upcoming Movies</h2>
                  <a href="movie_detail.php?id=1"><img class="movies_poster" src="img/movie/Alita-Battle-Angel-2019.jpeg"></a>
                  <a href="movie_detail.php?id=1"><img class="movies_poster" src="img/movie/A-Star-Is-Born-2018.jpg"></a>
                  <a href="movie_detail.php?id=1"><img class="movies_poster" src="img/movie/Avengers-Infinity-War-2018.jpg"></a>
                  <a href="movie_detail.php?id=1"><img class="movies_poster" src="img/movie/Captain-Marvel-2019.jpeg"></a>
                  <a href="movie_detail.php?id=1"><img class="movies_poster" src="img/movie/The-Mule-2018.jpeg"></a>
                  <a href="movie_detail.php?id=1"><img class="movies_poster" src="img/movie/Bohemian-Rhapsody.jpeg"></a>
                  <a href="movie_detail.php?id=1"><img class="movies_poster" src="img/movie/Mortal-Engines-2018.jpeg"></a>
                  <a href="movie_detail.php?id=1"><img class="movies_poster" src="img/movie/How-to-Train-Your-Dragon-The-Hidden-World-2019.jpeg"></a>
             </dev>
              
              <h2 style="margin-botton: 0px; padding-bottom: 0px;">Most Watching</h2>
              <a href="movie_detail.php?id=1"><img class="movies_poster" src="img/movie/Spider-Man-Into-the-Spider-Verse-2018.jpeg"></a>
              <a href="movie_detail.php?id=1"><img class="movies_poster" src="img/movie/Aquaman-2018.jpeg"></a>
              <a href="movie_detail.php?id=1"><img class="movies_poster" src="img/movie/the-grinch.jpeg"></a>
              <a href="movie_detail.php?id=1"><img class="movies_poster" src="img/movie/Serenity-2019.jpg"></a>
                
                
                
            </div>
        </main>
    </div>
    
    
    <!------------------- Footer Part ------------------->
	<?php include("include/footer.inc") ?>
</body>
</html>


