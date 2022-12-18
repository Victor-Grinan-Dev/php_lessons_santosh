<?php
require_once "functions.inc.php";
require_once 'dbh.inc.php';

if (isset($_POST["submit"])){
    echo "it works!";
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwd-repeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if ( emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location:  ../signup.php?error=emptyinput");
        exit();
    };


    if ( invalidUid($username) !== false) {
        header("location:  ../signup.php?error=invaliduid");
        exit();
    };

    if ( invalidEmail($username) !== false) {
        header("location:  ../signup.php?error=invalidemail");
        exit();
    };

    if ( pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location:  ../signup.php?error=passworddontmatch");
        exit();
    };

    if ( uidExists($conn, $username, $email) !== false) {
        header("location:  ../signup.php?error=usernametaken");
        exit();
    };

    createUser($conn, $name, $email, $username, $pwd);
}
else{
    header("location:  ../signup.php");
    exit();
};