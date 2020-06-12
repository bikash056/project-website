<?php
session_start();
require_once "include/config.php";

$rating=$_POST['rating']='';
$review= $_POST['review']='';


$query="INSERT INTO `review` (`review`,`rating`) VALUES ('$review','$rating')";
$result= mysqli_query($conn, $query);

 ?>

<form method="POST">
<h1>RATING POINTS</h1>
<br></br>
<label for="review"> Review</label>
<input type="text" id="review" name="review" placeholder="Your review" required>

<label for="rating">Rating 1-5 </label>
<input type="text" id="rating" name="rating" placeholder="Your rating" required>
<br></br>
<input type="submit" value="Submit" name="Submit">
</form>
<?php require_once "include/footer.php" ?>
