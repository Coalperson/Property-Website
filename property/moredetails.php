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
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "accommodate");
$propertyid= $_GET["propertyid"];
$sql= "SELECT * FROM property WHERE propertyid=$propertyid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
$addy=$row["address1"];
$town=$row["town"];
$county=$row["county"];
$price=$row["price"];
$bedrooms=$row["bedrooms"];
$shortdesc=$row["shortdescription"];
$longdesc=$row["longdescription"];
$image=$row["image"];
echo "<h2>$addy</h2>

<h3>$town</h3>

<h3>$county</h3>

<img src='$image' width=200 height=200' border=3px>
<h3>";
echo "Number of Bedrooms";
echo "</h3> $bedrooms
<br> <h3>";
echo "Property Details";
echo "</h3> $longdesc
<h3>";
echo "Price";
echo "</h3> &euro;$price";
mysqli_close($link);
?>
<p>
<button onclick="goBack()">Go Back to Product Listing</button>
<script>
function goBack() {
 window.history.back();
}
</script>
</p>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
