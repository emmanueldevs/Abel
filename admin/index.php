<?php
session_start();
include('../includes/config.php');
include_once '../includes/db.php';
if(isset($_SESSION['user'])!=""){
 header("Location: main.php");
}
if(isset($_POST['btn-login'])){
 $email = mysqli_real_escape_string($conDB, $_POST['username']);
 $upass = mysqli_real_escape_string($conDB, $_POST['pass']);
 $res = mysqli_query($conDB, "SELECT * FROM users WHERE username='$email'");
 $row = mysqli_fetch_array($res);
 if($row['password']==sha1($upass)){
  $_SESSION['user'] = $row['user_id'];
  header("Location: main.php");
 }else{
	$error = "INCORRECT Credentials";
 }
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Login - <?php echo $title?> - <?php echo $slogan?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="<?php echo $description?>"/>
		<meta name="author" content="Emmanuel Adeboje, Emmanueldevs, i_am_hemmanuel">
		<meta name="keywords" content="<?php echo $keywords?>" />
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
                <!-- Banner -->
					<section id="banner" class="style2" style="height: 15em!important;max-height: 15em;min-height: 14em;">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>Admin Login</h1>
							</header>
						</div>
					</section>
				<!-- Contact -->
					<section>
						<?php if(isset($warning)){ ?>
						<h3 style="text-align: center;">INCORRECT</h3>
						<?php } ?>
						<div class="login inner">
                            <form method="post" action="">
                                <div class="row gtr-uniform">
                                    <div class="col-12">
                                        <input type="text" name="username" placeholder="Username" style="color: #444;background: gray;font-weight: bold;"/>
                                    </div>
                                    <div class="col-12">
                                        <input type="password" name="pass" placeholder="Password" style="color: #444;background: gray;font-weight: bold;"/>
                                    </div>
                                    <!-- Break -->
                                    <div class="col-12">
                                        <ul class="actions">
                                            <li><input type="submit" name="btn-login" value="Login" class="primary" /></li>
                                            <li><input type="reset" value="Reset" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
						</div>
					</section>

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