<?php session_start();?>

<?php
//code for editprofile
require_once "include/config.php";
$email=$_SESSION['email'];
$link = "SELECT * FROM customer WHERE email='$email'";
$res = mysqli_query($conn, $link);
$row = mysqli_fetch_assoc($res);
$name=trim(mysqli_real_escape_string($conn, $row['name']));
$passowrd=trim(mysqli_real_escape_string($conn, $row['password']));
$phonenumber=trim(mysqli_real_escape_string($conn, $row['phonenumber']));
$address=trim(mysqli_real_escape_string($conn, $row['address']));
$photo=trim(mysqli_real_escape_string($conn, $row['photo']));

$errors = array();
if(isset($_POST['editprofile']))
{
if(trim($_POST['name'])=='') $errors[]='Please Enter new name';
if(trim($_POST['password'])=='') $errors[]='Please Enter new password';
if(trim($_POST['phonenumber'])=='') $errors[]='Please Enter new Phone number';
if(trim($_POST['address'])=='') $errors[]='Please Enter new address';
if(trim($_POST['photo'])=='') $errors[]='Please Insert new photo ';

$name=trim($_POST['name']);
$password=trim($_POST['password']);
$phonenumber=trim($_POST['phonenumber']);
$address=trim($_POST['address']);
$photo=trim($_POST['photo']);
$pass=password_hash($password, PASSWORD_DEFAULT);
if(sizeof($errors)==0)

{
  //to update the profile
$sql="UPDATE customer SET name='$name', password='$pass', phonenumber='$phonenumber', address='$address', photo='$photo' Where email='$email'";
$result=mysqli_query($conn, $sql);
echo '<SCRIPT LANGUAGE="javascript">';
echo 'window.location="index.php";';
echo '</SCRIPT>';

}
else
{
}
}
if(sizeof($errors) != 0)
{
foreach($errors as $error)
{
echo '<font color="#000000"><ul class="custom-list-style"><li>'.$error.'</li></ul></font>' ;
}
}
//code for editprofile end
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"href="style/project.css">
    <title>Edit profile</title>

  </head>
  <body>
    <h2> Edit profile </h2>

    <form method="POST">
        <div  class="container">
    <label for="name"> New Name</label>
    <input type="text" id="name" name="name" placeholder="Your new Name" value="<?php echo $name;?>" required>
    <label for="password">New Password</label>
    <input type="text" id="password" name="password" placeholder="Your New Password" value="<?php echo $password;?>" required>
    <label for="phonenumber">New Phone Number</label>
    <input type="text" id="phonenumber" name="phonenumber" placeholder="Your New Phone Number" value="<?php echo $phonenumber;?>" required>
    <label for="address">New Address</label>
    <input type="text" id="address" name="address" placeholder="Your New Address" value="<?php echo $address;?>" required>
    <label for="photo">New Photo</label>
    <input type="photo" id="photo" name="photo" placeholder="Your New Photo" value="<?php echo $photo;?>" required>
    <br> </br>
    <input type="submit" name="editprofile" value="Submit">
  </div>
    </form>

</html>
<?php require_once "include/footer.php";?>
