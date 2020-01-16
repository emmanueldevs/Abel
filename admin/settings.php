<?php
set_time_limit(0);
session_start();
include_once '../includes/db.php';
include_once '../includes/config.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}

if(isset($_POST['btn-update'])){
 $username = mysqli_real_escape_string($conDB, $_POST['username']);
 $password = mysqli_real_escape_string($conDB, $_POST['password']);

$query = "UPDATE users SET username='$username', password=sha1('$password') WHERE user_id =".$_SESSION['user'];
$result = mysqli_query($conDB, $query) or die("An error occurred. Reason: ".mysqli_error());

if($result){
$success="Password updated successfully";
 }
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Panel - Able - Premium Url shortner</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="<?php echo $description?>">
		<meta name="author" content="Emmanuel Adeboje, Emmanueldevs, @i_am_hemmanuel">
		<meta name="keywords" content="<?php echo $keywords?>">
		<link rel="icon" type="../image/png" href="favicon.png">
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>

		<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
		<link rel="stylesheet" media="screen" href="../js/smoke/smoke.css" /> 
		<script type="text/javascript" src="../js/smoke/smoke.min.js"></script>
		<script>
		function validateForm(){
			var x=document.forms["main"]["password"].value;
			if (x==null || x==""){
				smoke.alert("Password cannot be empty!");
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
						<a href="../" class="logo"><strong>Abel</strong> <span>by Propell Media</span></a>
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
                            <p>Update login Details</p>
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
								
									<div class="col-9 col-12-medium">
                                        <header class="major">
                                            <h3>Update Details</h3>
                                        </header>
										<?php if(isset($success)){ ?>
										<h3 style="text-align: center;">Password updated successfully</h3>
										<?php } ?>
										<form method="post" action="" onsubmit="return validateForm()" name="main">
                                            <div class="row gtr-uniform">
                                                <div class="col-12">
                                                    <input type="text" name="username" placeholder="Username" style="color: #444;background: gray;font-weight: bold;"/>
                                                </div>
                                                <div class="col-12">
                                                    <input type="password" name="password" placeholder="Password" style="color: #444;background: gray;font-weight: bold;"/>
                                                </div>
                                                <!-- Break -->
                                                <div class="col-12">
                                                    <ul class="actions">
                                                        <li><input type="submit" name="btn-update" value="Update" class="primary" /></li>
                                                        <li><input type="reset" value="Reset" /></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
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