<?php
	session_start();
	include("connection.php");
	
	if(isset($_SESSION['email'])){
		
		if($_SESSION['role']=="restaurant"){
			$msg="You are not allowed to order food as a Restaurant";
			header("location:food.php?msg=$msg");

		}
	}

	else{
		$msg="You need to log in first";
		header("location:login.php?msg=$msg");
	}

	if(isset($_GET['id'])){
		$id=$_GET['id'];

		$query="select * from food where foodID=$id";

		$run=mysqli_query($link,$query);

		$array=mysqli_fetch_assoc($run);

	}



	if (isset($_POST['submit'])&&$_POST['submit']=='placeOrder'){
		$rid=$array['rid'];
		$cid=$_SESSION['cid'];
		$foodID=$array['foodID'];
		$price=$array['price'];
		$quantity=$_POST['quantity'];
		$totalPrice=$price*$quantity;

		$queryInsert="INSERT INTO `ordertable`(`orderID`, `foodID`, `cid`, `rid`, `totalPrice`, `price`, `quantity`) VALUES ('','$foodID','$cid','$rid','$totalPrice','$price','$quantity')";
		$run2=mysqli_query($link,$queryInsert);

		if($run){
			$msg="Order Placed";
			header("location:prevOrders.php?msg=$msg");			
		}
		else{
			$msg="Sorry! Try Again";
			header("location:orderFood.php?msg=$msg");
		}
	}
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

  <style type="text/css">
  	
  	form input,select{
  		float: right;
  		width: 200px;
  		height: 30px;
  		margin-right: 5px;
  		background-color: #fff;
  	}
  	form input{
  		border: none;
  	}
  </style>
</head>
<body>
	<div class="container-fluid">
	<?php
		include("header.php");
	?>
	</div>
	<div class="container" style="min-height: 500px;">
		
		<?php
			include("orderFoodForm.php");


			
		?>
		

	</div>


		<?php
			include("footer.php");
		?>

    <script>
            function calculateAmount(price,val) {
                var tot_price = val * price;
                /*display the result*/
                var divobj = document.getElementById('tot_amount');
                divobj.value = tot_price;
            }
        </script>

</body>
</html>