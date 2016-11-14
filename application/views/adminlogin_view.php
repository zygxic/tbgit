<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>\

</head>
<body>

<?php echo validation_errors(); ?>


<div class="fields">
<form action="adminlogin" method="get">
		<input type="text"     name="username" placeholder="Your username"> <br>
		<input type="password" name="password" placeholder="Your password"> <br>
		<input type="uid" 	   name="uid"      placeholder="Your user id"> <br>
		<input type="submit">
</form>
</div>


</body>
</html>