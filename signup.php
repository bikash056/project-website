<?php
session_start();
require_once "include/config.php";
$error= array();
$username='';
$email='';
$password='';
if(isset($_POST['signup']))
{
if(trim($_POST['username'])=='') $error[]='Please Enter UserName';
 $link = "SELECT name FROM User WHERE name='".trim($_POST['username'])."'";
$res = mysqli_query($conn, $link);
$total = mysqli_num_rows($res);
if($total>0)
$errors[]='Please Use Other username. This Is Used By Another User.';
if(trim($_POST['email'])=='') $error[]='Please Enter Email Address';
#### Email Validation ####
  if(!empty($_POST['email']))
  {
	if(preg_match('!@.*@|\.\.|\,!', $_POST['email']) || !preg_match('!^.+\@(\[?)[a-zA-Z0-9\.\-]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$!', $_POST['email']))
      {
	  	 $errors[]='Email is incorrect';
      }
  }
 $link = "SELECT email FROM User WHERE email='".trim($_POST['email'])."'";
$res = mysqli_query($conn, $link);
$total = mysqli_num_rows($res);
if($total>0)
$errors[]='Please Use Other email. This Is Used By Another User.';
if(trim($_POST['password'])=='') $error[]='Please Enter Email password';
if (strlen($_POST['password']) < 5) $error[]='Password At least 5 characters';
$username=trim($_POST['username']);
$email=trim($_POST['email']);
$password=trim($_POST['password']);
$pass=password_hash($password, PASSWORD_DEFAULT);
if(sizeof($error)==0)
{
echo $sql="INSERT INTO customer(name,email,password) VALUES('$username','$email','$pass')";
$result=mysqli_query($conn, $sql);
echo '<SCRIPT LANGUAGE="javascript">';
echo 'window.location="login.php";';
echo '</SCRIPT>';

}
else
{
}
}
if(sizeof($error) != 0)
{
foreach($error as $errors)
{
echo '<font color="#ff0000"><ul class="custom-list-style"><li>'.$errors.'</li></ul></font>' ;
}
}


?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href = "style/main.css">
</head>

<body>

  <form method="POST">
  <label for="name">UserName</label>
  <input type="text" id="username" name="username" placeholder="Your username.." required>
  <label for="email">Email</label>
  <input type="email" id="email" name="email" placeholder="Your Email ID.." required>
  <label for="password">Password</label>
  <input type="password" id="password" name="password" placeholder="Password.." required>
  <input type="submit" name="signup" value="Submit">
  </form>
</body>
</html>
