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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Open+Sans+Condensed:wght@300&family=Permanent+Marker&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="contact.css" rel="stylesheet" type="text/css">
	<title>Atte Tarkiainen - Contact</title>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html">Atte Tarkiainen</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.html"><span class="firstslave">&lt;</span>About<span class="secondslave">&gt;</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="portfolio.html"><span class="firstslave">&lt;</span>Portfolio<span class="secondslave">&gt;</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="contact.php"><span class="firstslave">&gt;</span>Contact<span class="secondslave">&lt;</span></a>
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
	<footer class="footer fixed-bottom">
		<a href="contact.php"><img border="0" alt="email-logo" src="email-image.png" width="30" height="30" style="margin-right: 1%"></a>
		<a href="https://linkedin.com/in/atte-tarkiainen/"><img border="0" alt="linked-in-logo" src="linked-in-image.png" width="30" height="30" style="margin-right: 2%"></a> © Atte Tarkiainen 2021 - All Rights Reserved - <a href="policy.html">Privacy Policy</a>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
