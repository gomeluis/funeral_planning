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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
   <script src="http://malsup.github.com/jquery.form.js"></script> 
    <!--   Ajax script to test the update without refreshing the page  -->

<!--   <script>
       
       $(document).ready(function() {
           
           $('#myForm').ajaxForm(function() { 
            
            
            var txt;
   if (confirm("If you click Ok you are going to next Page, If you click cancel you are stay in this page !")) {
       txt = "OK!";
        window.location.href = "http://cpscserv.dom.edu/students/amadjuan/funeraldemo/new/MusicSelection.php";
   } else {
       txt = "Cancel!";
   }
                 
                
                  
           });
       });
   </script> -->
   

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
	
	
$deceased_id =$_SESSION['deceased_id'];
 
 echo "<h5>";
 echo "ID------: ";
 echo $deceased_id;
 echo "</h5>";
 
 

 
//Get the songs that are currently saved in the database 
 $sqlForm4 = "SELECT * FROM Funeral_Mass_Plan WHERE Funeral_Mass_Plan.int_deceased_ID = '$deceased_id'";
    $resultForm4 = $conn->query($sqlForm4);
	if ($rowSelected= $resultForm4->fetch_assoc()) {
		$Funeral_Mass_Plan_ID= $rowSelected['int_funeral_ID'];
		
		 $Opening_song_selected = $rowSelected["int_Processional_Song_ID"];		 
		 $Responsorial_Psalm_selected = $rowSelected["int_Responsorial_Psalm_Song_ID"];
		 $Gospel_Acclamation_selected = $rowSelected["int_Gospel_Acclamation_Song_ID"];
		 $Song_for_preparation_of_Gifts_selected = $rowSelected["int_Preparation_of_Gifts_Song_ID"];
		 $Mystery_of_faith_selected = $rowSelected["int_Mystery_Of_Faith_Song_ID"];
		 $Communion_Song_selected = $rowSelected["int_Communion_Song_ID"];
		 $Final_commendation_selected = $rowSelected["int_Final_Commendation_Song_ID"]; //////////////////////////////////////////////////////////////
		 $Recessional_Song_selected = $rowSelected["int_Recessional_Song_ID"];
		 
		 $_SESSION['Funeral_id'] =$Funeral_Mass_Plan_ID;
	
	}
	
        ?>
	
	
	
	
	
	
	
	
	
	
	
	

        



