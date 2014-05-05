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
<?
include('lock.php');
//echo "inside". $login_session."";

// here host,user,password are like localdomain //
mysql_select_db("user");
        // get the image from the db
$sql = "SELECT * FROM users where username='$login_session'";
 // the result of the query
$sth = mysql_query($sql,$conn);
if(!$sth)
{
 die("Invalid query: " . mysql_error());
 }
else
{
//	echo "done";
}
echo "<table border='1'>
<tr>
<th>User_ID</th>
<th>Username</th>
<th>Address</th>
<th>Email ID</th>
<th>Contact Details</th>
<th>Gender</th>
</tr>";
while($row=mysql_fetch_array($sth))
{
   echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['phone_no'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
</html>
