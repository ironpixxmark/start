<?php 
session_start();
require "config.php";

 if( ! isset($_SESSION['auth']) && $_SESSION['auth'] !=1 ) 
  header('location:signin.php');

// if(isset($_GET['id'])) {
  $proj_id = $_GET['id'];

 


?>
<?php
// while ($row = mysql_fetch_array($result)) {
// 	$each = $row['id'];

// 	$sql = "SELECT user_id FROM backer_table WHERE proj_id='$each'";

// 	$result = mysql_query($sql);

// 	while ($row = mysql_fetch_array($result)) {
// 		$user_id = $row['user_id'];

// 		$sql = "SELECT * FROM profile WHERE user_id='$user_id'";

// 		$result = mysql_query($sql);

// 		$row = mysql_fetch_array($result);

		// echo $row['name'];
		// echo $row['location'];
		// echo $row['fb'];
		// echo $row['twitter'];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    
	<meta charset="utf-8">
  
  <title>
    Create Project | StartUp
  </title>
  
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <link rel="stylesheet" href="css/app.v1.css">
  
  <link rel="stylesheet" href="css/font.css" cache="false">
  
  
  <!--[if lt IE 9]>

<script src="js/ie/respond.min.js" cache="false">
</script>

<script src="js/ie/html5.js" cache="false">
</script>

<script src="js/ie/fix.js" cache="false">
</script>

