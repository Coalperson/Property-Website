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
$vendorid=$_GET["vendorid"];
mysqli_select_db($link, "accommodate");
$sql="SELECT * FROM vendor WHERE vendorid=$vendorid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
$vendorid=$row["vendorid"];
$firstname=$row["firstname"];
$surname=$row["surname"];
$addy=$row["address1"];
$town=$row["town"];
$county=$row["county"];
$mobile=$row["mobile"];
$email=$row["email"];



mysqli_close($link);
?>
<form method="post" action="processeditvendor.php">
<input type="hidden" name="vendorid" value="<?php echo $vendorid; ?>"/>
<table>
<tr>
<td>First Name:</td><td><input type="text" name="firstname" value="<?php echo
$firstname; ?>"/></td>
</tr>
<tr>
<td>Surname:</td><td><input type="text" name="surname" value="<?php echo
$surname; ?>"/></td>
</tr>
<tr>
<td>Address:</td><td><input type="text" name="address1" value="<?php echo
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
<td>Mobile Number:</td><td><input type="text" name="mobile" value= "<?php echo $mobile; ?>" /></td>
</tr>
<tr>
<td>E-mail Address:</td><td><input type="text" name="email" value= "<?php echo $email; ?>" /></td>
</tr>

</table>
<input type="submit" name="submit" value="Update Vendor"/>
</form>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
