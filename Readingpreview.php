<!doctype html>

<html lang="en">
    <head>
        <!-- <meta  content="tex/html"charset="UTF-8">-->
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title> Reading</title>

        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <!-- FontAwesome JS links -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.3/js/all.js"></script>
        <!-- End FontAwesome JS links -->
        <script>
            function printpage() {
                window.print();
            }
        </script>


        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid Serif">
        <style>
            .container1S {background-color:White}
            .herdre1{padding:0px;}

        </style>
        <!-- Custom style links -->
        <link rel="stylesheet" type="text/css" href="Styles/styles.css" />
        <!-- End custom style links -->
    </head>
    <body>
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
mysqli_set_charset($conn, "utf8");

?>

        <div class="container container1S">
            <form action="MassPreferences.php" method="post">

                <div class="row"> <!-- row -->
                    <div class="col-12 herdre1"> <!-- col-12 -->
                        <div class="w-10 herdre1" id="divLogoHeader">
                            <img class="img-fluid" src="images/logo-church-header.png" alt="Saint Juliana Parish" id="imgLogoHeader">
                        </div>
                        <br/>
                    </div> <!-- /col-12 -->

                </div>
                <br/>
                <h2 class="text-center"> <?php
        if ($_POST['frp']) {
            $requst = $_REQUEST['freading'];
            $fRquery = "Select  vchar_title,  longtext_read_Text FROM Reading_Prayer WHERE vchar_title='$requst'";
            $result = $conn->query($fRquery);
            while ($row = $result->fetch_assoc()) {
                $fR_Title = $row["vchar_title"];
                $fR_text = $row["longtext_read_Text"];
                echo "$fR_Title<br><br>";

                echo "$fR_text\n";
            }
        } 
		elseif ($_POST['srp']) {
            $requst = $_REQUEST['sreading'];
            $sRquery = "Select vchar_title, longtext_read_Text FROM Reading_Prayer WHERE vchar_title='$requst'";
            $result = $conn->query($sRquery);
            while ($row = $result->fetch_assoc()) {
                $sR_Title = $row["vchar_title"];

                $sR_text = $row["longtext_read_Text"];
                echo "$sR_Title<br><br>";

                echo "$sR_text\n";
            }
        }
		elseif ($_POST['grp']) {
            $requst = $_REQUEST['greading'];
            $gRquery = "Select vchar_title, longtext_read_Text FROM Reading_Prayer WHERE vchar_title='$requst'";
            $result = $conn->query($gRquery);
            while ($row = $result->fetch_assoc()) {
                $gR_Title = $row["vchar_title"];

                $gR_text = $row["longtext_read_Text"];
                echo "$gR_Title<br><br>";

                echo "$gR_text\n";
            }
        }
		
		elseif ($_POST['p_fathfull']) {
            $P_requst = $_REQUEST['P_of_the_F'];
				
				  $P_Rquery = "Select vchar_title, longtext_read_Text FROM Reading_Prayer WHERE vchar_title='$P_requst'";
            $result = $conn->query($P_Rquery);
            while ($row = $result->fetch_assoc()) {
                $P_R_Title = $row["vchar_title"];

                $P_R_text = $row["longtext_read_Text"];
                echo "For $P_R_Title<br><br>";

                echo "$P_R_text\n";
            }
		
           
        }
		
		
        ?>
		</h2>
                <br/>
                    <div class ="container w-50">
                    <div class="col-lg-12 col-xs-12">
                        <div >
                            <input type="submit" class="btn btn-lg btn-block btn-green hidden-print" value="Go back">
                        </div>
                        <br/>
                    </div>
                    </div>
                </form>
            <div class ="container w-50">
                    <div class="col-lg-12 col-xs-12">
                        <div >
                            <input type="submit" onclick="printpage()" class="btn btn-lg btn-block btn-green hidden-print" formaction="Readingpreview.php"  value="Print"> 

                        </div>
                    </div>
            </div>
                <br/><br/>
           
        </div> <!--END container -->
    </body>
</html>
