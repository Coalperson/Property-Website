<?php
require 'connect.php';
$id= $_GET["id"];
$sql= "DELETE FROM comment WHERE id=$id";
$retval = mysqli_query( $link, $sql);
if(! $retval )
{
 die('Could not delete data: ' . mysql_error());
}
else
{
 header("Location: http://localhost/property/managecomments.php");
 exit;
}
mysqli_close($link);
?>
