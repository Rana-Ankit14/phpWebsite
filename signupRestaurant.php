		<div class="d-flex justify-content-center col-md-12">
			<form class="col-md-6" action="useraction.php" method="post">

			<div class="form-group">
				<input type="text" placeholder="Restaurant Name" required name="name" class="form-control" />
			</div>

			<div class="form-group">
				<input type="email" placeholder="Email" required name="email" class="form-control" />
			</div>

			<div class="form-group">
				<input type="text" placeholder="Mobile No." minlength="10" maxlength="10" required name="mobile" class="form-control"/>
			</div>

			<div class="form-group">
				<input type="text" placeholder="Street" required name="street" class="form-control"/>
			</div>

			<div class="form-group">
				<input type="text" placeholder="City" required name="city" class="form-control"/>
			</div>

			<div class="form-group">
				<input type="text" placeholder="State" required name="state" class="form-control"/>
			</div>

			<div class="form-group">
				<input type="text" placeholder="Pincode" minlength="6" maxlength="6" required name="pincode" class="form-control"/>
			</div>
			
			<div class="form-group">
				<input type="password" placeholder="Password" required name="password" class="form-control"/>
			</div>
			<div class="form-group">
				<input type="password" placeholder="Conform Password" required name="cnfPassword" class="form-control"/>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary" name="signupRestaurant" value="Sign up">Sign up</button>
				<a href="login.php" style="float: right;">Login</a>
			</div>
			
			
		</form> <!-- form -->
		
		</div>

