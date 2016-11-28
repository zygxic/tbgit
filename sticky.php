<!DOCTYPE html>
<html>
<head>
	<title>sticky footer</title>
	<style type="text/css">
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}  

.text-muted {
  margin: 20px 0;  
}
	</style>
</head>
<body>

<footer class="footer">
    <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
    </div>
</footer>

</body>
</html>