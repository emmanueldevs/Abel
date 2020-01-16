<?php
set_time_limit(0);
include('includes/db.php');
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title?> - <?php echo $slogan?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="<?php echo $description?>">
		<meta name="author" content="Emmanuel Adeboje, Emmanueldevs, i_am_hemmanuel">
		<meta name="keywords" content="<?php echo $keywords?>">
		<link rel="icon" type="image/png" href="favicon.png">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<link rel="stylesheet" media="screen" href="js/smoke/smoke.css" /> 
		<script type="text/javascript" src="js/smoke/smoke.min.js"></script>
		<script>
		function validateForm(){
			var x=document.forms["main"]["url"].value;
			if (x==null || x=="")
			{
			smoke.alert("Field cannot be empty!");
			return false;
			}
		}
		</script>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="./" class="logo"><strong>Abel</strong> <span>by Emmanueldevs</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="./">Home</a></li>
							<li><a href="api.html">API Usage</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="contact.html" class="button primary fit">Contact Us</a></li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Hello! I'm Abel, I help Shorten long URL's</h1>
							</header>
							<form method="post" action="shorten.php" onsubmit="return validateForm()" name="main">
								<div class="row gtr-uniform">
									<div class="col-10">
										<input type="text" name="url" placeholder="Paste your Long URL..." style="color: #444;background: gray;font-weight: bold;"/>
									</div>
									<div class="col-2">
										<ul class="actions">
											<li><input type="submit" id="go" value="Shorten"/></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
					</section>

				<!-- Main -->
					<div id="main">
						<!-- One -->
						<section id="one">
							<div class="inner">
								<header class="major">
									<h2>One short link, infinite possibilities.</h2>
								</header>
								<p>Abel takes long URLs and squeezes them into fewer characters to make a link that is easier to share, tweet and email to friends.</p>
								<p>A short link is a powerful marketing tool when you use it carefully. It is not just a link but a medium between your customer and their destination. A short link allows you to connect your target customers to your product or service seamlessly.</p>
							</div>
						</section>
						<!-- Two -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="#">Optimize</a></h3>
										<p>Share your links to your network in a neat and minimal format to optimize your marketing campaign's performance. Reach an audience that fits your needs.</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="#">Perfect for sales & marketing</a></h3>
										<p>Target your customers to increase your reach and redirect them to a relevant page without the stress of having to type a long/complicated link, given a short link navigation can be done on the fly.</p>
									</header>
								</article>
							</section>

						<!-- Three -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>API Usage</h2>
									</header>
									<p>API requests can also be processed by the system, Our developer API is quite simple to use. All you have to do is to call the url in the following manner...</p>
									<ul class="actions">
										<li><a href="api.html" class="button">Learn more</a></li>
									</ul>
								</div>
							</section>
						<!-- Four ->
							<section id="two" class="spotlights">
								<section>
									<a href="api.html" class="image">
										<img src="images/pic12.png" alt="" data-position="center center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>API Usage</h3>
											</header>
											<p>API requests can also be processed by the system, Our developer API is quite simple to use. All you have to do is to call the url in the following manner...</p>
											<ul class="actions">
												<li><a href="api.html" class="button">Learn more</a></li>
											</ul>
										</div>
									</div>
								</section>
							</section>-->
					</div>

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