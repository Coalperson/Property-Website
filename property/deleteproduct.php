<?php
require 'connect.php';
$propertyid= $_GET["propertyid"];
$sql= "DELETE FROM property WHERE propertyid=$propertyid";
$retval = mysqli_query( $link, $sql);
if(! $retval )
{
 die('Could not delete data: ' . mysql_error());
}
else
{
 header("Location: http://localhost/property/manageproperties.php");
 exit;
}
mysqli_close($link);
?>