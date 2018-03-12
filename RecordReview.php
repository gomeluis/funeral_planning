<?php
	session_start();
	
?>

<!--	
		Author: Luis Gomez  ~ Demo/RecordReview.php
			-Created the format and the design of the final review page
			- This entire page was coded by Luis
			
		
		Description: Once the staff finished filling out the create record, they're directed to this record review
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




<title>Record Review</title>
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
				<div class="w-100 text-center" id="step_bubbles"> </div>
			</div> <!-- /col-12 -->
		</div> <!-- /row -->

		<div id="MainForm">
			<div class="row"> <!-- row -->
            	<div class="col-12"> <!-- col-12 -->
                	<br>
                	<h2 class="text-center" id="deceasedHeader">Record Review</h2>
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
               <div class="col-12 col-sm-4 push-left">
					<h5>Email: <?php  ?> </h5>       
                </div>
                 <div class="col-12 col-sm-4 push-right">
					<h5>Phone Number: <?php  ?> </h5>       
                </div>
            </div> <!-- /row -->

	</br> 
            <div class="row">
            	<div class="col-12">  <!-- col-12 -->             
					<h2 class="text-center"> <u>Funeral and Wake Information</u></h2> <br>
                </div><!-- /col-12 -->
                <div class="col-12 col-sm-6 push-left">
					<h5>Funeral Home Name: <?php ?></h5>          
                </div>
                
                
               
			</div> 
            <div class="row">       
                <div class="col-12 col-sm-6 push-left">
					<h5>Address: <?php ?></h5>          
                </div>

			</div>
			 <div class="row">       
                <div class="col-12 col-sm-4 push-left">
					<h5>City: <?php ?></h5>          
                </div>
                 <div class="col-12 col-sm-4 push-right">
					<h5>State: <?php ?></h5>          
                </div>
                 <div class="col-12 col-sm-4 push-right">
					<h5>Zipcode: <?php ?></h5>          
                </div>

			</div>
			 <div class="row">       
                <div class="col-12 col-sm-4 push-left">
					<h5>Location of Wake: <?php ?></h5>          
                </div>
                

			</div>
   </br>
            <div class="row">
            	<div class="col-12">  <!-- col-12 -->
            	  <h2 class="text-center"> <u>Mass Information</u></h2>
            	  <br>
                </div><!-- /col-12 -->
                <div class="col-12 col-sm-4 push-left">
					<h5>Date of Mass: <?php ?></h5>          
                </div> 
                <div class="col-12 col-sm-4 push-left">
					<h5>Time of Mass: <?php ?></h5>          
                </div>                
			</div>
			
	</br>        
            <div class="row">
            	<div class="col-12">  <!-- col-12 -->
            	  <h2 class="text-center"> <u>Cemetery Information</u></h2>
            	  <br>
                </div><!-- /col-12 -->
                <div class="col-12 col-sm-4 push-left">
					<h5>Will There Be a Casket: <?php ?></h5>          
                </div>
                <div class="col-12 col-sm-4 push-left">
					<h5>Cemetery Notes: <?php ?></h5>          
                </div>                
			</div>
    </br>
            <div class="row">
            	<div class="col-12">  <!-- col-12 -->
            	  <h2 class="text-center"><u>Priest and Bereavement Minister</u></h2>
            	  <br>
                </div><!-- /col-12 -->
                <div class="col-12 col-sm-4 push-left">
					<h5>Priest First Name: <?php ?></h5>          
                </div>
                <div class="col-12 col-sm-4 push-right">
					<h5>Priest Last Name: <?php ?></h5>          
                </div>                
			</div>
            <div class="row">
                <div class="col-12 col-sm-4 push-left">
					<h5>Bereavement Minister First Name: <?php ?></h5>          
                </div>
                <div class="col-12 col-sm-4 push-right">
					<h5>Bereavement Minister Last Name: <?php ?></h5>          
                </div>
                            
			</div>
          
</br>
                         
</br>
            
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