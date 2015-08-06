<!DOCTYPE html>
<html lang="en">
<head>
	<title>Certificate Lookup</title>
	<!-- Dependencies -->
	<?php include 'header.php';?>
		<script src="js/certLookup.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row" style="text-align:center;">
			<h1>Certificate Lookup</h1> <br>
			Enter a website: <input type='text' id="site">
			<input type='submit' class='btn btn-default' onclick="certLookup()">
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1></h1>
				<span id="certInfo"></span>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php include 'footer.php';?>
</div>
</body>
</html>