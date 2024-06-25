<?php

// Program Delete untuk menghapus data user
if (isset($_GET["delete"])) {
  $id = $_GET["delete"];

  $sql = "DELETE FROM users WHERE id='$id'";

  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: index.php"); // Redirect to main page after deletion
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
}

mysqli_close($conn);

?>