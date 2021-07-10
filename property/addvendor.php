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
<h3>Create a vendor account</h3>
<p>
<div id="addvendor">
<form method="post" action="processaddvendor.php" id="vendorform"> 
<table>
<tr>
<td>First Name: </td>
<td><input type="text" name="firstname" required="required"/></td>
</tr>
<tr>
<td>Surname: </td>
<td><input type="text" name="surname" required="required"></textarea></td>
</tr>
<tr>
<td>Address: </td>
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
<td>Mobile: </td>
<td><input type="text" name="mobile" required="required"></textarea></td>
</tr>
<tr>
<td>Email: </td>
<td><input type="text" name="email" required="required"></textarea></td>
</tr>


</table>
<input type="submit" id="vsubmit" name="submit" value="Add Vendor"/>
</form>
</div>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>