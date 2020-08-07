<!-- Php to insert email to databse -->

<?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $conn = mysqli_connect("localhost", "root", "", "newsletter");
        $query = "INSERT INTO emaildb(email) VALUES('{$email}')";
        $result = mysqli_query($conn, $query);

        if(!$query){
            die("Query Failed".mysqli_error());
        }else{
            echo "";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <!--Font  -->
    <script src="https://kit.fontawesome.com/56677e1402.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;700&display=swap" rel="stylesheet">
    <!--Fade out message   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Submit Newsletter</title>

</head>
<header>

<!-- Nav bar -->
  <a class="logo" href="/"><img src="images/logooo.png" alt="logo"></a>
            <nav>
                <ul class="nav__links">
                    <li><a href="Main.html">Home</a></li>
                    <li><a href="News.html">News</a></li>
                    <li><a href="Main.html">FunFacts</a></li>
                    <li><a href="Main.html">History</a></li>
                    <li><a href="sportsDiary.html">Diary</a></li>
                    <li><a href="PhotoGallery">Gallery</a></li>
                    <li><a href="About.html">About</a></li>
                </ul>
            </nav>

            <p class="menu cta"><a href="newsletter.php"> Newsletter</a></p>




  </header>
<!-- Main content -->
<body>
  <div class="container">
    <form id="emailform" action="indexxx.php" method="post">
      <img src="images\greek.svg" width="400px">
      <h1>Join Our Monthly Newsletter</h1>
      <p>By joining our newsletter program we will make sure you will not miss out on any sports news period!</p>
      <div class="email-box">
        <i class="fas fa-envelope"></i>
        <input class="tbox" type="email" name="email" value="" placeholder="Enter your email" required>
        <input class="button" type="submit" name="submit" value="Subscribe">
      </div>
      <span id="error_message" class="text-danger"></span>
       <span id="success_message" class="text-success"></span>
    </form>
  </div>

<!-- Footer menu -->

<div class="footer">

  <div class="inner_footer">
    <div class="logo_container">
      <img class="logo" src="images\lari.svg" >

    </div>

    <div class="footer_third">
      <h1>Navigations</h1>
      <a href="main.html">Home</a>
      <a href="News.html">News</a>
      <a href="main.html">History</a>
      <a href="newsletter.php">Newsletter</a>
      <a href="sportsDiary.html">Sports Diary</a>
      <a href="PhotoGallery.html">Image Gallery</a>
      <a href="About.html">About</a>
    </div>

    <div class="footer_third">
      <h1>Follow us</h1>
      <li><a href="https://www.instagram.com/thearenabywebster/?hl=en"><i class="fa fa-instagram social"></i></a></li>
      <li><a href="https://twitter.com/TheAren05091314"><i class="fa fa-twitter social" ></i></a></li>
    </div>



    <div class="footer_bottom">
    &copy; Webster | Design by Webster<br>
      <img src="images/webster.png" width="50px" alt="">
    </div>
  </div>

</div>




</body>

<!--Script for Newsletter signup  -->
<script>
$("#emailform").submit(function(e) {
	e.preventDefault();
	var email = $("#email").val();


	if(email == "") {
		$("#error_message").show().html("");
	} else {
		$("#error_message").html("").hide();
		$.ajax({
			type: "POST",
			url: "newsletter.php",
			data: "email="+email,
			success: function(data){
				$('#success_message').fadeIn().html("Thank you for joining our newsletter");
				setTimeout(function() {
					$('#success_message').fadeOut("slow");
				}, 2000 );
        $('#emailform')[0].reset();
			}
		});
	}
})
</script>
</html>
