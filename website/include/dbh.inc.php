<?php

$servername = "localhost";
$dBUsername = "glenn";
$dBPassword = "Glenn1234!";
$dBName = "DataScience";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed: HELP ".mysqli_connect_error());
}
