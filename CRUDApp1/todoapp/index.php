<?php
//DATABASE CONNECTOR

$host = '';
$dbname = '';
$dbuser = '';
$dbpass = '';

$databaseName = '';
$databaseTable = '';

/*
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected to MySQL server successfully!";
}

if (isset($_POST['submit'])) {
  //echo "yes received the data";
  $task = $_POST['input'];

  //Validate the form
  if ($user && $pass) {
    echo $user . " " . $pass;
  } else {
    echo "";
  }

  // Create the records inside db

}
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDO app</title>
</head>
<body>
    <form action="index.php" method="get">
        New Item: <input type="text" name="input">
        <input type="submit" name="submit">
        <br><br>
        <ul>
            <?php 
            //read from the database the 
            //for each item create a:
                echo "<li><p style='display:inline'> task name";
                echo "</p><button>mark as done</button>"; //this can be handled in css as scrached text toggle(class="scrached") or a database update data
                echo "<button>delete task</button></li>"; //erase data from database 
            ?>
        </ul>
    </form>
</body>
</html>