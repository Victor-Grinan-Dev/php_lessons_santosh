<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBname = "login_system";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBname);

if (!$conn){
    die("Connection fails" . mysqli_connect_error());
}