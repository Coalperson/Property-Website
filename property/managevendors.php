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
<h3> Manage Vendors</h3>
<a href='addvendor.php?vendorid=$vendorid'>Add a new vendor</a> <a href='admin.php'>Go Back</a>
<br><br>


<div id="displayvendors">
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "accommodate");
$sql="SELECT * from vendor";
$result=mysqli_query($link, $sql);

if(mysqli_num_rows($result)>0)
{
echo "<table>";
echo "<tr>
<td><strong>Name</td>
<td><strong>Address</td>
<td><strong>Town</td>
<td><strong>Description</td>
<td><strong>Email</td>
<td><strong>VendorID</td>
<td><strong>Edit</td>
<td><strong>Delete</td>

</tr>";

while($row=mysqli_fetch_array($result)) {
$vendorid=$row["vendorid"];
$firstname=$row["firstname"];
$surname=$row["surname"];
$addy=$row["address1"];
$town=$row["town"];
$county=$row["county"];
$mobile=$row["mobile"];
$email=$row["email"];
echo "<tr>

<td>$firstname, $surname</td>
<td>$addy</td>
<td>$town, $county</td>
<td>$mobile</td>
<td>$email</td>
<td>$vendorid</td>

<td><a href='editvendor.php?vendorid=$vendorid'>Edit</a></td>
<td><a href='confirmdeletevendor.php?vendorid=$vendorid'>Delete</a></td>
</tr>";
}
echo "</table>";
}
else
{
echo ("There are no vendors available at the moment");
}
mysqli_close($link);
?>
<br>
<a href='admin.php'>Go Back</a>
<br>
</div>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
