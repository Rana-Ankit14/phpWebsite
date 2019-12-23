<?php
	$cid=$_SESSION['cid'];
	//$query="select * from orderTable where cid='$cid'";

	$query="SELECT f.name,r.name as rName,o.price,o.quantity,o.totalPrice FROM orderTable o JOIN food f ON o.foodID=f.foodID JOIN restaurant r ON o.rid=r.rid where cid='$cid' ORDER BY o.orderID DESC";

	$run=mysqli_query($link,$query);
?>


<table class="table table-bordered table-hover table-striped" style="background-color: white;">
	<tr>
		<th>Name</th>
		<th>Restaurant</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total Price</th>
	</tr>

	<?php
		while($array=mysqli_fetch_assoc($run)){
			
			?>
			<tr>
				<td><?php echo $array['name']; ?></td>
				<td><?php echo $array['rName']; ?></td>
				<td><?php echo $array['price']; ?></td>
				<td><?php echo $array['quantity']; ?></td>
				<td><?php echo $array['totalPrice']; ?></td>
			</tr>
			
	<?php
		}
	?>
	
</table>