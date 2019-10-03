<?php
session_start();
require_once "include/config.php";
?>
<?php
require_once "include/config.php";
$query="INSERT INTO `review`(`text`, `rating`) VALUES (?,?)";
$result=mysqli_query($conn, $query);

 ?>

<form method="POST">
<label for="review"><h1>review</h1></label>
<br></br>
<input type="text" id="review" name="review" placeholder="Your review" required>
<label for="review">Rating 1-5</label>
<input type="text" id="review" name="Rating" placeholder="Your rating" required>
</form>
<?php require_once "include/footer.php" ?>
