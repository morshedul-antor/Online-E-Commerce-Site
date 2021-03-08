
<?php
include 'db.php';
include 'header.php';
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

.profilea-container{

	border: 2px;
	border-radius: 3px;
  color: white;
	font-size: 8%;
	margin-left: 20%;

}



.card-2 {
  box-shadow: 0 4px 8px 2px rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
margin-left: 82%;


}
@media (max-width: 600px) {

  .card-2 {
		margin-left:20%;

	}
  }


.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 10%;
  font-size: 18px;
  margin-bottom: 100px;
	margin-left: 20%;
}



.button:hover, a:hover {
  opacity: 0.7;
}


</style>



<div class="profilea-container">



     <div class="section-title">


					<h1>Your profile</h1>


      </div>

<div class="col-md-9 ">


  <h3 style='color:grey'>Personal Information </h3>
  <dl class="">
    <dt class="col-sm-5 h3"><strong>Full Name :</strong></dt>
    <dd class="col-sm-7 h3"><strong><?php echo $first_name ;?>  <?php echo $last_name ;?> </strong></dd>

    <dt class="col-sm-5 h4"><strong>Email ID :</strong></dt>
    <dd class="col-sm-7 h4"><strong><?php echo $email;?></strong></dd>

    <dt class="col-sm-5 h4"><strong>Phone Number :</strong></dt>
    <dd class="col-sm-7 h4"><strong><?php echo $mobile;?></strong></dd>

    <dt class="col-sm-5 h4"><strong>Address :</strong></dt>
    <dd class="col-sm-7 h4"><strong><?php echo $address; ?></strong></dd>

  </dl>


</div>


</div>

<div class="card-2 ">
  <img src="img/<?php echo $user_img; ?>" alt="profile photo" ><br><br>
  <p><button>  User ID:<?php echo $user_id;?></button></p>
</div>

<button class="button" type="button"><a href="editprofile.php" style="color:white;">Edit Profile</a></button>




<?php include 'footer.php'
?>
