<?php
	$rid=$_SESSION['rid'];
	


	$query="SELECT f.name,c.name as cName,o.price,o.quantity,o.totalPrice from orderTable o JOIN food f ON f.foodID=o.foodID JOIN customer c ON c.cid=o.cid where o.rid='$rid' ORDER BY o.orderID DESC";

	$run=mysqli_query($link,$query);
?>


<table class="table table-bordered table-hover table-striped" style="background-color: white;">
	<tr>
		<th>Name</th>
		<th>Customer</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total Price</th>
	</tr>

	<?php
		while($array=mysqli_fetch_assoc($run)){
			?>
			<tr>
				<td><?php echo $array['name']; ?></td>
				<td><?php echo $array['cName']; ?></td>
				<td><?php echo $array['price']; ?></td>
				<td><?php echo $array['quantity']; ?></td>
				<td><?php echo $array['totalPrice']; ?></td>
			</tr>
			
	<?php
		}
	?>
	
</table>