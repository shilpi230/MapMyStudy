<?
$name=$_POST['name'];
$pincode=$_POST['pincode'];
$address=$_POST['address'];
$phone=$_POST['phone'];
echo "<h2>Shipping address</h2>";
echo $name;
echo "<br>";
echo $pincode;
echo "<br>";
echo $address;
echo "<br>";
echo $phone;
echo "<br><br>";
echo "<h2>Cart</h2>";
include("value_extract.php");
echo "Total amount:" .$s. "<br>";
$sql="delete from book_id where id='$r'";
$res=mysql_query($sql,$conn);
echo "<h2>Thank you for shopping with us.</h2>";
?>
