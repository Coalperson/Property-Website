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
$title=$_POST["title"];
$content=$_POST["content"];
$author_name=$_POST["author_name"];
$email=$_POST["author_email"];
$sql_insert="INSERT INTO comment(title, content, author_name, author_email)
VALUES ('$title', '$content', '$author_name', '$email')";
if(mysqli_query($link, $sql_insert)) {
echo "<h3>Testimonial Added!</h3>Thank you for your testimonial. 
Your comments will be added once they are approved by a moderator<p><br><br><br><br><br>";

echo "<a href='getcomments.php'>Return to Testimonials page</a>";}
else {
echo "An error occurred, try again!";
}
mysqli_close($link);
?>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>


