<?php 
session_start();
require "config.php";

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

	$result = mysql_query($sql);

	while ($row = mysql_fetch_array($result)) {
		$auth_id = $row['id'];

		$_SESSION['user_id'] = $auth_id;

    $_SESSION['auth'] = 1;

		header('Location: timeline.php');
	}


}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    
    <title>
      Web Application | StartUp
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
    
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
      
      <a class="nav-brand" href="index.html">
        StartUp
      </a>
      
      <div class="row m-n">
        
        <div class="col-md-4 col-md-offset-4 m-t-lg">
          
          <section class="panel">
            
            <header class="panel-heading text-center">
              Sign in 
            </header>
            
            <form action="signin.php" method="POST" class="panel-body">
              
              <div class="form-group">
                
                <label class="control-label">
                  Email
                </label>
                
                <input type="email" name="email" placeholder="test@example.com" class="form-control">
                
              </div>
              
              <div class="form-group">
                
                <label class="control-label">
                  Password
                </label>
                
                <input type="password" name="password" id="inputPassword" placeholder="Password" class="form-control">
                
              </div>
              
              <div class="checkbox">
                
                <label>
                  
                  <input type="checkbox">
                  Keep me logged in 
                </label>
                
              </div>
              
              <a href="#" class="pull-right m-t-xs">
                <small>
                  Forgot password?
                </small>
              </a>
              
              <button type="submit" name="submit" class="btn btn-info">
                Sign in
              </button>
              
              <div class="line line-dashed">
              </div>
              
              <a href="#" class="btn btn-facebook btn-block m-b-sm">
                <i class="icon-facebook pull-left">
                </i>
                Sign in with Facebook
              </a>
              
              <a href="#" class="btn btn-twitter btn-block">
                <i class="icon-twitter pull-left">
                </i>
                Sign in with Twitter
              </a>
              
              <div class="line line-dashed">
              </div>
              
              <p class="text-muted text-center">
                <small>
                  Do not have an account?
                </small>
              </p>
              
              <a href="signup.php" class="btn btn-white btn-block">
                Create an account
              </a>
              
            </form>
            
          </section>
          
        </div>
        
      </div>
      
    </section>
    
    <!-- footer -->
    
    <footer id="footer">
      
      <div class="text-center padder clearfix">
        
        <p>
          
          <small>
            Mobile first web app framework base on Bootstrap
            <br>
            &copy; 2013
          </small>
          
        </p>
        
      </div>
      
    </footer>
    
    <!-- / footer -->
    <script src="css/app.v1.js">
    </script>
    
    <!-- Bootstrap -->
    
    <!-- app -->
    
  </body>
</html>