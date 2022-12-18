<?php
  include 'header.php';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $desc = $_POST['description'];
    if ($user && $pass) {
      header('location: index.php');
    } else {
      echo "The fields cannot be blank";
    }

    include 'db.php';

    $query = "INSERT INTO courses(name,description)";
    $query .= "VALUES ('$name', '$desc')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      die('Query insertion failed');
    }
  }
?>

<h2> Insert new course: </h2>

<?php
  include 'form.php';
?>
</body>