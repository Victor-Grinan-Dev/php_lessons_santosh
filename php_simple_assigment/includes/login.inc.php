<?php


if (isset($_POST["submit"])){
    $username = $_POST["uid"];
    $pwd = $_POST;

    require_once "functions.inc.php";
    require_once 'dbh.inc.php';

    if ( emptyInputLogin($username, $pwd) !== false) {
        header("location:  ../login.php?error=emptyinput");
        exit();
    }
    loginUser($conn, $username, $pwd);

}else {
    header("location:  ../login.php?error=emptyinput");
    exit();
}
