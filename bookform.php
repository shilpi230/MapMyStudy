<html>
<style>


label {
	float: left;
	text-align: right;
	margin-right: 60px;
	width: 100px;
}
body {
	margin-top: 100px;
margin-left:200px;
	padding: 0;
	line-height: 1.5em;
	font-family: Verdana, Arial, san-serif;
	font-size: 20px;
	color: #ffffff;
	background: #4b4743;
}

 .box{
  width:100px;
  height:100px;
  border-top:2px solid #fff;
  border-radius:50%;
  margin:10px auto 50px;
margin-left:200px;
  background-color:#EEEEEE;
  background: linear-gradient(#EDEAE1,#CDC8B5);
  text-align:center;
  box-shadow:
    0 5px 2px 3px rgba(158, 158, 158, 0.4), 
    0 3px 5px #B7B6B6, 
    0 0 0 2px #BBB7AE, 
    inset 0 -3px 1px 2px rgba(186, 178, 165, 0.5),
    inset 0 3px 1px 2px rgba(246, 245, 241, 0.3);
  cursor:pointer;
  position:relative;
}
.box:active{
  width:100px;
  height:100px;
	border-radius:50%;
  border-top:none;
  border:2px solid #BAB7AE;
	background-color:#EEEEEE;
	text-align:center;
	position:relative;
	color:#BAB7AE;
	font-size:64px;
	line-height:100px;
	text-shadow:
    0 1px 1px white,
    0 1px 1px #BAB7AE;
  
  box-shadow:  0 0 0 0 #BBB7AE;
}
.box:before{
	content:" ";
	display:block;
	position:absolute;
	z-index:-90;
	width:135px;
	height:135px;
	border-radius:50%;
	border-top:2px solid #CCC8BF;
  border-bottom: 1px solid #F4F3F1;
  box-shadow: inset 0 -2px 0 2px #F7F6F2, inset 0 2px 1px 1px #CCC8BF;
	left:-17.5px; 
	top:-20px;
	background:-moz-linear-gradient(#DAD6CB,#F1EDEA);
	box-shadow: inset 1px 0 1px 0px #D9D9D9; 
}
p, p a{
  text-shadow: 1px 1px 1px white;
  color:#7E7E7E;
  text-align:center;
  font-size:18px;
  line-height:2;
  text-decoration:none;
  margin-bottom:30px;
}
.box span{
  display:inline-block;
  box-shadow: 
    inset 0 1px 1px 1px #7E7E7E, 
    0 1px 1px white;
  height:15px; 
  width:15px;
  border-radius:50%;
  background: linear-gradient(#AEADAA,#BAB7AE);
  margin:42px auto;
}



a:link, a:visited { color: #e6e154; text-decoration: none; font-weight: bold;} 
a:active, a:hover { color: #e6e154; text-decoration: underline;}

p {
	margin: 0px;
	padding: 0px;
}
 
</style>
<body>
<form method="post" action="insert_book_details.php" enctype="multipart/form-data">
 <label> BookName: </label> <input type="text" name="name">
   <br><br>
	 <label>AuthorName:</label><input type="text" name="author">
   <br><br>
	 <label>Publication:</label><input type="text" name="publication">
   <br><br>
      <label>Publishedyear:</label> <input type="date" name="pub_year">
   <br><br>
   <label> Edition:</label><input type="number" name="edition">
   <br><br>
 <label>Category:</label><select name="group">
<option>Academic & Professional</option>
<option>Entrance Exam</option>
<option>Literature and Fiction</option>
<option>Children & Teens</option>
<option>Indian Writing</option>
<option>School Books</option>
</select><br><br>
<label>Price:</label><input type="number" name="price"><br><br>
  <label> OtherDetails: </label><textarea name="details" rows="5" cols="40">
</textarea>   <br><br>
<input name="MAX_FILE_SIZE" value="1048576" type="hidden">
  <label for="file"> BookImage:</label>
<input type="file" name="file" id="file"><br>
 <label>
<input class="box" type="submit" value="Add"></label>
</form>
</body>
</html>
