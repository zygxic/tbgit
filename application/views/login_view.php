<!DOCTYPE html>
<html>
<head>
	<title>Please login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">

</head>
<body>

<?php echo validation_errors(); ?>

<div class="container-fluid">

<div class="picdiv">
 <img src="<?php echo base_url(); ?>css/img/tblogocircle.png" class="pic">
</div>


<div class="forms">
<form action="userlogin" method="get">
		<input type="text" name="username" placeholder="Your username"> <br>
		<input type="password" name="password" placeholder="Your password"> <br>
		<input type="submit">
</form>
</div>




</div>


</body>
</html>