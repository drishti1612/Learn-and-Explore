<?php
session_start();
$_SESSION;
$dbhost = "localhost:3310";
$dbuser = "root";
$dbpass = "";
$dbname = "quiz";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

?>