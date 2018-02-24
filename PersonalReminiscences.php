<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
<link rel="stylesheet" type="text/css" href="/Styles/styles.css" />
<!-- End custom style links -->
<!-- Google Font links -->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- End Google Font links -->

<title>Personal Reminiscenses</title>
</head>
<body>


<div class="container"> <!-- container -->
	<form action="#" method="post">
	
	
		<div class="row"> <!-- row -->
			<div class="col-12"> <!-- col-12 -->
				<div class="w-100" id="divLogoHeader">
					<img class="img-fluid" src="/Images/logo-church-header.png" alt="Saint Juliana Parish" id="imgLogoHeader">
				</div>
			</div> <!-- /col-12 -->
		</div> <!-- /row -->

		<div class="row"> <!-- row -->
			<div class="col-12 hidden-xs-down"> <!-- col-12 -->
				<div class="w-100 text-center" id="step_bubbles">
					<img class="w-50 img-fluid" src="/Images/step-bubbles-5.png" alt="Step 5 of 6">
				</div>
			</div> <!-- /col-12 -->
		</div> <!-- /row -->

		<div id="MainForm">
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<br>
					<h2 class="text-center" id="deceasedHeader">Personal Reminiscenses</h2>
					<br>
					<br>
				</div> <!-- /col-12 -->					
			</div> <!-- /row -->
			
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">How Did Your Loved One Practice His or Her Faith?</h5>
				</div> <!-- /col-12 -->
				<div class="col-12"> <!-- col-12 -->
					<div class="form-group push-left push-right">
    					<textarea class="form-control" id="temp" rows="3"></textarea>
  					</div>
  				<br>
  				<br>
				</div> <!-- /col-12 -->
			</div> <!-- /row -->	
			
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">How Does The Gospel Reading You Chose Relate To The Deceased?</h5>
				</div> <!-- /col-12 -->
				<div class="col-12"> <!-- col-12 -->
					<div class="form-group push-left push-right">
    					<textarea class="form-control" id="temp" rows="3"></textarea>
  					</div>
  				<br>
  				<br>
				</div> <!-- /col-12 -->
			</div> <!-- /row -->	
			
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">What Memories or Other Personal Information Would You Like to Share About Your Loved One?</h5>
				</div> <!-- /col-12 -->
				<div class="col-12"> <!-- col-12 -->
					<div class="form-group push-left push-right">
    					<textarea class="form-control" id="temp" rows="3"></textarea>
  					</div>
  				<br>
  				<br>
				</div> <!-- /col-12 -->
			</div> <!-- /row -->	
			
			<div class="row"> <!-- row -->
 				<div class="col-6"> <!-- col-6 -->
 					<div class="push-left">
 						<input type="submit" class="btn btn-lg btn-block btn-green" value="Save">
					</div>
				<br>
 				</div> <!-- /col-6 -->
 				<div class="col-6"> <!-- col-6 -->
 					<div class="push-right">
 						<input type="submit" class="btn btn-lg btn-block btn-green" value="Save & Exit">
					</div>
				<br>
 				</div> <!-- /col-6 -->
 			</div> <!-- /row -->
            
             <div class="row"> <!-- row -->
 				<div class="col-12 push-md-6 col-md-6"> <!-- col-12 col-md-6 -->
 					<div class="push-left push-right" id="btnNext">
 						<input type="submit" class="btn btn-lg btn-block btn-green" value="Finish">
					</div>
					<br>
 				</div> <!-- /col-12 /col-md-6 -->
                <div class="col-12 pull-md-6 col-md-6"> <!-- col-12 col-md-6 -->
 					<div class="push-right push-left" id="btnPrev">
 						<input type="submit" class="btn btn-lg btn-block btn-green" formaction="MusicSelection.php" value="Previous">
					</div>
					<br>
 				</div> <!-- /col-12 /col-md-6 -->
 			</div> <!-- /row -->
		
		</div> <!-- /MainForm -->
		<div id="footer">
			<?php
			include "functions.php";
			getFooter();
			?>
		</div>
	</form>
</div> <!-- /container -->
</body>
</html>	






