<?php

include("dbdata.php");

$conn = new mysqli($datavaseServer, $user, $pass, $schema) ;
if($conn->connect_error)
{
    die("error try again\r\n");
}

echo "connected to database\r\n"
?>