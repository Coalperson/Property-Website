<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/stylesadd.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<h3>Add a Property</h3>
<p>
<div id="addproperty">
<form method="post" action="processadd.php">
<table>
<tr>
<td>Property Name: (first line of address) </td>
<td><input type="text" name="address1" required="required"/></td>
</tr>
<tr>
<td>Town </td>
<td><input type="text" name="town" required="required"/></td>
</tr>
<tr>
<td>County</td>
<td><input type="text" name="county" required="required"/></td>
</tr>
<tr>
<td>Price: </td>
<td><input type="text" name="price" required="required"></textarea></td>
</tr>
<tr>
<td>Number of bedrooms (if residential): </td>
<td><input type="text" name="bedrooms" ></textarea></td>
</tr>
<tr>
<td>Short Description: </td>
<td><textarea name="shortdescription" rows="3" cols="30" required="required" /></textarea></td>
</tr>
<tr>
<td>Long Description: </td>
<td><textarea name="longdescription" rows="8" cols="30" required="required"/></textarea></td>
</tr>
<tr>
<td>Vendor ID: </td>
<td><input type="number" name="vendorid" required="required" /></td>
</tr>
<tr>
<td>Category ID:  1 = Residential, 2 = Commercial, 3 = Site</td>
<td><input type="number" name="categoryid" required="required" /></td>
</tr>
<tr>
<td>Image Path: </td>
<td><input type="text" name="image"  /></td>
</tr>


</table>
<input type="submit" name="submit" value="Add Product"/>
</form>
</div>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
