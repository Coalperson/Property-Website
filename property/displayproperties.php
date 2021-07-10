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
<div id="displayproperties">
<?php
require 'connect.php';
$categoryid= $_GET["categoryid"];
$sql="SELECT * from property, category WHERE property.categoryid=$categoryid AND
category.categoryid=$categoryid";
$output=mysqli_query($link, $sql);
$getcategory=mysqli_fetch_array($output);
echo "<h3>";
echo $getcategory["categoryname"];
echo "</h3>";
$result=mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0)
{
echo "<table>";
echo "<tr>
<td><strong>Image</td>
<td><strong>Property</td>
<td><strong>Price</td>
<td><strong>Description</td>
<td><strong>Details</td>
</tr>";
while($row=mysqli_fetch_array($result)) {
$propertyid=$row["propertyid"];
$image=$row["image"];
$addy=$row["address1"];
$shortdesc=$row["shortdescription"];
$price=$row["price"];
echo "<tr>
<td><img src='$image' width=100 height=100> </td>
<td>$addy</td>
<td>&euro;$price</td>
<td>$shortdesc</td>
<td><a href='moredetails.php?propertyid=$propertyid'>Details</a></td>
</tr>";
}
echo "</table>";
}
else
{
echo "<h3> There are currently no items in this category</h3>";
}
mysqli_close($link);
?>
</div>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
