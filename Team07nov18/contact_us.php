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
              <form action="sending_message.php" method="POST">
            
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" placeholder="Your name..">
            
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" placeholder="Your last name..">
            
                <label for="country">Country</label>
                <select id="country" name="country">
                  <option value="australia">Australia</option>
                  <option value="canada">Canada</option>
                  <option value="usa">USA</option>
                  <option value="usa">CHina</option>
                  <option value="usa">India</option>
                </select>
            
                <label for="subject">Message</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            
                <input type="submit" value="Submit">
            
              </form>                   
            </div>
            
            
            
            
        </main>
    </div>
    
    
    <!------------------- Footer Part ------------------->
	<?php include("include/footer.inc") ?>
</body>
</html>
