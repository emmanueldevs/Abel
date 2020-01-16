<?php
set_time_limit(0);
session_start();
include_once '../includes/db.php';
include_once '../includes/config.php';
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
                            <p>All Links Generated</p>
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
										<h4>Alternate</h4>
                                        <div class="table-wrapper">
                                            <table class="alt">
                                                <thead>
                                                    <tr>
                                                    <th>ID</th>
                                                    <th>Short URL ID</th>
                                                    <th width='30'>Original URL</th>
                                                    <th>Time Created</th>
                                                    <th>Hits</th>
                                                    <th>Visit URL</th>
                                                    <th>Delete URL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $result = mysqli_query($conDB, "SELECT * FROM sm_shorturl ORDER BY id DESC LIMIT $adminstatslimit");

                                                    while($test = mysqli_fetch_array($result)){
                                                        $id = $test['id'];
                                                        $short = $test['short'];
                                                        $clicks = $test['clicks'];				
                                                        echo "<tr align='center'>";	
                                                        echo"<td>" .$test['id']."</td>";
                                                        echo"<td>" .$test['short']."</td>";
                                                        echo"<td width='30'>". $test['url']. "</td>";
                                                        echo"<td>". $test['created_at']. "</td>";
                                                        echo"<td>". $test['clicks']. "</td>";
                                                        echo"<td> <a href ='../view.php?id=$short' target='_blank'>Visit</a>";
                                                        echo"<td> <a href ='del.php?id=$id'><center><i class='fa fa-times'></i></center></a>";
                                                                            
                                                        echo "</tr>";
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
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