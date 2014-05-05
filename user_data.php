<?php
$con = mysql_connect("localhost","root","chetna");
if (!$con)
  {
  echo('Could not connect: ' . mysql_error());
  }
else
{
echo"connected";
}
if(mysql_select_db("user", $con))
{
echo"connected to db";
}
$username=$_POST['name'];
$passcode=$_POST['password'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone_num=$_POST['phone'];
$gender=$_POST['gender'];
echo"$username";
echo"$passcode";
echo"$address";
echo"$email";
echo"$phone_num";
echo"$gender";

$sql="insert into users(username,passcode,address,email,phone_no,gender) values('$username','$passcode','$address','$email','$phone_num','$gender')";
$result=mysql_query($sql,$con);

if(!$result)
{
echo mysql_error();
echo "values not inserted";
}
else
{
echo "Now you can login";

header("location:login.php");
}
mysql_close($con);
?>
