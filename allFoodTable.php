<?php

  if(isset($_GET['submit']) && $_GET['submit']=='search'){
    
    $search=$_GET['search'];
    //echo $search;
    $query="SELECT f.foodID,f.name,f.price,f.type,r.name as rName from food f JOIN restaurant r ON f.rid=r.rid where f.name='$search'";

  }

  else if(isset($_SESSION['email']) &&  $_SESSION['role']=="customer" && $_SESSION['preference']=="veg"){
    
    
      $query="SELECT f.foodID,f.name,f.price,f.type,r.name as rName from food f JOIN restaurant r ON f.rid=r.rid where type <>'nonVeg'";
    
  }

  else{
    $query="SELECT f.foodID,f.name,f.price,f.type,r.name as rName from food f JOIN restaurant r ON f.rid=r.rid";  
  }
  
  $run=mysqli_query($link,$query);
?>


<table class="table table-bordered table-hover table-striped" style="background-color: white;">
  <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Type</th>
    <th>Restaurant</th>
    <th>Action</th>
  </tr>

  <?php
    while($array=mysqli_fetch_assoc($run)){
      ?>
      <tr>
        <td><?php echo $array['name']; ?></td>
        <td><?php echo $array['price']; ?></td>
        <td><?php echo $array['type']; ?></td>
        <td>
          <?php
            echo $array['rName'];
          ?>
        </td>
        <td><a href="orderFood.php?id=<?php echo $array['foodID'];?>">Order</a>
          
        </td>
      </tr>
      
  <?php
    }
  ?>
  
</table>