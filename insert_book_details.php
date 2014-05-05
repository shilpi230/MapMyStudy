<?php
$con = mysql_connect("localhost","root","chetna");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("user", $con);
$name=$_POST['name'];
$author=$_POST['author'];
$publication=$_POST['publication'];
$pub_year=$_POST['pub_year'];
$edition=$_POST['edition'];
$group=$_POST['group'];
$comment=$_POST['details'];
$price=$_POST['price'];
$price_org=$_POST['price'];
if("0"<$price && $price<="100")
{
$price=1;
}
else if("100"<$price && $price<="200")
{
$price=2;
}
else if(200<$price && $price<=300)
{
$price=3;
}
else if(300<$price && $price<=400)
{
$price=4;
}

elseif(400<$price && $price<=500)
{
$price=5;
}
else
{
$price=6;
}

if($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
echo mysql_error();
  }      move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
$location= "upload/".$_FILES["file"]["name"];
$location = stripslashes ( htmlspecialchars ( $location, ENT_QUOTES, 'UTF-8' ) );
$sql="insert into book_details(book_name,publication,author,year,edition,comment,category,`book_image`,price,price_org) values('$name','$publication','$author','$pub_year','$edition','$comment','$group','$location','$price','$price_org')";
if(mysql_query($sql,$con))
{
echo"values inserted";
}
else
{
mysql_error();
echo"values not inserted";
}
mysql_close($con);
?>
