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
<?php
require 'connect.php';
$addy=$_POST["address1"];
$town=$_POST["town"];
$county=$_POST["county"];
$price=$_POST["price"];
$bedrooms=$_POST["bedrooms"];
$shortdesc=$_POST["shortdescription"];
$longdesc=$_POST["longdescription"];
$vendorid=$_POST["vendorid"];
$categoryid=$_POST["categoryid"];
$image=$_POST["image"];
$sql_insert="INSERT INTO property(address1, town, county, price, bedrooms, shortdescription, longdescription, vendorid,
categoryid, image) VALUES ('$addy', '$town', '$county', '$price', '$bedrooms', '$shortdesc', '$longdesc', '$vendorid',
'$categoryid', '$image')";
if(mysqli_query($link, $sql_insert)) {
echo "<h3>Product Added!</h3>";
echo "<a href='manageproperties.php'>Return to Manage Properties page</a>";}
else {
echo "An error occured, try again!";
}
mysqli_close($link);
?>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
