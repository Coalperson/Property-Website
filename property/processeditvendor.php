<?php
require 'connect.php';
$firstname=$_POST['firstname'];
$surname=$_POST['surname'];
$addy=$_POST['address1'];
$town=$_POST['town'];
$county=$_POST['county'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$vendorid=$_POST["vendorid"];

$sql= "UPDATE vendor SET firstname='$firstname', surname='$surname', address1='$addy', town='$town', county='$county', mobile='$mobile', email='$email'
 WHERE vendorid='$vendorid'";
$retval = mysqli_query( $link, $sql);
if(! $retval )
{
 die('Could not update data: ' . mysql_error());
}
else
{
 header("Location: http://localhost/property/managevendors.php");
 exit;
}
echo "Vendor Updated!";
mysqli_close($link);
?>