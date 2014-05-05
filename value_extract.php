<?
include("config.php");
mysql_select_db("user");
$sql="select id from book_id";
$res=mysql_query($sql,$conn);
$r=mysql_result($res,0);
$sql="select book_name from book_details where id='$r'";
$res=mysql_query($sql,$conn);
$s1=mysql_result($res,0);
echo "You have selected <br>". $s1. "<br>";
$sql="select price_org from book_details where id='$r'";
$res=mysql_query($sql,$conn);
$s=mysql_result($res,0);
?>
