<head>
<style>
h1{
margin-top:70px;
color:Aquamarine;
}
</style>
</head>
<?php
include("value_extract.php");
?>
<body>
<h1>Cash On Delivery</h1>
<p>Enter your shipping address</p>
<form action="payment.php" method="POST">
<label>Name</label><input type="text" name="name"><br><br>
<label>Pincode</label><input type="text" name="pincode"><br><br>
<label>Landmark</label><input type="text" name="address"><br><br>
<label>Address</label><textarea name="landmark"></textarea><br><br>
<label>Phone</label><input type="text" name="phone"><br><br>
<input type="submit" value="SAVE AND CONTINUE" name="cod">
</form>
</body>

