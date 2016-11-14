<!DOCTYPE html>
<html>
<head>
	<title>Please login</title>\
	<link rel="stylesheet" type="text/css"
	href = "<?php echo base_url(); ?> css/style.css">

</head>
<body>

<?php echo validation_errors(); ?>

<div class="tblogocircle">
	<img src="tblogocircle.png">
</div>

<div class="fields">
<form action="userlogin" method="get">
		<input type="text" name="username" placeholder="Your username"> <br>
		<input type="password" name="password" placeholder="Your password"> <br>
		<input type="submit">
</form>
</div>


</body>
</html>