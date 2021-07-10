<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
  <meta charset="utf-8">
 <link rel="stylesheet"  href="css/styles.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<h3>Welcome to the Accomodate.ie</h3>
Accommodate.ie is Irelands newest website for finding a property to buy, 
be it a house to live in, commercial property to do business with or a site to hold or build upon.

<h2>Featured Properties</h2>
<div id="featured1">
<a href="moredetails.php?propertyid=5"><img src="comm1.jpg" width="200" height="200"></a>
<br><br>An office block under construction &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br>enquire today
</div>

<div id="featured4">
<a href="moredetails.php?propertyid=17"><img src="site2.jpg" width="200" height="200"></a>
<br><br>A newly listed site with planning &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br>permission granted
</div>

<div id="featured3">
<a href="moredetails.php?propertyid=11"><img src="site1.jpg" width="200" height="200"></a>
<br><br>0.66 acre site recently enlisted &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br>planning permission granted
</div> 

<br><br><br><br><br><br><br><br>



 <!--close refine div //-->
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>