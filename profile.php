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
			$user_img=$row["user_img"];


}}

?>
<style >

.profile-container{
	z-index: 1;
	width: 50%;
	background-color:#54e3e3;

}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

.buttons {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  margin-bottom: 10px;
}



.buttons:hover, a:hover {
  opacity: 0.7;
}

</style>


	<div class="profile-container">

       <div class="inner-container">

				 <div class="card">
				   <img src="img/<?php echo $user_img ;?>" alt="photo" style="width:100%">
				   <h1><?php echo $first_name ;?> <?php echo $last_name ;?> </h1>

				       <strong>Email ID :</strong>
				       <p><?php echo $email;?></p>

				       <strong>Phone Number :</strong>
				       <p><?php echo $mobile;?></p>

				       <strong>Address :</strong>
				       <p><?php echo $address; ?></p>



				   <p class="title">Membership card</p>

				   <a href="#"><i class="fa fa-dribbble"></i></a>
				   <a href="#"><i class="fa fa-twitter"></i></a>
				   <a href="#"><i class="fa fa-linkedin"></i></a>
				   <a href="#"><i class="fa fa-facebook"></i></a>
				   <p><button class="buttons"><a href="userprofile.php" style="color:white;">View Profile</a></button></p>
				 </div>



       </div>

	</div>
