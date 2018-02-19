<!doctype html>
<html>
    <head>
        <meta content="tex/html" charset="utf-8">
        <title>Mass Preferences</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <!-- FontAwesome JS links -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.3/js/all.js"></script>
        <!-- End FontAwesome JS links -->


        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid Serif">
        <style>
            div1 {padding:5px;}
            .container {background-color:White}
            .herdre1{padding:0px;}
        </style>
        <!-- Custom style links -->
        <link rel="stylesheet" type="text/css" href="Styles/styles.css" />
        <!-- End custom style links -->
		
		<script>
			function addNewPerson(){
				//New "Name" Label
				var labelArea = document.getElementById("nameLabel");
				
				var nLBL = document.createElement("label");
				nLBL.appendChild(document.createTextNode("Name:"));
				
				labelArea.appendChild(nLBL);
				
				//New First Name Textbox
				var fNameSection = document.getElementById("newFirstNameTB");
				
				var newFNTB = document.createElement("input");
				newFNTB.setAttribute("type", "text");
				newFNTB.setAttribute("name", "temp");
				newFNTB.setAttribute("id", "temp");
				//newFNTB.Attributes.Add("class", "form-control");
				newFNTB.className = "form-control";
				
				fNameSection.appendChild(newFNTB);
				
				//New Last Name Textbox
				var lNameSection = document.getElementById("newLastNameTB");
				
				var newLNTB = document.createElement("input");
				newLNTB.setAttribute("type", "text");
				newLNTB.setAttribute("name", "temp");
				newLNTB.setAttribute("id", "temp");
				newLNTB.className = "form-control";
				
				fNameSection.appendChild(newLNTB);
			}
		</script>
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
        mysql_set_charset('utf8');
        mysql_select_db('dbfuneral');
        ?>

        <div class="container">
            <form action="MassPreferences.php" method="post">


                <div class="row"> <!-- row -->
                    <div class="col-12 herdre1"> <!-- col-12 -->
                        <div class="w-10 herdre1" id="divLogoHeader">
                            <img class="img-fluid" src="images/logo-church-header.png" alt="Saint Juliana Parish" id="imgLogoHeader">
                        </div>
                    </div> <!-- /col-12 -->
                    <div class="row"> <!-- row -->
                        <div class="col-12 hidden-xs-down"> <!-- col-12 -->
                            <div class="w-100 text-center" id="step_bubbles">
                                <img class="w-50 img-fluid" src="images/step-bubbles-1.png" alt="Step 1 of 6">
                            </div>
                        </div> <!-- /col-12 -->
                    </div>
                </div> 
                <div >
                    <br/>
                    <br/>
                    <h2 class="text-center">Mass Preferences</h2>
                </div>
                <br/>
                <div class="row"> <!--Start first row -->
                    <div class="col-lg-12 col-xs-12">
                        <h5 class="push-left">Placing of The Pall: </h5>
                    </div>
                </div> <!--END First Row -->


                <div class="row"> <!-- First Internal row -->
                    <div class="col-lg-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-xs-12"> <!--Lift First Internal row -->
                                <div class="input-group input-group-lg push-left">
                                    <input type="text" class="form-control" placeholder="First Name" name="temp" id="temp">	
                                </div>
                                <br/>
                            </div> <!-- END Lift First Internal row -->

                            <div class="col-lg-6 col-xs-12"> <!--Right First Internal row -->
                                <div class="input-group input-group-lg push-left">
                                    <input type="text" class="form-control" placeholder="Last Name" name="temp" id="temp">	
                                </div>
                            </div> <!--END Right First Internal row -->
                        </div>	
                    </div> <!-- END First Internal row -->
                </div>   
                <br/>
                <div class="row"> <!--Second Internal Row -->
                    <div class="col-lg-12 col-xs-12"> <!-- -->
                        <h4 class="push-left">Readings </h4>
                    </div>

                </div><!--END Second Internal Row -->
                <br/>
                <div class="row"> <!-- Second row lift part of the container-->
                    <div class="col-lg-6 xs-col-12"> <!--Upper lift part of lift part of the container -->


                        <div class="row"><!--Third Internal Row -->

                            <div class="col-lg-6 col-xs-12">
                                <h5 class="push-left" > First Readings </h5>

                            </div>
                            <br/>
                            <div class="col-lg-6 col-xs-12">

                                <h5 style=" color:red;" class="push-left">Old Testament</h5>
                            </div>

                        </div><!--END Third Internal Row -->

                        <div class="row"><!--Fourth Internal Row -->
                            <div class="col-lg-6 col-xs-12"><!--Lift side of Fourth Internal Row -->
                                <div class="input-group input-group-lg push-left">
                                    <select class="form-control" name="freading">
                                        <?php
                                        $fRquery = "SELECT distinct int_reading_ID, vchar_title FROM Reading_Prayer WHERE char_read_Category = 'First Readings' ORDER BY vchar_title ASC";
                                        $fRresult = mysql_query($fRquery);
                                        while ($row = mysql_fetch_array($fRresult)) {
                                            $fR_Title = $row["vchar_title"];
                                            echo "<option>
                                                  $fR_Title
                                                 </option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <br/>
                            </div><!--END Lift side of Fourth Internal Row -->

                            <div class="col-lg-6 col-xs-12"><!--Right side of Fourth Internal Row -->
                                <div class="push-left">
                                    <input type="submit" class="btn btn-lg btn-block btn-green"formaction="Readingpreview.php" name="frp" value="Preview">
                                </div>
                            </div><!--Right side of Fourth Internal Row -->

                        </div> <!--END Fourth Internal Row -->
                        <br>
                        <div class="row"><!--Fifth Internal Row -->
                            <div class="col-lg-12 col-xs-12">
                                <div class="push-left">
                                    <h5>Reader:</h5>
                                </div>
                            </div>
                        </div><!--End Fifth Internal Row -->

                        <div class="row"><!--sixth Internal Row -->
                            <div class="col-lg-6 col-xs-12"><!--Lift side of sixth Internal Row -->
                                <div class="input-group input-group-lg push-left">
                                    <input type="text" class="form-control" placeholder="First Name" name="temp" id="temp">	
                                </div>
                                <br/>
                            </div><!--End Lift side of sixth Internal Row -->
                            <div class="col-lg-6 col-xs-12"><!--Right side of sixth Internal Row -->
                                <div class="input-group input-group-lg push-left">
                                    <input type="text" class="form-control" placeholder="Last Name" name="temp" id="temp">	
                                </div>
                            </div><!--End Right side of sixth Internal Row -->
                        </div><!--End sixth Internal Row -->
                        <br/>

                    </div><!--End Upper lift part of lift part of the container -->

                    <div class="col-lg-6 xs-col-12"><!-- Upper Right part of lift part of the container -->
                        <div class="row"><!--first Internal row which is empty-cells to match Lift side-->
                            <div class="col-lg-12 col-xs-12">
                            </div>
                        </div><!--End first Internal row which is empty-cells to match Lift side-->
                        <div class="row"><!--Second Empty row to match right-side -->
                            <div class="col-lg-12 col-xs-12">		 
                            </div>
                        </div><!--End Second Empty row to match right-side -->
                        <div class="row"><!--Third Internal Row -->

                            <div class="col-lg-6 col-xs-12">
                                <h5 class="push-left" > Second Readings </h5>

                            </div>
                            <div class="col-lg-6 col-xs-12">

                                <h5 style=" color:red;" class="push-left">New Testament</h5>
                            </div>

                        </div><!--End Third Internal Row -->
                        <div class="row"><!-- Fourth Internal Row -->
                            <div class="col-lg-6 col-xs-12"> <!--Lift side of Fourth Internal Row -->
                                <div class="input-group input-group-lg push-left">
                                    <select class="form-control"  name="sreading">
                                        <?php
                                        $second_Readings_query = "SELECT distinct int_reading_ID, vchar_title FROM Reading_Prayer WHERE char_read_Category = 'second Readings' ORDER BY vchar_title ASC";
                                        $second_Readings_result = mysql_query($second_Readings_query);
                                        while ($row = mysql_fetch_array($second_Readings_result)) {
                                            $second_Readings_Title = $row["vchar_title"];
                                            echo "<option>
                                                                                          $second_Readings_Title
                                                                                          </option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <br/>
                            </div><!--End Lift side of Fourth Internal Row -->
                            <div class="col-lg-6 col-xs-12"><!-- Right side of Fourth Internal Row -->
                                <div class="push-left">
                                    <input type="submit" class="btn btn-lg btn-block btn-green" formaction="Readingpreview.php" name="srp" value="Preview">
                                </div>
                            </div><!--End Right side of Fourth Internal Row -->
                        </div><!--End Fourth Internal Row -->
                        <br/>
                        <div class="row"><!--Fifth Internal Row -->
                            <div class="col-lg-12 col-xs-12">
                                <div class="push-left">
                                    <h5>Reader:</h5>
                                </div>
                            </div>
                        </div><!--End Fifth Internal Row -->
                        <div class="row"><!--Sixth Internal Row -->
                            <div class="col-lg-6 col-xs-12"><!--Lift side of Sixth Internal Row -->
                                <div class="input-group input-group-lg push-left">
                                    <input type="text" class="form-control" placeholder="First Name" name="temp" id="temp">	
                                </div>
                                <br/>
                            </div><!--End Lift side of Sixth Internal Row -->
                            <div class="col-lg-6 col-xs-12"><!--Lift side of Sixth Internal Row -->
                                <div class="input-group input-group-lg push-left">
                                    <input type="text" class="form-control" placeholder="Last Name" name="temp" id="temp">	
                                </div>
                                <br/>
                            </div><!--END Lift side of Sixth Internal Row -->
                        </div>			 
                    </div>			
                </div>
                <br/>
                <div class="row"><!-- Third row of the container-->
                    <div class="col-lg-12 col-xs-12"><!--Third row lift part of the container-->
                        <div class="row">
                            <div class="col-lg-12 col-xs-12"><!--Lift Side Third row lift part of the container-->
                                <div class="row"> <!--First Internal Row-->
                                    <div class="col-lg-12 col-xs-12">
                                        <h5 class="push-left">Gospel Reading:</h5>
                                    </div>
                                </div><!--End First Internal Row-->
                                <div class="row"><!--Second Internal Row-->
                                    <div class="col-lg-6 col-xs-12"><!--Lift Side Second Internal Row-->
                                        <div class="input-group input-group-lg push-left">
                                            <select class="form-control" name="greading">
                                                <?php
                                                $gospelReading_query = "SELECT distinct int_reading_ID, vchar_title FROM Reading_Prayer WHERE char_read_Category = 'Gospel Reading' ORDER BY vchar_title ASC";
                                                $gospelReading_result = mysql_query($gospelReading_query);
                                                while ($row = mysql_fetch_array($gospelReading_result)) {
                                                    $gospelReading_Title = $row["vchar_title"];
                                                    echo "<option>
                                                                                          $gospelReading_Title
                                                                                          </option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <br/>
                                    </div><!--End Lift Side Second Internal Row-->
                                    <div class="col-lg-6 col-xs-12"><!--Right Side Second Internal Row-->
                                        <div class="push-left">
                                            <input type="submit" class="btn btn-lg btn-block btn-green" formaction="Readingpreview.php" name="grp" value="Preview">
                                        </div>
                                        <br/>
                                    </div><!--Right Side Second Internal Row-->
                                </div><!--End Second Internal Row-->
                            </div><!--End Lift Side Third row lift part of the container-->
                            <div class="col-lg-12 col-xs-12"><!--Right Side Third row lift part of the container-->
                            <br/><br/>
                                <div class="row">
                                    <div class="col-lg-12 col-xs-12">
                                        <h5 class="push-left">Prayers of the Faithful</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-xs-12">
                                        <h5 class="push-left">Readings for:</h5>
                                    </div>
                                    <div class="col-lg-3 col-xs-12">
                                        <div class="input-group input-group-lg push-left">
                                            <select class="form-control" name="P_of_the_F">
                                                 <?php
                                                $Prayers_of_the_Faithful_query = "SELECT distinct int_reading_ID, vchar_title FROM Reading_Prayer WHERE char_read_Category = 'Prayers of the Faithful' ORDER BY vchar_title ASC";
                                                $Prayers_of_the_Faithful_result = mysql_query($Prayers_of_the_Faithful_query);
                                                while ($row = mysql_fetch_array($Prayers_of_the_Faithful_result)) {
                                                   $Prayers_of_the_Faithful_Title = $row["vchar_title"];
                                                    echo "<option> $Prayers_of_the_Faithful_Title</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
									<div class= "col-lg-6 col_xs-12">
									<div class="push-left">
                                    <input type="submit" class="btn btn-lg btn-block btn-green" formaction="Readingpreview.php" name="p_fathfull" value="Preview">
									</div>
									</div>

                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-lg-12 col-xs-12">
                                        <h5 class="push-left">Reader:</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-xs-12">
                                        <h5 class="push-left">Name:</h5>
                                    </div>
                                    <div class="col-lg-5 col-xs-12">
                                        <div class="input-group input-group-lg push-left">
                                            <input type="text" class="form-control" placeholder="First Name" name="temp" id="temp">	
                                        </div>
                                        <br/>
                                    </div>
                                    <div class="col-lg-5 col-xs-12">
                                        <div class="input-group input-group-lg push-left">
                                            <input type="text" class="form-control" placeholder="Last Name" name="temp" id="temp">	
                                        </div>
										<br/>
                                    </div>
                                    <!--Dynamically Added Name Label-->
                                    <div class="col-lg-2 col-xs-12">
                                    	<h5 class="push-left" id="nameLabel" name="nameLabel"></h5>
                                    </div>
									<!--Add new first name area-->
									<div class="col-lg-5 col-xs-12">
                                        <div class="input-group input-group-lg push-left">
                                            <div id="newFirstNameTB" name="newFirstNameTB"></div>	
                                        </div>
                                        <br/>
                                    </div>
									<!--Add new last name area-->
									<div class="col-lg-5 col-xs-12">
                                        <div class="input-group input-group-lg push-left">
                                            <div id="newLastNameTB" name="newLastNameTB"></div>
                                        </div>
                                        <br/>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-lg-12 col-xs-12">
                                        <span class="icon-green push-left">
                                            <i class="fas fa-plus-circle"></i>
											<button type="button" class="" OnClick="addNewPerson()" >Add Another Family Member</button>
                                            <!--<input type="submit" class="btn btn-lg btn-block btn-green" OnClick="addNewPerson()" value="Add Another Family Member">-->
                                        </span>
                                    </div>
                                    <br/>

                                </div>
                                <br/><br/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-xs-12">
                                <div class="push-left">
                                    <input type="submit" class="btn btn-lg btn-block btn-green" value="Previous">
                                </div>
                                <br/>
                            </div>
                            <div class="col-lg-3 col-xs-12">
                                <div class="push-left">
                                    <input type="submit" class="btn btn-lg btn-block btn-green" value="Save">
                                </div>
                                <br/>
                            </div>
                            <div class="col-lg-3 col-xs-12">
                                <div >
                                    <input type="submit" class="btn btn-lg btn-block btn-green" value="Save & Exit">
                                </div>
                                <br/>
                            </div>
                            <div class="col-lg-3 col-xs-12">
                                <div >
                                    <input type="submit" class="btn btn-lg btn-block btn-green" value="Next">
                                </div>
                            </div>
                        </div>
                    </div> <!--End Third row lift part of the container-->

                    <br/><br/><br/><br/>
            </form>
        </div> <!--END container -->
    </body>
</html>