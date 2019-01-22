<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>

<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    //require_once "include/config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM movies WHERE id = ?";
	$conn  = db_connect();
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $title = $row["Title"];
                $director = $row["Director"];
                $stars = $row["Stars"];
				$genres = $row["Genres"];
				$release_date = $row["Release_Date"];
				$runtime = $row["Runtime"];
				$country = $row["Country"];
				$language = $row["Language"];
				$location = $row["Filming_Locations"];
				$imdb_rating = $row["IMDB_Rating"];
				$storyline = $row["Storyline"];
				$poster = $row["Poster"];
            } else {
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
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
				<?php 
				//echo "The title is $title.";
				//echo "<br>";
				//echo "The directors are $director.";
				//echo "<br>";
				//echo "The stars are $stars.";
				//echo "<br>";
				//echo $poster;
				//echo "<br>";
				//echo $storyline;
				?>
                <h2><?php echo $title ?></h2>
                <img id="movie_detail_poster" src= "<?php echo $poster ?>" alt="test"/>
                <div id="movie_detail_infor">
                	<!-- <p class="movie_detail_letters"><strong>Title:</strong> <?php echo $title ?>.</p>  -->
                    <p class="movie_detail_letters"><strong>Director:</strong> <?php echo $director ?>.</p>
                    <p class="movie_detail_letters"><strong>Stars:</strong> <?php echo $stars ?>.</p>
                    <p class="movie_detail_letters"><strong>Genres:</strong> <?php echo $genres ?>.</p>
                    <p class="movie_detail_letters"><strong>Release Date:</strong> <?php echo $release_date ?>.</p>
                    <p class="movie_detail_letters"><strong>Runtime:</strong> <?php echo $runtime ?>.</p>
                    <p class="movie_detail_letters"><strong>Country:</strong> <?php echo $country ?>.</p>
                    <p class="movie_detail_letters"><strong>Language:</strong> <?php echo $language ?>.</p>
                    <p class="movie_detail_letters"><strong>Filming Locations:</strong> <?php echo $location ?>.</p>
                    <p class="movie_detail_letters"><strong>IMDB Rating:</strong> <?php echo $imdb_rating ?>.</p>            
                </div>
                <div id="movie_story_line" style="display: inline-block; margin-top: 10px;">
                	<p style="width:100%; margin: 5px;"><strong>Storyline:</strong> <?php echo $storyline ?>.</p>
				</div>
            </div>
        </main>
    </div>
    
    <div class="container">
  <h2>Our  Partners/ Our Clients</h2>
   <section class="customer-logos slider">
      <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
      <div class="slide"><img src="http://www.webcoderskull.com/img/logo.png"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
   </section>
   
<h2><a href="http://www.webcoderskull.com" target="_blank">http://www.webcoderskull.com</a></h2>
</div>
    <!------------------- Footer Part ------------------->
	<?php include("include/footer.inc") ?>
</body>
</html>


