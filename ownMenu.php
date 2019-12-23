<?php
	session_start();
	include("connection.php");

  if(!isset($_SESSION['email']) || $_SESSION['role']!="restaurant"){
    
      header("location:index.php");

    
  }
	
	if(isset($_POST['submit'])&&$_POST['submit']=='Add'){
	print_r($_POST);
	$name=$_POST['name'];
    $price=$_POST['price'];
    $type=$_POST['type'];
    $restid=$_SESSION['rid'];
     
    $query="INSERT INTO `food`(`foodID`, `name`, `price`, `type`, `rid`) VALUES ('','$name','$price','$type','$restid')";
     
      $run=mysqli_query($link,$query);
    	
     if($run)
     {
        
            $msgAdd="New product added";
            header("location:ownMenu.php?msgAdd=$msgAdd");
              
    }
     else{
        $msg= "Some Error ";
        header("location:ownMenu.php?msg=$msg");
     }	
     

}

	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
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
		<div class="row">

      <div class="col-md-8">
          <?php
          if(isset($_GET['msgAdd']))
            {
              echo "<b>".$_GET['msgAdd']."</b>";
            }

          ?>
      </div>

      <div class="col-md-4" style="text-align: right;">
  			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-bottom: 20px;">Enter New Item</button>	
  		</div>
  		
  </div>
		<div>
			<?php include("ownMenuTable.php");?>
		</div>
	</div>
  <?php
      include("footer.php");
    ?>


<!-- Item entry popup code   -->

<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Enter New Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        	<?php include("foodEntry.php"); ?>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


   
</body>
</html>