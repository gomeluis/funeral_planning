<html>
    <head>
        <meta  content="tex/html"charset="UTF-8">
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
        $conn = mysql_connect($server, $username, $password) or die("Error connecting to server: " . mysql_error());
        mysql_select_db($dbname, $conn);
        ?> 

        <div class="container container1S">
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
                <br/>
                <h2 class="text-center"> <?php
                    if ($_POST['frp']) {
                        $requst = $_REQUEST['freading'];
                        $fRquery = "Select  longtext_read_Text FROM Reading_Prayer WHERE vchar_title='$requst'";
                        $fRresult = mysql_query($fRquery);
                        while ($row = mysql_fetch_array($fRresult)) {

                            $fR_Title = $row["longtext_read_Text"];

                            echo "$fR_Title\n";
                        }
                    } elseif ($_POST['srp']) {
                        $requst = $_REQUEST['sreading'];
                        $sRquery = "Select  longtext_read_Text FROM Reading_Prayer WHERE vchar_title='$requst'";
                        $sRresult = mysql_query($sRquery);
                        while ($row = mysql_fetch_array($sRresult)) {

                            $sR_Title = $row["longtext_read_Text"];

                            echo "$sR_Title\n";
                        }
                    } elseif ($_POST['grp']) {
                        $requst = $_REQUEST['greading'];
                        $gRquery = "Select  longtext_read_Text FROM Reading_Prayer WHERE vchar_title='$requst'";
                        $gRresult = mysql_query($gRquery);
                        while ($row = mysql_fetch_array($gRresult)) {

                            $gR_Title = $row["longtext_read_Text"];

                            echo "$gR_Title\n";
                        }
                    }
                    ?></h2>
                <div class="col-lg-12 col-xs-12">
                    <div >
                        <input type="submit" class="btn btn-lg btn-block btn-green" value="Go back">
                    </div>
                </div>
            </form>
        </div> <!--END container -->
</body>
</html>
