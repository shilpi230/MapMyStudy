<html>
<frameset cols="20%,50%" border="0">
  <frame src="a.php" name="aa">
  <frame src="f.php" name="bb">
</frameset>
</html>
<?
$a=$_POST['book_id'];
include("config.php");
mysql_select_db("user");
$sql="insert into book_id(id) values('$a')";
$res=mysql_query($sql,$conn);
//$r=mysql_result($res,0);
?>


