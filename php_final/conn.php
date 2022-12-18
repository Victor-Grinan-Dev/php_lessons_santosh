<?php 
    $host = 'root';
    $dbname = 'coursesdb';
    $dbuser = 'lionUser';
    $dbpass = 'lionPass';

    $conn = new mysqli($host, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } else {
      echo "Connected db successfully!";
    }