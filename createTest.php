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



<title>Form Name</title> <!-- Change later -->

	<?php
$server = "funeralinstance.cfg8tyxsms9d.us-east-2.rds.amazonaws.com";
        $username = "funeral";
        $password = "admin123";
        $dbname = 'dbfuneral';

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
if (isset($_POST['submit'])){
	if (empty($_POST['d_f_name'])){
		
		echo "First Name is Reuares";
		
	}
	
	
	
	
}




?>

</head>

<body>



<div class="container"> <!-- container -->

	<form action="resubmit.php" method="post">

	

	

		<div class="row"> <!-- row -->

			<div class="col-12"> <!-- col-12 -->

				<div class="w-100" id="divLogoHeader">

					<img class="img-fluid" src="images/logo-church-header.png" alt="Saint Juliana Parish" id="imgLogoHeader">

				</div>

			</div> <!-- /col-12 -->



			<div class="col-12">

				<nav class="navbar navbar-toggleable-md navbar-inverse bg-faded nav-green">

					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

						<span class="navbar-toggler-icon"></span>

					</button>

					<a class="navbar-brand" href="#">Welcome: 'Staff Member'</a>

					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">

						<div class="navbar-nav">

							<a class="nav-item nav-link active" href="#">Create Record <span class="sr-only">(current)</span></a>

							<a class="nav-item nav-link" href="#">Search Record</a>

							<a class="nav-item nav-link" href="#">Search Mass Plan</a>

						</div>

						<div class="na"

					</div>

				</nav>

			</div>

		</div> <!-- /row -->

		

		<div id="MainForm">

			<div class="row"> <!-- row -->

				<div class="col-12"  id="deceasedColHeader"> <!-- col-12 -->

					<br>

					<h2 class="text-center">Deceased Information</h2>

					<br>

				</div> <!-- /col-12 -->		

				<div class="col-12"> <!-- col-12 -->

					<h5 class="push-left">Deceased's Name and Gender</h5>

				</div> <!-- /col-12 -->	

				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->

					<div class="input-group input-group-lg push-left">

						<input type="text" class="form-control" placeholder="First Name" name="d_f_name" id="temp" pattern="[a-zA-Z4-9]{2,20}$" title="The name should has menmum 2 letters." required autofocus>	

					</div> 

					<br>

				</div> <!-- /col-12 /col-sm-6 -->

				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->

					<div class="input-group input-group-lg push-right">

						<input type="text" class="form-control" placeholder="Last Name" name="d_l_name" id="temp" pattern="[a-zA-Z4-9]{2,20}$" title="The name should has menmum 2 letters." required>

					</div>

					<br>

				</div> <!-- /col-12 /col-sm-6 -->

				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->

					<div class="input-group input-group-lg push-left">

						<select class="form-control" name="d_gender">

							<option>Male</option>

							<option>Female</option>

						</select>

					</div>

					<br>

					<br>

				</div><!-- /col-12 /col-sm-6 /col-md-4 -->		

				<div class="col-12"> <!-- col-12 -->

					<h5 class="push-left">Date of Passing</h5>

				</div> <!-- /col-12 -->

				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->

					<div class="form-group input-group-lg push-left">

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

						<input type="text" class="form-control" placeholder="First Name" name="p_f_name" id="temp" pattern="[a-zA-Z4-9]{2,20}$" title="The name should has menmum 2 letters." required>	

					</div>

					<br>

				</div> <!-- /col-12 /col-sm-6 -->

				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->

					<div class="input-group input-group-lg push-right">

						 <input type="text" class="form-control" placeholder="Last Name" name="p_l_name" id="temp" pattern="[a-zA-Z4-9]{2,20}$" title="The name should has menmum 2 letters." required>

					</div>

					<br>

				</div> <!-- /col-12 /col-sm-6 -->

				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->

					<div class="input-group input-group-lg push-left">

						<select class="form-control" name="p_Relation">

							<option>Significant Other</option>

							<option>Son</option>

							<option>Daughter</option>

							<option>Grandchild</option>

							<option>Mother</option>

							<option>Father</option>

							<option>Grandparent</option>

							<option>Sibling</option>

							<option>Other</option>

						</select>

					</div>

					<br>

					<br>

				</div> <!-- /col-12 /col-sm-6 /col-md-4 -->

				<div class="col-12"> <!-- col-12 -->

					<h5 class="push-left">Contact's Email and Phone Number</h5>

				</div> <!-- /col-12 -->

				<div class="col-12 col-md-6"> <!-- col-12 col-md-6 -->

					<div class="input-group input-group-lg push-left push-right">

						<input type="Email" class="form-control" placeholder="Email" name="p_email" id="temp" required>
					

					</div>

					<br>

				</div> <!-- /col-12 /col-md-6 -->	

				<div class="col-12 col-md-6"> <!-- col-12 col-md-6 -->

					<div class="input-group input-group-lg push-left push-right">

						<input type="tel" class="form-control" placeholder="Phone Namber 000-000-0000" name="p_phone" id="telNo" pattern="\d{3}[\-]\d{3}[\-]\d{4}"  title="The Phone Namber must be format 000-000-0000 ." required>

					</div>

					<br>

					<br>

					<br>

				</div> <!-- /col-12 /col-md-6 -->	

			</div> <!-- /row -->			

				

			<div class="row"> <!-- row -->

				<div class="col-12"> <!-- col-12 -->

					<h2 class="text-center">Funeral and Wake Information</h2>

					<br>

				</div> <!-- /col-12 -->

				<div class="col-12"> <!-- col-12 -->

					<h5 class="push-left">Name of Funeral Home and Address</h5>

				</div> <!-- /col-12 -->

				<div class="col-12"> <!-- col-12 -->

					<div class="input-group input-group-lg push-left push-right">

						<input type="text" class="form-control" placeholder=" Funeral Name" name="Funeral_Name" id="temp" pattern="[a-zA-Z4-9]{2,20}$" title="The Funeral Name should has menmum 2 letters." required>

					</div>

					<br>

				</div> <!-- /col-12 -->

				<div class="col-12"> <!-- col-12 -->

					<div class="input-group input-group-lg push-right push-left">

						<input type="text" class="form-control" placeholder="Street" name="f_Street" id="temp" required>

					</div>

					<br>

				</div> <!-- /col-12 -->

				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->

					<div class="input-group input-group-lg push-left">

						<input type="text" class="form-control" placeholder="City" name="f_City" id="temp" required>

					</div>

					<br>

				</div> <!-- /col-12 /col-ms-4 -->

				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->

					<div class="input-group input-group-lg">

						<input type="text" class="form-control" placeholder="State" name="f_State" id="temp" required>

					</div>

					<br>

				</div> <!-- /col-12 /col-ms-4 -->

				<div class="col-12 col-sm-4"> <!-- col-12 col-ms-4 -->

					<div class="input-group input-group-lg push-right">

						<input type="text" class="form-control" placeholder="Zipcod" name="f_Zipcod" id="temp" pattern="[0-9]{5}" required>

					</div>

					<br>

					<br>

				</div> <!-- /col-12 /col-ms-4 -->

			</div> <!-- /row -->

				

			<div class="row"> <!-- row -->

				<div class="col-md-4 hidden-xs-down"></div>

				<div class="col-12 col-md-4"> <!-- col-12 col-md-4 -->

					<h5 class="push-left push-right">Location of Wake</h5>

					<div class="input-group input-group-lg push-left push-right">

						<select class="form-control" name="Location_of_wake">
                <option>
                    Both
                </option>
                <option>
                    Funeral Home
                </option>
                <option>
                    Church
                </option>
            </select>

					</div>

					<br>

				</div> <!-- /col-12 /col-md-4 -->

				<div class="col-md-4 hidden-xs-down"></div>

			</div> <!-- /row -->

			

			<div class="row"> <!-- row -->

				<div class="col-12 col-md-4"> <!-- col-12 col-md-4 -->

					<h5 class="push-right push-left">Date of Wake(Funeral)</h5>

					<div class="form-group input-group-lg push-right push-left">

						 <input type="date" class="form-control" placeholder="Date of Wake" name="Date_of_Wake_funeral" id="temp" required>

					</div>

					<br>

				</div> <!-- /col-12 /col-md-4 -->

				<div class="col-12 col-md-4"> <!-- col-12 col-md-4 -->

					<h5 class="push-right push-left">Start of Wake(Funeral)</h5>

					<div class="input-group input-group-lg push-right push-left">

	<input type="time" class="form-control" placeholder="Start Time" name="Start_Time_funeral" id="temp" required>

					</div>

					<br>

				</div> <!-- /col-12 /col-md-4 -->

				<div class="col-12 col-md-4"> <!-- col-12 col-md-3 -->

					<h5 class="push-right push-left">End of Wake(Funeral)</h5>

					<div class="input-group input-group-lg push-right push-left">

						<input type="time" class="form-control" placeholder="End Time" name="End_Time_funeral" id="temp" required>

					</div>

					<br>

					<br>

					<br>

				</div> <!-- /col-12 /col-md-3 -->

			</div> <!-- /row -->

			

			<div class="row"> <!-- row -->

				<div class="col-12"> <!-- col-12 -->

					<h2 class="text-center">Mass Information</h2>

					<br>

				</div> <!-- /col-12 -->

				<div class="col-12 col-md-6"> <!-- col-12 col-md-6 -->

					<h5 class="push-left push-right">Date of Mass</h5>

					<div class="form-group input-group-lg push-left push-right">

						<input type="date" class="form-control" placeholder="Date of Mass" name="Date_of_Mass" id="temp" required >

					</div>

					<br>

				</div> <!-- /col-12 /col-md-6 -->

				<div class="col-12 col-md-6"> <!-- col-12 col-md-6 -->

					<h5 class="push-right push-left">Time of Mass</h5>

					<div class="input-group input-group-lg push-right push-left">

						<input type="time" class="form-control" placeholder="Time of Mass" name="Time_of_Mass" id="temp" required>

					</div>

					<br>

					<br>

				</div> <!-- /col-12 /col-md-6 -->

			</div> <!-- row -->

			

			<div class="row"> <!-- row -->

				<div class="col-12"> <!-- col-12 -->

					<br>

					<h2 class="text-center" id="deceasedHeader">Cemetery Information</h2>

					<br>

				</div> <!-- /col-12 -->		

				<div class="col-12 col-sm-6 col-md-4"> <!-- col-12 col-sm-6 col-md-4 -->

					<h5 class="push-left">Will There Be a Body?</h5>

					<div class="input-group input-group-lg push-left">

						<select class="form-control">

							<option disabled>Select an option</option>

							<option value="temp" name="temp" id="temp">Yes</option>

							<option value="temp" name="temp" id="temp">No</option>

						</select>

					</div>

					<br>

				</div> <!-- col-12 col-sm-6 col-md-4 -->							

				<div class="col-12"> <!-- col-12 -->

					<h5 class="push-left">Cemetery Notes</h5>

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

					<h2 class="text-center">Priest and Bereavement Minister</h2>

					<br>

				</div> <!-- /col-12 -->

				<div class="col-12"> <!-- col-12 -->

					<h5 class="push-left">Priest Name</h5>

				</div> <!-- /col-12 -->

				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->

					<div class="input-group input-group-lg push-left">

						<input type="text" class="form-control" placeholder="First Name" name="Priest_f_name" id="temp" pattern="[a-zA-Z4-9]{2,20}$" title="The Name should has menmum 2 letters." required>	

					</div>

				<br>

				</div> <!-- /col-12 /col-sm-6 -->

				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->

					<div class="input-group input-group-lg push-right">

						<input type="text" class="form-control" placeholder="Last Name" name="Priest_l_name" id="temp" pattern="[a-zA-Z4-9]{2,20}$" title="The Funeral Name should has menmum 2 letters." required>

					</div>

				<br>

				<br>

				</div> <!-- /col-12 /col-sm-6 -->

				<div class="col-12"> <!-- col-12 -->

					<h5 class="push-left">Bereavement Minister Name</h5>

				</div> <!-- /col-12 -->

				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->

					<div class="input-group input-group-lg push-left">

						<input type="text" class="form-control" placeholder="First Name" name="BM_f_name" id="temp" pattern="[a-zA-Z4-9]{2,20}$" title="The Funeral Name should has menmum 2 letters." required>	

					</div>

				<br>

				</div> <!-- /col-12 /col-sm-6 -->

				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->

					<div class="input-group input-group-lg push-right">

						<input type="text" class="form-control" placeholder="Last Name" name="BM_l_name" id="temp" pattern="[a-zA-Z4-9]{2,20}$" title="The Funeral Name should has menmum 2 letters." required>

					</div>

				<br>

				<br>

				</div> <!-- /col-12 /col-sm-6 -->

			</div> <!-- /row -->

			

			<div class="row"> <!-- row -->

				<div class="col-sm-2 col-md-3 hidden-xs-down"></div>

				<div class="col-12 col-sm-8 col-md-6"> <!-- col-12 col-sm-6 col-md-4 -->

					<input type="submit" class="btn btn-lg btn-block btn-green" name="submit" value="Create Record">

					<br>

				</div> <!-- /col-12 /col-sm-6 /col-md-4 -->

				<div class="col-sm-2 col-md-3 hidden-xs-down"></div>

			</div> <!-- /row -->

			

		</div> <!-- /MainForm -->

	</form>

</div> <!-- /container -->

</body>

</html>	