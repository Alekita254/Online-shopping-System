<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "alem_shopping";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Failed To Connect!!");
}


