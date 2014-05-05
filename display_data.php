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
$sql = "SELECT * FROM book_details";
 // the result of the query
$sth = mysql_query($sql,$con);
if(!$sth)
{
 die("Invalid query: " . mysql_error());
 }
else
{
//	echo "done";
}
echo "<h2> Whichever book you want to buy, enter the book id in th below box!! </h2>";
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
<th>Image of the book</th>
</tr>";
while($row=mysql_fetch_array($sth))
{
   echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";	
  echo "<td>" . $row['book_name'] . "</td>";
  echo "<td>" . $row['publication'] . "</td>";
  echo "<td>" . $row['author'] . "</td>";
  echo "<td>" . $row['pub_year'] . "</td>";
  echo "<td>" . $row['edition'] . "</td>";
  echo "<td>" . $row['category'] . "</td>";
  echo "<td>" . $row['price_org'] . "</td>";
$ro=$row['book_image'];
echo "<td>" ."<INPUT TYPE=\"image\" SRC=\"$ro\" ALT=\"SUBMIT\" style=\"width:200px; height:100px;\"name=\"img\">" ."</td>";


  echo "</tr>";
}
echo "</table>";
echo "<br><br>"
?>
<form action="buy_1.php" method="POST">
<input type=number name="book_id">
<input type="submit" value="Buy Now">
</form>
