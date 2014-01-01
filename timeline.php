<?php 
session_start();
require "config.php";
 if( ! isset($_SESSION['auth']) && $_SESSION['auth'] !=1 ) 
  header('location:signin.php');
  
$user_id = $_SESSION['user_id'];

if (isset($_POST['update'])) {
 
  $name = $_POST['name'];
  $biography = $_POST['biography'];
  $location = $_POST['location'];
  $fb = $_POST['fb'];
  $twitter = $_POST['twitter'];
  $trans_type = $_POST['paypal'];

  $ins = "UPDATE profile SET name='$name', biography='$biography', location='$location', fb='$fb', twitter='$twitter', trans_type='$trans_type' WHERE user_id = '$user_id'";

  $result = mysql_query($ins);

  if ($result) {
    echo "Success!";
  }

}

  $get = "SELECT * FROM profile WHERE user_id = '$user_id'";
  $result = mysql_query($get);

  while ($row = mysql_fetch_array($result)) {
    
  



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
                    
                    <i class="icon-bolt">
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
                    
                    <i class="icon-picture">
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
              
              <div class="col-lg-8">
                
                
                <section class="panel">
                  
                  
                  <div class="step-content">
                    
                    
                    <div class="step-pane active" id="step1">
                      <form class="form-horizontal" action="timeline.php" method="POST" data-validate="parsley">
                        
                        
                        
                                            <!-- <div class="form-group m-t-lg">
                                              
                                              <label class="col-sm-3 control-label">
                                                Photo
                                              </label>
                                              
                                              <div class="col-sm-4 media m-t-none">
                                                
                                                <div class="bg-light pull-left text-center media-lg thumb-lg padder-v">
                                                  <i class="icon-user inline icon-light icon-3x m-t-lg m-b-lg">
                                                  </i>
                                                </div>
                                                
                                                <div class="media-body">
                                                  
                                                  <button class="btn btn-sm btn-info">
                                                    Change
                                                  </button>
                                                
                    											      <br>
                    											      <br>
                    											      
                    											      <button class="btn btn-sm btn-default">
                    											        Delete
                    											      </button>
                    											      
                    											    </div>
                    											    
                    											  </div>
											  
                                          </div> -->
                                          
                                          <!-- <div class="form-group">
                                            
                                            <label class="col-sm-3 control-label">
                                              User Name
                                            </label>
                                            
                                            <div class="col-sm-4">
                                              
                                              <input type="text" name="username" placeholder="User Name" data-required="true" class="form-control parsley-validated">
                                              
                                            </div>
                                            
                                          </div> -->

                                         <!--  <div class="form-group">
                                            
                                            <label class="col-sm-3 control-label">
                                              Email
                                            </label>
                                            
                                            <div class="col-sm-4">
                                              
                                              <input type="text" name="email" placeholder="Email" data-required="true" class="form-control parsley-validated">
                                              
                                            </div>
                                            
                                          </div> -->
                                          
                                          <div class="form-group">
                                            
                                            <label class="col-sm-3 control-label">
                                              Full Name
                                            </label>
                                            
                                            <div class="col-sm-4">
                                              
                                              <input type="text" name="name" placeholder="Full Name" value="<?php echo $row['name']; ?>" data-required="true" class="form-control parsley-validated">
                                              
                                            </div>
                                            
                                          </div>

                                          
                                          <div class="form-group">
                                            
                                            <label class="col-sm-3 control-label">
                                              Biography
                                            </label>
                                            
                                            <div class="col-sm-5">
                                              
                                              <textarea placeholder="Biography" name="biography" rows="5" data-trigger="keyup" data-rangelength="[20,200]" class="form-control parsley-validated"><?php echo $row['biography']; ?></textarea>
                                              
                                            </div>
                                          </div>
                                          
                                          <div class="form-group">
                                            
                                            <label class="col-sm-3 control-label">
                                              Location
                                            </label>
                                            
                                            <div class="col-sm-4">
                                              
                                              <input type="text" name="location" placeholder="Location" value="<?php echo $row['location']; ?>" data-required="true" class="form-control parsley-validated">
                                              
                                            </div>
                                            
                                          </div>
                                          
                                          <div class="form-group">
                                            
                                            <label class="col-sm-3 control-label">
                                              Fb Account
                                            </label>
                                            
                                            <div class="col-sm-4">
                                              
                                              <input type="text" name="fb" placeholder="Fb Account" value="<?php echo $row['fb']; ?>" data-required="true" class="form-control parsley-validated">
                                              
                                            </div>
                                            
                                          </div>
                                          
                                          <div class="form-group">
                                            
                                            <label class="col-sm-3 control-label">
                                              Twitter Account
                                            </label>
                                            
                                            <div class="col-sm-4">
                                              
                                              <input type="text" name="twitter" placeholder="Twitter" value="<?php echo $row['twitter']; ?>" data-required="true" class="form-control parsley-validated">
                                              
                                            </div>
                                            
                                          </div>
                                          <div class="form-group">
                                            
                                            <label class="col-sm-3 control-label">
                                              PayPal
                                            </label>
                                            
                                            <div class="col-sm-4">
                                              
                                              <input type="text" name="paypal" placeholder="PayPal" value="<?php echo $row['trans_type']; ?>" data-required="true" class="form-control parsley-validated">
                                              
                                            </div>
                                            
                                          </div>
                                          <button type="submit" name="update" class="btn btn-info">
                                            Update
                                          </button> 
                                          
                                      </form>
                                  </div>
                                  
                                  
                                  
                                  
                                  
                                  
                                                                    
                              </div>
                              
                          </section>
                          
                      </div>
                      
                      <div class="col-lg-4">
                        
                        <aside class="aside-lg bg-light lter b-r">
                          
                          <!-- 
<section class="vbox">
-->
                          
                          <!-- <section class="scrollable">
                            
                            <div class="wrapper">
                              
                              <div class="clearfix m-b">
                                
                                <a href="#" class="pull-left thumb m-r">
                                  
                                  <img src="images/avatar.jpg" class="img-circle">
                                  
                                </a>
                                
                                <div class="clear">
                                  
                                  <div class="h3 m-t-xs m-b-xs">
                                    John.Smith
                                  </div>
                                  
                                  <small class="text-muted">
                                    <i class="icon-map-marker">
                                    </i>
                                    London, UK
                                  </small>
                                  
                                </div>
                                
                              </div>
                              
                              <div class="panel wrapper">
                                
                                <div class="row">
                                  
                                  <div class="col-xs-4">
                                    
                                    <a href="#">
                                      
                                      <span class="m-b-xs h4 block">
                                        245
                                      </span>
                                      
                                      <small class="text-muted">
                                        Followers
                                      </small>
                                      
                                    </a>
                                    
                                  </div>
                                  
                                  <div class="col-xs-4">
                                    
                                    <a href="#">
                                      
                                      <span class="m-b-xs h4 block">
                                        55
                                      </span>
                                      
                                      <small class="text-muted">
                                        Following
                                      </small>
                                      
                                    </a>
                                    
                                  </div>
                                  
                                  <div class="col-xs-4">
                                    
                                    <a href="#">
                                      
                                      <span class="m-b-xs h4 block">
                                        2,035
                                      </span>
                                      
                                      <small class="text-muted">
                                        Tweets
                                      </small>
                                      
                                    </a>
                                    
                                  </div>
                                  
                                </div>
                                
                              </div>
                              
                              <div class="btn-group btn-group-justified m-b">
                                
                                <a class="btn btn-success btn-rounded" data-toggle="button">
                                  
                                  <span class="text">
                                    
                                    <i class="icon-eye-open">
                                    </i>
                                    Follow 
                                  </span>
                                  
                                  <span class="text-active">
                                    
                                    <i class="icon-eye-open">
                                    </i>
                                    Following 
                                  </span>
                                  
                                </a>
                                
                                <a class="btn btn-info btn-rounded">
                                  
                                  <i class="icon-comment-alt">
                                  </i>
                                  Chat 
                                </a>
                                
                              </div>
                              
                              <div>
                                
                                <small class="text-uc text-xs text-muted">
                                  about me
                                </small>
                                
                                <p>
                                  Artist
                                </p>
                                
                                <small class="text-uc text-xs text-muted">
                                  info
                                </small>
                                
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.
                                </p>
                                
                                <div class="line">
                                </div>
                                
                                <small class="text-uc text-xs text-muted">
                                  connection
                                </small>
                                
                                <p class="m-t-sm">
                                  
                                  <a href="#" class="btn btn-rounded btn-twitter btn-icon">
                                    <i class="icon-twitter">
                                    </i>
                                  </a>
                                  
                                  <a href="#" class="btn btn-rounded btn-facebook btn-icon">
                                    <i class="icon-facebook">
                                    </i>
                                  </a>
                                  
                                  <a href="#" class="btn btn-rounded btn-gplus btn-icon">
                                    <i class="icon-google-plus">
                                    </i>
                                  </a>
                                  
                                </p>
                                
                              </div>
                              
                            </div>
                            
                          </section> -->
                          
                          <!-- 
</section>
-->
                          
                        </aside>
                        
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

<?php } ?>