<?php
set_time_limit(0);
include('includes/db.php');
include('includes/config.php');
include('lib/func.php');
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
					<section id="banner">
						<div class="inner">
							<header class="major">
								<h1>Hello! I'm Abel, I help Shorten long URL's</h1>
							</header>
							<form method="post" action="#">
								<div class="row gtr-uniform">
									<div class="col-10">
										<input type="text" id="clip_text" value="<?=$show?>" onClick=select();name="embed" style="color: #444;background: gray;font-weight: bold;"/>
									</div>
									<div class="col-2">
										<ul class="actions">
											<li><input type="button" id="d_clip_button" value="Copy"/></li>
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
                                <!-- Content -->
                                <div class="row">
                                    <div class="col-4 col-12-medium">
										<h3>Share on social media</h3>
										<?php include('social_tpl.php');?>
                                        <ul class="icons">
                                            <li><a href="http://twitter.com/share?text=<?php echo $title;?>&url=<?php echo $show;?>" target="_blank" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                                            <li><a href="http://www.facebook.com/sharer.php?u=<?php echo $show;?>&t=<?php echo $title;?>" target="_blank" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
										</ul>
                                    </div>
                                    <div class="col-4 col-12-medium">
                                        <div class="box alt">
                                            <div class="row gtr-50 gtr-uniform">
                                                <div class="col-8">
													<span class="image fit">
														<img src="images/em-qr.png" alt="" />
														<!--<img src="http://api.thumbnail.ws/api/<?=$screenshotapi;?>/thumbnail/get?url=<?=$url;?>&width=230">-->
													</span>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-12-medium">
                                        <h3>Original Link was <span style="color:#d34328;"><?php echo strlen($url);?></span> character(s) long:</h3>
                                        <div class="col-12">
                                            <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="5" readonly><?=$url;?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</section>
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