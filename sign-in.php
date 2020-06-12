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

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Signin Template for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="sign-in.css" rel="stylesheet">
    </head>
    <body class="text-center">

        <form class="form-signin" method="post">
            <img src="images/user.png" alt="Avatar" class="avatar">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="email" class="sr-only">Email address</label>
            <input type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="Password" class="sr-only">Password</label>
            <input type="password" id="Password" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" value="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
