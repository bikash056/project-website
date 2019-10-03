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
<h2> Login  </h2>
<link rel="stylesheet" type="text/css" href = "style/main.css">
<form method="POST">
<label for="email">User Email</label>
<input type="text" id="email" name="email" placeholder="Your email Adress" required>
<label for="password">Password</label>
<input type="password" id="password" name="password" placeholder="Password.." required>
<input type="submit" name="login" value="Login">
</form>
<footer><?php require_once "include/footer.php"?></footer>
