<!DOCTYPE html>
<!--Designer: Carlos Cornejo
	
		Author: Ali Alhammali ~ InitialInformation.php
			-Ali created the select and update querys
			- Got the information from database / update information 
		Code Review: Luis Gomez & Juan Amador
				
		Description: Initial information from the user is being filled.
		
		
!-->

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
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
	<!--   Ajax script to test the update without refreshing the page  -->
 
    <script> 
        
        $(document).ready(function() { 
            
            $('#myForm').ajaxForm(function() { 
			
			
			var txt;
    if (confirm("If you click Ok you are going to next Page, If you click cancel you are stay in this page !")) {
        txt = "OK!";
		window.location.href = "http://cpscserv.dom.edu/students/alhamali/PHP/MassPreferences/MassPreferences.php";
    } else {
        txt = "Cancel!";
    }
                  
				 
				  
            }); 
        }); 
    </script>

<!-- Google Font links -->

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<!-- End Google Font links -->


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


    // Start the session
    session_start();
	
	
		
	
	$primary_id= $_SESSION['primary_id'];
	echo $primary_id;
	
	
	
	$sql = "SELECT * FROM Primary_Contact INNER JOIN Deceased ON Primary_Contact.int_primary_Contact_ID = Deceased.int_primary_Contact_ID WHERE Primary_Contact.int_primary_Contact_ID = '$primary_id'";
    $result = $conn->query($sql);
    if ($row = $result->fetch_assoc()) {
	$deceased_ID = $row["int_deceased_ID"];
	
	$_SESSION['deceased_id']= $deceased_ID;
	///////////////////////////////////////////////////////////////////////
	$Deceased_First_Name = $row["vchar_dec_First_Name"];
	$Deceased_Last_Name = $row["vchar_dec_Last_Name"];
	$deceased_gender = $row["char_gender"];
	if($deceased_gender=="M")
	{$deceased_gender ="Male";}
	elseif($deceased_gender=="F"){$deceased_gender="Female";} 
	$Deceased_Address = $row["vchar_dec_Street_Address"];
	$Deceased_City = $row["vchar_dec_City"];
	$Deceased_State= $row["char_dec_State"];
	$Deceased_Zipcode = $row["vchar_dec_Zipcode"];
	$Deceased_date_Of_Death = $row["dt_date_Of_Death"];
	$Primary_Contact_First_Name = $row["vchar_primCont_First_Name"];
	$Primary_Contact_Last_Name = $row["vchar_primCont_Last_Name"];
	$Primary_Contact_relation_To_Deceased = $row["char_relation_To_Deceased"];
	$Primary_Contact_Address = $row["vchar_primCont_Street_Address"];
	$Primary_Contact_City = $row["vchar_primCont_City"];
	$Primary_Contact_State= $row["char_primCont_State"];
	$Primary_Contact_Zipcode = $row["vchar_primCont_Zipcode"];
	$Primary_Contact_Email = $row["nvarchar_primCont_Email"];
	$Primary_Contact_Phone = $row["vchar_primCont_Phone_Num"];
	
	
	
	
	//////////////////////////////////////////////////////////////////////
	echo $deceased_ID;
	
	
	
	?>





<title>Initial Information</title>

</head>

<body>





<div class="container"> <!-- container -->

	<form action="MassPreferences.php" method="post" id ="myForm">

	

	

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
						<input type="text" class="form-control" placeholder="First Name" name="deceased_f_name" id="temp" value="<?php echo $Deceased_First_Name; ?>" >	


					</div>

				<br>

				</div> <!-- /col-12 /col-sm-6 -->

				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->

                	<h5 class="push-right">Last Name</h5>

					<div class="input-group input-group-lg push-right">

						<input type="text" class="form-control" placeholder="Last Name" name="deceased_l_name" id="temp" value="<?php echo $Deceased_Last_Name; ?>">

					</div>

				<br>

				</div> <!-- /col-12 /col-sm-6 -->

				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->

                <h5 class="push-left">Gender</h5>

					<div class="input-group input-group-lg push-left">

						<select class="form-control"name="deceased_gender">
							<option value="<?php echo $deceased_gender; ?>" name="deceased_gender" id="temp"><?php echo $deceased_gender; ?></option>

                        <option value="" disabled selected>Select</option>

							<option value="temp" name="temp" id="temp">Male</option>

							<option value="temp" name="temp" id="temp">Female</option>

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

						<input type="text" class="form-control" placeholder="Address" id="temp"  name="dec_Street_Address" value="<?php echo $Deceased_Address; ?>">

					</div>

				<br>

				</div> <!-- /col-12 -->

				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->

					<div class="input-group input-group-lg push-left">

						<input type="text" class="form-control" placeholder="City" id="temp" name="dec_City" value="<?php echo $Deceased_City; ?>">

					</div>

				<br>

				</div> <!-- /col-12 /col-ms-4 -->

				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->

					<div class="input-group input-group-lg">

						<select class="form-control" name="dec_State">
						<option name="dec_State" value="<?php echo $Deceased_State; ?>"><?php echo $Deceased_State; ?></option>

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

						<input type="text" class="form-control" placeholder="Zipcode" id="temp" name="dec_Zipcode" value="<?php echo $Deceased_Zipcode; ?>">

					</div>

				<br>

				<br>

				</div> <!-- /col-12 /col-ms-4 -->				

				<div class="col-12"> <!-- col-12 -->

					<h5 class="push-left">Date of Passing</h5>

				</div> <!-- /col-12 -->

				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->

					<div class="form-group input-group-lg push-left">

						<input type="date" class="form-control" placeholder="Select Date" id="temp" name="date_Of_Death" value="<?php echo $Deceased_date_Of_Death; ?>">

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

						<input type="text" class="form-control" placeholder="First Name" name="primCont_First_Name" id="temp" value="<?php  echo $Primary_Contact_First_Name; ?>">	

					</div>

				<br>

				</div> <!-- /col-12 /col-sm-6 -->

				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->

                <h5 class="push-right">Last Name</h5>

					<div class="input-group input-group-lg push-right">

						<input type="text" class="form-control" placeholder="Last Name" name="primCont_Last_Name" id="temp" value="<?php echo $Primary_Contact_Last_Name; ?>">

					</div>

				<br>

				</div> <!-- /col-12 /col-sm-6 -->

				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->

                                    <h5 class="push-left">Relation</h5>

					<div class="input-group input-group-lg push-left">

						<select class="form-control">

                        <option value="" disabled selected>Select</option>
						<option value="<?php echo $Primary_Contact_relation_To_Deceased; ?>" name="relation_To_Deceased" id="temp"><?php echo $Primary_Contact_relation_To_Deceased; ?></option>

							<option value="temp" name="temp" id="temp">Son</option>

							<option value="temp" name="temp" id="temp">Daughter</option>

							<option value="temp" name="temp" id="temp">Grandchild</option>

                            <option value="temp" name="temp" id="temp">Friend</option>

							<option value="temp" name="temp" id="temp">Mother</option>

							<option value="temp" name="temp" id="temp">Father</option>

							<option value="temp" name="temp" id="temp">Grandparent</option>

							<option value="temp" name="temp" id="temp">Sibling</option>

							<option value="temp" name="temp" id="temp">Cousin</option>

                            <option value="temp" name="temp" id="temp">Uncle</option>

                            <option value="temp" name="temp" id="temp">Aunt</option>

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

						<input type="text" class="form-control" placeholder="Address" id="temp" name="primCont_Street_Address" value="<?php echo $Primary_Contact_Address; ?>">

					</div>

				<br>

				</div> <!-- /col-12 -->

				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->

					<div class="input-group input-group-lg push-left">

						<input type="text" class="form-control" placeholder="City" id="temp" name="primCont_City" value="<?php echo $Primary_Contact_City; ?>">

					</div>

				<br>

				</div> <!-- /col-12 /col-ms-4 -->

				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->

					<div class="input-group input-group-lg">

                        <select class="form-control" name="primCont_State">
						<option name="primCont_State" value="<?php echo $Primary_Contact_State; ?>"> <?php echo $Primary_Contact_State; ?></option>
						

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

						<input type="text" class="form-control" placeholder="Zipcode" id="temp" name="primCont_Zipcode" value="<?php echo $Primary_Contact_Zipcode; ?>">

					</div>

				<br>

				<br>

				</div> <!-- /col-12 /col-ms-4 -->



				<div class="col-12 col-md-6"> <!-- col-12 col-md-6 -->
				<h5 class="push-left">Contact's Email</h5>

					<div class="input-group input-group-lg push-left push-right">

						<input type="email" class="form-control" id="temp" name="primCont_Email" placeholder="Email" value="<?php echo $Primary_Contact_Email; ?>">

					</div>

					<br>

				</div> <!-- /col-12 /col-md-6 -->

                <div class="col-12 col-md-6"> <!-- col-12 col-md-6 -->

                <h5 class="push-right">Phone Number</h5>     

					<div class="input-group input-group-lg push-left push-right">

						<input type="text" class="form-control" name="primCont_Phone_Num" id="temp" placeholder="Phone" value="<?php echo $Primary_Contact_Phone; ?>">

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

                        <option value="" disabled selected>Select</option>

							<option value="temp" name="temp" id="temp">Son</option>

							<option value="temp" name="temp" id="temp">Daughter</option>

							<option value="temp" name="temp" id="temp">Grandchild</option>

                            <option value="temp" name="temp" id="temp">Friend</option>

							<option value="temp" name="temp" id="temp">Mother</option>

							<option value="temp" name="temp" id="temp">Father</option>

							<option value="temp" name="temp" id="temp">Grandparent</option>

							<option value="temp" name="temp" id="temp">Sibling</option>

							<option value="temp" name="temp" id="temp">Cousin</option>

                            <option value="temp" name="temp" id="temp">Uncle</option>

                            <option value="temp" name="temp" id="temp">Aunt</option>

						</select>

					</div>

					<br>

				</div> <!-- /col-12 /col-sm-6 -->

				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->

					<div class="input-group input-group-lg push-right">

						<select class="form-control">

                        <option value="" disabled selected>Living Status</option>

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

 						<input type="submit" class="btn btn-lg btn-block btn-green" value="Next" name="Next">
						<?php
	}
