<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
	<link rel="stylesheet" type="text/css" href="Styles/styles.css"/>
	<!-- End custom style links -->

	<title>Preview Song</title>
	<!-- Change later -->
	<?php
	session_start();
	$server = "funeralinstance.cfg8tyxsms9d.us-east-2.rds.amazonaws.com";
	$username = "funeral";
	$password = "admin123";
	$dbname = 'dbfuneral';
	$conn = mysql_connect( $server, $username, $password )or die( "Error connecting to server: " . mysql_error() );
	mysql_select_db( $dbname, $conn );
	mysql_set_charset( 'utf8' );
	mysql_select_db( 'dbfuneral' );
	?>
</head>

<body>
	<div class="container">
		<!-- container -->
		<form action="form4.php" method="post">


			<div class="row">
				<!-- row -->
				<div class="col-12">
					<!-- col-12 -->
					<div class="w-100" id="divLogoHeader">
						<img class="img-fluid" src="images/logo-church-header.png" alt="Saint Juliana Parish" id="imgLogoHeader">
					</div>
				</div>
				<!-- /col-12 -->
			</div>
			<!-- /row -->

			<div class="row">
				<!-- row -->
				<div class="col-12 hidden-xs-down">
					<!-- col-12 -->
					<div class="w-100 text-center" id="step_bubbles">
						<img class="w-50 img-fluid" src="images/step-bubbles-4.png" alt="Step _ of _">
					</div>
				</div>
				<!-- /col-12 -->
			</div>
			<!-- /row -->
			<div class="MainForm">
				<h2 class="text-center" style="color: white">
					<?php
					if ( $_POST[ 'open_song' ] ) 
					{
							$open_Song_Title = $_REQUEST['opening_song'];

							echo $open_Song_Title ."</br></br>"; /*Checking the name of the selected song if its correct */
						
							//////////////////
							//Testing 
							echo "source src=/students/gomeluis/Funeral/Songs/Processional/".$open_Song_Title.".ogg";
							echo "</br></br>";
							echo "source src=/students/gomeluis/Funeral/Songs/Processional/".$open_Song_Title.".mp3 type=audio/mpeg";
							echo "</br></br>"; 
							////////////////

							/* Puts the varible in the url to find the song; however, it doesnt seem to find it */
							echo "</br>";
						
							echo "<audio controls loop>";
							echo "<source src=/students/gomeluis/Funeral/Songs/Processional/".$open_Song_Title.".ogg type=audio/ogg>";
							echo "<source src=/students/gomeluis/Funeral/Songs/Processional/".$open_Song_Title.".mp3 type=audio/mpeg>";
							echo "</audio>";
						
							echo "</br></br>";

							/*Testing audio sample*/
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/How Great Thou Art.ogg' type='audio/ogg'>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/How Great Thou Art.mp3' type='audio/mpeg'>";
							echo "</audio>";
						

					}
					elseif ( $_POST[ 'rep_song' ] ) 
					{
							$rep_Song_Title = $_REQUEST['responsorial_song'];
						
							echo $rep_Song_Title; /*Checking the name of the selected song if its correct */
						
							echo "source src=/students/gomeluis/Funeral/Songs/Processional/" . $rep_Song_Title . ".ogg";

							/* Puts the varible in the url to find the song; however, it doesnt seem to find it */
							echo "</br>";
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $rep_Song_Title . "'.ogg' type='audio/ogg'>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $rep_Song_Title . "'.mp3' type='audio/mpeg'>";
							echo "</audio>";
							echo "</br>";

							/*Testing audio sample*/
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.ogg' type='audio/ogg'>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.mp3' type='audio/mpeg'>";
							echo "</audio>";
					}
					 elseif ( $_POST[ 'gos_song' ] ) 
					 {
							$gos_Song_Title = $_REQUEST[ 'gospel_Acclamation' ];
						 
							echo $gos_Song_Title; /*Checking the name of the selected song if its correct */
						 
							echo "source src=/students/gomeluis/Funeral/Songs/Processional/" . $gos_Song_Title . ".ogg";

							/* Puts the varible in the url to find the song; however, it doesnt seem to find it */
							echo "</br>";
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $gos_Song_Title . "'.ogg' type='audio/ogg'>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $gos_Song_Title . "'.mp3' type='audio/mpeg'>";
							echo "</audio>";
							echo "</br>";

							/*Testing audio sample*/
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.ogg' type='audio/ogg'>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.mp3' type='audio/mpeg'>";
							echo "</audio>";
						}
					 elseif ( $_POST[ 'gifts_song' ] ) 
					 {
							$gifts_Song_Title = $_REQUEST[ 'preparation_of_gifts' ];
						 
							echo $gifts_Song_Title; /*Checking the name of the selected song if its correct */
						 
							echo "source src=/students/gomeluis/Funeral/Songs/Processional/" . $gifts_Song_Title . ".ogg";

							/* Puts the varible in the url to find the song; however, it doesnt seem to find it */
							echo "</br>";
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $gifts_Song_Title. "'.ogg' type='audio/ogg'>";
								echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $gifts_Song_Title . "'.mp3' type='audio/mpeg'>";
							echo "</audio>";
							echo "</br>";

							/*Testing audio sample*/
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.ogg' type='audio/ogg'>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.mp3' type='audio/mpeg'>";
							echo "</audio>";
						}
					elseif ( $_POST[ 'mystery_song' ] ) 
					 {
							$mystery_Song_Title = $_REQUEST[ 'mystery_of_faith' ];
						 
							echo $mystery_Song_Title; /*Checking the name of the selected song if its correct */
						 
							echo "source src=/students/gomeluis/Funeral/Songs/Processional/" . $mystery_Song_Title . ".ogg";

							/* Puts the varible in the url to find the song; however, it doesnt seem to find it */
							echo "</br>";
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $mystery_Song_Title. "'.ogg' type='audio/ogg'>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $mystery_Song_Title . "'.mp3' type='audio/mpeg'>";
							echo "</audio>";
							echo "</br>";

							/*Testing audio sample*/
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.ogg' type='audio/ogg'>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.mp3' type='audio/mpeg'>";
							echo "</audio>";
						}
					elseif ( $_POST[ 'comm_song' ] ) 
					 {
							$comm_Song_Title = $_REQUEST[ 'communion_song' ];
						 
							echo $comm_Song_Title; /*Checking the name of the selected song if its correct */
						 
							echo "source src=/students/gomeluis/Funeral/Songs/Processional/" . $comm_Song_Title . ".ogg";

							/* Puts the varible in the url to find the song; however, it doesnt seem to find it */
							echo "</br>";
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $comm_Song_Title . "'.ogg' type='audio/ogg'>";
								echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $comm_Song_Title . "'.mp3' type='audio/mpeg'>";
							echo "</audio>";
							echo "</br>";

							/*Testing audio sample*/
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.ogg' type='audio/ogg'>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.mp3' type='audio/mpeg'>";
							echo "</audio>";
						}
					elseif ( $_POST[ 'final_song' ] ) 
					 {
							$final_Song_Title = $_REQUEST[ 'final_commendation' ];
						 
							echo $final_Song_Title; /*Checking the name of the selected song if its correct */
							 
							echo "source src=/students/gomeluis/Funeral/Songs/Processional/" . $final_Song_Title . ".ogg";

							/* Puts the varible in the url to find the song; however, it doesnt seem to find it */
							echo "</br>";
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $final_Song_Title . "'.ogg' type='audio/ogg'>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $final_Song_Title . "'.mp3' type='audio/mpeg'>";
							echo "</audio>";
							echo "</br>";

							/*Testing audio sample*/
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.ogg' type='audio/ogg'>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.mp3' type='audio/mpeg'>";
							echo "</audio>";
						}
					elseif ( $_POST[ 'recces_song' ] ) 
					 {
							$recces_Song_Title = $_REQUEST[ 'reccesional_song' ];
						 
							echo $recces_Song_Title ; /*Checking the name of the selected song if its correct */
						 
							echo "source src=/students/gomeluis/Funeral/Songs/Processional/" . $recces_Song_Title  . ".ogg";

							/* Puts the varible in the url to find the song; however, it doesnt seem to find it */
							echo "</br>";
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $recces_Song_Title  . "'.ogg' type='audio/ogg'>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/'" . $recces_Song_Title  . "'.mp3' type='audio/mpeg'>";
							echo "</audio>";
							echo "</br>";

							/*Testing audio sample*/
							echo "<audio controls loop>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.ogg' type='audio/ogg'>";
							echo "<source src='/students/gomeluis/Funeral/Songs/Processional/Be not afraid.mp3' type='audio/mpeg'>";
							echo "</audio>";
						}
					
					?>
				</h2>
				<br/>
				
				<h2 style="color: red">*Disclaimer: The Songs being previewed aren't the versions that will be heard during the mass. These preivews are only for getting the general idea on how the song will sound.*</h2>
				</br>
				</br>
				<div class="container w-50">
					<div class="col-lg-12 col-xs-12">
						<div>
							<input type="submit" class="btn btn-lg btn-block btn-green hidden-print" value="Go back">
						</div>
						<br/>
					</div>
				</div>
		</form>

		</div>
	</div>
	</form>
	</div>
	<!-- /container -->
</body>


</html>