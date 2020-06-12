<?php
session_start();
require_once "include/config.php";
?>


<body>
<h1>  Cart </h1>
  <label for="cart">Cart</label>
  <div>
    <?php
  $link = $sql = "SELECT * FROM `booking`";

  $result = mysqli_query($conn,$sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Name: " . $row["name"]. " - Number: " . $row["number"]. " " . $row["date"]. "price: " . $row["price"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
    <div>
<Form action=pay.php
      <label for="submit">Chechout</label>
      <input type="submit" name="pay.php" value="Submit">
    </form>
