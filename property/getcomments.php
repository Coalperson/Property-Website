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

$sql="SELECT * from comment WHERE status='planned'";
$result=mysqli_query($link, $sql);

if(mysqli_num_rows($result)>0)
{
echo "<table>";
echo "<tr>
<td><strong>Title</td>
<td><strong>Content</td>
<td><strong>Author</td>
<td><strong>Created</td>
</tr>";

while($row=mysqli_fetch_array($result)) {
$title=$row["title"];
$content=$row["content"];
$author=$row["author_name"];
$created=$row["created_at"];
echo "<tr>
<td>$title</td>
<td>$content</td>
<td>$author</td>
<td>$created</td>
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

<div id="addtestimonial">
<h3>Add a Testimonial</h3>
<p>Please leave your feedback on your experience of our site. Our company thrieves on good feedback and testemonials are important to us. A good reveiw goes a long way. We appreciate your feedback and
take all your comments into consideration! </p>
<!--form for user to enter feedback -->
<form method="post" action="process.php" id="commentform">
<label>Title: </label>

<input type="text" name="title" required="required"><br>

<label>Content: </label>
<textarea name="content" rows="8" cols="30" required="required" ></textarea><br>
<label>Name:</label>
<input type="text" name="author_name" required="required"><br>
<label>Email: </label>
<input type="email" name="author_email" required="required"><br>
<input type="submit" id="mysubmit" name="submit" value="Add Comment">
</form>
</div>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