<![endif]-->
  </head>
  <body>
    
	<section class="hbox stretch">
      
      <!-- .aside -->
      <aside class="bg-dark aside-sm" id="nav">
        
        <section class="vbox">
          
          <header class="dker nav-bar">
            
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="body">
              
              <i class="icon-reorder">
              </i>
              
            </a>
            
            <a href="#" class="nav-brand" data-toggle="fullscreen">
              StartUp
            </a>
            
            <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user">
              
              <i class="icon-comment-alt">
              </i>
              
            </a>
            
          </header>
          
          
          <footer class="footer bg-gradient hidden-xs">
            
            <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-sm btn-link m-r-n-xs pull-right">
              
              <i class="icon-off">
              </i>
              
            </a>
            
            <a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm">
              
              <i class="icon-reorder">
              </i>
              
            </a>
            
          </footer>
          
          
          <section>
            
            <!-- user -->
            
            <div class="bg-success nav-user hidden-xs pos-rlt">
              
              <div class="nav-avatar pos-rlt">
                
                <a href="#" class="thumb-sm avatar animated rollIn" data-toggle="dropdown">
                  
                  <img src="images/avatar.jpg" alt="" class="">
                  
                  <span class="caret caret-white">
                  </span>
                  
                </a>
                
                <ul class="dropdown-menu m-t-sm animated fadeInLeft">
                  
                  <span class="arrow top">
                  </span>
                  
                  <!-- <li>
                    
                    <a href="#">
                      Settings
                    </a>
                    
                  </li>
                  
                  <li>
                    
                    <a href="profile.html">
                      Profile
                    </a>
                    
                  </li>
                  
                  <li>
                    
                    <a href="#">
                      
                      <span class="badge bg-danger pull-right">
                        3
                      </span>
                      Notifications 
                    </a>
                    
                  </li>
                  
                  <li class="divider">
                  </li> -->
                  <!-- 
                  <li>
                    
                    <a href="docs.html">
                      Help
                    </a>
                    
                  </li> -->
                  
                  <li>
                    
                    <a href="logout.php">
                      Logout
                    </a>
                    
                  </li>
                  
                </ul>
                
                
                <div class="visible-xs m-t m-b">
                  
                  <a href="#" class="h3">
                    John.Smith
                  </a>
                  
                  <p>
                    <i class="icon-map-marker">
                    </i>
                    London, UK
                  </p>
                  
                </div>
                
              </div>
              
              
              <div class="nav-msg">
                
                <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <b class="badge badge-white count-n">
                    2
                  </b>
                  
                </a> -->
                
                
                <section class="dropdown-menu m-l-sm pull-left animated fadeInRight">
                  
                  
                  <div class="arrow left">
                  </div>
                  
                  
                  <!-- <section class="panel bg-white">
                    
                    
                    <header class="panel-heading">
                      
                      <strong>
                        You have 
                        <span class="count-n">
                          2
                        </span>
                        notifications
                      </strong>
                      
                    </header>
                    
                    
                    <div class="list-group">
                      
                      <a href="#" class="media list-group-item">
                        
                        <span class="pull-left thumb-sm">
                          
                          <img src="images/avatar.jpg" alt="John said" class="img-circle">
                          
                        </span>
                        
                        <span class="media-body block m-b-none">
                          
                          Use awesome animate.css
                          <br>
                          
                          <small class="text-muted">
                            28 Aug 13
                          </small>
                          
                        </span>
                        
                      </a>
                      
                      
                      <a href="#" class="media list-group-item">
                        
                        <span class="media-body block m-b-none">
                          
                          1.0 initial released
                          <br>
                          
                          <small class="text-muted">
                            27 Aug 13
                          </small>
                          
                        </span>
                        
                      </a>
                      
                    </div>
                    
                    
                    <footer class="panel-footer text-sm">
                      
                      <a href="#" class="pull-right">
                        <i class="icon-cog">
                        </i>
                      </a>
                      
                      <a href="#">
                        See all the notifications
                      </a>
                      
                    </footer>
                    
                  </section> -->
                  
                </section>
                
              </div>
              
            </div>
            
            <!-- / user -->
            
            
            <!-- nav -->
            
            <nav class="nav-primary hidden-xs">
              
              <ul class="nav">
                
                <li class="active">
                  
                  <a href="index.php">
                    
                    <i class="icon-eye-open">
                    </i>
                    
                    <span>
                      Discover
                    </span>
                    
                  </a>
                  
                </li>
                
                <li>
                  
                  <a href="create-project.php">
                    
                    <i class="icon-time">
                    </i>
                    
                    <span>
                      Create
                    </span>
                    
                  </a>
                  
                </li>
                
                <li>
                  
                  <a href="timeline.php">
                    
                    <i class="icon-time">
                    </i>
                    
                    <span>
                      Timeline
                    </span>
                    
                  </a>
                  
                </li>
                <li>
                  
                  <a href="my-project.php">
                    
                    <i class="icon-time">
                    </i>
                    
                    <span>
                      My Project
                    </span>
                    
                  </a>
                  
                </li>
                
              </ul>
              
            </nav>
            
            <!-- / nav -->
            
            <!-- note -->
            
            <div class="bg-danger wrapper hidden-vertical animated rollIn text-sm">
              
              <a href="#" data-dismiss="alert" class="pull-right m-r-n-sm m-t-n-sm">
                <i class="icon-close icon-remove ">
                </i>
              </a>
              Hi, welcome to StartUp, you can start here. 
            </div>
            
            <!-- / note -->
            
          </section>
          
        </section>
        
      </aside>
      <!-- /.aside -->
      
      <!-- .vbox -->
      <section id="content">
        
        <section class="vbox">
          
          <header class="header bg-white b-b">
            
            <p>
              Welcome to StartUp application | User Settings
            </p>
            
          </header>
          
          <section class="scrollable wrapper">
            
            <div class="row">
              
              	<div class="col-lg-12">
                
                
                	<section class="panel">
                  
                  		<div class="table-responsive">


                  			<table class="table table-striped b-t text-sm"> 
                  				<thead>
                  					<tr>
                              <th>Name</th>
                  						<th>Username</th>
                  						<th>Biography</th>
                  						<!--<th>Email</th> -->
                  						<th>Location</th>
                  						<th>Facebook</th>
                              <th>Twitter</th>
                  						<th>Email</th>
                  					</tr>
                  				</thead>

                  				<tbody>
                            <?php

                               $sql = "SELECT user_id FROM backer_table WHERE proj_id='$proj_id'";
                                $result = mysql_query($sql);

                                while ($row = mysql_fetch_array($result)) {
                                  $user_id = $row['user_id'];

                                  // $query = "SELECT * FROM profile WHERE user_id='$user_id'";
                                 $query = "SELECT * FROM profile LEFT JOIN user ON profile.user_id = user.id WHERE user_id='$user_id'";

                                  $results = mysql_query($query);

                                  while ($rows = mysql_fetch_array($results)) {
                                    

                      ?>
                  					<tr>
                  						

                                <td><?php echo $rows['name']; ?></td>
											          <td><?php echo $rows['username']; ?></td>
                                <td><?php echo $rows['biography']; ?></td>
                  							<td><?php echo $rows['location']; ?></td>
                  							<td><?php echo $rows['fb']; ?></td>
                                <td><?php echo $rows['fb']; ?></td>
                  							<td><a href="mailto:<?php echo $rows['email']; ?>" target="_top"><?php echo $rows['email']; ?></a></td>
                  							
                  					</tr>

                            <?php 

                            }
                          }

            ?>

                  				</tbody>

                  			</table>


                  		</div>
                 
                        
                	</section>
                          
               	</div>
                      
                      
            </div>
              </section>
              
              
          </section>
          <!-- .vbox -->
      </section>
      
  </section>
  
  
  <script src="css/app.v1.js">
  </script>
  
  <!-- Bootstrap -->
  
  <!-- Sparkline Chart -->
  
  <!-- App -->
  
  </body>
</html>