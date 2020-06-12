<?php
session_start();
require_once "include/config.php";
require_once "include/navigation.php";
echo "<br /> <br /> <br /> <br />";

 ?>
 <html>
 <head>
   <link type="text/css" href="style/project.css">
 </head>
<body>

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
       </form>
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
<form action="POST"
<span class="properties_u">Properties for you</span>
<div class="properties">
 <div class="property_img"><img src='images/A2.jpg'/><div class="details">Ashfield
<input type="submit" name="Book" value="Book"</div></div>
 <div class="property_img"><img src='images/A3.jpg'/><div class="details">Ashfield
 <input type="submit" name="Book" value="Book"</div></div>
 <div class="property_img"><img src='images/A4.jpg'/><div class="details">Rockdale
 <input type="submit" name="Book" value="Book"</div></div>
 <div class="property_img"><img src='images/A5.jpg'/><div class="details">Hornsby
 <input type="submit" name="Book" value="Book"</div></div>
</div>
</form>


 </body>
</html>
