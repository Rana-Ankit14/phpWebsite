<?php
	session_start();
	include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
	<?php
		include("header.php");
	?>
	</div>
	<div class="container" style="min-height: 500px;">
		<div style="text-align: center; margin-bottom: 50px;">
			<h3>Order food from the comfort of your home</h3>
			<h4>on <span style="font-family: tangerine,cursive; font-size: 50px; font-weight: bold;">foodshala</span> in 3 simple steps</h4>
		</div>
		<div class="row" >
			<div class="col-md-4" style="text-align: center;">
				<img src="image/chooseFood.png">
			</div>
			<div class="col-md-4" style="text-align: center;">
				<img src="image/placeOrder.png">	
			</div>
			<div class="col-md-4" style="text-align: center;">
				<h4 style="display: inline; font-family: cursive;">Get it</h4>
				<img src="image/doorstep.png">	
			</div>
		</div>


	</div>

	<?php
			include("footer.php");
	?>


   
</body>
</html>