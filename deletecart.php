<?php

if (isset($_POST["deletecart"])) {

	if (isset($_SESSION["uid"])) {
		$sql = "DELETE FROM cart WHERE  user_id = '$_SESSION[uid]'";
	}else{
		$sql = "DELETE FROM cart ";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
				</div>";
		exit();
	}
}

 ?>