if (isset($_POST['Next'])) {
            $deceased_f_name = $_REQUEST['deceased_f_name'];
			$deceased_l_name = $_REQUEST["deceased_l_name"];
			$deceased_gender = $_REQUEST["deceased_gender"];
			if($deceased_gender=="Male"){
				$deceased_gender = "M";	
			}
			elseif ($deceased_gender=="Female"){
				$deceased_gender = "F";
			}
			$dec_Street_Address = $_REQUEST["dec_Street_Address"];
			$dec_City = $_REQUEST["dec_City"];
			$dec_State = $_REQUEST["dec_State"];
			$dec_Zipcode = $_REQUEST["dec_Zipcode"];
			$date_Of_Death =$_REQUEST["date_Of_Death"];
			$primCont_Last_Name = $_REQUEST["primCont_Last_Name"];
			$primCont_First_Name = $_REQUEST["primCont_First_Name"];
			$relation_To_Deceased1 = $_REQUEST["relation_To_Deceased"];
			$primCont_Street_Address = $_REQUEST["primCont_Street_Address"];
			$primCont_City = $_REQUEST["primCont_City"];
			$primCont_Zipcode = $_REQUEST["primCont_Zipcode"];
			$primCont_Phone_Num = $_REQUEST["primCont_Phone_Num"];
			
			
			
			$Initial_Information_Update = "Update Deceased , Primary_Contact 
			SET vchar_dec_First_Name= '$deceased_f_name',vchar_dec_Last_Name='$deceased_l_name', 
			char_gender = '$deceased_gender', vchar_dec_Street_Address ='$dec_Street_Address',
			vchar_dec_City='$dec_City', char_dec_State='$dec_State', vchar_dec_Zipcode='$dec_Zipcode',
			dt_date_Of_Death = '$date_Of_Death', vchar_primCont_First_Name = '$primCont_Last_Name', 
			vchar_primCont_Last_Name ='$primCont_Last_Name', char_relation_To_Deceased ='$relation_To_Deceased1',
			vchar_primCont_Street_Address = '$primCont_Street_Address',
			vchar_primCont_City ='$primCont_City', char_primCont_State ='$primCont_Zipcode', 
			vchar_primCont_Phone_Num = '$primCont_Phone_Num '
			WHERE Deceased.int_deceased_ID='$deceased_ID' AND Primary_Contact.int_primary_Contact_ID ='$primary_id'";
			$result = $conn->query($Initial_Information_Update);

			
		header("Location: MassPreferences.php");
	
	}
	         

			 
			 
			 
			
?>

					</div>

					<br>

 				</div> <!-- /col-12 /col-md-6 -->

 			</div> <!-- /row -->

		</div>

		<div id="footer">
			
			<!-- Author: Carlos Cornejo - functions.php		
 			Description: The footer that links to Saint Juliana's website with appropriate links		
 		!-->
		<?php

			include "functions.php";

			getFooter();

		?>

		</div>

	</form>

</div> <!-- /container -->

</body>


</html>