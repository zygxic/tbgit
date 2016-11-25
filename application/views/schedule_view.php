

<!DOCTYPE html>
<html>
<head>
	<title>Schedule</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
	<header>
		<div class="headerleft">
			<img src="tblogo.png" alt="">
		</div>

		<div class="headerright">
			<nav>
				
			</nav>
		</div>
	</header>
					<div class="cleaner"></div>

	<div class="userpanel">
		<div class="userpanelleft">
			
		</div>

		<div class="userpanelright">
			
		</div>
	</div>
	
					 <div class="cleaner"></div>	

	<div class="swipenav">
		<div class="swipenavbutton">
			<a href="#">Option 1</a>
		</div>

		<div class="swipenavbutton">
			<a href="<?php echo site_url('user/index');?>">Index</a>
		</div>

		<div class="swipenavbutton">
			<a href="#">Option 3</a>
		</div>
	</div>

	<div class="schedulewrap">

		<h1 class="headline"> <? echo $data['title'] ?>    </h1>

		<div class="timespan"> <? echo $data['timespan'] ?> </div>

		<div class="taskdescription"> <? echo $data['content'] ?> </div>

	</div>


	<footer>
		<div class="contactbutton">
			
		</div>
	</footer>
</body>
</html>