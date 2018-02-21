<?php

// Connection to the database tables.

$server = "funeralinstance.cfg8tyxsms9d.us-east-2.rds.amazonaws.com";
        $username = "funeral";
        $password = "admin123";
        $dbname = 'dbfuneral';
$conn = new mysqli($server, $username, $password, $dbname);
// Check connection.

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
	
}
?>
