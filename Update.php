<?php

// Memproses update data jika form disubmit
if (isset($_POST["update"])) {
  $id = $_POST["id"];
  $name = $_POST["name"];
  $age = $_POST["age"];
  $address = $_POST["address"];
  $country = $_POST["country"];
  $isMarried = $_POST["is_married"];

  $sql = "UPDATE users SET name='$name', age='$age', address='$address', country='$country', is_married='$isMarried' WHERE id='$id'";

  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header("Location: index.php"); // Redirect to main page after update
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

?>
