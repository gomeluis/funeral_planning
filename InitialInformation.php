<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--Designer: Carlos Cornejo
	
		Author: Juan Amador~ InitialInformation.php
			-Juan did the dropdownlist for all the states
			-Luis Fixed all the varibles to match the naming conventions of the database
				
				
		Code Review: Luis Gomez & Juan Amador
		
		Description: Initial information from the user is being filled.
		
!-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- Icon -->
<link rel="shortcut icon" type="image/png" href="/Images/logo-church-header-simple.png"/>
<!-- End Icon --> 

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


<title>Initial Information</title>
</head>
<body>


<div class="container"> <!-- container -->
	<form action="MassPreferences.php" method="post">
	
	
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
					<img class="w-50 img-fluid" src="/Images/step-bubbles-1.png" alt="Step 1 of 6">
				</div>
			</div> <!-- /col-12 -->
		</div> <!-- /row -->

		<div id="MainForm">
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<br>
					<h2 class="text-center" id="deceasedHeader">Deceased Information</h2>
					<br>
					
				</div> <!-- /col-12 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 --><h5 class="push-left">Deceased's First Name</h5>
					<div class="input-group input-group-lg push-left">
						<input type="text" class="form-control" placeholder="First Name" name="deceasedFName" id="deceasedFName">	
					</div>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
                	<h5 class="push-right">Last Name</h5>
					<div class="input-group input-group-lg push-right">
						<input type="text" class="form-control" placeholder="Last Name" name="deceasedLName" id="deceasedLName">
					</div>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->
                <h5 class="push-left">Gender</h5>
					<div class="input-group input-group-lg push-left">
						<select class="form-control">
                        <option value="" disabled selected>Select</option>
							<option value="male" name="male" id="male">Male</option>
							<option value="female" name="female" id="female">Female</option>
						</select>
					</div>
				<br>
				<br>
				</div><!-- /col-12 /col-sm-6 /col-md-4 -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Deceased's Address</h5>
				</div> <!-- /col-12 -->
				<div class="col-12"> <!-- col-12 -->
					<div class="input-group input-group-lg push-right push-left">
						<input type="text" class="form-control" placeholder="Address" id="deceasedAddress" name="deceasedAddress">
					</div>
				<br>
				</div> <!-- /col-12 -->
				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->
					<div class="input-group input-group-lg push-left">
						<input type="text" class="form-control" placeholder="City" id="deceasedCity" name="deceasedCity">
					</div>
				<br>
				</div> <!-- /col-12 /col-ms-4 -->
				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->
					<div class="input-group input-group-lg">
						<select class="form-control" name="state">
                         <option value="" disabled selected>State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>				
                        
					</div>
				<br>
				</div> <!-- /col-12 /col-ms-4 -->
				<div class="col-12 col-sm-4"> <!-- col-12 col-sm-4 -->
					<div class="input-group input-group-lg push-right">
						<input type="text" class="form-control" placeholder="Zipcode" id="zipcode" name="zipcode">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-ms-4 -->				
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Date of Passing</h5>
				</div> <!-- /col-12 -->
				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->
					<div class="form-group input-group-lg push-left">
						<input type="date" class="form-control" placeholder="Select Date" id="dateOfPassing" name="dateOfPassing">
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
					
				</div> <!-- /col-12 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
                <h5 class="push-left">Contact's First Name</h5>
					<div class="input-group input-group-lg push-left">
						<input type="text" class="form-control" placeholder="First Name" name="contactFName" id="contactFName">	
					</div>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
                <h5 class="push-right">Last Name</h5>
					<div class="input-group input-group-lg push-right">
						<input type="text" class="form-control" placeholder="Last Name" name="contactLName" id="contactFLame">
					</div>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->
                                    <h5 class="push-left">Relation</h5>
					<div class="input-group input-group-lg push-left">
						<select class="form-control">
                        <option value="" disabled selected>Select</option>
							<option value="son" name="son" id="son">Son</option>
							<option value="daughter" name="daughter" id="daughter">Daughter</option>
							<option value="grandchild" name="grandchild" id="grandchild">Grandchild</option>
                            <option value="friend" name="friend" id="friend">Friend</option>
							<option value="mother" name="mother" id="mother">Mother</option>
							<option value="father" name="father" id="father">Father</option>
							<option value="grandparent" name="grandparent" id="grandparent">Grandparent</option>
							<option value="sibling" name="sibling" id="sibling">Sibling</option>
							<option value="cousin" name="cousin" id="cousin">Cousin</option>
                            <option value="uncle" name="uncle" id="uncle">Uncle</option>
                            <option value="aunt" name="aunt" id="aunt">Aunt</option>
                            <option value="other" name="other" id="other">Other</option>
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
						<input type="text" class="form-control" placeholder="Address" id="contactAddress" name="contactAddress">
					</div>
				<br>
				</div> <!-- /col-12 -->
				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->
					<div class="input-group input-group-lg push-left">
						<input type="text" class="form-control" placeholder="City" id="contactCity" name="contactCity">
					</div>
				<br>
				</div> <!-- /col-12 /col-ms-4 -->
				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->
					<div class="input-group input-group-lg">
                        <select class="form-control" name="state">
                         <option value="" disabled selected>State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>				
                        
					</div>
				<br>
				</div> <!-- /col-12 /col-ms-4 -->
				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->
					<div class="input-group input-group-lg push-right">
						<input type="text" class="form-control" placeholder="Zipcode" id="contactZip" name="contactZip">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-ms-4 -->

				<div class="col-12 col-md-6"> <!-- col-12 col-md-6 --><h5 class="push-left">Contact's Email</h5>
					<div class="input-group input-group-lg push-left push-right">
						<input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Email">
					</div>
					<br>
				</div> <!-- /col-12 /col-md-6 -->
                <div class="col-12 col-md-6"> <!-- col-12 col-md-6 -->
                <h5 class="push-right">Phone Number</h5>     
					<div class="input-group input-group-lg push-left push-right">
						<input type="text" class="form-control" name="contactPhone" id="contactPhone" placeholder="Phone Number">
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
						<input type="text" class="form-control" placeholder="First Name" name="familyMemberFname" id="familyMemberFname">	
					</div>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-right">
						<input type="text" class="form-control" placeholder="Last Name" name="familyMemberLname" id="familyMemberFname">
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
                        <option value="" disabled selected>Select</option>
							<option value="son" name="son" id="son">Son</option>
							<option value="daughter" name="daughter" id="daughter">Daughter</option>
							<option value="grandchild" name="grandchild" id="grandchild">Grandchild</option>
                            <option value="friend" name="friend" id="friend">Friend</option>
							<option value="mother" name="mother" id="mother">Mother</option>
							<option value="father" name="father" id="father">Father</option>
							<option value="grandparent" name="grandparent" id="grandparent">Grandparent</option>
							<option value="sibling" name="sibling" id="sibling">Sibling</option>
							<option value="cousin" name="cousin" id="cousin">Cousin</option>
                            <option value="uncle" name="uncle" id="uncle">Uncle</option>
                            <option value="aunt" name="aunt" id="aunt">Aunt</option>
						</select>
						</select>
					</div>
					<br>
				</div> <!-- /col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-right">
						<select class="form-control">
                        <option value="" disabled selected>Living Status</option>
							<option value="fMemberLiving" name="fMemberLiving" id="fMemberLiving">Living</option>
							<option value="fMemberDeceased" name="fMemberDeceased" id="fMemberDeceased">Deceased</option>
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
		
		<!-- Author: Carlos Cornejo - functions.php
			Description: The footer that links to Saint Juliana's website with appropriate links
		!-->
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
