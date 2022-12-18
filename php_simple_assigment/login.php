<?php
    include_once 'header.php';
?>
    <section class="signup">
        <h2>Sign up</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="name" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit"> Log in </button>
        </form>
    </section>
<?php
    include_once 'footer.php';
?>

