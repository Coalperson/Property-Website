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
$propertyid=$_GET["propertyid"];
mysqli_select_db($link, "accommodate");
$sql="SELECT * FROM property WHERE propertyid=$propertyid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
$propertyid=$row["propertyid"];
$addy=$row["address1"];
$town=$row["town"];
$county=$row["county"];
$price=$row["price"];
$bedrooms=$row["bedrooms"];
$shortdesc=$row["shortdescription"];
$longdesc=$row["longdescription"];
$vendorid=$row["vendorid"];
$categoryid=$row["categoryid"];
$image=$row["image"];
mysqli_close($link);
?>
<form method="post" action="processedit.php">
<input type="hidden" name="propertyid" value="<?php echo $propertyid; ?>"/>
<table>
<tr>
<td><?php echo "<img src='$image' width=100 height=100>" ?>;</td>
</tr>
<tr>
<td>Property Name:</td><td><input type="text" name="address1" value="<?php echo
$addy; ?>"/></td>
</tr>
<tr>
<td>Town:</td><td><input type="text" name="town" value="<?php echo
$town; ?>"/></td>
</tr>
<tr>
<td>County:</td><td><input type="text" name="county" value="<?php echo
$county; ?>"/></td>
</tr>
<tr>
<td>Price:</td><td><input type="text" name="price" value= "<?php echo $price; ?>" /></td>
</tr>
<tr>
<td>Bedrooms:</td><td><input type="text" name="bedrooms" value= "<?php echo $bedrooms; ?>" /></td>
</tr>
<tr>
<td>Description: </td><td><textarea name="shortdescription" rows="8" cols="35"><?php echo $shortdesc;
?></textarea></td>
</tr>
<tr>
<td>Further Details: </td> <td><textarea name="longdescription" rows="8" cols="35"><?php echo
$longdesc; ?></textarea></td>
</tr>
<tr>
<td>Vendor ID: </td><td><input type="number" name="vendorid" value="<?php echo $vendorid;
?>" /></td>
<tr>
<td>Category ID: </td><td><input type="number" name="categoryid" value="<?php echo
$categoryid; ?>"/></td>
</tr>
<tr>
<td>Image path: </td><td><input type="text" name="image" value="<?php echo $image;
?>"/></td>
</tr>
</table>
<input type="submit" name="submit" value="Update Property"/>
</form>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
