<?php

$server = "project-database.cijf8kr42nak.us-east-1.rds.amazonaws.com";
$user = "admin";
$password = "TCCAlphaGroup";
$db = "tcc_project";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

?>