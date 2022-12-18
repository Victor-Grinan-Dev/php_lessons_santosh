<?php 
  include 'conn.php';

  if (isset($_POST['submit'])) {
      $id = $_POST['id'];

      $query = "DELETE FROM courses WHERE id = $id";

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

        <h2> Delete </h2>
        <div class="box">
            <form action="delete.php" method="post">
                <label> Delete: </label>
                <select name="id" id="">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    echo "<option value='$id'>$id</option>";
                }
                ?>
                </select>

            <input type="submit" name="submit" value="DELETE">

            </form>
        </div>
    </body>

</html>