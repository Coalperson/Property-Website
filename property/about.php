<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
 <h4><em>Accommodate.ie </em>is Ireland's newest property website where clients can go to enlist their various property assets. 
The site encompasses a wide range of assets including residential and commercial properties recently enlisted on the market. </h4>

Very few websites have set out to achieve such an enormous task, but accommodate.ie hopes to have an edge over the competition with it's easy enlist feature.

There is no sign up required and anyone can enlist their property quickly and easily. <br><br>

<a href='addproperty.php?propertyid=$propertyid'>Enlist Now!</a>
<br><br>
<a href='index.php'>Go back home</a>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
