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
$vendorid=$_GET['vendorid'];
$sql="SELECT * from vendor where vendorid=$vendorid";
$result=mysqli_query($link, $sql);
echo "<h3>Confirm Delete Vendor</h3>";echo "<p>";
echo "<table>";
echo "<tr>
<td><strong>Name</td>
<td><strong>Town</td>
<td><strong>County</td>
<td><strong>Mobile</td>
</tr>";
$row=mysqli_fetch_array($result);
$firstname=$row["firstname"];
$surname=$row["surname"];
$town=$row["town"];
$county=$row["county"];
$mobile=$row["mobile"];
echo "<tr>
<td>$firstname $surname </td>
<td>$town</td>
<td>$county</td>
<td>$mobile</td>
</tr>";
echo "</table>";
echo "Are you sure you want to delete this vendor? <p>
<a href='deletevendor.php?vendorid=$vendorid'>Delete</a>
<a href='managevendors.php'>Cancel</a>";
mysqli_close($link);
?>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
