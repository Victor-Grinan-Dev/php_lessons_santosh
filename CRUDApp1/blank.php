<?php
    $name =$email=$gender=$comment=$website="";

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $name = testImputs($_POST["name"]);
        $email = testImputs($_POST["email"]);
        $gender = testImputs($_POST["gender"]);
        $website = testImputs($_POST["website"]);
        $comment = testImputs($_POST["comment"]);
    }

    function testImputs ($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
//password encrypting
$hashFormat ="$2y$23$";
$salt = "whateverIsOkay$";
$hashFormatAndSalt = $hashFormat . $salt;
$pass = crypt($pass, $hashFormatAndSalt);
?>



<h2>PHP validation example, sanitize</h2>
<!--this next line create the attack into an html sintax invalidating the hack-->
<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?> " method="post">
    
    <br><br>
    name:
    <br>
    <input type="text" name="name"/>
    <br><br>
    website:
    <br>
    <input type="text" name="website"/>
    <br><br>
    gender:
    <br>
    <input type="radio" name="gender">male</input>
    <br>
    <input type="radio" name="gender">female</input>
    <br>
    <input type="radio" name="gender">other</input>
    <br><br>
    comment:
    <br>
    <textarea type="text" name="comment"></textarea>
    <br><br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
echo "<h1>your imputs<h1><br><br>";

?>