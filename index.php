
<?php session_start();?>
<?php  require_once "include/navigation.php";
echo "<br /> <br /> <br /> <br />";
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>



<link rel="stylesheet" href="include/project.css">

  </head>
  <body>
    <div>
<img src="images/Apartment1.jpg" alt="banner-main" height="10%" width ="90%">
</div>


<div class = "main-search" >
<h3 style="text-align:center;">Search Property</h3>
   <form  action="includes/showproperty.inc.php" method="post">


      <div class="main-form">
       <label>City or Zip:<br></label>
        <input type="text" name="zip">
      </div>

      <div class="main-form">
       <label> Search Area:<br></label>
         <select name="area">
           <option>Brisbane</option>
           <option>Sydney</option>
           <option>Melbourne</option>
         </select>
      </div>

       <div class="main-form">
         <label> Bedroom(s):<br></label>
           <select name="bedroom">
             <option>1</option>
             <option>2</option>
             <option>3</option>
             <option>4</option>
           </select>
       </div>

        <div class="main-form">
         <label> Bathroom(s):<br></label>
           <select name="bathroom">
             <option>1</option>
             <option>2</option>
             <option>3</option>
           </select>
      </div>

       <div class="main-form">
         <button type=submit name=submit >Search</button>
       </div>
   </form>
  </div>

  <div >
    <img src="images/why-us.png" alt="why-choose-us" style="height:300px; width:auto; text-align: center;" />
  </div>
  <!--
<div class="banner">
  <div class="search_box">
    <div class="form_container">
         <form action="saas.php">
          <h2>Search Properties for</h2>
          <select id="location" name="location">
            <option value="">Choose Location</option>
            <option value="rockdale">Rockdale</option>
            <option value="ashfield">Ashfield</option>
            <option value="hurstville">Hurstville</option>
          </select>
          <select id="property" name="property">
            <option value="">Property Type</option>
            <option value="house">House</option>
            <option value="apartment">Apartment</option>
            <option value="villa">Villa</option>
          </select>
          <select id="rooms" name="rooms">
            <option value="">Bedrooms</option>
            <option value="one">One</option>
            <option value="two">Two</option>
            <option value="three">Three</option>
            <option value="four">Four</option>
            <option value="five">Five</option>
          </select>
          <p>Price Range:</p>
          <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
          <p>Value: <span id="demo"></span></p>
          <button class="button">Submit</button>
        </form> -->
    </div>
  </div>
</div>
<div class="service_wrapper">
  <div class="service_each">
    <i class="fas fa-city"></i>
    <h4>Projects</h4>
  </div>
  <div class="service_each">
    <i class="fas fa-comment-dollar"></i>
    <h4>Market Appraisal</h4>
  </div>
  <div class="service_each">
    <i class="fas fa-house-damage"></i>
    <h4>Rent Properties</h4>
  </div>
  <div class="service_each">
    <i class="fas fa-money-bill-alt"></i>
    <h4>Sell House</h4>
  </div>
</div>
<span class="properties_u">Properties for you</span>
<div class="properties">
  <div class="property_img"><img src='images/A2.jpg'/><div class="details">Ashfield</div></div>
  <div class="property_img"><img src='images/A3.jpg'/><div class="details">Ashfield</div></div>
  <div class="property_img"><img src='images/A4.jpg'/><div class="details">Ashfield</div></div>
  <div class="property_img"><img src='images/A5.jpg'/><div class="details">Ashfield</div></div>
</div>


  </body>
</html>

<?php
echo "<br /> <br /> <br /> <br />";
require_once "include/footer.php";?>
