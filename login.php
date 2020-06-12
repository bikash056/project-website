<?php
session_start();
require_once "include/config.php";
$error = array();

if(isset($_POST['login']))
{
if(trim($_POST['email'])=='') $error[]='Please Enter email';
if(trim($_POST['password'])=='') $error[]='Please Enter Password';
$email= trim($_POST['email']);
$password = trim($_POST['password']);
$pass=password_hash($password, PASSWORD_DEFAULT);
$link = "SELECT * FROM  customer WHERE email='$email'";
$res = mysqli_query($conn, $link);
$total = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);
$hash=$row['password'];
$email=$row['email'];
$id=$row['id'];
if($total=='0')
{
$errors[]='Email and Password not correct.';
}
else
{
if (password_verify($password, $hash)) {
if(sizeof($errors)==0)
{
$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
$_SESSION['id'] = $id;
echo '<SCRIPT LANGUAGE="javascript">';
echo 'window.location="index.php";';
echo '</SCRIPT>';
}
}
else {
$errors[]='Email and Password not correct.';
}
}
}
?>
<?php
if(sizeof($error) != 0)
{
foreach($error as $errors)
{
echo '<h2 align="center"><font style="color:#ff0000"><blink>'.$errors.'</blink></font></h2>';
}
}
//code for login end
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"type="text/css" href="style/project.css">
    <title>LOGIN</title>
  </head>
  <body>

<div class="login-main">
    <form method="POST" class="login-form">

    <div  class="container">
      <div class="imgcontainer">
    <img src="images/user.png" alt="Avatar" class="avatar">
  </div>
<div class="login-label">
    <label for="email">User Email</label><br>
    <input type="email" id="email" name="email" placeholder="Your email Address" required>
</div>
<div class="login-label"><br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Password.." required>
<label>    <input type="submit" name="login" value="Login" style="background-Color:green"></label><br></br>
</div>

      <label ><span>Remember me</span> <span><input name="remember-me" type="checkbox"></span></label><br>
     </label>

  </div>
    <div class="container" ><br>
    <button type="button" class="cancelbtn">Cancel</button><br>
    <span class="psw">Forgot <a href="https// ".$_POST['email']"">password?</a></span>
  </div>
    </form>
  </div>


  </body>
</html>

<footer><?php require_once "include/footer.php"?></footer>
