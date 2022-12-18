<?php 

    include 'conn.php';

    $query = "SELECT * FROM Users";
    $result = mysqli_query($conn, $query);
    if (!$result) {
    die('Query failed');
    }

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $id = $_POST['id'];

        $query = "UPDATE courses SET ";
        $query .= "name = '$name', ";
        $query .= "description = '$desc' ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed" . mysqli_error($conn));
        }
        else {
            header('location: index.php');
        }
    }
    include 'header.php';
?>
    <h2> Edit: </h2>
    <div class="box">
        <form action="edit.php" method="post">

            <label for=""> To change: </label>
            <select name="id" id="">
                <?php
//               while ($row = mysqli_fetch_assoc($result)) {
//                   $id = $row['id'];
//                   echo "<option value='$id'>$id</option>";
//               }
                ?>
            </select>
            <?php
                include 'form.php';
            ?>
        </form>
    </div>
</body>

</html>