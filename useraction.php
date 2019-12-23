<?php
	session_start();
	include("connection.php");

// login for customer

	if (isset($_POST['loginCustomer'])&&$_POST['loginCustomer']=='Login')
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="select * from customer where email='$email' and password='$password'";
        $run=mysqli_query($link,$query);
        
        if(mysqli_num_rows($run)==1){
            $array=mysqli_fetch_assoc($run);
            $role="customer";
            $_SESSION['email']=$email;
            $_SESSION['role']=$role;
            $_SESSION['cid']=$array['cid'];
            $_SESSION['preference']=$array['preference'];
                header("location:food.php");    
            }

        else{
        	
            $msg="wrong email or password";
            header("location:login.php?msg=$msg");
        }

    }


// login for restaurant

	if (isset($_POST['loginRestaurant'])&&$_POST['loginRestaurant']=='Login')
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="select * from restaurant where email='$email' and password='$password'";
        $run=mysqli_query($link,$query);
        
        if(mysqli_num_rows($run)==1){
            $array=mysqli_fetch_assoc($run);
            $role="restaurant";
            $_SESSION['email']=$email;
            $_SESSION['role']=$role;
            $_SESSION['rid']=$array['rid'];
            //print_r($_POST);
            //print_r($array);
                header("location:ownMenu.php");    
            }

        else{
        	
            $msg="wrong email or password";
            header("location:login.php?msg=$msg");
        }

    }



// new customer registration


    

	if (isset($_POST['signupCustomer'])&&$_POST['signupCustomer']=='Sign up')
	{

		//print_r($_POST);

     $name=$_POST['name'];
     $mobile="+91".$_POST['mobile'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $cnfPassword=$_POST['cnfPassword'];
     $street=$_POST['street'];
     $city=$_POST['city'];
     $state=$_POST['state'];
     $pincode=$_POST['pincode'];
     $preference=$_POST['preference'];
     if($password!=$cnfPassword){
        $msg= "Password and Conform Password does not match";
        header("location:signup.php?msg=$msg");
     }
     
        else{

            $query="INSERT INTO `customer`(`cid`, `name`, `email`, `mobile`, `preference`,`password`, `street`, `city`, `state`, `pincode`) VALUES ('','$name','$email','$mobile','$preference','$password','$street','$city','$state','$pincode')";

            $run=mysqli_query($link,$query);

            if($run)
            {

            		$role="customer";
                $_SESSION['email']=$email;
                $_SESSION['role']=$role;
                $_SESSION['preference']=$preference;

                $query="select * from customer where email='$email' and password='$password'";
            	$run=mysqli_query($link,$query);
            	$array=mysqli_fetch_assoc($run);
                $_SESSION['cid']=$array['cid'];

            	header("location:index.php");    
                
            }
            else{
                $msg= "Email already register";
                header("location:signup.php?msg=$msg");
            }
        }

	}



// new Restaurant registration


    

	if (isset($_POST['signupRestaurant'])&&$_POST['signupRestaurant']=='Sign up')
	{

		//print_r($_POST);

     $name=$_POST['name'];
     $mobile="+91".$_POST['mobile'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $cnfPassword=$_POST['cnfPassword'];
     $street=$_POST['street'];
     $city=$_POST['city'];
     $state=$_POST['state'];
     $pincode=$_POST['pincode'];
     if($password!=$cnfPassword){
        $msg= "Password and Conform Password does not match";
        header("location:signup.php?msg=$msg");
     }
     
     else{

     $query="INSERT INTO `restaurant`(`rid`, `name`, `email`, `mobile`,`password`, `street`, `city`, `state`, `pincode`) VALUES ('','$name','$email','$mobile','$password','$street','$city','$state','$pincode')";
     
        $run=mysqli_query($link,$query);
    
     if($run)
     {

     		$role="restaurant";
            $_SESSION['email']=$email;
            $_SESSION['role']=$role;

            $query="select * from restaurant where email='$email' and password='$password'";
        	$run=mysqli_query($link,$query);
        	$array=mysqli_fetch_assoc($run);
            $_SESSION['rid']=$array['rid'];

        	header("location:index.php");    
    	    
	}
     else{
        $msg= "Email already register";
        header("location:signup.php?msg=$msg");
     }

	}
}

    
?>