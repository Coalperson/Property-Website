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

$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "accommodate");

$sql="SELECT * from comment";
$result=mysqli_query($link, $sql);

if(mysqli_num_rows($result)>0)
{
echo "<table>";
echo "<tr>
<td><strong>Title</td>
<td><strong>Content</td>
<td><strong>Author</td>
<td><strong>Created</td>
<td><strong>Status</td>
<td><strong>Update</td>
<td><strong>Delete</td>

</tr>";

while($row=mysqli_fetch_array($result)) {
$title=$row["title"];
$content=$row["content"];
$author=$row["author_name"];
$created=$row["created_at"];
$status=$row["status"];
$id=$row["id"];


echo "<tr>
<td>$title</td>
<td>$content</td>
<td>$author</td>
<td>$created</td>
<td>$status</td>
<td><a href='updatecomment.php?id=$id'>Approve</a></td>
<td><a href='deletecomment.php?id=$id'>Delete<onclick=\"return confirm('Are you sure you want to
delete this comment?');\">Delete</a></td>
</tr>";
}
echo "</table>";
}
else
{
echo ("There are no testimonials availlable");
}
mysqli_close($link);
?>
<br>
<a href='admin.php'>Go Back</a>


</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
