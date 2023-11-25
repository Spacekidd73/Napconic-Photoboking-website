<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "log in for napconic";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
