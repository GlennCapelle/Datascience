<?php

$servername = "localhost";
$dBUsername = "*****";
$dBPassword = "*****";
$dBName = "*****";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed: HELP ".mysqli_connect_error());
}
