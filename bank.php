<?php
include("value_extract.php");
?>
<head>
<style>
h1{
margin-top:70px;
color:Aquamarine;
}
</style>
</head>
<body>
<h1>Net Banking</h1>
<p>Enter your shipping address</p>
<form action="bank_details.php" method="POST">
<label>Name</label><input type="text" name="name"><br><br>
<label>Pincode</label><input type="text" name="pincode"><br><br>
<label>Landmark</label><input type="text" name="address"><br><br>
<label>Address</label><textarea name="landmark"></textarea><br><br>
<label>Phone</label><input type="text" name="phone"><br><br>
<input type="submit" value="SAVE AND CONTINUE" name="cod">
</form>
</body>
