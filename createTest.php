<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
        <form action="#" method="post">

            Name of Deceased:<br/> 
            <input type="text" class="form-control" placeholder="First Name" name="d_f_name" id="temp">&nbsp &nbsp
            <input type="text" class="form-control" placeholder="Last Name" name="d_l_name" id="temp">&nbsp &nbsp
            <select class="form-control" name="d_gender">
                <option>
                    Male
                </option>
                <option>
                    Female
                </option>
            </select>

            <br/><br/><br/><br/><br/><br/>
            Primary Contact:
            <input type="text" class="form-control" placeholder="First Name" name="p_f_name" id="temp">&nbsp &nbsp
            <input type="text" class="form-control" placeholder="Last Name" name="p_l_name" id="temp">&nbsp &nbsp
            <input type="text" class="form-control" placeholder="Email" name="p_email" id="temp">&nbsp &nbsp
            <select class="form-control" name="p_Relation">
                <option>
                    Son
                </option>
                <option>
                    Father
                </option>
                <option>
                    Mother
                </option>
            </select>
            Phone NO#: &nbsp;<input type="text" class="form-control" placeholder="Phone Namber" name="p_phone" id="temp">
            <br/><br/><br/><br/><br/><br/>


            Funeral Home:
            <input type="text" class="form-control" placeholder=" Funeral Name" name="Funeral_Name" id="temp">
            <br/><br/><br/>
            Funeral Home Address
            <input type="text" class="form-control" placeholder="Street" name="f_Street" id="temp">&nbsp &nbsp
            <input type="text" class="form-control" placeholder="City" name="f_City" id="temp">&nbsp &nbsp
            <input type="text" class="form-control" placeholder="State" name="f_State" id="temp">&nbsp &nbsp
            <input type="text" class="form-control" placeholder="Zipcod" name="f_Zipcod" id="temp">&nbsp &nbsp
            <br/><br/><br/><br/><br/><br/>
            Location<br/>
            <select class="form-control" name="Location_of_wake">
                <option>
                    Both
                </option>
                <option>
                    Funeral Home
                </option>
                <option>
                    Church
                </option>
            </select>

            <br/><br/>
            Date of wake(Funeral)
            <input type="date" class="form-control" placeholder="Date of Wake" name="Date_of_Wake_funeral" id="temp">
            &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp
            Strat Time (Funeral)
            <input type="time" class="form-control" placeholder="Start Time" name="Start_Time_funeral" id="temp">
            &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp
            End Time (Funeral)
            <input type="time" class="form-control" placeholder="End Time" name="End_Time_funeral" id="temp">
            <br/><br/><br/><br/><br/><br/>

            Date of wake(Church)
            <input type="date" class="form-control" placeholder="Date of Wake" name="Date_of_Wake_Church" id="temp">
            &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp
            Strat Time (Church)
            <input type="time" class="form-control" placeholder="Start Time" name="Start_Time_Church" id="temp">
            &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp
            End Time (Church)
            <input type="time" class="form-control" placeholder="End Time" name="End_Time_Church" id="temp">
            <br/><br/><br/>
            Mass
            <input type="date" class="form-control" placeholder="Date of Mass" name="Date_of_Mass" id="temp">
            &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp
            <input type="time" class="form-control" placeholder="Time of Mass" name="Time_of_Mass" id="temp">
            <br/><br/><br/><br/><br/><br/>

            Cemetery: <input type="checkbox" name="cemetery" value="ON" checked="checked" />
            <br/><br/><br/>
            <textarea> </textarea>
            <br/><br/><br/>
            Priest
            <br/><br/>
            <select class="form-control" name="Priest">
                <?php
                $Priest_Rquery = "SELECT distinct int_staff_ID, vchar_staff_First_Name, vchar_staff_Last_Name FROM Staff WHERE vchar_staff_Position = 'Priest'";
                $Priest_Rresult = mysql_query($Priest_Rquery);
                while ($row = mysql_fetch_array($Priest_Rresult)) {
                    $Priest_Id = $row["int_staff_ID"];
                    $Priest_F_name = $row["vchar_staff_First_Name"];
                    $Priest_L_name = $row["vchar_staff_Last_Name"];

                    echo "<option>
                                                  $Priest_F_name
                                                 </option>";
                }
                ?>
            </select>&nbsp &nbsp
            <input type="text" class="form-control" placeholder="Last Name" name="temp" id="temp">&nbsp &nbsp

            <br/><br/><br/><br/><br/><br/>
            Beravement Minister
            <br/><br/>
            <select class="form-control" name="Beravement">
                <?php
                $Beravement_Rquery = "SELECT distinct int_staff_ID, vchar_staff_First_Name, vchar_staff_Last_Name FROM Staff WHERE vchar_staff_Position = 'Bereavement Minister'";
                $Beravement_Rresult = mysql_query($Beravement_Rquery);
                while ($row = mysql_fetch_array($Beravement_Rresult)) {
                    $Beravement_Id = $row["int_staff_ID"];
                    $Beravement_F_name = $row["vchar_staff_First_Name"];
                    $Beravement_L_name = $row["vchar_staff_Last_Name"];

                    echo "<option>
                       $Beravement_F_name
                           </option>";
                }
                ?>
            </select>
            <input type="text" class="form-control" placeholder="Last Name" name="temp" id="temp">&nbsp &nbsp

            <br/><br/><br/>



            <br/><br/>&nbsp &nbsp &nbsp &nbsp <input type="submit" class="btn btn-lg btn-block btn-green"formaction="#" name="submit" value="Creat">
        </form>
        <!-------------------------------------------------------------------------------------------------->
        <?php
        $seach_d_ID = "SELECT COUNT(*) FROM Deceased";
        $seachID_d_Rresult = mysql_query($seach_d_ID);
        while ($row = mysql_fetch_array($seachID_d_Rresult)) {
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
        $seachID_p_Rresult = mysql_query($seach_p_ID);
        while ($row = mysql_fetch_array($seachID_p_Rresult)) {
            $last_p_id = $row["COUNT(*)"];

            $new_p_id = $last_p_id + 100;
        }
        echo $new_p_id;

        $p_f_name = $_REQUEST['p_f_name'];
        $p_L_name = $_REQUEST['p_l_name'];
        $p_Email = $_REQUEST['p_email'];
        $p_Relation = $_REQUEST['p_Relation'];
        $p_phone = $_REQUEST['p_phone'];

        $insert_Primary_Contact_sql = "INSERT INTO Primary_Contact (int_primary_Contact_ID,int_access_Level_ID, 
                 vchar_primCont_First_Name, vchar_primCont_Last_Name,nvarchar_primCont_Email,
                 char_relation_To_Deceased, vchar_primCont_Phone_Num)
                    VALUES ('$new_p_id','2', '$p_f_name', '$p_L_name','$p_Email','$p_Relation', '$p_phone')" or die(my_syql_error());
        mysql_query($insert_Primary_Contact_sql);

        $insert_Deceased_sql = "INSERT INTO Deceased (int_deceased_ID, vchar_dec_First_Name, vchar_dec_Last_Name, char_gender,
                vchar_funeral_Home_Name, vchar_FH_Address,vchar_FH_City, vchar_FH_State, vchar_FH_Zipcode, 
                dt_date_Of_Wake_FH, time_start_Of_Wake_FH, time_end_Of_Wake_FH, dt_date_Of_Wake_CH, time_start_Of_Wake_CH, time_end_Of_Wake_CH, dt_date_Of_Mass, time_start_Of_Mass, 
                char_location, int_primary_Contact_ID)
                    VALUES ('$new_d_id', '$dfnam', '$dLnam','$d_gender', '$Funeral_Name', '$f_Street',"
                . " '$f_City', '$f_State', '$f_Zipcod',"
                . "'$Date_of_Wake_funeral', '$Start_Time_funeral', '$End_Time_funeral', '$Date_of_Wake_Church',"
                . " '$Start_Time_Church', '$End_Time_Church', '$Date_of_Mass', '$Time_of_Mass', '$Location_of_wake', '$new_p_id')" or die(my_syql_error());
        mysql_query($insert_Deceased_sql);
        // End Deceased table




        $seach_F_ID = "SELECT COUNT(*) FROM Funeral_Mass_Plan";
        $seachID_F_Rresult = mysql_query($seach_F_ID);
        while ($row = mysql_fetch_array($seachID_F_Rresult)) {
            $last_F_id = $row["COUNT(*)"];

            $new_F_id = $last_F_id + 1;
        }
        //$insert_Primary_Contactn_id ="INSERT INTO Deceased(int_primary_Contact_ID) VALUES ('$new_p_id')";
        //mysql_query($insert_Primary_Contactn_id);


        $creat_mass_plan_id = "INSERT INTO Funeral_Mass_Plan(int_funeral_ID, int_deceased_ID ) VALUES ('$new_F_id', '$new_d_id')";
        mysql_query($creat_mass_plan_id);
        
        // $insrt_deceased_ID_to_massPlan="INSERT INTO Deceased(int_primary_Contact_ID) SELECT Primary_Contact.int_primary_Contact_ID FROM Primary_Contact WHERE int_deceased_ID ='$new_d_id'";
        // mysql_query($insrt_deceased_ID_to_massPlan);
        ?> 
        <!-------------------------------------------------------------------------------------------------->

    </body>
</html>
