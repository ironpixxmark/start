<?php 
require "config.php";
$id = $_GET['id'];

$get = "SELECT * FROM project WHERE id='$id'";

$result = mysql_query($get);

?>

<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<title>Create Project | StartUp</title> 
	<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
	<link rel="stylesheet" href="css/app.v1.css"> 
	<link rel="stylesheet" href="css/font.css" cache="false"> 

	<!--[if lt IE 9]> <script src="js/ie/respond.min.js" cache="false"></script> <script src="js/ie/html5.js" cache="false"></script> <script src="js/ie/fix.js" cache="false"></script> <![endif]-->
</head>
<body>

	<section class="hbox stretch">

		<!-- .aside -->
		<aside class="bg-dark aside-sm" id="nav"> 
			<section class="vbox"> 
				<header class="dker nav-bar"> 
					<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="body"> 
						<i class="icon-reorder"></i> 
					</a> 
					<a href="#" class="nav-brand" data-toggle="fullscreen">StartUp</a> 
					<a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user"> 
						<i class="icon-comment-alt"></i> 
					</a> 
				</header> 

				<footer class="footer bg-gradient hidden-xs"> 
					<a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-sm btn-link m-r-n-xs pull-right"> 
						<i class="icon-off"></i> 
					</a> 
					<a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm"> 
						<i class="icon-reorder"></i> 
					</a> 
				</footer> 

				<section> 
					<!-- user --> 
					<div class="bg-success nav-user hidden-xs pos-rlt"> 
						<div class="nav-avatar pos-rlt"> 
							<a href="#" class="thumb-sm avatar animated rollIn" data-toggle="dropdown"> 
								<img src="images/avatar.jpg" alt="" class=""> 
								<span class="caret caret-white"></span> 
							</a>

							<ul class="dropdown-menu m-t-sm animated fadeInLeft"> 
								<span class="arrow top"></span> 
								<!-- <li> <a href="#">Settings</a> </li> 
								<li> <a href="profile.html">Profile</a> </li> 
								<li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li> 
								<li class="divider"></li> 
								<li> <a href="docs.html">Help</a> </li>  -->
								<li> <a href="logout.php">Logout</a> </li> 
							</ul> 

							<div class="visible-xs m-t m-b"> 
								<a href="#" class="h3">John.Smith</a> 
								<p><i class="icon-map-marker"></i> London, UK</p> 
							</div> 
						</div> 

						<div class="nav-msg"> 
							<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
								<b class="badge badge-white count-n">2</b> 
							</a>  -->

							<section class="dropdown-menu m-l-sm pull-left animated fadeInRight"> 
								
								<div class="arrow left"></div> 
								
								<!-- <section class="panel bg-white"> 
									
									<header class="panel-heading"> 
										<strong>You have <span class="count-n">2</span> notifications</strong> 
									</header> 

									<div class="list-group"> 
										<a href="#" class="media list-group-item"> 
											<span class="pull-left thumb-sm"> 
												<img src="images/avatar.jpg" alt="John said" class="img-circle"> 
											</span> 
											<span class="media-body block m-b-none"> 
												Use awesome animate.css<br> <small class="text-muted">28 Aug 13</small> 
											</span> 
										</a> 

										<a href="#" class="media list-group-item"> 
											<span class="media-body block m-b-none"> 
												1.0 initial released<br> <small class="text-muted">27 Aug 13</small> 
											</span> 
										</a> 
									</div> 

									<footer class="panel-footer text-sm"> 
										<a href="#" class="pull-right">
											<i class="icon-cog"></i>
										</a> 
										<a href="#">See all the notifications</a> 
									</footer> 
								</section> --> 
							</section> 
						</div> 
					</div> <!-- / user --> 

					<!-- nav --> 
					<nav class="nav-primary hidden-xs"> 
						<ul class="nav"> 
							<li class="active"> <a href="index.php"> <i class="icon-eye-open"></i> <span>Discover</span> </a> </li> 
							
							<li> <a href="timeline.php"> <i class="icon-time"></i> <span>Timeline</span> </a> </li> 
							<li> <a href="create-project.php"> <i class="icon-bolt"></i> <span>Create</span> </a> </li> 
							<li> <a href="my-project.php"> <i class="icon-picture"></i> <span>My Poject</span> </a> </li> 
						</ul> 
					</nav> <!-- / nav --> <!-- note --> 
					<div class="bg-danger wrapper hidden-vertical animated rollIn text-sm"> 
						<a href="#" data-dismiss="alert" class="pull-right m-r-n-sm m-t-n-sm"><i class="icon-close icon-remove "></i></a> Hi, welcome to todo, you can start here. 
					</div> <!-- / note --> 
				</section> 
			</section> 
		</aside>
		<!-- /.aside -->

		<!-- .vbox -->
		<section id="content"> 
			<section class="vbox">
				<header class="header bg-white b-b"> <p>Welcome to StartUp application</p> </header>
				<section class="scrollable wrapper"> 
					<div class="row"> 
						
						<style type="text/css">
						.image-full {
							width: 100%;
							margin-bottom: 10px;
						}
						.padd {
							padding-left: 15px;
							padding-right: 15px;
						}
						.divider {
							margin: 20px 0px 0px;
							width: 40px;
							height: 3px;
							background: #a6d87a;
						}
						</style>
						
						
						<?php $row = mysql_fetch_array($result)  ?>

						<div class="col-lg-8 panel b-r" style="padding: 0;">
							<div class="padd">
							<h2 id="title">
								<a href="singleproject.php?id=<?php echo $row['id']; ?>"><?php echo $row['proj_name']; ?></a>
							</h2>
							<p id="subtitle">
								<span class="creator">
									by

									<?php
										$user_id = $row['user_id'];

										$get_user = "SELECT name FROM profile WHERE user_id='$user_id'";
										$result = mysql_query($get_user);

										$usr = mysql_fetch_array($result);
									
									?>
									<a href="author-bio.php?id=<?php echo $user_id; ?>" id="name" style="text-transform: uppercase;"><?php echo $usr['name']; ?></a>

								</span>
							</p>

						</div>
							<img class="image-full" src="upload/<?php echo $row['proj_photo']; ?>" >

								<?php echo $row['proj_desc']; ?>
								
								<!-- <div class="padd">
									<h2>News<div class="divider clear"></div></h2>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>
									<br><br>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>
								</div> -->

								<!-- <img class="image-full" src="images/2.jpg" > -->

								<!-- <div class="padd">
									<h2>FAQ<div class="divider clear"></div></h2>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>
									<br><br>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>

									<p><strong>Some Links</strong>
										<br>
										<a href="#">Facebook</a>
										<br>
										<a href="#">Twitter</a>
										<br>
										<a href="#">Google+</a>
									</p>
								</div> -->
								

							
						</div>
						<div class="col-lg-4">
							<!-- <div class="panel-body" style="text-align: center;">  -->
									<?php 
										// $backer = "";
										$sql = "SELECT * FROM backer_table WHERE proj_id='$id'";
										$result = mysql_query($sql);

										$backer = mysql_num_rows($result);

									?>
									
									<h3>
										<strong><?php echo $backer; ?></strong> <br>
										<small>Backers</small>
									</h3>
									
									<h2><small>Pledged of</small><br><strong>$<?php echo $row['pledged_amount']; ?></strong></h2>
									<h2><small>Goal</small><br><strong>$<?php echo $row['funded']; ?></strong></h2>
									<h1><strong><?php echo $row['duration_date'] ?></strong> <small>Days to go</small></h1>

									<a href="https://paypal.com/" class="btn btn-lg btn-success">
										Back This Project <br><small><span>$1</span> minimum pledge</small>
									</a>

									<p>
										This project will only be funded if at least $ <?php echo $row['funded'] - $row['pledged_amount'];  ?> is pledged by <?php echo $row['duration_date']; ?> days.
									</p>


							<!-- </div>  -->
						</div>

						<?php  ?>
					</div>

				</section>

			</section>
		</section>
		<!-- /.vbox -->

	</section>
	<!-- /.hbox -->

<script src="css/app.v1.js"></script> <!-- Bootstrap --> <!-- Sparkline Chart --> <!-- App --> 
</body>
</html>