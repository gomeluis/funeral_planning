<!DOCTYPE html>
<!--Designer: Carlos Cornejo
	
		Author: Ali Alhammali ~ signin.php
			-Ali created the select and update querys
			- 
				allow staff member or family primary contact access to the system 
				
		Code Review: Luis Gomez & Juan Amador
		
		
!-->
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
            <form action="signin.php" method="post">
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
                
                <a href="form1.php">singin.php</a> <!-- Remove when done -->
                
                <br>
            </form>
        </div><!-- /col-12 /col-sm-8 /col-md-6 /col-lg-4 -->
        <div class="col-sm-2 col-md-3 col-lg-4 hidden-xs-down"></div> <!-- Div left empty for styling -->
    </div> <!-- /row -->
</div> <!-- /container -->
<?php
$server = "funeralinstance.cfg8tyxsms9d.us-east-2.rds.amazonaws.com";
        $username = "funeral";
        $password = "admin123";
        $dbname = 'dbfuneral'; 
$conn = new mysqli($server, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    session_start();
	$username=$_POST['emailTxtBx'];
	$password=$_POST['passwordTxtBx'];
	
	$sql = "SELECT * FROM Primary_Contact WHERE nvarchar_primCont_Email = '$username' AND vchar_primCont_password = '$password'";
$result = $conn->query($sql);
	if($row = $result->fetch_assoc()){
	$_SESSION['primary_id']= $row['int_primary_Contact_ID'];
	$_SESSION["primCont_Email"] = $row['vchar_primCont_password'];
	$_SESSION["primCont_password"] = $row['nvarchar_primCont_Email'];

	header("Location: InitialInformation.php");
	
}
elseif (!$row = $result->fetch_assoc()){
	$sqls = "SELECT * FROM Staff WHERE nvarchar_staff_Email = '$username' AND vchar_staff_password = '$password'";
$results = $conn->query($sqls);
if($row = $results->fetch_assoc()){
	$_SESSION['StaffName'] = $row['vchar_staff_First_Name'];
	$_SESSION["staffEmail"] = $row['nvarchar_staff_Email'];
	$_SESSION["staffpassword"] = $row['vchar_staff_password'];
	
	header("Location: createTest.php");

	
}


}
    
?>


</body>
</html>