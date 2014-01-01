<?php 
require "config.php";

$get = "SELECT * FROM project";

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
					

					<!-- nav --> 
					<nav class="nav-primary hidden-xs"> 
						<ul class="nav"> 
							<li class="active"> <a href="index.php"> <i class="icon-eye-open"></i> <span>Discover</span> </a> </li> 
							
							<li> <a href="signin.php"> <i class="icon-user"></i> <span>Sign In</span> </a> </li> 
							<li> <a href="signup.php"> <i class="icon-time"></i> <span>Join Here</span> </a> </li> 
						</ul> 
					</nav> <!-- / nav --> <!-- note --> 
					<div class="bg-danger wrapper hidden-vertical animated rollIn text-sm"> 
						<a href="#" data-dismiss="alert" class="pull-right m-r-n-sm m-t-n-sm"><i class="icon-close icon-remove "></i></a> Hi, welcome to StartUp, you can start here. 
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
						<div class="col-lg-12"> 
							<style type="text/css">.panel {text-align: center; padding-bottom: 25px;} .panel-body {text-align: left}</style>
							<div class="row">
								
								<?php while($row = mysql_fetch_array($result)) { ?>



									<div class="col-lg-4">
										<section class="panel">
											<img src="upload/<?php echo $row['proj_photo']; ?>" width="100%" alt="work">
											<div class="panel-body"> 
												
												<strong><?php echo $row['proj_name']; ?></strong>
												<br>
												<p><?php echo substr($row['proj_desc'], 0, 150); ?>...</p>

												

											 </div>
											 <a href="singleproject.php?id=<?php echo $row['id']; ?>" class="btn btn-s-md btn-success">View...</a>
										</section>
									</div>

									<?php } ?>

								

								

						
								
							</div>
							
						</div>
						<!-- <div class="col-lg-3">
							<section class="panel"> 
								<header class="panel-heading"> 
									<div class="input-group text-sm"> 
										<input type="text" class="input-sm form-control" placeholder="Search"> 
										<div class="input-group-btn"> 

											<button type="button" class="btn btn-sm btn-white">Search</button> 
											
										</div> 
									</div> 
								</header> 
								<style type="text/css">.list-group-item {text-align: left;}</style>
								<ul class="list-group alt"> 
									<li class="list-group-item"> 
										Photography
									</li> 
									<li class="list-group-item"> 
										Art 
									</li> 
									<li class="list-group-item"> 
										Seience 
									</li> 
									<li class="list-group-item"> 
										Political Donations
									</li> 
									<li class="list-group-item"> 
										Charity
									</li> 
									<li class="list-group-item"> 
										Disaster Relif
									</li> 
									<li class="list-group-item"> 
										Robotics
									</li> 

								</ul> 
							</section>
						</div> -->
					</div>
				</section>
			</section>
			<!-- .vbox -->
		</section>

	</section>

<script src="css/app.v1.js"></script> <!-- Bootstrap --> <!-- Sparkline Chart --> <!-- App --> 
</body>
</html>