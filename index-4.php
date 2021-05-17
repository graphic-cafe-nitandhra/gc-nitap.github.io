<?php

if(isset($_POST["submit"]))
{
	$recipient="graphic.cafe2020@gmail.com";
		$subject="Form to email message";
		
$sender=$_POST["name"];

$year=$_POST["yr"];

$branch=$_POST["br"];

$mail=$_POST["mail"];

$message=$_POST["message"];

$mailBody="Name:$sender
\nYear:$year
\nbranch=$branch
\nEmail:$mail
\n\n$message";
mail($recipient,$subject,$mailBody,"From: $sender<$mail>");
}

?>
<!DOCTYPE html>
<html lang="en">
	<!--Contact-->
	<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/GC.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/camera.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/contact-form.css">

	
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">

	
    <link rel="stylesheet" href="css/stylesrana.css">

	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src='js/camera.js'></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/jquery.stellar.js"></script>
	<script src="js/script.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
	<!--<![endif]-->
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
	 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
		 <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
	 </a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
	</head>
<body class="index">
<!--==============================header=================================-->

<header id="header">
	<div id="stuck_container">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<div class="grid_1">
					<img style="max-width:70px; margin-right: -10px;margin-top:-10px;margin-bottom:-5px;"
										 src="images/logo.png"> 
					</div>
					<h1><a href="index.html">GRAPHIC CAFE</a><span id=001>let the world hear us!</span></h1>
					<nav>
						<ul class="sf-menu">
							<li><a href="index.html">Home</a>
							</li>
							<li><a href="index-1.html">About</a></li>
							<li><a href="index-3.html">Services</a></li>
							<li class="current"><a href="index-4.php">Contacts</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
<!--=======content================================-->
<section id="content">
<div class = "contactform">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <h2>Contact Us Here: </h2>


    <form method="post" action="index-4.php">

  <div class="form-group">
    <label for="name" class="labelgc">Your Name : </label>
    <input type="text" name="name" value="" class="form-control" placeholder="Your Name">
  </div>

    <div class="form-row" display:inline>
      <div class="col">
      <div class="form-group">
    <label for="exampleFormControlSelect1" class="labelgc">Year :</label>
    <select class="form-control" name="yr" id="exampleFormControlSelect1">
      <option>Year</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
     </div>
      </div>
      <div class="col">
    <div class="form-group">
    <label for="exampleFormControlSelect2" class="labelgc">Branch :</label>
    <select class="form-control" name="br" id="exampleFormControlSelect2">
      <option>CSE</option>
      <option>ECE</option>
      <option>EEE</option>
      <option>MECH</option>
      <option>BIO</option>
      <option>CHEM</option>
      <option>MME</option>
    </select>
  </div>
      </div>
    </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="labelgc">Email address</label>
    <input type="email" class="form-control"name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please provide your e-mail">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
   <label for="exampleFormControlTextarea1" class="labelgc">Your Message for us :</label>
   <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type your query or message for us here"></textarea>
 </div>
  <button type="submit" name="submit" id="submit" class="btn btn-lg btn-primary">Submit</button>
</form>
</div>
</section>
<!--=======footer=================================-->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="grid_12 copyright">
				<h2><span>Follow Us</span></h2>
						<a href="mailto:graphic.cafe2020@gmail.com" class="btn bd-ra"><span class="fa fa-envelope-o"></span></a>
						<a href="tel:+918089871955" class="btn bd-ra"><span class="fa fa-phone"></span></a>
				<pre>© <span id="copyright-year"></span> @GC |  Privacy Policy</pre>		
			</div>
		</div>
	</div>
</footer>
<script>
	$(document).ready(function() {
	$("#submit").click(function() {
		alert("Your query has been submitted");
		});
	});
</script>
		
<script>
	$(document).ready(function() {
		$(".owl-carousel").owlCarousel({
			navigation: true,
			pagination: false,
			items : 3,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			itemsTablet: [750,1],
			itemsMobile : [479,1],
			navigationText: false
		});
	});
</script>
<script>
	$(document).ready(function() { 
			if ($('html').hasClass('desktop')) {
				$.stellar({
					horizontalScrolling: false,
					verticalOffset: 20,
					resposive: true,
					hideDistantElements: true,
				});
			}
		});
</script>
</body>
</html>