<?php
	session_start();
	
?>

<!--	
		Author: Luis Gomez  ~ Demo/FinalReview.php
			-Created the format and the design of the final review page
			- This entire page was coded by Luis
			- FinalReview.php can be used for Family and Demo forms
		
		Description: Once the family finished filling out all the forms, they're directed to this final review
						page to confirm all inputted information is correct before final submittion.
		
!-->

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




<title>Final Review</title>
</head>
<body>


<div class="container"> <!-- container -->
	
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
                	<h2 class="text-center" id="deceasedHeader">Final Review</h2>
                    <br>
                    <h5 class="push-left text-center" style="font-size:50px">Please review your information before you submit</h5>
                    <br>
                </div> <!-- /col-12 -->
                
                <div class="col-12">  <!-- col-12 -->             
					<h2 class="text-center"> <u>Deceased Information</u></h2> <br>
                </div><!-- /col-12 -->
                
                <div class="col-12 col-sm-4 push-left">
					<h5>Deceased's First Name: <?php echo($_SESSION['dec_first_Name']); ?></h5>          
                </div>
                
                 <div class="col-12 col-sm-4 push-right">
					<h5 >Deceased's Last Name: <?php echo $_SESSION['dec_last_Name']; ?> </h5>       
                </div>
                
                <div class="col-12 col-sm-4 push-left">
					<h5 >Gender: <?php echo $_SESSION['dec_Gender']; ?> </h5>       
                </div>
                
            </div> <!-- /row -->
            
            <div class="row"> <!-- row -->
               <div class="col-12 col-sm-6 push-left">
					<h5>Deceased's Address: <?php echo $_SESSION['dec_Address']; ?> </h5>       
                </div>
            </div> <!-- /row -->
            
            <div class="row"> <!-- row -->
            	<div class="col-12 col-sm-4 push-left">
					<h5>City: <?php 
						$city = $_SESSION['dec_City'];
						echo $city;
						?> </h5>       
                </div>
                
                <div class="col-12 col-sm-4 push-right">
					<h5>State: <?php  ?> </h5>       
                </div>
                
                 <div class="col-12 col-sm-4 push-right">
					<h5>Zipcode: <?php  ?> </h5>       
                </div>
            </div> <!-- /row -->
            <div class="row"> <!-- row -->
            	<div class="col-12 col-sm-4 push-left">
					<h5>Date of Passing: <?php  ?> </h5>       
                </div>
                            
            </div> <!-- /row -->	
            </br> 
            <div class="row">
            	<div class="col-12">  <!-- col-12 -->             
					<h2 class="text-center"> <u>Primary Contact Information</u></h2> <br>
                </div><!-- /col-12 -->
                <div class="col-12 col-sm-4 push-left">
					<h5>First Name: <?php ?></h5>          
                </div>
                
                 <div class="col-12 col-sm-4 push-right">
					<h5 > Last Name: <?php  ?> </h5>       
                </div>
                
                <div class="col-12 col-sm-4 push-left">
					<h5 >Relation: <?php  ?> </h5>       
                </div>
			</div>  
            <div class="row"> <!-- row -->
               <div class="col-12 col-sm-6 push-left">
					<h5>Deceased's Address: <?php echo $_SESSION['dec_Address']; ?> </h5>       
                </div>
            </div> <!-- /row -->
            
            <div class="row"> <!-- row -->
            	<div class="col-12 col-sm-4 push-left">
					<h5>City: <?php ?> </h5>       
                </div>
                
                <div class="col-12 col-sm-4 push-right">
					<h5>State: <?php  ?> </h5>       
                </div>
                
                 <div class="col-12 col-sm-4 push-right">
					<h5>Zipcode: <?php  ?> </h5>       
                </div>
            </div> <!-- /row -->  
            
            <div class="row">
            	
                <div class="col-12 col-sm-4 push-left">
					<h5>Email: <?php ?></h5>          
                </div>
                
                 <div class="col-12 col-sm-4 push-right">
					<h5 > Phone Number: <?php  ?> </h5>       
                </div>
                
               
			</div>
	</br> 
            <div class="row">
            	<div class="col-12">  <!-- col-12 -->             
					<h2 class="text-center"> <u>Deceased's Immediate Family</u></h2> <br>
                </div><!-- /col-12 -->
                <div class="col-12 col-sm-4 push-left">
					<h5>First Name: <?php ?></h5>          
                </div>
                
                 <div class="col-12 col-sm-4 push-right">
					<h5 >Last Name: <?php  ?> </h5>       
                </div>
                
               
			</div> 
            <div class="row">       
                <div class="col-12 col-sm-4 push-left">
					<h5>Relation to Deceased: <?php ?></h5>          
                </div>
                
                 <div class="col-12 col-sm-4 push-right">
					<h5 >Living Status: <?php  ?> </h5>       
                </div>
                
               
			</div>
   </br>
            <div class="row">
            	<div class="col-12">  <!-- col-12 -->             
					<h2 class="text-center"> <u>Mass Preferences</u></h2> <br>
                </div><!-- /col-12 -->
                <div class="col-12 col-sm-4 push-left">
					<h5>Placing of the Pall: <?php ?></h5>          
                </div>                
			</div>
			<div class="row"> 
           		 <div class="col-12 col-sm-4 push-left">
					<h5 >First Reading: <?php  ?> </h5>       
                </div>
                <div class="col-12 col-sm-4 push-right">
					<h5 >First Reader: <?php  ?> </h5>       
                </div>
                
            </div>
            <div class="row">         		
                <div class="col-12 col-sm-4 push-left">
					<h5 >Second Reading: <?php  ?> </h5>       
                </div>
                <div class="col-12 col-sm-4 push-right">
					<h5 >Second Readers: <?php  ?> </h5>       
                </div>
            </div>
            <div class="row">         		
                <div class="col-12 col-sm-4 push-left">
					<h5 >Gospel Reading: <?php  ?> </h5>       
				</div>                
            </div>
             <div class="row">         		
                <div class="col-12 col-sm-4 push-left">
					<h5 >Prayers of the Faithful - Readings for: <?php  ?> </h5>       
				</div>
           		<div class="col-12 col-sm-4 push-left">
					<h5 >Reader Name: <?php  ?> </h5>       
				</div>                
            </div>
	</br>        
            <div class="row">
            	<div class="col-12">  <!-- col-12 -->             
					<h2 class="text-center"> <u>Gift Bearers</u></h2> <br>
                </div><!-- /col-12 -->
                <div class="col-12 col-sm-4 push-left">
					<h5>Person 1: <?php ?></h5>          
                </div>
                <div class="col-12 col-sm-4 push-left">
					<h5>Person 2: <?php ?></h5>          
                </div>                
			</div>
    </br>
            <div class="row">
            	<div class="col-12">  <!-- col-12 -->             
					<h2 class="text-center"> <u>Music Selection</u></h2> <br>
                </div><!-- /col-12 -->
                <div class="col-12 col-sm-4 push-left">
					<h5>Opening Song: <?php ?></h5>          
                </div>
                <div class="col-12 col-sm-4 push-right">
					<h5>Responsorial Psalm: <?php ?></h5>          
                </div>
                <div class="col-12 col-sm-4 push-right">
					<h5>Gospel Acclamation: <?php ?></h5>          
                </div>                
			</div>
            <div class="row">
                <div class="col-12 col-sm-4 push-left">
					<h5>Song for Preparation of Gifts: <?php ?></h5>          
                </div>
                <div class="col-12 col-sm-4 push-right">
					<h5>Mystery of Faith: <?php ?></h5>          
                </div>
                <div class="col-12 col-sm-4 push-right">
					<h5>Communion Song: <?php ?></h5>          
                </div>                
			</div>
            <div class="row">
                <div class="col-12 col-sm-4 push-left">
					<h5>Final Commendation: <?php ?></h5>          
                </div>
                <div class="col-12 col-sm-4 push-right">
					<h5>Recessional Song: <?php ?></h5>          
                </div>               
			</div>
