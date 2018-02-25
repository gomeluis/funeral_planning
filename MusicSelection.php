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


<title>Music Selection</title> <!-- Change later -->
</head>
<body>
<?php
         session_start();
       $server = "funeralinstance.cfg8tyxsms9d.us-east-2.rds.amazonaws.com";
        $username = "funeral";
        $password = "admin123";
        $dbname = 'dbfuneral';
$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	mysqli_set_charset($conn,"utf8");

        ?>



<div class="container"> <!-- container -->
	<form action="PersonalReminiscences.php" method="post">
	
	
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
					<img class="w-50 img-fluid" src="/Images/step-bubbles-4.png" alt="Step 4 of 6">
				</div>
			</div> <!-- /col-12 -->
		</div> <!-- /row -->

		<div id="MainForm">
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<br>
                	<h2 class="text-center" id="deceasedHeader">Music Selection</h2>
                    <br>
                    <br>
				</div> <!-- /col-12 -->		
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Opening Song</h5>					
				</div> <!-- /col-12 -->	
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-left">
 						<select class="form-control" name="opening_song">
                                      <?php
                                        $open_song_query = "SELECT distinct vchar_song_Name FROM Song WHERE char_song_Category = 'Processional'";
                                        $open_song_results = $conn->query($open_song_query);
										
                                        while ($row = $open_song_results->fetch_assoc()) {
                                            $open_song_Title = $row["vchar_song_Name"];
                                            echo "<option>$open_song_Title</option>";
}
                                        ?>
                                    </select>
                        
 
					</div>
				<br>
				</div> <!--/col-12 /col-sm-6 -->

				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="push-right">
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="MusicPreview.php" name="open_song" value="Preview">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->	
							
			</div> <!-- /row -->		
			
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Responsorial Psalm</h5>					
				</div> <!-- /col-12 -->	
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-left">
 						<select class="form-control" name="responsorial_song">
                                         <?php
                                        $res_song_query = "SELECT distinct vchar_song_Name FROM Song WHERE char_song_Category = 'Responsorial Psalm'";
                                        $res_song_results = $conn->query($res_song_query);
										
                                        while ($row = $res_song_results->fetch_assoc()) {
                                            $res_song_Title = $row["vchar_song_Name"];
                                            echo "<option>$res_song_Title</option>";
                                        }
                                        ?>
                                    </select>
					</div>
				<br>
				</div> <!--/col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="push-right">
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="MusicPreview.php" name="rep_song" value="Preview">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->					
			</div> <!-- /row -->
								
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Gospel Acclamation</h5>					
				</div> <!-- /col-12 -->	
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-left">
						<select class="form-control" name="gospel_Acclamation">
							<?php
								$gospel_song_query = "SELECT distinct vchar_song_Name FROM Song WHERE char_song_Category = 'Gospel Acclamation'";
								$gospel_song_results = $conn->query($gospel_song_query);
							
								while($row = $gospel_song_results->fetch_assoc())
								{
									$gospel_song_Title = $row["vchar_song_Name"];
									echo "<option> $gospel_song_Title </option>";
								}
							?>
						</select>
					</div>
				<br>
				</div> <!--/col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="push-right">
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="MusicPreview.php" name="gos_song" value="Preview">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->					
			</div> <!-- /row -->
								
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Song for Preparation of Gifts</h5>					
				</div> <!-- /col-12 -->	
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-left">
							<select class="form-control" name="preparation_of_gifts">
							<?php
								$gifts_song_query = "SELECT distinct vchar_song_Name FROM Song WHERE char_song_Category = 'Preparation of Gifts'";
								$gifts_song_results = $conn->query($gifts_song_query);
							
								while($row = $gifts_song_results->fetch_assoc())
								{
									$gifts_song_Title = $row["vchar_song_Name"];
									echo "<option> $gifts_song_Title </option>";
								}
							?>
						</select>
					</div>
				<br>
				</div> <!--/col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="push-right">
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="MusicPreview.php" name="gifts_song" value="Preview">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->					
			</div> <!-- /row -->
								
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Mystery of Faith</h5>					
				</div> <!-- /col-12 -->	
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-left">
						<select class="form-control" name="mystery_of_faith">
							<?php
								$mystery_song_query = "SELECT distinct vchar_song_Name FROM Song WHERE char_song_Category = 'Mystery of Faith'";
								$mystery_song_results = $conn->query($mystery_song_query);
							
								while($row = $mystery_song_results->fetch_assoc())
								{
									$mystery_song_Title = $row["vchar_song_Name"];
									echo "<option> $mystery_song_Title </option>";
								}
							?>
						</select>
					</div>
				<br>
				</div> <!--/col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="push-right">
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="MusicPreview.php" name="mystery_song" value="Preview">
					</div>
					<br>
					<br>
				</div> <!-- /col-12 /col-sm-6 -->					
			</div> <!-- /row -->
								
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Communion Song</h5>					
				</div> <!-- /col-12 -->	
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-left">
						<select class="form-control" name="communion_song">
							<?php
								$communion_song_query = "SELECT distinct vchar_song_Name FROM Song WHERE char_song_Category = 'Communion Song'";
								$communion_song_results = $conn->query($communion_song_query);
							
								while($row = $communion_song_results->fetch_assoc())
								{
									$communion_song_Title = $row["vchar_song_Name"];
									echo "<option> $communion_song_Title </option>";
								}
							?>
						</select>
					</div>
				<br>
				</div> <!--/col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="push-right">
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="MusicPreview.php" name="comm_song" value="Preview">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->					
			</div> <!-- /row -->
								
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Final Commendation</h5>					
				</div> <!-- /col-12 -->	
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-left">
						<select class="form-control" name="final_commendation">
							<?php
								$final_song_query = "SELECT distinct vchar_song_Name FROM Song WHERE char_song_Category = 'Final Commendation'";
								$final_song_results = $conn->query($final_song_query);
							
								while($row = $final_song_results->fetch_assoc())
								{
									$final_song_Title = $row["vchar_song_Name"];
									echo "<option> $final_song_Title </option>";
								}
							?>
						</select>
					</div>
				<br>
				</div> <!--/col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="push-right">
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="MusicPreview.php" name="final_song" value="Preview">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->					
			</div> <!-- /row -->
								
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Recessional Song</h5>					
				</div> <!-- /col-12 -->	
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-left">
						<select class="form-control" name="recessional_song">
							<?php
								$recessional_song_query = "SELECT distinct vchar_song_Name FROM Song WHERE char_song_Category = 'Recessional'";
								$recessional_song_results = $conn->query($recessional_song_query);
							
								while($row = $recessional_song_results->fetch_assoc())
								{
									$recessional_song_Title = $row["vchar_song_Name"];
									echo "<option> $recessional_song_Title </option>";
								}
							?>
						</select>
					</div>
				<br>
				</div> <!--/col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="push-right">
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="MusicPreview.php" name="recess_song" value="Preview">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->					
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
 						<input type="submit" class="btn btn-lg btn-block btn-green" value="Next">
					</div>
					<br>
 				</div> <!-- /col-12 /col-md-6 -->
                <div class="col-12 pull-md-6 col-md-6"> <!-- col-12 col-md-6 -->
 					<div class="push-right push-left" id="btnPrev">
 						<input type="submit" class="btn btn-lg btn-block btn-green" formaction="GiftBearers.php" value="Previous">
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