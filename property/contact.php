<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <style>
#myForm {
	font-family: Arial, sans-serif;
	width:400px; }
label { float: left;
	width: 120px; 
	text-align: right; 
	padding-right: 10px;
	margin-top: 10px; }
input, textarea { margin-top: 10px; }
#mySubmit { margin-left: 130px;
           padding-bottom: 10px; }
</style>
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>

<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 250px;  /* The height is 400 pixels */
        width: 35%;  /* The width is the width of the web page */
        float: right
        
        
        
       }
    </style>
  </head>
  <body>
     
    <!--The div element for the map -->
    <div id="map"></div>
   
    <script>
// Initialize and add the map
function initMap() {
  // The location of accommodate.ie
  var letterkenny = {lat: 54.948478, lng: -7.734322};
  // The map, centered at letterkenny
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 14, center: letterkenny});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: letterkenny, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6N6hUrIY_pZauzg0A4p04Ik28S2gr4Ts&callback=initMap">
    </script>
    

<div id="content">
<h2> Contact Us </h2>

<p>Call into us at Pearse road, Letterkenny, Co. Donegal to discuss our services further.</p>

If you would like to speak to a an agent about advertising your property or have any queeries about<br> the sale of your property you can contact us via the form below.



<h3>Get in touch</h3>

<form method="post" id="myForm" >
<div>
  <label for="myName">Name:</label>
  <input type="text" name="myName" id="myName">
</div>
<div>
  <label for="myEmail">E-mail:</label>
  <input type="text" name="myEmail" id="myEmail">
</div>
<div>
  <label for="myComments">Comments:</label>
  <textarea name="myComments" id="myComments" rows="2" cols="20"></textarea>
</div>
<div id="mySubmit">
  <input type="submit" value="Submit">
</div>
</form>



<p>Aternatively you can call us on +353 74 89898</p>
<p>Or email us directly at info@accomodate.ie</p>
<div id="add">

JG Designs<br>Main street,<br> Letterkenny,<br> Co. Donegal,<br> F92 XX88<br><br>
Our opening hours are as follows:
<p>Monday:	09:30 - 17:00</p>
<p>Tuesday:	09:30 - 17:00</p>
<p>Wednesday:	09:30 - 17:00</p>
<p>Thursday:	09:30 - 17:00</p>
<p>Friday:	09:30 - 17:00</p>
<p>Saturday:	Closed</p>
<p>Sunday: Closed</p>
<br>
<a href='index.php'>Go back home</a>
</div>
</div>
<div id="add">
<?php include("includes/footer.html");?>
</div>
</body>
</html>