<div class="container"> <!-- container -->
	<form action="PersonalReminiscences.php" method="post" id="myForm">
	
	
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
                      
                       /******************GET SAVED SELECTION****************************** */
                        <option class="text-success" value=" <?php
															$sql = "SELECT * FROM Song WHERE Song.int_Song_ID = '$Opening_song_selected' ";
                                                                  $result = $conn->query($sql);
                                                                     if($row = $result->fetch_assoc()) {
                                                                        $selected = $row["vchar_song_Name"];
																		echo $selected;
                                                                    }?>">             
                                                                          <?php echo $selected;?>
                        </option>
                                     
                                      /*get the list of opening songs*/
                                      <?php
                                        $open_song_query = "SELECT distinct vchar_song_Name FROM Song WHERE char_song_Category = 'Processional'";
                                        $open_song_results = $conn->query($open_song_query);
										
                                        while ($row = $open_song_results->fetch_assoc()) {
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
                                                    
                                                    /*retrieve previously saved option for this category*/
                             <option class="text-success"value=" <?php $sql2 = "SELECT * FROM Song WHERE Song.int_Song_ID = '$Responsorial_Psalm_selected' ";
                                                                  $result2 = $conn->query($sql2);
                                                                    if ($row2 = $result2->fetch_assoc()) {
																		$rs = $row2["vchar_song_Name"];
																		echo $rs;
                                                                    }?>" >             
                                                                          <?php echo $rs;?>
                            </option>
                                                    
                                                    
                                         /*List of responsorial psalm songs*/           
                                         <?php
                                        $res_song_query = "SELECT distinct vchar_song_Name FROM Song WHERE char_song_Category = 'Responsorial Psalm'";
                                        $res_song_results = $conn->query($res_song_query);
										
                                        while ($row = $res_song_results->fetch_assoc()) {
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
                                                    
                                                    /*retrieve previously saved option for this category*/
                             <option class="text-success"value=" <?php $sql3 = "SELECT * FROM Song WHERE Song.int_Song_ID = '$Gospel_Acclamation_selected' ";
                                                                  $result3 = $conn->query($sql3);
                                                                    if ($row3 = $result3->fetch_assoc()) {
                                                                        $ga = $row3["vchar_song_Name"];
																		echo $ga;
                                                                    }?>" >             
                                                                          <?php echo $ga;?>
                            </option>                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    /*List for dropdown*/
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
                                                    /*retrieve previously saved option for this category*/
                                                    
                             <option class="text-success"value=" <?php $sql4 = "SELECT * FROM Song WHERE Song.int_Song_ID = '$Song_for_preparation_of_Gifts_selected' ";
                                                                  $result4 = $conn->query($sql4);
                                                                    if ($row4 = $result4->fetch_assoc()) {
																		$pg = $row4["vchar_song_Name"];
                                                                        echo $pg;
                                                                    }?>" >             
                                                                          <?php echo $pg;?>
                            </option>                                                                                                                
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            /*List for dropdown*/
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
                                                    /***************************************************************************************/
                            <option class="text-success"value=" <?php $sql5 = "SELECT * FROM Song WHERE Song.int_Song_ID = '$Mystery_of_faith_selected' ";
                                                                  $result5 = $conn->query($sql5);
                                                                    if ($row5 = $result5->fetch_assoc()) {
                                                                        $mf = $row5["vchar_song_Name"];
																		echo $mf;
                                                                    }?>" >             
                                                                          <?php echo $mf;?>
                            </option>                                                           
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    /*List for dropdown*/
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
                                                    /****************************************************************************/
                            <option class="text-success"value=" <?php $sql6 = "SELECT * FROM Song WHERE Song.int_Song_ID = '$Communion_Song_selected' ";
                                                                  $result6 = $conn->query($sql6);
                                                                    if ($row6 = $result6->fetch_assoc()) {
																		$cs = $row6["vchar_song_Name"];
                                                                        echo $cs;
                                                                    }?>" >             
                                                                          <?php echo $cs;?>
                            </option>                                                     
                                                    
                                                    
                                                    
                                                    
                                                    

                                                       /*List for dropdown*/
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
                                                    /**********************************************************************/
                            <option class="text-success"value=" <?php $sql7 = "SELECT * FROM Song WHERE Song.int_Song_ID = '$Final_commendation_selected' ";
                                                                  $result7 = $conn->query($sql7);
                                                                    if ($row7 = $result7->fetch_assoc()) {
                                                                        $fc = $row7["vchar_song_Name"];
																		echo $fc;
                                                                    }?>" >             
                                                                          <?php echo $fc;?>
                            </option>                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    /*List for dropdown*/
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
						<input type="submit" class="btn btn-lg btn-block btn-green"formaction="player.php" name="final_song" value="Preview">
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
						<select class="form-control" name="reccesional_song">
                                                    /***************************************************************************/
                            <option class="text-success"value=" <?php $sql7 = "SELECT * FROM Song WHERE Song.int_Song_ID = '$Recessional_Song_selected' ";
                                                                  $result7 = $conn->query($sql7);
                                                                    if ($row7 = $result7->fetch_assoc()) {
                                                                        $fc = $row7["vchar_song_Name"];
																		echo $fc;
                                                                    }?>" >             
                                                                          <?php echo $fc;?>
                            </option>
                                                    
                                                    
                      
                                                    /List for dropdown*/
							<?php
								$reccesional_song_query = "SELECT distinct vchar_song_Name FROM Song WHERE char_song_Category = 'Recessional' ";
								$reccesional_song_results = $conn->query($reccesional_song_query);
							
								while($row = $reccesional_song_results->fetch_assoc())
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
 						<input type="submit" class="btn btn-lg btn-block btn-green" value="Next" name="next">
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
	</form>
    
    <!-- Save songs selected by user -->
    <?php 
	
	if (isset($_POST['next'])) {
           $Opening_Song_Picked = $_REQUEST['opening_song'];
            $Responsorial_Psalm_Picked = $_REQUEST["responsorial_song"];
            $Gospel_Acclamation_Picked = $_REQUEST["gospel_Acclamation"];
            $Preparation_of_Gifts_Picked = $_REQUEST["preparation_of_gifts"];
            $Mystery_of_Faith_Picked = $_REQUEST["mystery_of_faith"];
            $Communion_Song_Picked = $_REQUEST["communion_song"];
            $Final_Commendation_Picked = $_REQUEST["final_commendation"];
            $Recessional_Song_Picked = $_REQUEST["reccesional_song"];
            
			
             // update the query to update the information  the database
            $Music_Selection_Update = "Update Funeral_Mass_Plan 
            SET int_Processional_Song_ID = '$Opening_Song_Picked', int_Responsorial_Psalm_Song_ID = '$Responsorial_Psalm_Picked',
            int_Gospel_Acclamation_Song_ID =' $Gospel_Acclamation_Picked', int_Preparation_of_Gifts_Song_ID = '$Preparation_of_Gifts_Picked',
            int_Mystery_Of_Faith_Song_ID = '$Mystery_of_Faith_Picked', int_Communion_Song_ID = '$Communion_Song_Picked',
            int_Final_Commendation_Song_ID ='$Final_Commendation_Picked', int_Recessional_Song_ID = '$Recessional_Song_Picked'
            WHERE int_funeral_ID= '$Funeral_Mass_Plan_ID'";
			
            $result = $conn->query($Music_Selection_Update);
            
            
        
    
    }
$_SESSION['Funeral_id'] =$Funeral_Mass_Plan_ID;

?>
</div> <!-- /container -->
</body>
</html>