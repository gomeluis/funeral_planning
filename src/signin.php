<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" id="Page_signin">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- Bootstrap links -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!-- End Bootstrap links -->

<!-- FontAwesome JS links -->
<script defer src="https://use.fontawesome.com/releases/v5.0.3/js/all.js"></script>
<!-- End FontAwesome JS links -->

<!-- Custom style links -->
<link rel="stylesheet" type="text/css" href="Styles/styles.css" />
<!-- End custom style links -->

<title>Sign In</title>
</head>
<body>

<div class="container"> <!-- container -->    
	<div class="row"> <!-- row -->
    	<div class="col-sm-2 col-md-3 col-lg-4 hidden-xs-down"></div> <!-- Div left empty for styling -->
    	<div class="col-12 col-sm-8 col-md-6 col-lg-4 loginWrapper"> <!-- col-12 col-sm-8 col-md-6 col-lg-4 -->
        	<div class="text-center"><br>
         		<a href="https://www.stjuliana.org/">
            		<h3 id="bannerName">SAINT JULIANA PARISH</h3>
          		</a>
        	</div>
           	<br>
            <p class="text-center">Login</p>
            <form action="home.php" method="post">
                <div class="input-group"> 
                    <span class="input-group-addon icon-green">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="email" class="form-control input-lg" placeholder="Email" id="emailTxtBx" name="emailTxtBx">
                </div><br>
                    
                <div class="input-group icon-green"> 
                    <span class="input-group-addon icon-green">
                        <i class="fas fa-lock"></i>	
                    </span>
                    <input type="password" class="form-control input-lg" placeholder="Password" id="passwordTxtBx" name="passwordTxtBx" />
                </div><br><br>
                    
                <input type="submit" class="form-control input-lg btn-green" value="Login"><br>
                
                 <a href="signup.php">
                	<h6 class="text-center">Don't have an account? Sign up now</h6>
                </a><br>
                
                <a href="form1.php">Form1.php</a> <!-- Remove when done -->
                
                <br>
            </form>
        </div><!-- /col-12 /col-sm-8 /col-md-6 /col-lg-4 -->
        <div class="col-sm-2 col-md-3 col-lg-4 hidden-xs-down"></div> <!-- Div left empty for styling -->
    </div> <!-- /row -->
</div> <!-- /container -->


</body>
</html>