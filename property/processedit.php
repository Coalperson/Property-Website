<?php
require 'connect.php';
$propertyid=$_POST['propertyid'];
$addy=$_POST['address1'];
$town=$_POST['town'];
$county=$_POST['county'];
$price=$_POST['price'];
$bedrooms=$_POST['bedrooms'];
$shortdesc=$_POST["shortdescription"];
$longdesc=$_POST["longdescription"];
$vendorid=$_POST["vendorid"];
$categoryid=$_POST["categoryid"];
$image=$_POST["image"];
$sql= "UPDATE property SET address1='$addy', town='$town', county='$county', price='$price', bedrooms='$bedrooms',
shortdescription='$shortdesc', longdescription='$longdesc', vendorid='$vendorid',
categoryid='$categoryid', image='$image' WHERE propertyid=$propertyid";
$retval = mysqli_query( $link, $sql);
if(! $retval )
{
 die('Could not update data: ' . mysql_error());
}
else
{
 header("Location: http://localhost/property/manageproperties.php");
 exit;
}
echo "Product Updated!";
mysqli_close($link);
?>