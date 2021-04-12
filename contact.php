<?php 
if(isset($_POST['submit'])){
    $to = "contact@attetarkiainen.com";
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $subject = $_POST['subject'];
    $message = $first_name . " - " . $subject . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link href="contact.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        <!-- Custom JavaScript -->
        <!-- Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata&amp;family=Open+Sans+Condensed:wght@300&amp;family=Permanent+Marker&amp;family=Roboto+Slab:wght@500&amp;display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/9d5e9ec4cf.js" crossorigin="anonymous"></script>
        <title>Atte Tarkiainen</title>
    </head>
	<body>
	<!-- Navigation bar -->
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html">Atte Tarkiainen</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="about.html"><span class="firstslave">&lt;</span>About<span class="secondslave">&gt;</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="portfolio.html"><span class="firstslave">&lt;</span>Portfolio<span class="secondslave">&gt;</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="contact.php"><span class="firstslave">&gt;</span>Contact<span class="secondslave">&lt;</span></a>
				</li>
				</ul>
			</div>
		</div>
	</nav>
	<main class="banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col"></div>
				<div class="col-6">
					<form action="" method="post">
						<input type="text" name="first_name" placeholder="Your Name">
						<input type="text" name="email" placeholder="Your Email">
						<input type="text" name="subject" placeholder="Subject">
						<textarea rows="5" name="message" cols="30" placeholder="Your Message"></textarea>
						<input type="submit" name="submit" value="Send">
					</form>				
				</div>
				<div class="col"></div>
			</div>
		</div>
	</main>
	<!-- Footer -->
	<footer class="container-fluid">
		<div class="row">
			<div class="col"><hr></div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div style="padding-top: 15px;">
				<h3>ATTE TARKIAINEN</h3>
				<p>contact@attetarkiainen.com</p>
				</div>
			</div>
			<div class="col-md-4">
				<div style="padding-top: 15px;">
				<p>© Copyright Atte Tarkiainen 2021 - <span class="cc">∞</span></p>
				<p>All rights reserved.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="links">
				<a href="https://linkedin.com/in/atte-tarkiainen/" hreflang="en" target="_blank" title="Linked In"><i class="fab fa-linkedin fa-3x"></i></a>
				<a href="https://github.com/atteilari/" hreflang="en" target="_blank" title="GitHub"><i class="fab fa-github-square fa-3x"></i></a>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
