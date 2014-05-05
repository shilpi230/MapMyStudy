<html>
<style>
th{
    padding:15px;
    color:#fff;
    text-shadow:1px 1px 1px #568F23;
    border:1px solid #93CE37;
    border-bottom:3px solid #9ED929;
    background-color:#9DD929;
    background:-webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0.02, rgb(123,192,67)),
        color-stop(0.51, rgb(139,198,66)),
        color-stop(0.87, rgb(158,217,41))
        );
    background: -moz-linear-gradient(
        center bottom,
        rgb(123,192,67) 2%,
        rgb(139,198,66) 51%,
        rgb(158,217,41) 87%
        );
    -webkit-border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-radius:5px 5px 0px 0px;
    border-top-left-radius:5px;
    border-top-right-radius:5px;
}
td{
    padding:10px;
    text-align:center;
    background-color:#DEF3CA;
    border: 2px solid #E7EFE0;
    -moz-border-radius:2px;
    -webkit-border-radius:2px;
    border-radius:2px;
    color:#666;
    text-shadow:1px 1px 1px #fff;
}
</style>

<form action="buy_1.php" method="POST">
<input type=number name="book_id">
<input type="submit" value="Buy Now">
</form>
<?php

// here host,user,password are like localdomain //
$con = mysql_connect('localhost','root','chetna');
if(!$con)
{
echo"not connected";
}
else
{
//echo "connected";
}
mysql_select_db("user");
        // get the image from the db
$value="Academic & Professional";
$sql = "SELECT * FROM book_details where category ='$value'";
 // the result of the query
$sth = mysql_query($sql,$con);
if(!$sth)
{
 die("Invalid query: " . mysql_error());
 }
else
{
//echo "done";
}
echo "<h2> Whichever book you want to buy, enter the book id in the below box!! </h2>";
echo "<table border='1'>
<tr>
<th>Book Id</th>
<th>Book Name</th>
<th>Publication</th>
<th>Author</th>
<th>Published year</th>
<th>Edition</th>
<th>Category</th>
<th>Price</th>
<th>Other Details</th>
<th>Image of the book</th>
</tr>";
while($row=mysql_fetch_array($sth))
{
   echo "<tr>";
  echo "<td>". $row['id']."</td>";
  echo "<td>" . $row['book_name'] . "</td>";
  echo "<td>" . $row['publication'] . "</td>";
  echo "<td>" . $row['author'] . "</td>";
  echo "<td>" . $row['pub_year'] . "</td>";
  echo "<td>" . $row['edition'] . "</td>";
  echo "<td>" . $row['category'] . "</td>";
  echo "<td>" . $row['price_org'] . "</td>";
  echo "<td>" . $row['comment'] . "</td>";
$ro=$row['book_image'];
echo "<td>" ."<img src=\"$ro\" style=\"width:200px; height:100px;\">" ."</td>";

  echo "</tr>";
}
echo "</table>";
?>
</html>
