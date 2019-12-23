		<form action="#" method="post" class="col-md-6">


		<div class="form-group ">
			<label><b>Food Item</b></label>
			<input type="text" value="<?php echo $array['name']; ?>" name="name"   disabled="disabled" />

		</div>

		<div class="form-group ">
			<label><b>Price</b></label>
			<input type="text" value="<?php echo $array['price']; ?>" name="price" disabled="disabled" />
			
		</div>

		<div class="form-group">
		<label><b>Quantity</b></label>
		<select name="quantity"  onchange="calculateAmount(<?php echo $array['price'];?>,this.value)" required>
			<option value="" disabled selected>Choose your option</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select>

		</div>

		<div class="form-group ">
			<label><b>Total Price</b></label>
			<input type="number" id="tot_amount" name="totalPrice"  disabled="disabled" />
		</div>


		<div class="form-group">
			<button type="submit" class="btn btn-primary" name="submit" value="placeOrder">Place Order</button>
		</div>
		  		      
		</form>  