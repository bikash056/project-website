<?php

include_once 'config.php';
$zip=$area=$bedroom=$bathroom="";

  $zip = $_POST['zip'];
  $area = $_POST['area'];
  $bedroom = $_POST['bedroom'];
  $bathroom = $_POST['bathroom'];

  $sql = "SELECT * FROM property where zip='$zip' area='$area' bedroom='$bedroom' bathroom='$bathroom'";
   $result = mysqli_query($connect,$sql);
   echo $area;
   echo $bedroom;


 ?>

<div class= "list-property">



</div>


 <?php
 include_once  'footer.php';
  ?>
