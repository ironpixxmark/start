<?php 
require "config.php";

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "INSERT INTO user (id, username, email, password) VALUES ('', '$username', '$email', '$password')";

  $result = mysql_query($sql);

  if ($result) {
    echo "Successfully create an user!";
    $prof_id = mysql_insert_id();
    $ins = "INSERT INTO profile (id, user_id) VALUES ('', '$prof_id')";

    $push = mysql_query($ins);
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
    
    <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
      
      <a class="nav-brand" href="index.html">
        StartUp
      </a>
      
      <div class="row m-n">
        
        <div class="col-md-4 col-md-offset-4 m-t-lg">
          
          <section class="panel">
            
            <header class="panel-heading bg bg-primary text-center">
              Sign up 
            </header>
            
            <form action="signup.php" method="POST" class="panel-body">
              
              <div class="form-group">
                
                <label class="control-label">
                  Display name
                </label>
                
                <input type="text" placeholder="eg. Your name or company" name="username" class="form-control">
                
              </div>
              
              <div class="form-group">
                
                <label class="control-label">
                  Your email address
                </label>
                
                <input type="email" name="email" placeholder="test@example.com" class="form-control">
                
              </div>
              
              <div class="form-group">
                
                <label class="control-label">
                  Type a password
                </label>
                
                <input type="password" name="password" id="inputPassword" placeholder="Password" class="form-control">
                
              </div>
              
              <div class="checkbox">
                
                <label>
                  
                  <input type="checkbox">
                  Agree the 
                  <a href="#">
                    terms and policy
                  </a>
                  
                </label>
                
              </div>
              
              <button type="submit" name="submit" class="btn btn-info">
                Sign up
              </button>
              
              <div class="line line-dashed">
              </div>
              
              <p class="text-muted text-center">
                <small>
                  Already have an account?
                </small>
              </p>
              
              <a href="signin.php" class="btn btn-white btn-block">
                Sign in
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