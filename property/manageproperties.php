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

<h3> Manage Properties</h3>
<a href='addproperty.php?propertyid=$propertyid'>Add a new property</a> <a href='admin.php'>Go Back</a>
<br><br>


<div id="displayproperties">
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "accommodate");
$sql="SELECT * from property";
$result=mysqli_query($link, $sql);

if(mysqli_num_rows($result)>0)
{
echo "<table>";
echo "<tr>
<td><strong>Image</td>
<td><strong>Product</td>
<td><strong>Price</td>
<td><strong>Description</td>
<td><strong>Edit</td>
<td><strong>Delete</td>
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
<td><a href='editproperty.php?propertyid=$propertyid'>Edit</a></td>
<td><a href='confirmdeleteproduct.php?propertyid=$propertyid'>Delete</a></td>
</tr>";
}
echo "</table>";
}
else
{
echo ("There are no products available at the moment");
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
