<?php
    include_once 'header.php';
?>
    <section class="signup">
        <h2>Sign up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name...">
            <input type="email" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwd-repeat" placeholder="repeat password...">
            <button type="submit" name="submit"> Sign up </button>
        </form>
        <?php
            if (isset($_GET["error"])){
                if ($_GET["error"] == "emptyinput"){
                    echo "<p>Fill all fields!</p>";
                }else if ($_GET["error"] == "invaliduid"){
                    echo "<p>username has been taken!</p>";
                
                }else if ($_GET["error"] == "invalidemail"){
                    echo "<p>use propper email!</p>";
            
                }elseif ($_GET["error"] == "passworddontmatch"){
                    echo "<p>Fill all fields!</p>";
            
                }elseif ($_GET["error"] == "stmtfail"){
                    echo "<p>something went wrong, try again later!</p>";
            
                }elseif ($_GET["error"] == "none"){
                    echo "<p>sign up succefully!</p>";
                
                }
            }
        ?>
    </section>
<?php
    include_once 'footer.php';
?>
