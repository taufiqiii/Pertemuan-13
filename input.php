<?php

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $age = $_POST["age"];
  $address = $_POST["address"];
  $country = $_POST["country"];
  $isMarried = $_POST["is_married"];

  $sql = "INSERT INTO users (name, age, address, country, is_married) VALUES ('$name', '$age', '$address', '$country', '$isMarried')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Add User</title>
</head>
<body>

  <h1>Add User</h1>

  <form method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>

    <label for="country">Country:</label>
    <input type="text" id="country" name="country" required>

    <label for="is_married">Is Married:</label>
    <select id="is_married" name="is_married" required>
      <option value="1">Yes</option>
      <option value="0">No</option>
    </select>

    <input type="submit" name="submit" value="Submit">
  </form>

</body>
</html>

<?php

mysqli_close($conn);

?>
