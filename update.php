<?php
  include "dbconnect.php";
  $id = $_POST['id'];
  $pizzaname = $_POST['pizzaname'];
  $country = $_POST['country'];
  $ingredients = $_POST['ingredients'];
  $picture = $_POST['picture'];
  $sql = "UPDATE pizzas SET pizzaname = '$pizzaname', country = '$country', ingredients = '$ingredients', picture = '$picture' WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "The record for $pizzaname has been updated";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
?>

<a href="homePage.php"><button>Go to homepage</button></a>

