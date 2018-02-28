<!DOCTYPE html>

<!--Designer: Carlos Cornejo
	
		Author: Ali Alhammali ~ GiftBearers.php
			-Ali created the select and update querys
			- 
				Got the information from database / update information 
				
		Code Review: Luis Gomez & Juan Amador
		
		Description: User input names for gift bearers.
		
		
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
	
<!-- Google Font links -->		
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">		
<!-- End Google Font links -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
		
		    <script> 
        
        $(document).ready(function() { 
            
            $('#myForm').ajaxForm(function() { 
			
			
			var txt;
    if (confirm("If you click Ok you are going to next Page, If you click cancel you are stay in this page !")) {
        txt = "OK!";
		window.location.href = "http://cpscserv.dom.edu/students/alhamali/PHP/MassPreferences/GiftBearers.php";
    } else {
        txt = "Cancel!";
    }
                  
				 
				  
            }); 
        }); 
    </script>




<!-- Custom style links -->
<link rel="stylesheet" type="text/css" href="/Styles/styles.css" />
<!-- End custom style links -->

<title>Gift Bearers</title>
</head>
<?php
  session_start();
  
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
$Funeral_Mass_Plan_ID = $_SESSION['Funeral_id'];


// select the data from database
 
 $sql = "SELECT * FROM Funeral_Mass_Plan WHERE Funeral_Mass_Plan.int_funeral_ID = '$Funeral_Mass_Plan_ID'";
    $result = $conn->query($sql);
	if ($row= $result->fetch_assoc()) {
		$gift_Bearer_First_First_Name= $row['vchar_gift_Bearer_First_First_Name'];
		$gift_Bearer_First_Last_Name= $row['vchar_gift_Bearer_First_Last_Name'];
		$gift_Bearer_Second_First_Name= $row['vchar_gift_Bearer_Second_First_Name'];
		$gift_Bearer_Second_Last_Name= $row['vchar_gift_Bearer_Second_Last_Name'];
		$_SESSION['Funeral_id'] =$Funeral_Mass_Plan_ID;
	}
 
 
 
 
?>
<body>


<div class="container"> <!-- container -->

	<form id="myForm" action="#" method="post">
	
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
				
					<img class="w-50 img-fluid" src="/Images/step-bubbles-3.png" alt="Step 3 of 6">
					
				</div>
				
			</div> <!-- /col-12 -->
			
		</div> <!-- /row -->

		<div id="MainForm">
		
			<div class="row"> <!-- row -->
			
            	<div class="col-12"> <!-- col-12 -->
                	<br>
					
                	<h2 class="text-center" id="deceasedHeader">Gift Bearers</h2>
					
                    <br>
					
                    <h5 class="push-left">If You Have Any Gift Bearers, You Can Enter Their Name(s) Below</h5>
					
                    <br>
					
                </div> <!-- /col-12 -->
				
                <div class="col-12"> <!-- col-12 -->
				
					<h5 class="push-left">Person 1</h2>
					
				</div> <!-- /col-12 -->
				
               <div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
			   
					<div class="input-group input-group-lg push-left">
					
						<input type="text" class="form-control" placeholder="First Name" name="Bearer_First_First_Name" id="temp" value ="<?php echo $gift_Bearer_First_First_Name; ?>">		
						
					</div>
				<br>
				
				</div> <!-- /col-12 /col-sm-6 -->
				
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
				
					<div class="input-group input-group-lg push-right">
					
						
						<input type="text" class="form-control" placeholder="Last Name" name="Bearer_First_Last_Name" id="temp" value ="<?php echo $gift_Bearer_First_Last_Name; ?>">		
					
					</div>
				<br>
				
				</div> <!-- /col-12 /col-sm-6 -->
				
            </div> <!-- /row -->
			
            
            <div class="row"> <!-- row -->
			
               <div class="col-12"> <!-- col-12 -->
			   
					<h5 class="push-left">Person 2</h2>
					
				</div> <!-- /col-12 -->  
				
                <div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
				
					<div class="input-group input-group-lg push-left">
					
						<input type="text" class="form-control" placeholder="First Name" name="Bearer_Second_First_Name" id="temp" value ="<?php echo $gift_Bearer_Second_First_Name; ?>">			
						
					</div>
				<br>
				
				</div> <!-- /col-12 /col-sm-6 -->
				
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
				
					<div class="input-group input-group-lg push-right">
					
						<input type="text" class="form-control" placeholder="Last Name" name="Bearer_Second_Last_Name" id="temp" value ="<?php echo $gift_Bearer_Second_Last_Name; ?>">		
						
					</div>
				<br>
				
				</div> <!-- /col-12 /col-sm-6 -->
				
            </div> <!-- /row -->
            
            <div class="row"> <!-- row -->
			
            	<div class="col-12"> <!-- col-12 -->
				
                	<div class="push-left">
					
                        <span class="icon-green">
						
                            <i class="fas fa-plus-circle"></i>
							
                            Add another person
                        </span>
						
                	</div>
				<br>
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
					
 						<input type="submit" class="btn btn-lg btn-block btn-green" value="Next" name ="Next">
						
					</div>
					<br>
 				</div> <!-- /col-12 /col-md-6 -->
                <div class="col-12 pull-md-6 col-md-6"> <!-- col-12 col-md-6 -->
				
 					<div class="push-right push-left" id="btnPrev">
					
 						<input type="submit" class="btn btn-lg btn-block btn-green" formaction="MassPreferences.php" value="Previous">
						
					</div>
					<br>
 				</div> <!-- /col-12 /col-md-6 -->
 			</div> <!-- /row -->
            
                                        
		</div> <!-- /MainForm -->
		<?php
if (isset($_POST['Next'])) {
				/// get data from the form 
			$Bearer_First_First_Name = $_REQUEST["Bearer_First_First_Name"];
			$Bearer_First_Last_Name = $_REQUEST["Bearer_First_Last_Name"];
			$Bearer_Second_First_Name = $_REQUEST["Bearer_Second_First_Name"];
			$Bearer_Second_Last_Name = $_REQUEST["Bearer_Second_Last_Name"];
				
				// update data into database
			$Gift_Bearers = "Update Funeral_Mass_Plan 
			SET vchar_gift_Bearer_First_First_Name = '$Bearer_First_First_Name' ,vchar_gift_Bearer_First_Last_Name = '$Bearer_First_Last_Name' , vchar_gift_Bearer_Second_First_Name = '$Bearer_Second_First_Name', vchar_gift_Bearer_Second_Last_Name = '$Bearer_Second_Last_Name'
			WHERE int_funeral_ID= '$Funeral_Mass_Plan_ID'";
			$result = $conn->query($Gift_Bearers);


}

			header("Location: MusicSelection.php");





?>
		
	</form>
	<div id="footer">
		
			<!-- Author: Carlos Cornejo - functions.php		
 -			Description: The footer that links to Saint Juliana's website with appropriate links		
 -		!-->

			<?php

			include "functions.php";

			getFooter();

			?>

		</div>
	
</div> <!-- /container -->

</body>

</html>