</br>
            <div class="row">
            	<div class="col-12">  <!-- col-12 -->             
					<h2 class="text-center"> <u>Personal Reminiscenses</u></h2> <br>
                </div><!-- /col-12 -->
                <div class="col-12 col-sm-8 push-left">
					<h5>How Did Your Loved One Practice His or Her Faith?: <?php ?></h5>          
                </div>               
			</div>
</br>
            <div class="row">
                <div class="col-12 col-sm-8 push-left">
					<h5>How Does The Gospel Reading You Chose Relate To The Deceased?: <?php ?></h5>          
                </div>               
			</div>                
</br>
            <div class="row">
                <div class="col-12 col-sm-10 push-left">
					<h5>What Memories or Other Personal Information Would You Like to Share About Your Loved One?: <?php ?></h5>          
                </div>               
			</div>
</br>             
             <div class="row"> <!-- row -->
 				<div class="col-12 push-md-6 col-md-6"> <!-- col-12 col-md-6 -->
 					<div class="push-left push-right" id="btnNext">
 						<input type="submit" class="btn btn-lg btn-block btn-green" value="Submit">
					</div>
					<br>
 				</div> <!-- /col-12 /col-md-6 -->
                <div class="col-12 pull-md-6 col-md-6"> <!-- col-12 col-md-6 -->
 					<div class="push-right push-left" id="btnPrev">
 						<input type="submit" class="btn btn-lg btn-block btn-green" formaction="PersonalReminiscenses.php" value="Previous">
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

	
</div> <!-- /container -->
</body>
</html>