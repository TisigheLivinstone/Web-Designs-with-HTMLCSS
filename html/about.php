<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewpot" content="with-device-name">
	<meta name"Describtion" content="Affordable and profession web design">
	<meta name"keywords" content="web design, Affordable web design, profession web design">
	<meta name"author" content="Tisighe Livinstone">
	<title>Professional Web Developement| About</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="javascript/jquery-3.4.1.min.js"></script>
	<script src="javascript/jquery-3.4.1.js"></script>
	<script src="../script.js"></script>	
</head>
<body> 
	<header>	
		<div class="container">
		   <div id="branding">
			<h1><span class="highlight">WebGlob</span>Design</h1>
		   </div> 
		   <nav>
		   	 <ul>
		   	 	<li><a href="index.php">Home</a></li>
		   	 	<li class="current"><a href="about.html">About</a></li>
		   	 	<li><a href="services.php">Services</a></li>
		   	 	<li><a href="portfolio.php">Portfolio</a></li>
		   	 	<li><a href="contact.php">contact</a></li>
		   	 	<li><a href="jobs.php">Jobs</a></li>
		   	 	<li><a href="login.php">Login</a></li>
		   	 	<li><a href="signup.php">Signup</a></li>
		   	 </ul>
		   </nav>
		</div>
	</header>

	<section id="newsletter">
		<div class="container">
			<h1>Subscribe To our Newsletter</h1>
			<form>
				<input type="email" name="email" placeholder="Please Enter Email..." required="">
				<button type="submit" class="button_1">Subscribe</button>

			</form>
		</div>
	</section>
	<section id="main">
		<div class="container">
			<article id="main-col">  
				<h1 class="page-title">About Us</h1>
				<p>The window.setInterval() method can be written without the window prefix.
					The first parameter is the function to be executed.
					The second parameter indicates the length of the time-interval between each execution.
					This example executes a function called "myTimer" once every second (like a digital watch).
				</p>
				<p class="dark">The HTML Certificate documents your knowledge of HTML.
					The CSS Certificate documents your knowledge of advanced CSS.
					The JavaScript Certificate documents your knowledge of JavaScript and HTML DOM.
					The jQuery Certificate documents your knowledge of jQuery.

				</p>
			</article>

			<aside id="sidebar">

				<div class="dark">
				<h1>What we do</h1>	
					
				<script src="script.js">
					   var myEx = new RegExp("documents|knowledge");

						var myString = "The PHP Certificate documents your knowledge of PHP and SQL (MySQL)";
						if(myEx.test(myString)) {
								alert ("Yes	");
							}else {
								alert("Something went wrong");
							}
				</script>	
				<p>The PHP Certificate documents your knowledge of PHP and SQL (MySQL).
					The XML Certificate documents your knowledge of XML, XML DOM and XSLT.
					The Bootstrap Certificate documents your knowledge of the Bootstrap framework.
				</p>
				</div>
			</aside>
		</div>		
	</section>

		<footer>
		
		<?php 
	include 'footer.php';
		 ?>
	</footer></body>
</html>

