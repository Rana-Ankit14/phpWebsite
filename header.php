<!--<div class="jumbotron">
  <h1>FoodShala</h1>
 <<p>Bootstrap is the most popular HTML, CSS...</p>
</div>-->
<?php
	if (isset($_GET['msg'])) {
					$message=$_GET['msg'];
					echo "<script type='text/javascript'>alert('$message');</script>";
	}
?>
<div class="row">
	<div class="col-md-10">
		<h1 class="display-1" style="font-family: Tangerine,cursive;">FoodShala</h1>
	</div>

	<div class="col-md-2">
		<nav class="navbar navbar-expand-md ">

			<ul class="navbar-nav">

			<?php
				if(isset($_SESSION['email']))
              	{
            ?>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            <?php
              	}
              	else{
			?>

				<li class="nav-item">
				  <a class="nav-link" href="login.php">Login</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="signup.php">Sign up</a>
				</li>

			<?php
				}
			?>
			</ul>
		</nav>
	</div>
	
</div>


<nav class="col-md-12 navbar navbar-expand-md bg-dark navbar-dark" style="margin-bottom: 50px;">

	<ul class="navbar-nav">
		<li class="nav-item">
		  <a class="nav-link" href="index.php">Home</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="food.php">Food Items</a>
		</li>

		<?php
			 if(isset($_SESSION['email']) && $_SESSION['role']=='restaurant')
              {
                ?>
                <li class="nav-item"><a class="nav-link" href="ownMenu.php">Own Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="viewOrders.php">View Orders</a></li>
                <?php
              }
              if(isset($_SESSION['email']) && $_SESSION['role']=="customer"){
           ?>
           	<li class="nav-item"><a class="nav-link" href="prevOrders.php">Previous Orders</a></li>
         <?php     
         	}
		?>	
	</ul>
</nav>