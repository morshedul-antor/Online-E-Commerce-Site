<style >
/*card*/
.order-panel {
	background-color: white;
  box-shadow: 0 4px 8px 2px rgba(0, 0, 0, 0.2);
	max-width: 90%;
  margin: auto;
  text-align: center;
	margin-top: 5px;
	margin-left: 10%;
}

.title {
  color: grey;
  font-size: 18px;
}
h5{
  font-size: 22px;
  color: #785b0b;
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
@media (max-width: 540px) {
.order-panel{
	max-width: 100%;
	margin-left: 0;
}
}
/*card*/
</style>

<?php include 'include/header.php' ?>
<div class="row">
	<?php include 'include/sidenav.php' ?>


<div class="order-panel">

				<!--orderslist-->
				<?php

									include 'db.php';
									if(isset($_SESSION["uid"])){

									$delivery_person_id= $_SESSION["uid"];
							   	}
									error_reporting(0);
									if(isset($_POST['submit']) )
									{
									$order_id=$_POST['order_id'];
									/*this is confirm query*/
									$cus_name=$_POST['cus_name'];
									$userid=$_POST['userid'];
									$email=$_POST['email'];
									$address=$_POST['address'];
									$city=$_POST['address'];
									$state=$_POST['address'];
									$zip_code=$_POST['address'];

									$total_prod=$_POST['total_prod'];
									$total_amnt=$_POST['total_amnt'];



									header("location: yourArchive.php");
									mysqli_close($con);
								}

					?>




				<!--orderslist-->
</div>
</div>
<?php include 'include/footer.php'; ?>
