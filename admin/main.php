<?php
set_time_limit(0);
session_start();
include_once '../includes/db.php';
include_once '../includes/config.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Panel - <?php echo $title?> - <?php echo $slogan?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="<?php echo $description?>">
		<meta name="author" content="Emmanuel Adeboje, Emmanueldevs, @i_am_hemmanuel">
		<meta name="keywords" content="<?php echo $keywords?>">
		<link rel="icon" type="../image/png" href="favicon.png">
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header" class="alt">
						<a href="../" class="logo"><strong>Abel</strong> <span>by Emmanueldevs</span></a>
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

				<section id="banner" class="style2" style="height: 15em!important;max-height: 15em;min-height: 14em;">
					<div class="inner">
						<span class="image">
							<img src="images/pic07.jpg" alt="" />
						</span>
						<header class="major">
							<h1>Admin Panel</h1>
						</header>
					</div>
				</section>
				<!-- Main -->
					<div id="main" class="alt">
						<!-- One -->
						<section id="one">
							<div class="inner">
								<div class="row gtr-200">
									<div class="col-3 col-12-medium">
										<div class="row">
											<?php include ('includes/sidebar.php'); ?>
										</div>
									</div>
									<?php
										$result = mysqli_query($conDB, "SELECT COUNT(url) FROM sm_shorturl");
										$row = mysqli_fetch_row($result);
										$geturl = number_format($row[0]);

										$result = mysqli_query($conDB, "SELECT SUM(clicks) FROM sm_shorturl");
										$row = mysqli_fetch_row($result);
										$gethits = number_format($row[0]);

										$result = mysqli_query($conDB, "SELECT (clicks) FROM sm_shorturl ORDER BY clicks DESC");
										$row = mysqli_fetch_row($result);
										$getmosthits = number_format($row[0]);

										$result = mysqli_query($conDB, "SELECT short FROM sm_shorturl ORDER BY id DESC LIMIT 1");
										$row = mysqli_fetch_row($result);
										$getlasturl = ($row[0]);

										$result = mysqli_query($conDB, "SELECT created_at FROM sm_shorturl ORDER BY id DESC LIMIT 1");
										$row = mysqli_fetch_row($result);
										$getlasttime = ($row[0]);
									?>
									<div class="col-9 col-12-medium">
										<div class="box" style="text-align: center;">
											<h2>Total Links Generated: <?php echo $geturl; ?>.</h2>
											<p>Latest link created: <?php echo $webpath; ?>/<?php echo $getlasturl; ?></p>
										</div>
										<div class="row">
											<div class="col-4 col-12-medium icons-center">
												<h4>Overall total hits generated:</h4>
												<p><span class="label label-inverse"><?php echo $gethits; ?></span></p>
											</div>
											<div class="col-4 col-12-medium icons-center">
												<h4>Most times a url clicked</h4>
												<p><span class="label label-inverse"><?php echo $getmosthits; ?></span></p>
											</div>
											<div class="col-4 col-12-medium icons-center">
												<h4>Latest link created at</h4>
												<p><span class="label label-inverse"><?php echo $getlasttime; ?></span></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>

				<!-- Footer -->
				<?php include ('../templates/footer_tpl.php');?>
			</div>
		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>