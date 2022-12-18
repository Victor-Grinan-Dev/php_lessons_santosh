<?php 
$pageVisits = null;
$hourInSeconds = 3600;

$data_name = "pageVisitsCount";
$cookie_value = $pageVisits;

if ( isset( $_COOKIE[$data_name] ) ) {
    $pageVisits = $_COOKIE[$data_name];
}else{
    setcookie($data_name, $cookie_value, time() + $hourInSeconds, "/", '', false, true);
}

session_start();

$_SESSION[$data_name] = $pageVisits;
        
if ( isset( $_SESSION["count"] ) ) {
    $_SESSION[$data_name]++;
}else{
    $_SESSION[$data_name] = 1; 
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>count visits</title>
</head>
<body>
    <?= $_SESSION[$data_name] ?>
    <?= self($_SERVER["path"])?>
</body>
</html>