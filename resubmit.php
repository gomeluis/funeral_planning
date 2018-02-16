<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
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

        <title> comform </title>
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
        ?>

        <?php
        if (isset($_POST['submit'])) {
            $seach_d_ID = "SELECT COUNT(*) FROM Deceased";
            $seachID_d_Rresult = $conn->query($seach_d_ID);
            while ($row = $seachID_d_Rresult ->fetch_assoc()) {
                $last_d_id = $row["COUNT(*)"];

                $new_d_id = $last_d_id + 1000;
            }


            $dfnam = $_REQUEST['d_f_name'];
            $dLnam = $_REQUEST['d_l_name'];
            $Funeral_Name = $_REQUEST['Funeral_Name'];
            $f_Street = $_REQUEST['f_Street'];
            $f_City = $_REQUEST['f_City'];
            $f_State = $_REQUEST['d_l_name'];
            $f_Zipcod = $_REQUEST['f_Zipcod'];
            $d_gender = $_REQUEST['d_gender'];

            $d_gender = $_REQUEST['d_gender'];
            if ($d_gender == "Male") {
                $d_gender = "M";
            } elseif ($d_gender == "Female") {
                $d_gender = "F";
            }
            $Date_of_Wake_funeral = $_REQUEST['Date_of_Wake_funeral'];
            $Start_Time_funeral = $_REQUEST['Start_Time_funeral'];
            $End_Time_funeral = $_REQUEST['End_Time_funeral'];
            $Date_of_Wake_Church = $_REQUEST['Date_of_Wake_Church'];
            $Start_Time_Church = $_REQUEST['Start_Time_Church'];
            $End_Time_Church = $_REQUEST['End_Time_Church'];
            $Date_of_Mass = $_REQUEST['Date_of_Mass'];
            $Time_of_Mass = $_REQUEST['Time_of_Mass'];
            $Location_of_wake = $_REQUEST['Location_of_wake'];
            if ($Location_of_wake == "Both") {
                $Location_of_wake = "BT";
            } elseif ($Location_of_wake == "Funeral Home") {
                $Location_of_wake = "FH";
            } elseif ($Location_of_wake == "Church") {
                $Location_of_wake = "CH";
            }

            $seach_p_ID = "SELECT COUNT(*) FROM Primary_Contact";
            $seachID_p_Rresult = $conn->query($seach_p_ID);
            while ($row = $seachID_p_Rresult ->fetch_assoc()) {
                $last_p_id = $row["COUNT(*)"];

                $new_p_id = $last_p_id + 100;
            }
            echo $new_p_id;

            $seach_FH_ID = "SELECT COUNT(*) FROM Funeral_Home";
            $seachID_FH_Rresult = $conn->query($seach_FH_ID);
            while ($row = $seachID_FH_Rresult->fetch_assoc()) {
                $last_FH_id = $row["COUNT(*)"];

                $new_FH_id = $last_FH_id + 100;
            }
            echo $new_FH_id;




            $p_f_name = $_REQUEST['p_f_name'];
            $p_L_name = $_REQUEST['p_l_name'];
            $p_Email = $_REQUEST['p_email'];
            $p_Relation = $_REQUEST['p_Relation'];
            $p_phone = $_REQUEST['p_phone'];
            $Priest_f_name = $_REQUEST['Priest_f_name'];
            $Priest_l_name = $_REQUEST['Priest_l_name'];
            $BM_f_name = $_REQUEST['BM_f_name'];
            $BM_l_name = $_REQUEST['BM_l_name'];

            $insert_Primary_Contact_sql = "INSERT INTO Primary_Contact (int_primary_Contact_ID,int_access_Level_ID, 
                 vchar_primCont_First_Name, vchar_primCont_Last_Name,nvarchar_primCont_Email,
                 char_relation_To_Deceased, vchar_primCont_Phone_Num)
                    VALUES ('$new_p_id','2', '$p_f_name', '$p_L_name','$p_Email','$p_Relation', '$p_phone')" or die(my_syql_error());
            mysqli_query($conn,$insert_Primary_Contact_sql);
				
            $insert_Deceased_sql = "INSERT INTO Deceased (int_deceased_ID, vchar_dec_First_Name, vchar_dec_Last_Name, char_gender, 
                dt_date_Of_Wake_FH, char_location, int_primary_Contact_ID)
                    VALUES ('$new_d_id', '$dfnam', '$dLnam','$d_gender',"
                    . " '$Date_of_Mass', '$Location_of_wake', '$new_p_id')" or die(my_syql_error());
           mysqli_query($conn,$insert_Deceased_sql);
            // End Deceased table
			

            $insert_FH_Info = "INSERT INTO Funeral_Home (int_Funeral_Home_ID,vchar_funeral_Home_Name, 
                 vchar_FH_Address, vchar_FH_City,vchar_FH_State,
                 vchar_FH_Zipcode, int_deceased_ID)
                    VALUES ('$new_FH_id','$Funeral_Name', '$f_Street', '$f_City','$f_State','$f_Zipcod', '$new_d_id')" or die(my_syql_error());
            mysqli_query($conn, $insert_FH_Info);




            $seach_F_ID = "SELECT COUNT(*) FROM Funeral_Mass_Plan";
            $seachID_F_Rresult = $conn->query($seach_F_ID);
            while ($row = $seachID_F_Rresult->fetch_assoc()) {
                $last_F_id = $row["COUNT(*)"];

                $new_F_id = $last_F_id + 1;
            }
			 
			
            $creat_mass_plan_id = "INSERT INTO Funeral_Mass_Plan(int_funeral_ID, int_deceased_ID,vchar_Priest_First_Name, vchar_Priest_Last_Name, vchar_BM_First_Name, vchar_BM_Last_Name ) "
                    . "VALUES ('$new_F_id', '$new_d_id', '$Priest_f_name', '$Priest_l_name', '$BM_f_name', '$BM_l_name')";

            mysqli_query($conn, $creat_mass_plan_id);
            //$insert_Primary_Contactn_id ="INSERT INTO Deceased(int_primary_Contact_ID) VALUES ('$new_p_id')";
            //mysql_query($insert_Primary_Contactn_id);
			
			


            header("location:http://www.funerelplanning.com/resubmit.php");

            exit;
        }
        ?>
    </head>
    <body>
    <body>

        <div class="container"> 
            <form action="#" method="post">
                <div class="row"> <!-- row -->
                    <div class="col-12 herdre1"> <!-- col-12 -->
                        <div class="w-10 herdre1" id="divLogoHeader">
                            <img class="img-fluid" src="images/logo-church-header.png" alt="Saint Juliana Parish" id="imgLogoHeader">
                        </div>
                    </div> <!-- /col-12 -->
                </div>
				<br/><br/><br/>
                <div class="row text-center text-white">
                    <div class="col-12 text-center t"> 
					
                        <h1> The Record Has Been Added to datebase</h1>
                        

                    </div>
                </div>
            </form>


        </div>




    </body>
</html>
