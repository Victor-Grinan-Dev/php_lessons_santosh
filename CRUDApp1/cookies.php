<?php 
//crhome//settings/cookies


$name="James";
$value="100";
$expiration = time() + (60*60*24*7); //seconds_in_min * mins_in_hour * hours_in_day * days_in_week

setcookie($name, $value, $expiration);
echo "setting cookies";

if(isset($_COOKIE[$name])){
    $someone = $_COOKIE[$name];
    echo $someone;
    
}else{
    $someone = "";
}

//SYNTAX
//setcookie(name, value, expire, path, domain, secure, httponly);
setcookie($someone);
?>

