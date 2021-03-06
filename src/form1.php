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
<link rel="stylesheet" type="text/css" href="Styles/styles.css" />
<!-- End custom style links -->

<title>Form1</title> <!-- Change later -->
</head>
<body>


<div class="container"> <!-- container -->
	<form action="#" method="post">
	
	
		<div class="row"> <!-- row -->
			<div class="col-12"> <!-- col-12 -->
				<div class="w-100" id="divLogoHeader">
					<img class="img-fluid" src="images/logo-church-header.png" alt="Saint Juliana Parish" id="imgLogoHeader">
				</div>
			</div> <!-- /col-12 -->
		</div> <!-- /row -->

		<div class="row"> <!-- row -->
			<div class="col-12 hidden-xs-down"> <!-- col-12 -->
				<div class="w-100 text-center" id="step_bubbles">
					<img class="w-50 img-fluid" src="images/step-bubbles-1.png" alt="Step 1 of 6">
				</div>
			</div> <!-- /col-12 -->
		</div> <!-- /row -->

		<div id="MainForm">
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<br>
					<h2 class="text-center" id="deceasedHeader">Deceased Information</h2>
					<br>
					<h5 class="push-left">Deceased's Name and Gender</h5>
				</div> <!-- /col-12 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-left">
						<input type="text" class="form-control" placeholder="First Name" name="temp" id="temp">	
					</div>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-right">
						<input type="text" class="form-control" placeholder="Last Name" name="temp" id="temp">
					</div>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->
					<div class="input-group input-group-lg push-left">
						<select class="form-control">
							<option value="temp" name="temp" id="temp">Male</option>
							<option value="temp" name="temp" id="temp">Female</option>
						</select>
					</div>
				<br>
				<br>
				</div><!-- /col-12 /col-sm-6 /col-md-4 -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Deceased's Previous Address</h5>
				</div> <!-- /col-12 -->
				<div class="col-12"> <!-- col-12 -->
					<div class="input-group input-group-lg push-right push-left">
						<input type="text" class="form-control" placeholder="Address" id="temp" name="temp">
					</div>
				<br>
				</div> <!-- /col-12 -->
				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->
					<div class="input-group input-group-lg push-left">
						<input type="text" class="form-control" placeholder="City" id="temp" name="temp">
					</div>
				<br>
				</div> <!-- /col-12 /col-ms-4 -->
				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->
					<div class="input-group input-group-lg">
						<input type="text" class="form-control" placeholder="State" id="temp" name="temp">
					</div>
				<br>
				</div> <!-- /col-12 /col-ms-4 -->
				<div class="col-12 col-sm-4"> <!-- col-12 col-sm-4 -->
					<div class="input-group input-group-lg push-right">
						<input type="text" class="form-control" placeholder="Zipcode" id="temp" name="temp">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-ms-4 -->				
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Date of Passing</h5>
				</div> <!-- /col-12 -->
				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->
					<div class="form-group push-left">
						<input type="date" class="form-control" placeholder="Select Date" id="temp" name="temp">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-sm-6 /col-md-4 -->
			</div> <!-- /row -->
			
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<h2 class="text-center">Primary Contact Information</h2>
					<br>
				</div> <!-- /col-12 -->
				<div class="col-12">
					<h5 class="push-left">Contact's Name and Relation</h5>
				</div> <!-- /col-12 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-left">
						<input type="text" class="form-control" placeholder="First Name" name="temp" id="temp">	
					</div>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-right">
						<input type="text" class="form-control" placeholder="Last Name" name="temp" id="temp">
					</div>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->
					<div class="input-group input-group-lg push-left">
						<select class="form-control">
							<option value="temp" name="temp" id="temp">Significant Other</option>
							<option value="temp" name="temp" id="temp">Son</option>
							<option value="temp" name="temp" id="temp">Daughter</option>
							<option value="temp" name="temp" id="temp">Grandchild</option>
							<option value="temp" name="temp" id="temp">Mother</option>
							<option value="temp" name="temp" id="temp">Father</option>
							<option value="temp" name="temp" id="temp">Grandparent</option>
							<option value="temp" name="temp" id="temp">Sibling</option>
							<option value="temp" name="temp" id="temp">Other</option>
						</select>
					</div>
					<br>
					<br>
				</div> <!-- /col-12 /col-sm-6 /col-md-4 -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Contact's Address</h5>
				</div> <!-- /col-12 -->
				<div class="col-12"> <!-- col-12 -->
					<div class="input-group input-group-lg push-right push-left">
						<input type="text" class="form-control" placeholder="Address" id="temp" name="temp">
					</div>
				<br>
				</div> <!-- /col-12 -->
				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->
					<div class="input-group input-group-lg push-left">
						<input type="text" class="form-control" placeholder="City" id="temp" name="temp">
					</div>
				<br>
				</div> <!-- /col-12 /col-ms-4 -->
				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->
					<div class="input-group input-group-lg">
						<input type="text" class="form-control" placeholder="State" id="temp" name="temp">
					</div>
				<br>
				</div> <!-- /col-12 /col-ms-4 -->
				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->
					<div class="input-group input-group-lg push-right">
						<input type="text" class="form-control" placeholder="Zipcode" id="temp" name="temp">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-ms-4 -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Contact's Email and Phone Number</h5>
				</div> <!-- /col-12 -->
				<div class="col-12 col-md-6"> <!-- col-12 col-md-6 -->
					<div class="input-group input-group-lg push-left push-right">
						<input type="email" class="form-control" id="temp" name="temp" placeholder="Email">
					</div>
					<br>
				</div> <!-- /col-12 /col-md-6 -->	
				<div class="col-12 col-md-6"> <!-- col-12 col-md-6 -->
					<div class="input-group input-group-lg push-left push-right">
						<input type="text" class="form-control" name="temp" id="temp" placeholder="Phone">
					</div>
					<br>
					<br>
				</div> <!-- /col-12 /col-md-6 -->				
			</div> <!-- /row -->
			
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<h2 class="text-center">Deceased's Immediate Family</h2>
					<br>
				</div> <!-- /col-12 -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Family Member Name</5>
				</div> <!-- /col-12 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-left">
						<input type="text" class="form-control" placeholder="First Name" name="temp" id="temp">	
					</div>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-right">
						<input type="text" class="form-control" placeholder="Last Name" name="temp" id="temp">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Relation To Deceased and Living status</h5>
				</div> <!-- /col-12 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-left">
						<select class="form-control">
							<option value="temp" name="temp" id="temp">Significant Other</option>
							<option value="temp" name="temp" id="temp">Son</option>
							<option value="temp" name="temp" id="temp">Daughter</option>
							<option value="temp" name="temp" id="temp">Mother</option>
							<option value="temp" name="temp" id="temp">Father</option>
							<option value="temp" name="temp" id="temp">Sibling</option>
						</select>
					</div>
					<br>
				</div> <!-- /col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-right">
						<select class="form-control">
							<option value="temp" name="temp" id="temp">Living</option>
							<option value="temp" name="temp" id="temp">Deceased</option>
						</select>
					</div>
					<br>
				</div> <!-- /col-12 /col-sm-6 -->
				
				<div class="col-sm-2 col-md-6 hidden-xs-down"></div> <!--div left empty for styling -->
				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->
					<span class="icon-green">
						<i class="fas fa-plus-circle"></i>
						Add another family member
					</span>
				<br>
				<br>
				<br>
				</div> <!-- /col-12 /col-sm-6 /col-md-4 -->
 			</div> <!-- /row -->
 			
 			<div class="row"> <!-- row -->
 				<div class="col-6 col-md-3"> <!-- col-6 col-md-3 -->
 					<div class="push-left">
 						<input type="submit" class="btn btn-lg btn-block btn-green" value="Save">
					</div>
				<br>
 				</div> <!-- /col-6 /col-md-3 -->
 				<div class="col-6 col-md-3"> <!-- col-6 col-md-3 -->
 					<div class="push-right">
 						<input type="submit" class="btn btn-lg btn-block btn-green" value="Save & Exit">
					</div>
				<br>
 				</div> <!-- /col-6 /col-md-3 -->
 				<div class="col-12 col-md-6"> <!-- col-12 col-md-6 -->
 					<div class="push-right push-left">
 						<input type="submit" class="btn btn-lg btn-block btn-green" value="Next">
					</div>
					<br>
 				</div> <!-- /col-12 /col-md-6 -->
 			</div> <!-- /row -->
		</div>
		
		
	</form>
</div> <!-- /container -->
</body>
</html>
