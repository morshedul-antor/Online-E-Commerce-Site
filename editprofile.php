<?php include 'header.php' ?>

	<?php

	include "db.php";
	if (isset($_POST["update"])) {

		$f_name = $_POST["up_first_name"];

		$email = $_POST['up_email'];
		$password1 = $_POST['up_password'];

		$mobile1 = $_POST['up_moblie'];
		$address1 = $_POST['up_address'];

		$name = "/^[a-zA-Z ]+$/";
		$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
		$number = "/^[0-9]+$/";

	if(empty($f_name)  || empty($email) || empty($password1)  ||
		empty($mobile1) || empty($address1) ){

			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
				</div>
			";
			exit();
		} else {
			if(!preg_match($name,$f_name)){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>this $f_name is not valid..!</b>
				</div>
			";
			exit();
		}

		if(!preg_match($emailValidation,$email)){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>this $email is not valid..!</b>
				</div>
			";
			exit();
		}
		if(strlen($password1) < 2 ){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Password is weak</b>
				</div>
			";
			exit();
		}


		if(!preg_match($number,$mobile1)){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Mobile number $mobile1 is not valid</b>
				</div>
			";
			exit();
		}
		if(!(strlen($mobile1) == 10)){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Mobile number must be 10 digit</b>
				</div>
			";
			exit();
		}
		//existing email address in our database
		$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
		$check_query = mysqli_query($con,$sql);
		$count_email = mysqli_num_rows($check_query);
		if($count_email > 0){
			echo "
				<div class='alert alert-danger'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Email Address is already available Try Another email address</b>
				</div>
			";
			exit();
		} else {


			$sql = "INSERT INTO `user_info`
			(`user_id`, `first_name`, `last_name`, `email`,
			`password`, `mobile`, `address1`, `address2`)
			VALUES (NULL, '$f_name',  '$email',
			'$password1', '$mobile1', '$address1')";
			$run_query = mysqli_query($con,$sql);
			$_SESSION["uid"] = mysqli_insert_id($con);
			$_SESSION["name"] = $f_name;
			$ip_add = getenv("REMOTE_ADDR");
			$sql = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";
			if(mysqli_query($con,$sql)){
				echo "register_success";
				echo "<script> location.href='editprofile.php'; </script>";
	            exit;
			}
		}
		}

}

?>



	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

						<?php
						include 'db.php';
							if(isset($_SESSION["uid"])){

							$user_id = $_SESSION["uid"];
							$sql = "SELECT * FROM user_info WHERE user_id = '$user_id'";
								$query = mysqli_query($con,$sql);
								while ($row=mysqli_fetch_array($query)) {
								$user_id = $row["user_id"];
									$first_name = $row["first_name"];
									$last_name = $row["last_name"];
									$email = $row["email"];
									$password = $row["password"];
									$mobile = $row["mobile"];
									$address=$row["address1"];


						}}

						?>


						<div class="col-md-7 col-sm-7 col-xs-7 ">
							<h3>User Information</h3>


							<form action="editprofile.php" method="POST">
								<div class="form-group">
									<label for="exampleFormControlInput1">Full Name</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" name="up_first_name" placeholder="Full Name" value="<?php echo $first_name ;?>">
								</div>

								<div class="form-group">
									<label for="exampleFormControlInput2">Email address</label>
									<input type="email" class="form-control" id="exampleFormControlInput2" name="up_email" placeholder="name@example.com" value="<?php echo $email;?>">
								</div>
								<div class="form-group">
									<label for="exampleFormControlInput3">Password</label>
									<input type="tel" class="form-control" id="exampleFormControlInput2" name="up_password" placeholder="Password" value="<?php echo $password;?>">
								</div>

								<div class="form-group">
									<label for="exampleFormControlInput3">Phone Number</label>
									<input type="tel" class="form-control" id="exampleFormControlInput2" name="up_moblie" placeholder="Phone Number" value="<?php echo $mobile;?>">
								</div>

								<div class="form-group">
									<label for="exampleFormControlInput3">Address</label>
									<input type="text" class="form-control" id="exampleFormControlInput2" name="up_address" placeholder="name@example.com" value="<?php echo $address; ?>">
								</div>
								<button type="submit"  class="btn btn-info btn-block btn-lg" name="update">Update Profile</button>
							</form>



						</div>
						<!--User Info-->
					</div>
				</div>

				</div>

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->


	<!-- /section -->
<?php include 'footer.php' ?>
