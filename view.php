<?php
set_time_limit(0);
include('includes/db.php');
include('includes/config.php');
include('lib/class.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Error 404 - Able - Premium Url shortner</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="<?php echo $description?>">
		<meta name="author" content="Emmanuel Adeboje, Emmanueldevs, i_am_hemmanuel">
		<meta name="keywords" content="<?php echo $keywords?>">
		<link rel="icon" type="image/png" href="favicon.png">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<meta http-equiv="refresh" content="5; url=./">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="./" class="logo"><strong>Abel</strong> <span>by Emmanueldevs</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="./">Home</a></li>
							<li><a href="api.php">API Usage</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="contact.php" class="button primary fit">Contact Us</a></li>
						</ul>
					</nav>
					
					<section id="contact">
						<div class="inner">
							<section>
									<img src="images/something-lost.png" alt="Error 404" />
							</section>
							<section class="split">
								<section>
									<div class="contact">
										<h3>We’re having trouble finding that Link.</h3>
										<p>Redirection to homepage in 5 seconds</p>
									</div>
								</section>
								<section>
									<div class="contact">
										<h4>Address appears to not exist, here are other things you can try:</h4>
									</div>
									<ul>
										<li>Try again later.</li>
										<li>Cross check the link provided.</li>
									</ul>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
				<?php include ('templates/footer_tpl.php');?> 

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>