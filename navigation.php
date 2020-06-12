<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<header class="header">
<link rel="stylesheet" type="text/css" href="style/project.css">
<div = "logo">  <img src="images/logo.png"></div>
</header>
<div class="topnav" style="float:left">
<a href="index.php">Home</a>
<?php
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
echo '<a href="Feedback.php" title="Feedbacks">Feedbacks</a>';
echo '<a href="jobVacancy.php" title="Carrer">Carrer</a>';
echo '<a href="review.php" title="Review">review</a>';
echo '<a href="cart.php" title="Cart">Cart</a>';
echo '<a href="logout.php" title="logout">Logout</a>';
echo '  <a class="navbar-brand">
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  ';
}

?>
</div>

</html>
