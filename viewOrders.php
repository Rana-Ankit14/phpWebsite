<?php
	session_start();
	include("connection.php");
	     
	if(!isset($_SESSION['email']) || $_SESSION['role']!="restaurant"){
    
      header("location:index.php");

    
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Orders</title>
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
	
		<div>
			<?php 
        include("viewOrdersTable.php");
      ?>
		</div>


	</div>
	<?php
			include("footer.php");
	?>


   
</body>
</html>