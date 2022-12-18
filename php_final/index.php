
<?php
    include "header.php";
?>
        <h2> List of courses </h2>

        <div class="box">
            <?php

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <pre>
                <?php
                print_r($row);
                ?>
                </pre>
            <?php
            }
            ?>
        </div>
    </body>

</html>