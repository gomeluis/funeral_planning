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
</head>
<body>
<?php
         session_start();
        $server = "funeralinstance.cfg8tyxsms9d.us-east-2.rds.amazonaws.com";
        $username = "funeral";
        $password = "admin123";
        $dbname = 'dbfuneral';
        $conn = mysql_connect($server, $username, $password) or die("Error connecting to server: " . mysql_error());
        mysql_select_db($dbname, $conn);
        
	
        ?>



<div class="container"> <!-- container -->
	<form action="form4.php" method="post">
	
	
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
					<img class="w-50 img-fluid" src="images/step-bubbles-4.png" alt="Step 4 of 6">
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
                                        $open_song_results = mysql_query($open_song_query);
										
                                        while ($row = mysql_fetch_array($open_song_results)) {
                                            $open_song_Title = $row["vchar_song_Name"];
                                            echo "<option>
                                                                                          $open_song_Title
                                                                                          </option>";
                                        }
                                        ?>
                                    </select>
                        
 
					</div>
				<br>
				</div> <!--/col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="push-right">
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="player.php" name="open_song" value="Preview">
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
                                        $res_song_query = "SELECT distinct vchar_song_Name FROM Song WHERE char_song_Category = 'Processional'";
                                        $res_song_results = mysql_query($res_song_query);
										
                                        while ($row = mysql_fetch_array($res_song_results)) {
                                            $res_song_Title = $row["vchar_song_Name"];
                                            echo "<option>
                                                                                          $res_song_Title
                                                                                          </option>";
                                        }
                                        ?>
                                    </select>
					</div>
				<br>
				</div> <!--/col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="push-right">
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="player.php" name="rep_song" value="Preview">
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
								$gospel_song_results = mysql_query($gospel_song_query);
							
								while($row = mysql_fetch_array($gospel_song_results))
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
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="player.php" name="gos_song" value="Preview">
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
								$gifts_song_results = mysql_query($gifts_song_query);
							
								while($row = mysql_fetch_array($gifts_song_results))
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
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="player.php" name="gifts_song" value="Preview">
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
								$mystery_song_results = mysql_query($mystery_song_query);
							
								while($row = mysql_fetch_array($mystery_song_results))
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
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="player.php" name="mystery_song" value="Preview">
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
								$communion_song_results = mysql_query($communion_song_query);
							
								while($row = mysql_fetch_array($communion_song_results))
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
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="player.php" name="comm_song" value="Preview">
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
								$final_song_results = mysql_query($final_song_query);
							
								while($row = mysql_fetch_array($final_song_results))
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
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="player.php" name="final_song" value="Preview">
					</div>
				<br>
				<br>
				</div> <!-- /col-12 /col-sm-6 -->					
			</div> <!-- /row -->
								
			<div class="row"> <!-- row -->
				<div class="col-12"> <!-- col-12 -->
					<h5 class="push-left">Reccesional Song</h5>					
				</div> <!-- /col-12 -->	
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="input-group input-group-lg push-left">
						<select class="form-control" name="reccesional_song">
							<?php
								$reccesional_song_query = "SELECT distinct vchar_song_Name FROM Song WHERE char_song_Category = 'Reccesional Song'";
								$reccesional_song_results = mysql_query($reccesional_song_query);
							
								while($row = mysql_fetch_array($reccesional_song_results))
								{
									$reccesional_song_Title = $row["vchar_song_Name"];
									echo "<option> $reccesional_song_Title </option>";
								}
							?>
						</select>
					</div>
				<br>
				</div> <!--/col-12 /col-sm-6 -->
				<div class="col-12 col-sm-6"> <!-- col-12 col-sm-6 -->
					<div class="push-right">
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="player.php" name="recces_song" value="Preview">
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
 						<input type="button" class="btn btn-lg btn-block btn-green" onclick="window.location.href='http://cpscserv.dom.edu/students/corncarl/funeraldemo/form5.php'" value="Next">
					</div>
					<br>
 				</div> <!-- /col-12 /col-md-6 -->
                <div class="col-12 pull-md-6 col-md-6"> <!-- col-12 col-md-6 -->
 					<div class="push-right push-left" id="btnPrev">
 						<input type="button" class="btn btn-lg btn-block btn-green" onclick="window.location.href='http://cpscserv.dom.edu/students/corncarl/funeraldemo/form3.php'" value="Previous">
					</div>
					<br>
 				</div> <!-- /col-12 /col-md-6 -->
 			</div> <!-- /row -->
									
		</div> <!-- /MainForm -->
	</form>
</div> <!-- /container -->
</body>
</html>