<!DOCTYPE html>
<html lang="en">
<head> <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header class="header">
<link rel="stylesheet" href="style/main.css">
<div = "logo">  <img src="images/logo.png"></div>

</header>
<div class="row" style="float:middle">
<div class="navbar icon-bar"style="float:middle">
<a href="index.php">Home</a>
<?php

if(isset($_SESSION['email'])==''){
echo '<a href="adminview.php" title="Admin view">Admin look up</a>';
echo '<a href="logout.php" title="login">Logout</a>';
}
else
{
if(!isset($_SESSION['email']))
{
echo '<a href="signup.php" title="Signup">Signup</a>';
echo '<a href="login.php" title="login">Login</a>';
echo '<a href="logout.php" title="logout">Logout</a>';

}
else
{
echo '<a href="editprofile.php" title="Edit profile">Edit profile</a>';
echo '<a href="propertylist.php" title="Property For Rent/Sale">Property For rent/sale</a>';
echo '<a href="Hotel.php" title="Choose Hotels">Choose Hotels</a>';
echo '<a href="roomavailable.php" title="Room Available">Room available</a>';
echo '<a href="reservation.php" title="Booking">Booking</a>';
echo '<a href="review.php" title="Review">review</a>';
echo '<a href="cart.php" title="Cart">Cart</a>';
echo '<a href="logout.php" title="logout">Logout</a>';
}
}

?>
</div>
